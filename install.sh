#!/usr/bin/env bash
set -euo pipefail

DOTFILES_DIR="$(cd "$(dirname "$0")" && pwd)"

info() { printf '\033[1;34m=> %s\033[0m\n' "$*"; }
ok()   { printf '\033[1;32m=> %s\033[0m\n' "$*"; }
err()  { printf '\033[1;31m=> %s\033[0m\n' "$*" >&2; }

ask() {
    local prompt="$1"
    printf '\033[1;33m=> %s [y/N] \033[0m' "$prompt"
    read -r answer
    [[ "$answer" =~ ^[yYsS]$ ]]
}

# --------------------------------------------------
# Directories
# --------------------------------------------------
info "Creating directories..."
mkdir -p "$HOME/dev/eddndev"
mkdir -p "$HOME/drive"

# --------------------------------------------------
# System packages (Fedora/dnf)
# --------------------------------------------------
info "Installing system packages..."
sudo dnf install -y \
    stow git gh \
    nodejs npm \
    postgresql-server \
    valkey \
    obs-studio \
    htop \
    blender \
    rclone \
    flatpak

# --------------------------------------------------
# GitHub CLI (auth)
# --------------------------------------------------
if ! gh auth status &>/dev/null; then
    if ask "GitHub CLI installed. Authenticate now?"; then
        gh auth login
    else
        info "Skipped. Run 'gh auth login' later (needed for git push)"
    fi
else
    ok "GitHub CLI already authenticated"
fi

# --------------------------------------------------
# Google Chrome
# --------------------------------------------------
if ! command -v google-chrome-stable &>/dev/null; then
    info "Installing Google Chrome..."
    sudo dnf install -y 'https://dl.google.com/linux/direct/google-chrome-stable_current_x86_64.rpm'
else
    ok "Google Chrome already installed"
fi

# --------------------------------------------------
# Rust (rustup)
# --------------------------------------------------
if ! command -v rustup &>/dev/null; then
    info "Installing Rust..."
    curl --proto '=https' --tlsv1.2 -sSf https://sh.rustup.rs | sh -s -- -y
    source "$HOME/.cargo/env"
else
    ok "Rust already installed"
fi

# --------------------------------------------------
# rage (age encryption in Rust)
# --------------------------------------------------
if ! command -v rage &>/dev/null; then
    info "Installing rage..."
    cargo install rage
else
    ok "rage already installed"
fi

# --------------------------------------------------
# Bun
# --------------------------------------------------
if ! command -v bun &>/dev/null; then
    info "Installing Bun..."
    curl -fsSL https://bun.sh/install | bash
else
    ok "Bun already installed"
fi

# --------------------------------------------------
# pnpm
# --------------------------------------------------
if ! command -v pnpm &>/dev/null; then
    info "Installing pnpm..."
    curl -fsSL https://get.pnpm.io/install.sh | sh -
else
    ok "pnpm already installed"
fi

# --------------------------------------------------
# Claude Code
# --------------------------------------------------
if ! command -v claude &>/dev/null; then
    info "Installing Claude Code..."
    curl -fsSL https://claude.ai/install.sh | bash
fi

if ask "Authenticate Claude Code now?"; then
    claude auth login
else
    info "Skipped. Run 'claude auth login' later"
fi

# --------------------------------------------------
# Gemini CLI
# --------------------------------------------------
if ! command -v gemini &>/dev/null; then
    info "Installing Gemini CLI..."
    sudo npm install -g @google/gemini-cli
fi

if ask "Authenticate Gemini CLI now?"; then
    gemini auth
else
    info "Skipped. Run 'gemini auth' later"
fi

# --------------------------------------------------
# OpenAI Codex
# --------------------------------------------------
if ! command -v codex &>/dev/null; then
    info "Installing OpenAI Codex..."
    sudo npm install -g @openai/codex
else
    ok "OpenAI Codex already installed"
fi

# --------------------------------------------------
# Discord (Flatpak)
# --------------------------------------------------
if ! flatpak list --app | grep -q com.discordapp.Discord; then
    info "Installing Discord..."
    flatpak install -y flathub com.discordapp.Discord
else
    ok "Discord already installed"
fi

# --------------------------------------------------
# Rclone (Google Drive mount)
# --------------------------------------------------
info "Setting up rclone drive mount..."
mkdir -p "$HOME/.config/systemd/user"
cat > "$HOME/.config/systemd/user/rclone-drive.service" << 'EOF'
[Unit]
Description=Rclone Mount para Google Drive
Documentation=http://rclone.org/docs/
After=network-online.target
Wants=network-online.target

