<!DOCTYPE html>
<html>
<head>
<title>grml.org - Kernel</title>
<meta name="Title" content="grml.org - Kernel" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="Kernel of grml.org" />
<meta name="Abstract" content="grml, just another linux-distribution" />
<meta name="fdse-index-as" content="http://www.grml.org/kernel/" />
<meta name="Robots" content="index,follow" />
<meta name="Language" content="english" />
<meta name="identifier-url" content="http://www.grml.org/" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="home" href="/" title="grml.org" />
<link rel="help" href="/features/" title="About" />
<link rel="author" href="/team/" title="Team" />
<link rel="icon" href="/favicon.png" type="image/png" />
<link rel="stylesheet" href="/style.css" type="text/css" />
</head>

<body>
<?php include '../static.inc'; ?>

      <div class="content">

        <p><img style="float: right" src="/img/kernel.png" alt="*" /></p>

        <h1>Kernel</h1>

        <p>The kernel 2.6 provided by the grml system is based on the latest
        stable(!) vanilla kernel (taken from <a
        href="http://kernel.org/">kernel.org</a>) we consider as 'useful and
        working'. The grml-kernel includes <a href="#patches">several patches</a> and
        <a href="#modules">modules</a>.  If you experience any problems please don't
        hesitate to <a href="/contact/">contact us</a>!</p>

        <h2>grml 0.4</h2>

        <p>Release 0.4 provides kernel 2.6.11.8:</p>

<pre class="rahmen">
grml@grml ~ % uname -a
Linux grml 2.6.11-grml #1 SMP Sun May 1 15:09:55 CEST 2005 i686 GNU/Linux</pre>

         <p>The <a href="config-2.6.11">kernel configuration of 2.6.11-grml</a> is
         available online. If you want to patch a vanilla kernel without applying all
         the single patches take a look at the <a
         href="all-in-one-2.6.11-grml-8.gz">all-in-one kernel patch</a> (gzip, 1009kB).
         Also take a look at the list of <a
         href="all-in-one-2.6.11-grml-8.info">applied patches</a>.</p>

        <h2>grml-small 0.1</h2>

        <p>grml-small is a very small flavor of the grml-system. It includes a
        kernel based on 2.6.12 with additional patches but less features than the
        full grml system:</p>

