                              _
          __ _ _ __ _ __ ___ | |
         / _` | '__| '_ ` _ \| |
        | (_| | |  | | | | | | |
         \__, |_|  |_| |_| |_|_|
        :|___/::::::::::::::::::
        :::::: version 0.2 :::::
        :: codename satura :::::
        ::::::::::::::::::::::::


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


Release 0.2 - Codename Satura (20050110)
========================================

Fixed several bugs, including:
  #10: Please remove CD, close cdrom drive...is missing on reboot/halt
  #11: grml-0.1: starting xserver fails with '(EE) No core pointer device specified'
  #12: grml-0.1: WLAN Problem: Linksys WPC11 doesn't work

New grml-scripts:

  * grml-mutt:    shellscript for configuring mailclient mutt via dialog
  * grml-slrn:    shellscript for configuring newsreader slrn via dialog
  * grml-postfix: shellscript for configuring postfix using TLS
  * grml-nessus:  shellscript for preparing grml-system for use with nessus[d]

New kernel:

  * 2.6.9-grml:   vanilla kernel (from kernel.org) including several patches
                  more information available on http://grml.org/kernel/

New hardware detection:

  * Additional use of hotplug and discover mechanism to detect hardware.

New bootparameters/cheatcodes:

  * ssh:      use via ssh=password (adjust password), this will set the
              password for user grml and autostart a ssh-server.
              Notice that the provided password can be read from
              /proc/cmdline -> change the password as soon as possible!
  * passwd:   use via passwd=password, this will set the password for
              user grml so login via getty

  * some other bootparameters related to hardware detection, see
    file grml-cheatcodes for details (grml-cheatcodes.txt on CD-ROM,
    online at grml.org/files/)

Special new features:

  * CPU-detection on startup and start of cpudyn/powernowd depending
    on type of CPU
  * htop running on tty11
  * improved zsh configuration (prompt, completion,...)
  * zsh-lovers (see 'man zsh-lovers') updated and available in
    PDF-, PS- and HTML-format
  * grml2hd: install grml to harddisc
    Notice: First release, alpha-status - please use with caution!

Updates:

 * Updated all packages to Debian Unstable branch by 20050109.
 * Updated bootparameter 'memtest' to Memtest86+ V1.40.
 * Added new/updated tools to windows-directory (/GRML/windows):
   pageant, plink, pscp, psftp, putty, puttygen and winscp371.

Removed 149 packages.

Added 455 new packages:

  abcde acpid aesutil aewan aircrack alsa-base alsa-utils alsaplayer-alsa
  apachetoolbox apcupsd apt-dpkg-ref ara argus-client arpd arping arptables
  asr-manpages at76c503a-modules-2.6.9-grml athcool aumix autossh awesfx axp
  backup2l bash3 bass bchunk bcm4400-module-2.6.9-grml bcm5700-module-2.6.9-grml
  bcrypt biabam biew bitlbee bittornado blktool bluez-firmware bluez-hcidump
  busybox-cvs-static calife camserv captive captive-lufs cbrowser ccrypt
  cd-discid cdtool cdw cdw-common cfv clamav-daemon clamav-getfiles
  clamav-testfiles cloop-src clvm cowsay cscope cvs-buildpackage cvsd dar
  dbengine dcfldd debmake debmirror devtodo dir2ogg directvnc dired discover
  discover-data distmp3 dmidecode dnsmasq docbook docbook-dsssl dpkg-sig
  dpkg-www driftnet dropbear dtach dvdbackup dvdrtools dviutils dwww ebtables
  eciadsl elmo elvis-common ex exuberant-ctags faad feh fenris festival
  festlex-cmu festlex-poslex festvox-kallpc16k filepp firehol
  flashplugin-nonfree fnord fprobe freenx freeradius freeradius-ldap ftp-upload
  funny-manpages fuse-utils geresh getmail gfs-tools giblib1 giftcurs gmailfs
  gnome-mime-data gnuhtml2latex gnutls-bin gpm gpsdrive grml-ddcxinfo grml-kudzu
  grml-kudzu-dev grml-rebuildfstab grml-scanpartitions grml-sectools
  grml-sndconfig grml-sysvinit grml-usleep grml2hd ha-prosper hfsutils hibernate
  hostap-modules-2.6.9-grml hping3 httpf httping hwdata hydra id3v2
  ifupdown-scripts-zg2 ike-scan imapfilter imediff2 indent info2www iozone3
  iperf iptstate ipvsadm ipw2100-modules-2.6.9-grml ipw2200-modules-2.6.9-grml
  isync jail jigit joystick juke keepalived kernel-headers-2.6.9-grml
  kernel-image-2.6.9-grml kernel-source-2.6.9-grml knockd knocker
  kwtools-net-postfix kwtools-sys-raid labrea laptop-mode-tools latextug
  lbxproxy ldap-utils liba52-0.7.4 libapache-mod-chroot libarch-perl
  libarchive-tar-perl libavcodeccvs libbonobo2-0 libbonobo2-common libcap2
  libcapi20-2 libcarp-clan-perl libcflexplugin libcompfaceg1
  libcompress-zlib-perl libconvert-asn1-perl libcrypt-smbhash-perl
  libcrypt-ssleay-perl libdaemon0 libdar2 libdb3-util libdbd-pg-perl
  libdigest-md4-perl libdiscover2 libdlm0 libdns16 libdv2 libestools1.2c102
  libevms-2.5 libfaac0 libg2c0 libgcrypt11-dev libglade0 libgnomevfs2-0
  libgnomevfs2-common libgnutls11-dev libgpgme11 libgpmg1 libgtk-perl libhowl0
  libhtml-lint-perl libidn11-dev libio-socket-ssl-perl libio-string-perl
  libio-zlib-perl libiodbc2 liblockfile-simple-perl
  libmail-mbox-messageparser-perl libmailtools-perl libmcrypt4 libmhash2
  libmp4-0 libnet-ldap-perl libopenct0 libopensc1 libosp4 libostyle1
  libpam-chroot libpam-devperm libpam-dotfile libpam-krb5 libpam-ldap
  libpam-musclecard libpam-mysql libpam-opensc libpam-pgsql libpam-pwgen
  libpam-radius-auth libpam-smbpass libpam-ssh libpam-tmpdir libpcsclite1
  libpg-perl libpq3 libqt3-mt-dev libreadline5 libreadline5-dev libruby
  librudiments0c102 libsasl-modules-plain libsasl2-dev libsasl2-modules libsasl7
  libscam1 libselinux1 libsensors3 libsepol1 libsnmp4.2 libsqlite3-0 libsvncpp0
  libswig1.3.22 libwraster3 libxft-dev libxml1 libxosd2 libxslt1.1 libzvbi0
  lintian linux-kernel-headers-grml listadmin lsh lufs m-tx macchanger mailcheck
  manpages-posix manpages-posix-dev maradns markdown mbmon mboxcheck md5deep
  mixmaster mod-chroot-common monit moosic mp3gain mp3splt mp3wrap mplayer-nogui
  mtop mtr-tiny multitail multitee musixtex muttprofile myspell-en-us naim
  ncftp2 ndiswrapper-modules-2.6.9-grml ndiswrapper-utils netdiag netperf
  netstat-nat newsflash normalize nsd nstx ntop nullidentd numlockx nxlibs
  ocaml-base offlineimap oinkmaster openjade osdsh p3nfs p3scan paketto par
  patcher pax paxctl pbuilder pdmenu pdns-backend-ldap pdns-backend-mysql
  pdns-backend-pgsql pdns-backend-pipe pdns-backend-sqlite pekwm pgmonitor
  pgpool php4-pgsql php4-sqlite pia playmp3list plptools pmount pmx
  policycoreutils pop3browser pork postfix-ldap postfix-mysql postfix-pcre
  postfix-pgsql postgresql postgresql-client postgresql-contrib pperl pptpd
  printconf proxychains proxymngr pspax pstack python-bsddb3 python-foomatic
  python-fuse python-glade-1.2 python-gtk-1.2 python-libgmail python2.3-bsddb3
  python2.3-fuse qc-usb-modules-2.6.9-grml quagga queue quota raccess
  rainbowcrack randomize-lines realpath realtime-lsm
  realtime-lsm-module-2.6.9-grml redir renameutils rinetd rman rng-tools
  ruby1.8-examples sasl-bin scantv sdd secvpn sgmltools-lite
  shfs-module-2.6.9-grml shorewall simh sl-modem-daemon
  sl-modem-modules-2.6.9-grml slapd sloccount slpim slrnface smbc smbldap-tools
  snarf snort snort-common snort-rules-default snowdrop socat sqlite3 sqlrelay
  sqlrelay-mysql sqlrelay-postgresql sqlrelay-sqlite squashfs-tools star
  stegdetect steghide swish++ tagtool tcc tcl8.3 tcpreen tcputils tex-refs
  texify texpower tn5250 tpconfig translate tspc tth tunnelv vfu vim-latexsuite
  vim-vimoutliner vnstat vrfy w3m-el waproamd webcam webcamd weblint-perl
  wellenreiter weplab wmctrl wmi2 workbone wpasupplicant wput xautolock xawtv
  xawtv-plugins xfaces xfonts-bolkhov-cp1251-75dpi xfonts-intl-european
  xfree86-driver-synaptics xfwp xmlstarlet xmove xosd-bin yacpi yasr zsync


Changes since release 0.1 (20041022)
====================================

team members
------------
Matthias Kopfermann and Wolfgang Scheicher joined the grml-team.
See http://grml.org/team/ for details.

grml-repos
----------
The grml-repository (exclusive debian packages provided by the
grml-system), wallpapers, selected grml-scripts and information
on packages are available online:  http://grml.org/files/

book list
---------
A selection of books which might be interesting for users of grml is
available on the grml-website:   http://grml.org/books/

support
-------
The grml-team provides support, ranging from giving workshops, realizing
security/network audits to system consulting and integration.
For more information refer to: http://grml.org/support/

software
--------
Release 0.2 provides 455 new packages of software.
149 packages have been removed.

kernel
------
Release 0.2 provides a kernel based on vanilla kernel 2.6.9 including
several patches. Kernel 2.4.27 has been removed because of cost-
benefit calculations. Take a look at the kernel-webpage for details:
http://grml.org/kernel/


Please report feedback, wishes and bugreports to the grml-team!
http://grml.org/contact/   #grml on irc.freenode.org  contact (at) grml.org

regards,
-mika-
-- 
 ,'"`.         http://www.michael-prokop.at/
(  grml.org -» Linux for texttool-users and sysadmins
 `._,          http://www.grml.org/
