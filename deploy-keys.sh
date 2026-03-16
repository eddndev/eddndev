#!/usr/bin/env bash
set -euo pipefail

info() { printf '\033[1;34m=> %s\033[0m\n' "$*"; }
ok()   { printf '\033[1;32m=> %s\033[0m\n' "$*"; }
err()  { printf '\033[1;31m=> %s\033[0m\n' "$*" >&2; }

if [ ! -f "$HOME/.ssh/id_ed25519.pub" ]; then
    err "No public key found at ~/.ssh/id_ed25519.pub"
    exit 1
fi

SERVERS=(
    "shared1"
    "vps1"
    "vps2"
    "server1"
    "server2"
)

info "This will copy your public key to each server."
info "You'll need to enter each server's password once."
echo

for server in "${SERVERS[@]}"; do
    info "Deploying key to $server..."
    if ssh-copy-id -i "$HOME/.ssh/id_ed25519" "$server"; then
        ok "$server done!"
    else
        err "Failed to deploy to $server (skipping)"
    fi
done

ok "Keys deployed! You can now SSH without passwords."
