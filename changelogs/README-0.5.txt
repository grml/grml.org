
                             _
            _ __            | |
      __ _ | '__| _ __ ___  | |
     / _` || |:::| '_ ` _ \ | |
    | (_| ||_|:::| | | | | ||_|
    :\__, |::::::|_| |_| |_|:::
    :|___/:::::::::::::::::::::
    :::::::: version 0.5 ::::::
    :::: codename Tokolytika ::
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

grml 0.5 can be downloaded from http://grml.org/download/


Release 0.5 - Codename Tokolytika (20051024)
============================================

Fixed several bugs, including:

     #16  in "man grml-scripts" the program grml-init is mentioned twice
     #17  grml-docs: Spelling error of "resources" on the grml startpage
     #18  grml-0.4: booting with 'testcd' complains about 'files not found'

Several improved, updated and extended configuration files.

New grml-scripts (some selected ones):

  * save-config     save configuration in bzip2 compressed tar archive  
  * restore-config  restore configuration
  * noeject         avoid ejecting of CD-ROM and prompting for it.
                    Use it via 'noeject <cmd>' (where <cmd>
                    is either reboot or halt)
  * service         wrapper script for /etc/init.d/-scripts,
                    use it e.g. via 'service postfix start'
  * grml2usb        create bootable usb-stick (using a grml-iso
                    like grml-small)

New bootparameters/cheatcodes (some selected ones):

  * serial     - activate serial console (tty1+ttyS0 and start mgetty)
  * hd         - boot from (local) primary harddisk
  * bootchart  - run performance analysis and visualization of bootprocess,
                 see /var/log/bootchart.tgz and bootchart-view; take a look
                 at http://www.bootchart.org/ for further information
  * startx[=windowmanager] - start X window system instead of consoles,
                 if no option is given then fluxbox will be taken as default,
                 you can specify any other window manager available on grml
                 as parameter. For example use 'startx=wmii' to start X window
                 system with wmii (through running 'grml-x wmii')
  * grml2hd    - automatic installation running grml2hd, requires additional
                 bootparameters, see bootsplash F9 for more details, usage example:
                 grml2hd partition=/dev/hda1 mbr=/dev/hda filesystem=ext3 user=mika
                 -> this will install grml to present partition /dev/hda1 using
                 ext3 filesystem, adding user mika and installing lilo to MBR of
                 /dev/hda; passwords of user root and user are 'grml'
  * netconfig=server.tld/config.tbz - download configuration archive and extract it
                 This bootparameter is part of the new config framework:
                 http://grml.org/config/

Special new features:

  * full automatic installation to harddisk via bootparameter grml2hd possible
  * framework grml-autoconfig: configure hardware-detection
    via configuration file /etc/grml/autoconfig or its interface
    script namend 'grml-autoconfig' - especially useful on harddisk
    installations
  * configuration-framework: new bootparameters and scripts (save-config
    and restore-config), see http://grml.org/config/ and 'man save-config'
    for more details)
  * integration of hotplug-light: speeds up booting
  * got rid of all knoppix packages: this means you get a clean
    Debian unstable system with some additional packages available
    through the grml repository on http://grml.org/repos/
    All packages which are responsible for the core of the grml system
    and provided by the grml team are namend 'grml-*'.

Kernel:

  * Based on vanilla kernel 2.6.13.4 including several patches
    (MPPC/MPPE, Reiser4, Speakup, Squashfs,...) and additional
    modules:

    acx100, at76c503a, bcm4400, bcm5700, drbd0.7, eagle-usb, fuse,
    hostap, ieee80211, ipw2100, ipw2200, ivtv0.4, kqemu,
    linux-wlan-ng, lufs, madwifi, ndiswrapper, openafs, pcan,
    pwc, qc-usb, realtime-lsm, rt2400, rt2500, shfs, spca5xx,
    thinkpad, tidev, vaiostat, zd1211

    Some more modules (for example fglrx and nvidia) are not
    pre-installed but available through the grml-repository.

  * We decided to deactivate SMP-support because we noticed
    troubles on some laptops (causing kerneloops, problems
    with booting and ACPI).

  * We decided to compile the kernel with gcc4 and with optimation
    for 586 for improving performance.

  * We are packaging udev on our own to provide perfect integration
    with the kernel shipped with grml. We are syncing packages
    with upstream and the debian version. Works together with
    hotplug-light and upcoming versions of udev will deprecate
    hotplug* completely.

  See http://grml.org/kernel/ for more details regarding the grml-kernel.

