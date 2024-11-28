                             _
            _ __            | |
      __ _ | '__| _ __ ___  | |
     / _` || |:::| '_ ` _ \ | |
    | (_| ||_|:::| | | | | ||_|
    :\__, |::::::|_| |_| |_|:::
    :|___/:::::::::::::::::::::
    :::::: version small 0.2 ::
    :::::: codename corry :::::
    :::::::::::::::::::::::::::


GRML-small - Live-CD for sysadmins and users of text tools
===========================================================

grml-small is a bootable CD (Live-CD) based on Knoppix and Debian. It includes
a collection of GNU/Linux software for system administrators and provides
automatic hardware detection. Whereas grml (without the -small) provides more
than about 2.1GiB of software on a 700MB-ISO, grml-small is a very small rescue
system for systemadministrators. It is not necessary to install anything to a
harddisk, you don't even need a harddisk to run it. Due to on-the-fly
decompression grml-small includes about 200 MB of software and still fits on a
business card CD-ROM or USB device with 55MB.

   http://grml.org/

grml-small 0.2 can be downloaded from http://grml.org/download/

Release small 0.2 - Codename Corry (20060122)
=============================================

Fixed several bugs.
Several improved, updated and extended configuration files.

New bootparameters/cheatcodes (some selected ones):

  * serial     - activate serial console (tty1+ttyS0 and start mgetty)
  * netconfig=server.tld/config.tbz - download configuration archive and extract it
                 This bootparameter is part of the new config framework:
                 http://grml.org/config/
  * forensic     boot without any filesystem access to hard disks so
                 forensic investigations can be made
  * grml2hd    - automatic installation running grml2hd, requires additional
                 bootparameters, see bootsplash F9 for more details, usage example:
                 grml2hd partition=/dev/hda1 mbr=/dev/hda filesystem=ext3 user=mika
                 -> this will install grml to present partition /dev/hda1 using
                 ext3 filesystem, adding user mika and installing lilo to MBR of
                 /dev/hda; passwords of user root and user are 'grml'
  * debnet       search through local partitions for file /etc/network/interfaces,
                 copy /etc/network to running system and restart networking then

  See http://www.grml.org/files/release-0.2-small/grml-cheatcodes.txt
  for more details about boot options.

New features:

  * udev fully replaces hotplug-light and discover.
  * booting via usb / firewire works out of the box; install grml-small
    on your usb-stick via grml2usb, see
    https://github.com/grml/grml/wiki/usb for more details
  * configuration-framework: new bootparameters and scripts (save-config
    and restore-config), see http://grml.org/config/ for more details.
  * Merged/updated to features from grml(-large) [as far as possible].
  * added support for installation to hard disk via grml2hd

Kernel:

  * Kernel is based on vanilla kernel 2.6.15 including several
    patches (Reiser4, Squashfs,...). Compared with the normal grml system the
    kernel features have been reduced to fit on the ISO. See
    http://grml.org/kernel/ for more details.

  * We decided to compile the kernel with gcc4 and with optimation
    for 586 to improve performance. SMP has been enabled for
    2.6.15-grml-small

Notes:

  * Notice that there are several hacks to reduce the ISO-size, so
    you e.g. won't find documentation and manpages on the ISO.

  * grml-small provides support for booting via USB, see
    https://github.com/grml/grml/wiki/usb for details.

  * To fit on a 55MB-ISO the software list has been reduced of
    course, see section "Debian-Information" on http://grml.org/files/ for more
    details, you can find the dpkg-list there too:
    http://grml.org/files/release-0.2-small/dpkg_list

Updates:

  * Updated all packages to Debian Unstable branch by 20060121.

Removed 16 packages (excluding lib* and *2.6.12-grml*):

  *lib*
  debfoster discover discover-data hotplug-light hwsetup
  reiser4progs slang1 sysv-rc

Added 26 new packages (exluding lib* and *2.6.15-grml*):

  agrep atftp cpio dctrl-tools file-rc gcc-4.0-base gettext-base grml-docs
  grml-fixes grml-saveconfig grml-tips grml2hd grub hdparm lib* lilo links ncftp
  ntfsprogs ppp pppoeconf readline-common reiserfsprogs tcpdump tinysnmp-tools
  whiptail yaird

If you find a problem with the release please check
 https://github.com/grml/grml/wiki/grml-small_0.2
and report problems using information on http://grml.org/bugs/

Changes since release 0.1 (20050705)
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