<pre class="rahmen">
grml@grml ~ % uname -a
Linux grml 2.6.12-grml #1 SMP Mon Jun 20 12:58:06 CEST 2005 i686 GNU/Linux</pre>

        <p>The <a href="config-2.6.12-grml.small">kernel configuration of 2.6.12-grml</a> is
        available online.</p>

        <h2><a name="download"></a>Download</h2>

        <ul>
          <li><a href="http://dufo.tugraz.at/~prokop/grml-kernel/">download grml-kernel</a></li>
        </ul>

        <h2><a name="patches"></a>Kernel Patches</h2>

        <h3><a name="fixes"></a>Kernel Patches: Fixes</h3>

        <ul>
          <li><a href="http://dev.gentoo.org/~dsd/gentoo-dev-sources/release-11.02/dist/1900_lowmem-reserve-oops.patch">1900_lowmem-reserve-oops.patch</a>: Fix a divide-by-zero oops</li>
          <li>2505_alsa-headphone-unplug.patch: prevent oops and dead keyboard on usb unplugging while the device is being used</li>
          <li><a href="http://dev.gentoo.org/~dsd/gentoo-dev-sources/release-11.04/dist/2900_alps-tapping.patch">2900_alps-tapping.patch</a>: Fix ALPS touchpad tapping. Already in 2.6.12 tree</li>
          <li><a href="http://users.tpg.com.au/sigm/patches/skge-netdev-2.6.11-mm4.patch">4100_skge-0.6.patch</a>: New SysKonnect GigaEthernet support</li>
          <li><a href="http://dev.gentoo.org/~dsd/gentoo-dev-sources/release-11.01/dist/4300_2.6.11-rc3-udm2.patch">4300_2.6.11-rc3-udm2.patch</a>: DM updates. Required for dm-bbr</li>
          <li><a href="http://dev.gentoo.org/~dsd/gentoo-dev-sources/release-11.01/dist/4305_dm-bbr.patch">4305_dm-bbr.patch</a>: Bad block relocation support for LiveCD users
          <li><a href="http://mrhammy2.ath.cx:81/aml_method_exec_hack.patch">aml_method_exec_hack.patch</a>: Fix broken ASUS M6N ACPI battery display</li>
          <li><a href="http://www.acm.rpi.edu/~dilinger/kernel-source-2.6.11/kernel-patch-debian-2.6.11_2.6.11-1_all.deb">drivers-add-scsi_changer.patch:</a> a device driver for scsi media changer devices (e.g. tape libraries)</li>
          <li><a href="http://www.acm.rpi.edu/~dilinger/kernel-source-2.6.11/kernel-patch-debian-2.6.11_2.6.11-1_all.deb">drivers-ide-dma-blacklist-toshiba.patch:</a> Blacklist "TOSHIBA CD-ROM XM-1702BC"</li>
          <li><a href="http://www.acm.rpi.edu/~dilinger/kernel-source-2.6.11/kernel-patch-debian-2.6.11_2.6.11-1_all.deb">drivers-media-video-v4l-mpeg-support.patch:</a> add an ioctl to set MPEG hardware encoder parameters on v4ldevices</li>
          <li><a href="http://www.acm.rpi.edu/~dilinger/kernel-source-2.6.11/kernel-patch-debian-2.6.11_2.6.11-1_all.deb">fs-asfs-2.patch:</a> support for the Amiga SmartFilesystem (asfs), 1.0beta9</li>
          <li><a href="http://www.acm.rpi.edu/~dilinger/kernel-source-2.6.11/kernel-patch-debian-2.6.11_2.6.11-1_all.deb">tty-locking-fixes9.patch:</a> small fix for serial_core.c</li>
        </ul>

        <h3>Greg Kroah-Hartman</h3>

        <p>Fixes/Updates for 2.6.11: 2.6.11.8</p>

        <ul>
          <li><a href="http://kernel.org/pub/linux/kernel/v2.6/patch-2.6.11.8.bz2">patch-2.6.11.8.bz2</a></li>
        </ul>

        <h3><a name="orinoco"></a>Enhanced rfmon patch for Orinoco and the 2.6 kernel drivers</h3>

        <p>RFMon patch for the 2.6.11 Linux kernel drivers. This patch adds monitor
        mode and includes the fixes channel changing latency, sound stuttering,
        firmware freakouts, and "-5 on BAP" errors.</p>

        <ul>
          <li><a href="orinoco-2.6.11-rfmon-dragorn-1.diff">orinoco-2.6.11-rfmon-dragorn-1.diff</a></li>
          <li><a href="http://www.kismetwireless.net/code/orinoco-2.6.9-rfmon-dragorn-1.diff">orinoco-2.6.9-rfmon-dragorn-1.diff</a></li>
          <li><a href="http://www.kismetwireless.net/download.shtml">Download@kismetwireless.net</a></li>
          <li><a href="http://www.kismetwireless.net/HOWTO-26_Orinoco_Rfmon.txt">2.6.x orinoco HOWTO</a></li>
        </ul>

        <h3><a name="mppc"></a>Microsoft PPP compression/encryption (MPPC/MPPE)</h3>

        <p>Support for the Microsoft Point-To-Point Compression (RFC2118) and
        Microsoft Point-To-Point Encryption (RFC3078). These protocols are
        supported by Microsoft Windows and wide range of "hardware" access
        servers. MPPE is common protocol in Virtual Private Networks. According
        to RFC3078, MPPE supports 40, 56 and 128-bit key lengths.</p>

        <ul>
          <li><a href="http://free.polbox.pl/h/hs001/linux-2.6.11-mppe-mppc-1.3.patch.gz">linux-2.6.11-mppe-mppc-1.3.patch.gz</a></li>
          <li><a href="http://free.polbox.pl/h/hs001/">MPPE/MPPC kernel module for Linux</a></li>
        </ul>

        <h3><a name="reiser4"></a>Reiser4</h3>

        <p>Reiser4 is a computer file system, a new "from scratch" version of the
        ReiserFS file system, developed by Namesys. See <a
        href="http://en.wikipedia.org/wiki/Reiser4">Reiser4 at wikipedia</a> for some
        more details.</p>

        <ul>
          <li><a href="ftp://ftp.namesys.com/pub/reiser4-for-2.6/2.6.11-rc4-mm1/">reiser4 for 2.6.11-rc4-mm1</a></li>
          <li><a href="http://www.namesys.com/">Namesys</a></li>
        </ul>

        <h3><a name="speakup"></a>Speakup</h3>

        <p>Speakup is a screen reader/speech access system for the GNU/Linux
        Operating System, used by people who are blind.</p>

        <ul>
          <li><a href="http://www.linux-speakup.org/">www.linux-speakup.org</a></li>
          <li><a href="http://dev.gentoo.org/~dsd/gentoo-dev-sources/release-11.01/dist/4900_speakup-20050303.patch">4900_speakup-20050303.patch</a></li>
        </ul>

        <h3><a name="squashfs"></a>Squashfs</h3>

        <p>Squashfs is a compressed read-only filesystem for Linux.  Squashfs is
        intended for general read-only filesystem use, for archival use (i.e. in
        cases where a .tar.gz file may be used), and in constrained block
        device/memory systems (e.g. embedded systems) where low overhead is
        needed.<br />

        Via using the module loop it is possible to mount a filesystem file. squashfs
        is a "loop" with (de)compression (Compressed Loopback Device) and it is
        possible to mount a compressed filesystem like a block device and seamlessly
        decompress its data while accessing it.<br />

        Whereas Knoppix uses the cloop mechanism, grml is based on the newer
        mechanism squashfs. The filesystem has been compressed into the file
        "/GRML/GRML" and is mounted by the initial init process using squashfs.</p>

        <ul>
          <li><a href="http://umn.dl.sourceforge.net/sourceforge/squashfs/squashfs2.1-r2.tar.gz">squashfs2.1-r2.tar.gz</a></li>
          <li><a href="http://squashfs.sourceforge.net/">squashfs.sf.net</a></li>
        </ul>

        <h3><a name="vesafbtng"></a>vesafb-tng</h3>

        <p>vesafb-tng is a new and more functional version of the vesafb Linux
        driver. For more details take a look at the project webpage:</p>

        <ul>
          <li><a href="http://dev.gentoo.org/~spock/projects/vesafb-tng/">vesafb-tng-homepage</a></li>
        </ul>

        <h2><a name="modules"></a>Modules</h2>

        <p>Additionally to the patched kernel you'll find the following modules on
        your grml-system:</p>

        <h3>acx100</h3>

        <p>Drivers for Texas Instruments' ACX100/ACX111 wireless network chips.</p>

        <ul>
          <li><a href="http://acx100.sourceforge.net/">acx100.sf.net</a></li>
        </ul>

        <h3>at76c503a</h3>

        <p>Alternative driver for the Atmel AT76C503A based USB WLAN adapters.</p>

        <ul>
          <li><a href="http://at76c503a.berlios.de/">at76c503a.berlios.de</a></li>
        </ul>

        <h3>bcm4400</h3>

        <p>Linux driver for the Broadcom BCM4400 series Ethernet Network Controllers.</p>

        <ul>
          <li><a href="http://packages.debian.org/unstable/net/bcm4400-source">bcm4400@debian</a></li>
        </ul>

        <h3>bcm5700</h3>

        <p>Linux driver for the Broadcom BCM5700 series Ethernet Network
        Controllers.</p>

        <ul>
          <li><a href="http://packages.debian.org/unstable/net/bcm5700-source">bcm5700@debian</a></li>
        </ul>

        <h3>eagle-usb</h3>

        <p>Aims to provide GPL driver for xDSL modems equipped with the Eagle chipset
        (from Analog Devices) as for example Sagem F@st 800/840/908.</p>

        <ul>
          <li><a href="https://gna.org/projects/eagleusb">gna.org/projects/eagleusb</a></li>
        </ul>

        <h3>hostap</h3>

        <p>Host AP is a Linux driver for wireless LAN cards based on Intersil's
        Prism2/2.5/3 chipset. The driver supports a so called Host AP mode, i.e., it
        takes care of IEEE 802.11 management functions in the host computer and acts
        as an access point. This does not require any special firmware for the
        wireless LAN card. In addition to this, it has support for normal station
        operations in BSS and possible also in IBSS. WPA and RSN (WPA2) is supported
        when used with accompanied tools, wpa_supplicant (WPA/RSN Supplicant) and
        hostapd (WPA/RSN Authenticator).</p>

        <ul>
          <li><a href="http://hostap.epitest.fi/">hostap.epitest.fi</a></li>
        </ul>

        <h3>ipw2100</h3>

        <p>Enable support for the Intel PRO/Wireless 2100 Network Connection mini PCI
        adapter.</p>

        <ul>
          <li><a href="http://ipw2100.sourceforge.net/">ipw2100.sf.net</a></li>
        </ul>

        <h3>ipw2200</h3>

        <p>The ipw2200 project was created by Intel to enable support for the Intel
        PRO/Wireless 2200BG and 2915ABG Network Connection miniPCI adapters.</p>

        <ul>
          <li><a href="http://ipw2200.sourceforge.net/">ipw2200.sf.net</a></li>
        </ul>

        <h3>loop-aes</h3>

        <p>Fast and transparent file system and swap encryption package for linux.</p>

        <ul>
          <li><a href="http://sourceforge.net/projects/loop-aes/">sourceforge.net/projects/loop-aes\</a></li>
        </ul>

        <h3>loop-aes-ciphers</h3>
        
        <p>iloop-AES can be used to encrypt disk partitions, removable media, and
        swap among other devices. It provides measures to strengthen the encryption
        such as passphrase seeds, increased hash iteration counts, stronger MD5 IV
        and use of multiple encryption keys. It provides Blowfish, Twofish and
        Serpent ciphers.</p>

        <ul>
          <li><a href="http://packages.debian.org/unstable/admin/loop-aes-ciphers-source">packages.debian.org/unstable/admin/loop-aes-ciphers-source</a></li>
        </ul>

        <h3>madwifi</h3>

        <p>Driver for Atheros-based Wireless LAN devices - the Multiband Atheros
        Driver for WiFi (madwifi).</p>

        <ul>
          <li><a href="http://madwifi.sourceforge.net/">madwifi.sf.net</a></li>
        </ul>

        <h3>ndiswrapper</h3>

        <p>Some vendors do not release specifications of the hardware or provide a
        linux driver for their wireless network cards. ndiswrapper provides a linux
        kernel module that loads and runs Ndis (Windows network driver API) drivers
        supplied by the vendors.</p>

        <ul>
          <li><a href="http://ndiswrapper.sourceforge.net/">ndiswrapper.sf.net</a></li>
        </ul>

        <h3>qc-usb-modules</h3>

        <p>The qc-usb-modules package contains a kernel module to drive Logitech's
        USB-based QuickCam Express webcam and other cameras with similar
        chipsets.</p>

        <ul>
          <li><a href="http://www.ee.oulu.fi/~tuukkat/quickcam/quickcam.html">www.ee.oulu.fi/~tuukkat/quickcam/quickcam.html</a></li>
        </ul>

        <h3>realtime-lsm</h3>

        <p>Scripts for handling the realtime Linux security module.  It sets up the
        system to grant realtime permissions to applications in the realtime
        group.</p>

        <ul>
          <li><a href="http://www.google.com/search?q=realtime-lsm">realtime-lsm@google</a></li>
        </ul>

        <h3>shfs</h3>

        <p>Shfs is a simple and easy to use Linux kernel module which allows you
        to mount remote filesystems using a plain shell (ssh) connection. When
        using shfs, you can access all remote files just like the local ones,
        only the access is governed through the transport security of ssh.</p>

        <ul>
          <li><a href="http://shfs.sourceforge.net/">shfs.sf.net</a></li>
        </ul>

        <h3>sl-modem</h3>

        <p>Low-level drivers for the software modems produced by Smart Link Ltd. It
        supports PCI and USB models.</p>

        <ul>
          <li><a href="http://www.smlink.com/main/item.php?ln=en&amp;item_id=84&amp;main_id=32">Smart
          Link. Introducing the First Soft ADSL over Ethernet</a></li>
        </ul>

        <h3>unionfs</h3>

        <p>Unionfs is a stackable unification file system, which can appear to merge the
        contents of several directories (branches), while keeping their physical
        content separate. Unionfs is useful for unified source tree management,
        merged contents of split CD-ROM, merged separate software package
        directories, data grids, and more. Unionfs allows any mix of read-only and
        read-write branches, as well as insertion and deletion of branches anywhere
        in the fan-out. To maintain unix semantics, Unionfs handles elimination of
        duplicates, partial-error conditions, and more.</p>

        <ul>
          <li><a href="http://www.fsl.cs.sunysb.edu/project-unionfs.html">www.fsl.cs.sunysb.edu/project-unionfs.html</a></li>
        </ul>

        <p>Any further wishes, feedback, bug reports? Please <a
        href="/contact/">contact us</a>!</p>

      </div>


<?php include '../static_bottom.inc'; ?>