Updates:

 * Updated all packages to Debian Unstable branch by 20051016 plus
   important updates (priority >low) until 20051023.
 * Updated memtest to Memtest86+ V1.55.
 * Updated windows-binaries (putty-collection/winscp) to latest version.
 * grml2hd:
            - full automatic (non-interactive) installation
            - support for reiser4 (still experimental, problems with lilo)
            - support for new grml-autoconfig framework
            - improved error handling
           -> See http://grml.org/grml2hd/ for more details.

Removed 231 packages [please notice that some of them are available
under different names/in different packages]:

  *2.6.11-grml* lib*

  apt-proxy  aspell  aspell-bin  aspell-de  aspell-en  bashburn  bass  beecrypt2
  binutils-dev    blt   busybox-cvs-static    clusterssh   comerr-dev    ctetris
  ddcxinfo-knoppix    debian-goodies   devfsd    dhcp-client   dlocate    dosemu
  dosemu-freedos    ettercap    foomatic-bin   foomatic-db    foomatic-db-engine
  foomatic-db-hpijs  foomatic-filters freenx  g++-3.3  gksu gpsdrive  grep-dctrl
  grml-kudzu   grml-xf86config    gtk-engines-qtpixmap   hotplug   hotplug-utils
  html-format  hwsetup imlib1  ipw2100-nonfree isdn-config  jablicator kbdconfig
  kwtools-sys-raid  latex2html  ldaptor-utils libapache-mod-php4  loop-aes-utils
  lufs modconf  mouseconfig myspell-de-at myspell-de-de  myspell-en-us normalize
  nxagent nxlibs nxproxy nxviewer ocaml-base pciutils-dev perl-tk pgmonitor php4
  php4-common  php4-mysql  php4-pgsql php4-sqlite  postgresql  postgresql-client
  postgresql-contrib    prism54    prism54-nonfree   python-bsddb3    python-dev
  python-foomatic  python-ldaptor   python-psyco  python-pyparsing  python-pyrex
  python-tk   python-twisted  python2.3-dev   python2.3-ldaptor  python2.3-psyco
  python2.3-pyrex python2.3-tk python2.3-twisted qt3-dev-tools quagga render-dev
  rubybook   s10sh  scanmodem   selinux-utils  sl-modem-daemon   slang1-utf8-dev
  smbconf-pfeifle  spl  squashfs-tools  sysv-rc timidity  trans-de-en  translate
  usbmount util-vserver vserver-debiantools wordtrans-data x-dev xlibmesa-gl-dev
  xlibmesa-glu  xlibmesa-glu-dev xlibs-static-dev  xorg-common xprt  xprt-common
  xserver-3dlabs    xserver-8514    xserver-agx   xserver-i128    xserver-mach32
  xserver-mach64 xserver-mach8 xserver-p9000 xserver-s3 xserver-s3v xserver-svga
  xserver-vga16 xserver-w32 zlib1g-dev zsh-beta-doc zsh30-doc zsh30-static

