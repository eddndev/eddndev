#!/usr/bin/env bash
set -euo pipefail

DOTFILES_DIR="$(cd "$(dirname "$0")" && pwd)"
KEYS_DIR="$DOTFILES_DIR/ssh/keys"

info() { printf '\033[1;34m=> %s\033[0m\n' "$*"; }
ok()   { printf '\033[1;32m=> %s\033[0m\n' "$*"; }
err()  { printf '\033[1;31m=> %s\033[0m\n' "$*" >&2; }

if ! command -v rage &>/dev/null; then
    err "rage not found. Install with: cargo install rage"
    exit 1
fi

if [ ! -f "$HOME/.ssh/id_ed25519" ]; then
    err "No SSH keys found at ~/.ssh/id_ed25519"
    exit 1
fi

mkdir -p "$KEYS_DIR"

info "Encrypting SSH keys with rage (you'll set a passphrase)..."
info "USE A STRONG PASSPHRASE — these will live in a public repo!"
echo

rage -p -o "$KEYS_DIR/id_ed25519.age" "$HOME/.ssh/id_ed25519"
rage -p -o "$KEYS_DIR/eddn_deploy.age" "$HOME/.ssh/eddn_deploy"

ok "Keys encrypted and saved to $KEYS_DIR/"
ok "You can now commit and push safely."
