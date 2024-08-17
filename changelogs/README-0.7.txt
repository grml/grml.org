                             _
            _ __            | |
      __ _ | '__| _ __ ___  | |
     / _` || |:::| '_ ` _ \ | |
    | (_| ||_|:::| | | | | ||_|
    :\__, |::::::|_| |_| |_|:::
    :|___/:::::::::::::::::::::
    :::::::: version 0.7 ::::::
    : codename Bootenschnitzl :
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

grml 0.7 can be downloaded from http://grml.org/download/


Release 0.7 - Codename Bootenschnitzl (20060410)
================================================

Fixed several bugs, including:

  #19  grml-0.6: gkrellmd and battery status [wishlist]
  #20  grml-0.6: GRMLCFG does not work with floppy disk
  #21  hgrep:    hgrep returns always success

and issues reported on https://github.com/grml/grml/wiki/grml_0.6

Several improved, updated and extended configuration files.

New grml-scripts (some selected ones):

  * bt-audio        script to connect bluetooth headset to computer
  * get_tw_cli      get 3ware RAID controller command line interface
                    tool (tw_cli)
  * event-viewer    program to see all fork/exec/exit/uid/gid events on
                    a running system using the new netlink/fork connector
                    interface from linux >=2.6.15 

New bootparameters/cheatcodes (some selected ones):

  * vmware          disable usb/firewire detection during bootprocess,
                    load some SCSI-modules instead

Special new features:

  * /bin/sh now points to /bin/bash; reason: Debian does not support zsh
    as /bin/sh, zsh is used as interactive shell anyway of course
  * reworked zsh completion (no error correction on rm and mv commands)
  * grub can be called from bootmenu (in isolinux) through running
    'grub' now; thanks a lot to Rafael Steiner!
  * reworked 'swspeak' bootoption: sound output during startup, start
    software synthesizer when booting finishe via running 'swspeak' 
  * rebuildfstab (generate /etc/fstab):
    - partitions have new mount-options: 'noauto,nouser,dev,suid,exec'
    - improved partition detection (e.g. reiser4 is detected now)

Kernel:

  * Based on vanilla kernel 2.6.16.1 including several patches
    (Reiser4, Speakup, Squashfs,...) and additional modules:

    acerhk, acx100, at76c503a, bcm5700, cowloop, dazuko, drbd0.7,
    eagle-usb, et131x, exmap, ivtv, kqemu, linux-wlan-ng, lufs, madwifi,
    madwifi-ng, ndiswrapper, nozomi, openafs, pcan, pwc, qc-usb,
    realtime-lsm, rt2400, rt2500, sdhci, sl-modem, snd-bt-sco, spca5xx,
    sysprof, thinkpad, tidev, truecrypt, vaiostat, zd1211

    Notice: madwifi-ng is available in /usr/src as debian package
    but not pre-installed because of conflicts with madwifi.
    Some more modules (for example fglrx and nvidia) are not
    pre-installed but available through the grml-repository.

  See http://grml.org/kernel/ for more details regarding the grml-kernel.

Updates:

 * Updated all packages to Debian Unstable branch by 20060402 plus
   some minor updates until 200604XX.
 * Updated memtest to Memtest86+ V1.65.
 * Updated putty-collection to latest version.
 * grml2hd (install grml to harddisk):
        - check for given mbr option and prompt for activating it if not set
        - changed initrd/initramfs generator from yaird to initramfs:
          now booting via firewire is also possible
        - added resume, brltty, speakup_synth and swspeak to list of
          grml2hd-bootparams so it's easier to use out of the box
        - changed logic in grml2hd dialog for package removal: now select packages
          which should be kept
        -> See http://grml.org/grml2hd/ for more details.

Removed 34 packages [please notice that some of them are available
under different names/in different packages]:

  *2.6.15-grml* lib*

  bzrtools cryptsetup-luks fam fonts-ttf-decoratives gkrellm-common grml-fixes
  ivtv0.4-utils jikes jikes-kaffe ldaptor-common mirror mozilla-firefox-adblock
  multiseat munin mysql-server mysql-server-4.1 pdns-backend-mysql pgpool php5
  php5-mysql php5-pgsql php5-sqlite pmx postfix-mysql postfix-pgsql postfix-policyd
  postgresql-8.1 postgresql-contrib-8.1 preview-latex python2.3-subversion schroot
  sqlrelay-mysql tpb wacom-tools

Added 48 new packages (exluding lib* and *2.6.16-grml*):

  3270-common apt-index-watcher array-util arrayprobe bar bcrelay brltty-flite btsco
  bwm-ng c3270 cryptsetup cvsconnect cw cwcp dbconfig-common devio ecj-bootstrap
  fontconfig-config gamin gcc-4.1-base gcj-4.1-base gcom gij-4.0 glimpse i855crt
  ivtv-utils lanmap latex-mk linux-wlan-ng-firmware lomoco moreutils mpt-status
  nbsmtp o3read openipmi p7zip pfqueue postgresql-client-common python-subversion
  python2.4-selinux python2.4-semanage qpxtool rkhunter tcptraceroute tct truecrypt
  unixcw user-setup

If you find a problem with the release please check
 https://github.com/grml/grml/wiki/grml_0.7
and report problems using information on http://grml.org/bugs/


Changes since release 0.6 (20060122)
====================================

grml user mailinglist available on gmane
-------------------------
http://dir.gmane.org/gmane.linux.distributions.grml.user

Please send your feedback, feature requests and bug reports to the grml-team!
http://grml.org/contact/   #grml on irc.freenode.org  contact (at) grml.org

Many thanks in this release go to Rafael Steiner for the grub-in-isolinux
feature and to all those who have sent feedback since the last release!

Contact: Michael 'mika' Prokop <mika at grml.org>

regards,
-mika-
-- 
 ,'"`.         http://www.michael-prokop.at/
(  grml.org -» Linux for texttool-users and sysadmins
 `._,'         http://www.grml.org/
