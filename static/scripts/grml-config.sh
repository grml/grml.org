#!/bin/sh

set -e

# IMPORTANT: please note that you might override existing
# configuration files in the current working directory!
if command -v wget >/dev/null 2>&1 ; then
  wget -O .screenrc     https://git.grml.org/f/grml-etc-core/etc/grml/screenrc_generic
  wget -O .tmux.conf    https://git.grml.org/f/grml-etc-core/etc/tmux.conf
  wget -O .vimrc        https://git.grml.org/f/grml-etc-core/etc/vim/vimrc
  wget -O .zshrc        https://git.grml.org/f/grml-etc-core/etc/zsh/zshrc
  wget -O .zshenv       https://git.grml.org/f/grml-etc-core/etc/zsh/zshenv
  # optional:
  # wget -O .zshrc.local https://git.grml.org/f/grml-etc-core/etc/skel/.zshrc
elif command -v curl >/dev/null 2>&1 ; then
  curl -L -o .screenrc   https://git.grml.org/f/grml-etc-core/etc/grml/screenrc_generic
  curl -L -o .tmux.conf  https://git.grml.org/f/grml-etc-core/etc/tmux.conf
  curl -L -o .vimrc      https://git.grml.org/f/grml-etc-core/etc/vim/vimrc
  curl -L -o .zshrc      https://git.grml.org/f/grml-etc-core/etc/zsh/zshrc
  curl -L -o .zshenv     https://git.grml.org/f/grml-etc-core/etc/zsh/zshenv
  # optional:
  # curl -L -o .zshrc.local  https://git.grml.org/f/grml-etc-core/etc/skel/.zshrc
else
  echo 'Error: neither wget nor curl available for retrieving configuration files.' >&2
  exit 1
fi