Added 262 new packages (exluding lib* and *2.6.13-grml*):

  3ware-3dm2-old-binary    915resolution    acovea   acpitool    acx100-firmware
  alsa-oss   antlr   aptsh   asn1c   bandwidthd-pgsql   binfmt-support   binfmtc
  bootchart   bsdiff  bsdtar   busybox  calcurse   cdecl  cdrecord-prodvd-binary
  clex   codeville   connect-proxy   cowdancer  cpm   cpp-4.0   cracklib-runtime
  crosshurd  csync2  ctapi-cyberjack  ctris  dconf  dcraw  dctrl-tools  ddclient
  debsigs  debtags   dhcp3-client  di  dirvish  distcc   dnotify  docbook-to-man
  doxygen  dput  drbd0.7-utils  drbdlinks duplicity  dupmerge  durep  dvdisaster
  electric-fence  equivs  ettercap-gtk  exiv2   fail2ban  farpd  fastjar  fblogo
  file-rc  fish   fl-cow  flawfinder   fnfx-client  fnfxd  fsh   ftpcopy  fxload
  g++-4.0  gcc-4.0  gcc-4.0-base  gdk-imlib11 gifshuffle  gitweb  gjdoc  gkermit
  grabc  graphviz   grml  grml-autoconfig  grml-crypt   grml-firefox  grml-fixes
  grml-hwinfo   grml-kerneladdons    grml-laptop   grml-saveconfig   grml-splash
  grml-terminalserver-data  grml-vpn  grml-x grml2hd-utils  grml2usb  gtkrecover
  harden-remoteaudit  heirloom-sh  hotkey-setup  hotkeys  hotplug-light  httperf
  i8kutils  icmp-mtu icmp-quench  icmp-reset im-switch  imapcopy imwheel  inadyn
  input-utils  installation-report  ipkungfu  ipw2100-firmware  ipw2200-firmware
  ivtv0.4-utils   java-common   jikes   jikes-kaffe   jwm   kaffe   kaffe-common
  kaffe-pthreads ketchup kexec-tools  ksh kwtools-net-firewall kwtools-utils-pim
  lcdtest  ldapscripts  leo  lft  libapache2-mod-php5  libsafe  linux-sound-base
  lltag  localepurge  loco lsdvd  lua50  lua50-doc  luasocket lufs-utils  lwatch
  madison-lite  mercurial  mgetty  minised  mkcue  mksh  mozilla-firefox-adblock
  mozilla-firefox-webdeveloper  mozilla-imagezoom  msort  msort-gui  multi-aterm
  munin  mwcollect   mysql-client-4.1  nat-traverse  ncp   normalize-audio  nufw
  olsrd-gui    olsrd-plugin   openssh-client    openssh-server   orpheus    pads
  pbzip2   pconf-detect    pcopy   php5   php5-common    php5-mysql   php5-pgsql
  php5-sqlite  piuparts  pmtools-acpi   pnpbios-tools  podracer  postfix-policyd
  postgresql-8.0 postgresql-client-8.0  postgresql-common postgresql-contrib-8.0
  powertweak  powertweak-extra  powertweak-gtk  privoxy  proxsmtp  python-clamav
  python-gnupginterface  python2.3-apt  python2.3-eyed3  python2.3-zopeinterface
  qc-usb-utils  readline-common  readpst   rhapsody  rt2400-base  rt2400-utility
  rt2500-base rt2500-utility  rtorrent sbm  scanlogd scavr schroot  scmxx sdparm
  sendemail  shish  sjog  slsh  spicctrl  splint  squashfs  srcinst  ssh-askpass
  svn-ssh-wrappers  tailor   tart  tcng  tcpxtract  thinkpad-base   tor  toshset
  toshutils  tpb tpctl  ttf-dejavu tthsum  turkey unace  uni2ascii unionfs-utils
  unison2.9.1  unrar-free   vde  vifm  vkeybd  vncommand   vncserver  vorbisgain
  wcalc  webcpp weechat-common  weechat-curses windowlab  x11-common x11vnc  x2x
  xautomation xcb xmon xprint xprint-common  xtla xtrlock xvkbd xvncviewer yaird
  ysm zd1211-firmware


If you find a problem with the release please check
 http://wiki.grml.org/doku.php?id=grml_0.5
and report problems using information on http://grml.org/bugs/

Changes since release 0.4 (20050515)
====================================

german grml-paper
-----------------
A german paper "grml - Linux fuer Systemadministratoren und Texttool-User"
(170kB, PDF) is available online on http://grml.org/docs/#paper

grml-wiki available
-------------------
The grml-wiki collects information useful for grml-users.
Everyone can contribute of course!
http://wiki.grml.org/


Please send your feedback, feature requests and bug reports to the grml-team!
http://grml.org/contact/   #grml on irc.freenode.org  contact (at) grml.org

Many thanks in this release go to Mark Riedesel for his great wallpaper
and to all those who have sent feedback since the last release!

Contact: Michael 'mika' Prokop <mika at grml.org>

regards,
-mika-
--
 ,'"`.         http://www.michael-prokop.at/
(  grml.org -» Linux for texttool-users and sysadmins
 `._,'         http://www.grml.org/
