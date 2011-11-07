                             _
            _ __            | |
      __ _ | '__| _ __ ___  | |
     / _` || |:::| '_ ` _ \ | |
    | (_| ||_|:::| | | | | ||_|
    :\__, |::::::|_| |_| |_|:::
    :|___/:::::::::::::::::::::
    :::::::: version 0.3 ::::::
    :: codename hustenstopper :
    :::::::::::::::::::::::::::


GRML - Knoppix for sysadmins and users of text tools
====================================================

grml is a bootable CD (Live-CD) based on Knoppix and Debian. grml includes a
collection of GNU/Linux software especially for users of texttools and system
administrators. grml provides automatic hardware detection. You can use grml for
example as a rescue system, for analyzing systems/networks or as a working
environment. It is not necessary to install anything to a harddisk, you don't
even need a harddisk to run it. Due to on-the-fly decompression grml includes
about 2 GiB of software and documentation on the CD. 

   http://grml.org/


Release 0.3 - Codename Hustenstopper (20050304)
===============================================

Fixed several bugs. Improved hardware detection.
Several improved, updated and extended configuration files.

New grml-scripts (some selected ones):

  * grml-muttng:  shellscript for configuring mailclient muttng (fork
                  of mutt) via dialog

  * grml-lock:    shellscript for locking consoles

  * grml-pptp-inode: connect via pptp to inode (www.inode.at)

  * grml-pptp-xdsl-students: set up XDSL@students internet connection
                             at provider INODE in austria

New bootparameters/cheatcodes:

  * wondershaper=  set up basic traffic shaping; use it via
                   wondershaper=device,download,upload
                   example: wondershaper=eth0,500,100
                  
  * services=      start service(s) which have an init-script
                   in /etc/init.d/; example:
                   services=postfix,mysql

  * welcome        welcome message via soundoutput

  * nocolor        disable colorized output while booting

  * log            log error messages while booting to /tmp/grml.log.*
                   and start bootlogd (tip: use in combination with nocolor)

  * debug          get shell(s) during process of booting

Special new features:

  * use of udev (Linux configurable dynamic device naming support)

  * multitail running on tty12

  * grml-templates: this package includes several templates for use
                    with LaTeX, C, C++, Qt, tpp, Makefile,...

  * showing cpu-status ("$CUR / $MAX frequency") inside GNU screen

Updates:

 * Updated all packages to Debian Unstable branch by 20050303.
 * Updated bootparameter 'memtest' to Memtest86+ V1.50.
 * Updated windows-binaries (putty-collection/winscp) to latest version.
 * grml2hd:  /GRML is now removed on the hd-install to satisfy FHS.
             Several other improvements.

Removed 95 packages [please notice that some of theme are available
under different names/in different packages]:

  apache-utils autotrace captive captive-lufs cryptoconf cryptsetup
  dd-rescue distcc festival festlex-cmu festlex-poslex
  festvox-kallpc16k foomatic-db-gimp-print freeglut3 gconf2 getmail
  gnome-mime-data grml-hotplug grml-kudzu-dev grml-sndconfig
  grml-sysvinit gtk-engines-geramik gtk-engines-geramik-data
  gtk2-engines-geramik gtk2-engines-qtpixmap gtkam ijsgimpprint
  iogerman lib[...] loop-aes lsh-client lsh-server lsh-utils
  manpages-posix-dev moagg moagg-data mount-aes orinoco pekwm
  printconf python-glade-1.2 python-gtk-1.2 rapidsvn remaster
  smpeg-plaympeg unarj wmaker wmi2 wngerman 


Added 191 new packages:

  acx100-2.6.9-grml amap apache2-utils apel ash astyle autofs base64
  bazaar bfa bluez-pcmcia-support cabber cadaver capiutils cgdb check
  cplay cproto cryptsetup-luks ctetris ctrlproxy cvsdelta darcs
  dbishell dbs ddrescue debpool deletemail dmraid dnstracer dstat
  eagle-usb-data eagle-usb-modules-2.6.9-grml eagle-usb-utils
  edictionary eflite elscreen emacspeak erc ffmpeg filetraq flite
  fonty foremost fortunes-debian-hints fragroute freesweep getmail4
  gkrellm-reminder gkrellmd gkrellmitime gkrellmwireless gkrellweather
  grml-templates harden-tools hnb htcheck idn ifmetric ifp-line
  initscripts ipac-ng iprelay ipython jablicator jhead jigl lacheck
  ldaptor-common leave libacme-bleach-perl libacme-eyedrops-perl
  libacme-smirch-perl libbio2jack0 libdb4.3 libdevmapper1.01 libesmtp5
  libflac6 libflite1 libhal0 liblingua-en-inflect-perl
  liblog-agent-perl libnfsidmap1 libpalm-perl libpam-mount
  libparted1.6-12 libpth2 librsync1 libterm-readline-perl-perl
  libwvstreams4.0-base libwvstreams4.0-extras libxml-parser-ruby1.8
  libxml-writer-perl libxplc0.3.10 libzzip-0-12 lighttpd links2
  lm-sensors lmbench lout lout-common lout-doc lpr lshw mdnsresponder
  mime-codecs moc mount mozilla-mplayer mp3c mpc musepack-decoder
  musepack-encoder musepack-replaygain mutt-ng nbtscan netmask nmapfe
  nttcp packit pconsole pdfjam pekwm-dev pisg pmp-common polipo
  portsentry proxycheck pscan ptunnel python-ldaptor python-profiler
  python-pyparsing python-pyrex python2.3-crypto python2.3-ixplib
  python2.3-profiler python2.3-pyopenssl python2.3-pyrex pytris quilt
  ras rats rc rdiff rdiff-backup read-edid recoverjpeg replicator rpl
  rsnapshot salvage-ntfs sc schedtool schedutils scons scrounge-ntfs
  sensord sg3-utils shmux shunit slat sleepenh sn statslog sudosh
  systraq sysv-rc tclx8.3 textdraw thc-pptp-bruter tiger tk-brief
  torsmo trickle udev udpcast udptunnel units upgrade-oldest vbetool
  vera vlock vrms wajig wakeonlan wamerican-small wmii xnest xprobe
  xtermcontrol

Changes since release 0.2 (20050110)
====================================

devel blog
----------
Information about development on grml can be found in the grml
development weblog which is available on:
http://grml.supersized.org/

software
--------
Release 0.3 provides 191 new packages of software.
95 packages have been removed.

kernel
------
The grml-team decided to ship release 0.3 with kernel 2.6.9-grml.
2.6.10 is too broken and 2.6.11 not yet tested enough to ship it.
Release 0.4 will include kernel >=2.6.11.  Take a look at the
kernel-webpage for details regarding the kernel:
http://grml.org/kernel/


Please send feedback, feature requests and bug reports to the grml-team!
http://grml.org/contact/   #grml on irc.freenode.org  contact (at) grml.org

regards,
-mika-
-- 
 ,'"`.         http://www.michael-prokop.at/
(  grml.org -» Linux for texttool-users and sysadmins
 `._,          http://www.grml.org/
