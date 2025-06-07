#!/bin/sh

set -e

# IMPORTANT: please note that you might override existing
# configuration files in the current working directory!
if command -v wget >/dev/null 2>&1 ; then
  wget -O .screenrc   https://grml.org/console/screenrc
  wget -O .tmux.conf  https://grml.org/console/tmux.conf
  wget -O .vimrc      https://grml.org/console/vimrc
  wget -O .zshrc      https://grml.org/console/zshrc
  wget -O .zshenv     https://grml.org/console/zshenv
  # optional:
  # wget -O .zshrc.local https://grml.org/console/zshrc.local
elif command -v curl >/dev/null 2>&1 ; then
  curl -sSfL -o .screenrc   https://grml.org/console/screenrc
  curl -sSfL -o .tmux.conf  https://grml.org/console/tmux.conf
  curl -sSfL -o .vimrc      https://grml.org/console/vimrc
  curl -sSfL -o .zshrc      https://grml.org/console/zshrc
  curl -sSfL -o .zshenv     https://grml.org/console/zshenv
  # optional:
  # curl -sSfL -o .zshrc.local https://grml.org/console/zshrc.local
elif command -v fetch >/dev/null 2>&1 ; then
  fetch -o .screenrc   https://grml.org/console/screenrc
  fetch -o .tmux.conf  https://grml.org/console/tmux.conf
  fetch -o .vimrc      https://grml.org/console/vimrc
  fetch -o .zshrc      https://grml.org/console/zshrc
  fetch -o .zshenv     https://grml.org/console/zshenv
  # optional:
  # fetch -o .zshrc.local https://grml.org/console/zshrc.local
else
  echo 'Error: neither wget, curl not fetch  available for retrieving configuration files.' >&2
  exit 1
fi
