#!/bin/sh
# IMPORTANT: please note that you might override existing
# configuration files in the current working directory! =>
wget -O .screenrc     https://git.grml.org/f/grml-etc-core/etc/grml/screenrc_generic
wget -O .tmux.conf    https://git.grml.org/f/grml-etc-core/etc/tmux.conf
wget -O .vimrc        https://git.grml.org/f/grml-etc-core/etc/vim/vimrc
wget -O .zshrc        https://git.grml.org/f/grml-etc-core/etc/zsh/zshrc
# optional:
# wget -O .zshrc.local        https://git.grml.org/f/grml-etc-core/etc/skel/.zshrc
