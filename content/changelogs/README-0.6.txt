                             _
            _ __            | |
      __ _ | '__| _ __ ___  | |
     / _` || |:::| '_ ` _ \ | |
    | (_| ||_|:::| | | | | ||_|
    :\__, |::::::|_| |_| |_|:::
    :|___/:::::::::::::::::::::
    :::::::: version 0.6 ::::::
    : codename Winterschlapfn :
    :::::::::::::::::::::::::::


GRML - Live-CD for sysadmins and users of text tools
====================================================

grml is a bootable CD (Live-CD) based on Knoppix and Debian. It includes a
collection of GNU/Linux software especially for users of texttools and system
administrators. grml provides automatic hardware detection. You can use grml for
example as a rescue system, for analyzing systems/networks or as a working
environment. It is not necessary to install anything to a harddisk, you don't
even need a harddisk to run it. Due to on-the-fly decompression grml includes
about 2.1 GiB of software and documentation on the CD.

   http://grml.org/

grml 0.6 can be downloaded from http://grml.org/download/


Release 0.6 - Codename Winterschlapfn (20060122)
================================================

Fixed several bugs, including issues reported on
https://github.com/grml/grml/wiki/grml_0.5

Several improved, updated and extended configuration files.

New grml-scripts (some selected ones):

  * bt-hid          connect bluetooth mouse
  * ip-screen       print ip address of configured network interfaces.
                    Integrated into status line of GNU screen.
  * XF86AudioLowerVolume, XF86AudioMute and XF86AudioRaiseVolume:
                    scripts for handling audio volume
  * wm-ng           wrapper script for use with grml-x - provides an easy
                    to use desktop, runs fluxbox with gkrellm and idesk,
                    use via 'grml-x wm-ng'
                    Tip: press Ctrl-Alt-d to switch X resolution to 1024x768
  * noprompt        wrapper script to avoid prompting when rebooting/
                    halting system. Use e.g. via 'noprompt reboot'

New bootparameters/cheatcodes (some selected ones):

  * hostname=...   set hostname to specified value (default: grml)
  * distcc=$NETWORK,$INTERFACE - activate distcc-daemon, usage example:
                   distcc=192.168.0.1/24,eth0
                   activates distccd listening on ip address of eth0 providing
                   access for network 192.168.0.1/24
  * 915resolution=${MODE},${XRESO},${YRESO}     start resolution modify
                    tool for Intel graphic chipset, usage example:
                    915resolution=4d,1400,1050
  * swspeak         get software synthesizer support through speakup's
                    sftsyn, speech-dispatcher and speechd-up
  * debnet          search through local partitions for file /etc/network/interfaces,
                    copy /etc/network to running system and restart networking then
  * forensic        boot without any filesystem access to hard disks so
                    forensic investigations can be made
  * blacklist=module deactivate loading of a specific module. Configured via
                    /etc/modprobe.d/grml. Usage example:
                    blacklist=snd_ens1371

Special new features:

  * grml-tips: run 'grml-tips $KEYWORD' to get hints for $KEYWORD
  * udev fully replaces hotplug-light and discover
  * pcmcia­utils replace pcmcia-cs
    Notice: some kernel drivers (like for example PCMCIA WLAN cards) are not
    autoloaded by default. Run 'hwinfo --netcard' to figure out which module has
    to be loaded.
  * AFS-client support
  * don't use /proc/bus/usb by default anymore
  * improved synaptics touchpad recognition
  * w3m not starting automatically (get it through running 'grml-info'),
    tty1 is not reset on startup (see bootmessages instead)

Kernel:

  * Based on vanilla kernel 2.6.15 including several patches
    (Reiser4, Speakup, Squashfs,...) and additional modules:

    acerhk, acx100, at76c503a, bcm5700, drbd0.7, cowloop, dazuko,
    eagle-usb, hostap, ieee80211, ipw2100, ipw2200, ivtv0.4,
    kqemu, linux-wlan-ng, lufs, madwifi, ndiswrapper, openafs,
    pcan, pwc, qc-usb, realtime-lsm, rt2400, rt2500, sl-modem,
    snd-bt-sco, spca5xx, sysprof, thinkpad, tidev, vaiostat,
    zd1211

    Notice: madwifi-ng is available in /usr/src as debian package
    but not pre-installed because of conflicts with madwifi.
    Some more modules (for example fglrx and nvidia) are not
    pre-installed but available through the grml-repository.

  See http://grml.org/kernel/ for more details regarding the grml-kernel.

Updates:

 * Updated all packages to Debian Unstable branch by 20060115 plus
   some minor updates until 20060121.
 * Updated memtest to Memtest86+ V1.65.
 * Updated putty-collection to latest version. (winscp has been removed)
 * grml2hd:
            - initrd support (installation onto SCSI/USB-devices supported)
            - support for installation on software RAID1 (see 'man grml2hd')
            - remote, automatic installation via network with grml-terminalserver
           -> See http://grml.org/grml2hd/ for more details.

Removed 112 packages [please notice that some of them are available
under different names/in different packages]:

  *2.6.13-grml* lib*
  3270-common 855resolution aalib-bin aalib1 acovea alsaplayer apt-move arpd
  base-config bash3 bluez-pcmcia-support cgvg checkmem chgrep cvsd db4.2-util dbus-1
  dbus-glib-1 debsync diffmon esh fdisk-udeb fenris ffmpeg fprobe-ng ftape-util ftpd
  gdk-imlib1 genliloconf grepmap ha-prosper hotplug-light ifp-line imlib-progs ion2
  ion3-mod-ionflux ipautofw irda-common irda-tools isapnptools kwtools-net-firewall
  kwtools-utils-pim ledit leo lsh lspowertweak lua50-doc madwifi mdnsresponder
  mozilla-firefox-webdeveloper msort-gui mush nparted ntop ocaml-base-nox onak osh
  p3nfs parted-bf pcmcia-cs pcopy pdfscreen pekwmdev plan pmp-common pmtools-acpi
  polipo postgresql-8.0 postgresql-client-8.0 postgresql-contrib-8.0 powertweak
  powertweak-extra powertweak-gtk powertweakd pppdcapiplugin print-utils-pfeifle
  prozilla python2.3-ixplib raidtools2 rt2400-base rt2500-base sasl-bin satan sh-lib
  shaper shfs-utils siege-ssl slang1 slang1a-utf8 slpim smbconf-pfeifle-nonfree
  speedtouch srg statslog systraq sysutils tetex-doc tunnelv udev-klibc wavtools
  x-window-system x3270 xdm xext xfonts-x3270-misc xkeyval xorg-driver-synaptics
  xpdf-i xserver-common-v3 xviddetect zsh-beta zsh30

Added 99 new packages (exluding lib* and *2.6.15-grml*):

  9base acpidump athena-jot bbe bzrtools cdrbq cmus conspy cpuburn-in-binary cu
  dares dares-qt db4.3-util dbus dd-rhelp debian-archive-keyring debsecan evilwm
  evms-bootdebug fcrackzip fglrx-control firefox firefox-webdeveloper flac123
  fluxconf fprobe ftpbackup gcj-4.0-base gddrescue git-core gkrellm-volume
  gkrellshoot gmrun grml-btnet grml-mercurial-utils grml-shlib grml-tips idesk
  ifenslave-2.6 ifplugd ihu irda-utils irssi krb5-config krb5-user
  loop-aes-utils memtester migrationtools mklibs-copy mysql-server-4.1
  netdiscover nvidia-xconfig obexftp openafs-client openafs-krb5 orange
  os-prober parted pcmciautils pekwmsvn postgresql-8.1 postgresql-client-8.1
  postgresql-contrib-8.1 preload procinfo proftpd proftpd-common python2.4
  python2.4-celementtree python2.4-elementtree python2.4-minimal root-tail
  rox-filer secure-delete securecgi sl-modem-daemon speech-dispatcher speechd-el
  speechd-up ssmping sysprof tex-common tlswrap tofrodos transset ufsutils
  unzsplit uruk vblade vim-gui-common vim-runtime webcheck weechat-plugins
  xcompmgr xen-tools xfree86-driver-synaptics xtrace xwit zsplit

If you find a problem with the release please check
 https://github.com/grml/grml/wiki/grml_0.6
and report problems using information on http://grml.org/bugs/

Changes since release 0.5 (20051024)
====================================

help the grml team
------------------
You like grml? Help us!
http://grml.org/donations/

grml-user map
-------------
Are you already listed on the grml-user map?
http://www.frappr.com/grmlusers

grml-announce mailinglist
-------------------------
Stay up to date via low-traffic mailinglist grml-announce.
http://lists.mur.at/mailman/listinfo/grml-announce

new team member
---------------
Alexander Wirt joined the grml-team.


Many thanks in this release go to all those who have sent feedback
since the last release!

Please send your feedback, feature requests and bug reports to the grml-team!
http://grml.org/contact/   #grml on irc.freenode.org  contact (at) grml.org

Contact: Michael 'mika' Prokop <mika at grml.org>

regards,
-mika-
--
 ,'"`.         http://www.michael-prokop.at/
(  grml.org -» Linux for texttool-users and sysadmins
 `._,'         http://www.grml.org/
