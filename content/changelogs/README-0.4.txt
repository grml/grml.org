                             _
            _ __            | |
      __ _ | '__| _ __ ___  | |
     / _` || |:::| '_ ` _ \ | |
    | (_| ||_|:::| | | | | ||_|
    :\__, |::::::|_| |_| |_|:::
    :|___/:::::::::::::::::::::
    :::::::: version 0.4 ::::::
    :::: codename eierspass :::
    :::::::::::::::::::::::::::


GRML - Knoppix for sysadmins and users of text tools
====================================================

grml is a bootable CD (Live-CD) based on Knoppix and Debian. grml includes a
collection of GNU/Linux software especially for users of texttools and system
administrators. grml provides automatic hardware detection. You can use grml for
example as a rescue system, for analyzing systems/networks or as a working
environment. It is not necessary to install anything to a harddisk, you don't
even need a harddisk to run it. Due to on-the-fly decompression grml includes
about 2.1 GiB of software and documentation on the CD.

   http://grml.org/


Release 0.4 - Codename Eierspass (20050515)
===========================================

Fixed several bugs, including:

     #13  starting hotplug fails without error message
     #14  grml-0.3: pekwm will not start
     #15  grml-0.3: wrong vermagic for quickcam.ko

Improved hardware detection.
Several improved, updated and extended configuration files.

New grml-scripts (some selected ones):

  * grml-network:     frontend for several network setup scripts
  * grml-hwinfo:      collect hardware information
  * grml-vpnc-tugraz: connect to WLAN of TU Graz
  * xsay:             text-to-speech system (e.g. run 'grml-x wmi',
                      select some text via mouse and press 'ctrl-alt-v'

New bootparameters/cheatcodes:

  * grml small - disable some consoles when booting (saves a
                 little bit of RAM)
  * nofb       - disable framebuffer
  * floppy     - boot from floppy disk
  * hd         - boot from (local) primary harddisk

Special new features:

  * X.org server including new grml-x system ('grml-x')
  * unionfs-integration: full write support on CD; now it is possible
    to run, configure and install software without any workarounds
  * new init-system: switched from "colors" to lsb-function-style
  * iptstate running on tty10
  * vesafb-tng: advanced framebuffer technology.
    Notice: use kerneloption video= instead of vga=!
  * udev integration: just run 'mount /mnt/external1' to mount your
    USB-Stick (assuming /dev/sda1 as corresponding partition)
  * grml-terminalserver: boot grml via network (either via PXE or floppy
    disk), see http://grml.org/terminalserver/ for more details.

Kernel:

  * Based on vanilla kernel 2.6.11.8 including several patches
    (MPPC/MPPE, Reiser4, Speakup, Squashfs,...) and additional
    modules:

    acx100, at76c503a, bcm4400, bcm5700, eagle-usb, hostap,
    ipw2100, ipw2200, loop-aes, loop-aes-ciphers, madwifi,
    ndiswrapper, qc-usb-modules, realtime-lsm, shfs, sl-modem,
    unionfs

  * Instead of compiling Kernel for 386 we decided to compile for
    systems running 468 or above.

    See http://grml.org/kernel/ for more details.

Updates:

 * Updated all packages to Debian Unstable branch by 20050508.
 * Updated memtest to Memtest86+ V1.55.
 * Updated windows-binaries (putty-collection/winscp) to latest version.
 * grml2hd: - added dialog-frontend
            - select username for harddisk-installation
            - choose filesystem (available: ext2/3, XFS, JFS, reiserfs)

Removed 46 packages [please notice that some of them are available
under different names/in different packages]:

   acx100-2.6.9-grml at76c503a-modules-2.6.9-grml bcm4400-module-2.6.9-grml
   bcm5700-module-2.6.9-grml blktool cloop-src configure-xawtv dietlibc-cp
   dietlibc-cp-dev dietlibc-cp-doc dpkg-www dwww eagle-usb-modules-2.6.9-grml
   etherboot fprobe hostap-modules-2.6.9-grml ippl ipw2100-modules-2.6.9-grml
   ipw2200-modules-2.6.9-grml kernel-headers-2.6.9-grml kernel-image-2.6.9-grml
   kernel-source-2.6.9-grml knx-live-inst liba52-0.7.4 libdns16 libdv2 libgsasl1
   libiconv-ruby1.8 libisc7 libisccfg0 librexml-ruby1.8 libxplc0.3.10 libyaml-ruby1.8
   libzlib-ruby1.8 ndiswrapper-modules-2.6.9-grml orinoco pekwm-dev postfix-tls
   qc-usb-modules-2.6.9-grml realtime-lsm-module-2.6.9-grml shfs-module-2.6.9-grml
   shfs-source sl-modem-modules-2.6.9-grml xfree86-common xfree86-driver-synaptics
   xserver-xfree86

Added 192 new packages (exluding lib[...]):

   855resolution 9menu acct acx100-2.6.11-grml alsaplayer-jack aoetools apachetop
   apcupsd-cgi apticron asciidoc asleap at76c503a-modules-2.6.11-grml attacker aub
   backuppc bashburn bcm4400-module-2.6.11-grml bcm5700-module-2.6.11-grml beecrypt2
   bfbtester bkhive bkp bmon bookmarkbridge bzr camgrab ccache ccdv cdbs cdebootstrap
   chgrep cogito cpufrequtils cuetools davfs2 dds2tar debsync detox dh-kpatches
   dietlibc dietlibc-dev disktype dumputils dupseek dvi2tty
   eagle-usb-modules-2.6.11-grml elizatalk encfs enscribe ext3rminator fondu
   fprobe-ng fprobe-ulog ftester gateguardian gnupg-agent gnupg2 gpgsm grepmap
   grml-terminalserver gtkam hal hasciicam hgrep hostap-modules-2.6.11-grml
   hotswap-text icecast2 ices2 icheck ifrename initramfs-tools ion3-mod-ionflux
   ion3-scripts ipautofw ipmasqadm ipw2100-modules-2.6.11-grml
   ipw2200-modules-2.6.11-grml ipython-common kernel-doc-2.6.11-grml
   kernel-headers-2.6.11-grml kernel-image-2.6.11-grml klibc-utils laptop-detect
   latex-beamer latex-xcolor lib[...] lkl loop-aes-2.6.11-grml
   loop-aes-ciphers-2.6.11-grml lsb-base lshw-common lsscsi m17n-db
   madwifi-module-2.6.11-grml madwifi-tools maildirsync mcelog mdetect mp3info
   multipath-tools multiseat muscletools ncmpc ndiswrapper-modules-2.6.11-grml netwag
   netwox nutcpc nxviewer olsrd ooo2dbk opensc opie-client opie-server osiris par2
   pcscd pdfscreen pdns-recursor pdns-server pekwmdev pgf pinentry-curses procmeter3
   prosilla pterm python2.3-elementtree python2.3-ipython python2.3-pymad
   qc-usb-modules-2.6.11-grml qjackctl qprof radeontool
   realtime-lsm-module-2.6.11-grml reprepro rootsh rubilicious rxvt-unicode s10sh
   saidar samdump scsi-idle sdate selinux-utils sfind sformat sh-lib shadowfs
   shfs-module-2.6.11-grml sip-tester sl-modem-modules-2.6.11-grml smake spl sqlite
   srg sshfs starttls statgrab stress super synctree syslinux telak udev-klibc
   unicode unionfs-modules-2.6.11-grml unrtf update-apt usbmount w9wm wacom-tools
   wdiff wiggle wmaloader wwwconfig-common x-window-system x-window-system-core
   xcardii xdebconfigurator xdesktopwaves xdm xkeyval xnee xorg-common
   xorg-driver-synaptics xprt xprt-common xresprobe xrsh xserver-xorg xsltproc xvfb
   yersinia zeroconf 

Changes since release 0.3 (20050304)
====================================

new team members
----------------
Tobias Klauser and Marcel Wichern joined the grml-team.
See http://grml.org/team/

beta-testers
------------
Beta-testers get access to devel-releases which are non-public but
restricted to grml-developers and beta-testers. More information on:
http://grml.org/beta-tester/

grml zsh reference card
-----------------------
The grml-zsh-refcard documents defined aliases, functions and
settings of zsh on the grml-system. Download it, print it and
improve your zsh-skills!  http://grml.org/zsh/#grmlzshrefcard

kernel
------
Release 0.4 includes kernel 2.6.11(-grml). Take a look at the
kernel-webpage for details regarding the kernel:
http://grml.org/kernel/


Please send feedback, feature requests and bug reports to the grml-team!
http://grml.org/contact/   #grml on irc.freenode.org  contact (at) grml.org

regards,
-mika-
--
 ,'"`.         http://www.michael-prokop.at/
(  grml.org -» Linux for texttool-users and sysadmins
 `._,'         http://www.grml.org/
