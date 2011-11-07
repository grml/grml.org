                             _
            _ __            | |
      __ _ | '__| _ __ ___  | |
     / _` || |:::| '_ ` _ \ | |
    | (_| ||_|:::| | | | | ||_|
    :\__, |::::::|_| |_| |_|:::
    :|___/:::::::::::::::::::::
    :::::: version small 0.1 ::
    ::::: codename zugschlus ::
    :::::::::::::::::::::::::::


GRML-small - Knoppix for sysadmins
==================================

grml-small is a bootable CD (Live-CD) based on Knoppix and Debian.  grml-small
includes a collection of GNU/Linux software for system administrators and
provides automatic hardware detection.  Whereas grml (without the -small)
provides more than about 2.1GiB of software on a 700MB-ISO, grml-small is a
very small rescue system for systemadministrators.  It is not necessary to
install anything to a harddisk, you don't even need a harddisk to run it.  Due
to on-the-fly decompression grml-small includes about 150 MB of software and
still fits on a business card CD-ROM or USB device with 50MB.

   http://grml.org/


Release small 0.1 - Codename Zugschlus (20050705)
=================================================

Initial release of grml-small, a very small version of the grml-system.
Notice that there are several hacks to reduce the ISO-size, so you won't
find for example documentation and manpages on the ISO.

grml-small provides support for booting via USB, see
http://wiki.grml.org/doku.php?id=usb for details.

Kernel is based on vanilla kernel 2.6.12 including several patches
(MPPC/MPPE, Reiser4, Squashfs,...) but compared with the normal grml
system the kernel features have been reduced.
See http://grml.org/kernel/ for more details.

To fit on a 50MB-ISO the software list has been reduced of course, see
section "Debian-Information" on http://grml.org/files/ for more details,
there you can find the dpkg-list too:
http://grml.org/files/release-0.1-small/dpkg_list


Please send feedback, feature requests and bug reports to the grml-team!

http://grml.org/contact/
contact (at) grml.org
#grml on irc.freenode.org 

regards,
-mika-
--
 ,'"`.         http://www.michael-prokop.at/
(  grml.org -» Linux for texttool-users and sysadmins
 `._,'         http://www.grml.org/