[Service]
Type=notify
ExecStart=/usr/bin/rclone mount drive: %h/drive \
    --vfs-cache-mode full \
    --vfs-cache-max-size 10G \
    --vfs-cache-max-age 24h \
    --transfers 4 \
    --no-modtime \
    --log-level INFO \
    --log-file %h/.rclone-mount.log \
    --file-perms 0777
ExecStop=/bin/fusermount -u %h/drive
Restart=on-failure
RestartSec=10

[Install]
WantedBy=default.target
EOF

if ! rclone listremotes 2>/dev/null | grep -q "drive:"; then
    if ask "Rclone not configured. Set up Google Drive remote now?"; then
        rclone config
    else
        info "Skipped. Run 'rclone config' later to set up a remote named 'drive'"
    fi
fi

if rclone listremotes 2>/dev/null | grep -q "drive:"; then
    systemctl --user daemon-reload
    systemctl --user enable --now rclone-drive.service
    ok "Rclone drive mount enabled"
fi

# --------------------------------------------------
# SSH keys (decrypt or generate)
# --------------------------------------------------
info "Setting up SSH keys..."
mkdir -p "$HOME/.ssh"
chmod 700 "$HOME/.ssh"

if [ -f "$DOTFILES_DIR/ssh/keys/id_ed25519.age" ]; then
    # Encrypted keys found in repo — decrypt with rage
    if [ ! -f "$HOME/.ssh/id_ed25519" ]; then
        info "Encrypted SSH keys found. Enter your passphrase to decrypt:"
        rage -d -o "$HOME/.ssh/id_ed25519" "$DOTFILES_DIR/ssh/keys/id_ed25519.age"
        rage -d -o "$HOME/.ssh/eddn_deploy" "$DOTFILES_DIR/ssh/keys/eddn_deploy.age"
        chmod 600 "$HOME/.ssh/id_ed25519" "$HOME/.ssh/eddn_deploy"
        # Derive public keys from private keys
        ssh-keygen -y -f "$HOME/.ssh/id_ed25519" > "$HOME/.ssh/id_ed25519.pub"
        ssh-keygen -y -f "$HOME/.ssh/eddn_deploy" > "$HOME/.ssh/eddn_deploy.pub"
        ok "SSH keys decrypted!"
    else
        ok "SSH keys already exist"
    fi
else
    # No encrypted keys — generate new ones
    if [ ! -f "$HOME/.ssh/id_ed25519" ]; then
        info "Generating new SSH keys..."
        ssh-keygen -t ed25519 -C "contacto@eddndev.com" -f "$HOME/.ssh/id_ed25519" -N ""
        ssh-keygen -t ed25519 -C "deploy@eddndev.com" -f "$HOME/.ssh/eddn_deploy" -N ""
        ok "SSH keys generated!"
        info "Run './deploy-keys.sh' to push public keys to your servers"
        info "Run './encrypt-keys.sh' to encrypt and store keys in this repo"
    else
        ok "SSH keys already exist"
    fi
fi

# --------------------------------------------------
# Dotfiles (GNU Stow)
# --------------------------------------------------
info "Linking dotfiles with stow..."

# Backup existing files that would conflict
backup_if_exists() {
    local file="$HOME/$1"
    if [ -f "$file" ] && [ ! -L "$file" ]; then
        info "Backing up $file -> ${file}.bak"
        mv "$file" "${file}.bak"
    fi
}

backup_if_exists .bashrc
backup_if_exists .bash_profile
backup_if_exists .profile
backup_if_exists .gitconfig
backup_if_exists .gitignore_global
backup_if_exists .ssh/config
backup_if_exists .claude/settings.json

cd "$DOTFILES_DIR"
stow -v -t "$HOME" bash
stow -v -t "$HOME" git
stow -v -t "$HOME" ssh
stow -v -t "$HOME" claude

# --------------------------------------------------
# GNOME settings
# --------------------------------------------------
if command -v dconf &>/dev/null; then
    info "Applying GNOME settings..."
    dconf load / < "$DOTFILES_DIR/gnome/gnome.dconf"
    # Install Dash to Dock if not present
    if ! gnome-extensions list 2>/dev/null | grep -q "dash-to-dock"; then
        info "Install Dash to Dock from: https://extensions.gnome.org/extension/307/dash-to-dock/"
    fi
    ok "GNOME settings applied!"
fi

ok "Setup complete!"
