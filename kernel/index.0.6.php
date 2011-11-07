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

        <h2>grml 0.6</h2>

        <p>Release 0.6 provides kernel 2.6.15:</p>

<pre class="rahmen">
grml@grml ~ % uname -a
Linux grml 2.6.15-grml #1 PREEMPT Sat Jan 14 14:45:07 CET 2006 i686 GNU/Linux</pre>

         <p>The <a href="config-2.6.15-grml">kernel configuration of 2.6.15-grml</a>
         is available online. If you want to patch a vanilla kernel without applying
         all the single patches take a look at the <a
         href="all-in-one-2.6.15-grml-8.gz">all-in-one kernel patch</a> (837kB).
         Also take a look at the list of <a href="patches.applied">applied
         patches</a>.</p>

        <h2>grml-small 0.2</h2>

        <p>grml-small is a very small flavor of the grml-system. It includes a kernel
        based on 2.6.15 with additional patches (<a
        href="all-in-one-2.6.15-grml-8.gz">all-in-one kernel patch</a> applied) but
        less features than the full grml system:</p>

<pre class="rahmen">
grml@grml ~ % uname -a
Linux grml 2.6.15-grml-small #1 SMP PREEMPT Mon Jan 16 22:29:19 CET 2006 i686 GNU/Linux</pre>

        <p>The <a href="config-2.6.15-grml-small">kernel configuration of
        2.6.15-grml-small</a> is available online.</p>

        <h2><a name="download"></a>Download</h2>

        <ul>
          <li><a href="http://dufo.tugraz.at/~prokop/grml-kernel/2.6.15-grml/">current kernel 2.6.15-grml</a></li>
        </ul>

        <h2><a name="patches"></a>Kernel Patches</h2>

        <h3><a name="fixes"></a>Kernel Patches: Fixes</h3>

        <ul>
          <li>ata-piix-suspend.patch: Fix crash-on-resume with ata_piix driver by implementing suspend support</li>
          <li>dm-bbr.patch: Bad block relocation support for LiveCD users</li>
          <li>grml-version: adjust kernel version to 2.6.15-grml</li>
          <li>grml_logo.diff: include grml-logo in framebuffer</li>
          <li>intel-ich8.patch: Support the upcoming Intel ICH8 chipset</li>
          <li>iteraid.patch: driver for <a href="http://www.ite.com.tw/software_download/software_download2.asp">IT82xx ATA133 RAID Controller</a></li>
          <li>linux-2.6.15-commandline.patch: set COMMAND_LINE_SIZE to 512 characters</li>
          <li>netfilter-pptp-crash-1.patch: Fix crash in ip_nat_pptp</li>
          <li>netfilter-pptp-crash2.patch: Fix crash in ip_nat_pptp</li>
          <li>netlink-oops.patch: netlink oops fix due to incorrect error code</li>
          <li>netlink-rcv-skb-dos.patch: Fix DoS in netlink_rcv_skb() (CVE-2006-0035)</li>
          <li>promise-pdc2037x.patch: Adds support for Promise 2037x SATA controllers which have PATA ports</li>
          <li>select-correct-bridge-id.patch: BRIDGE: Fix faulty check in br_stp_recalculate_bridge_id()</li>
          <li>skge-memory-on-ring-changes.patch: skge: handle out of memory on ring changes</li>
          <li>sky2-0.12.patch: driver support for the Marvell Yukon 2 Gigabit Ethernet</li>
          <li>ufs-inode-sem.patch: UFS: inode-&gt;i_sem is not released in error path</li>
          <li>vgacon-doublescan.patch: vgacon: fix doublescan mode</li>
        </ul>



        <h3><a name="reiser4"></a>Reiser4</h3>

        <p>Reiser4 is a computer file system, a new "from scratch" version of the
        ReiserFS file system, developed by Namesys. See <a
        href="http://en.wikipedia.org/wiki/Reiser4">Reiser4 at Wikipedia</a> for some
        more details.</p>

        <ul>
          <li><a href="http://www.namesys.com/">Namesys</a></li>
        </ul>

        <h3><a name="speakup"></a>Speakup</h3>

        <p>Speakup is a screen reader/speech access system for the GNU/Linux
        Operating System, used by people who are blind.</p>

        <ul>
          <li><a href="http://www.linux-speakup.org/">www.linux-speakup.org</a></li>
          <li><a href="http://dev.gentoo.org/~dsd/genpatches/trunk/2.6.15/4900_speakup-20060103.patch">4900_speakup-20060103.patch</a>
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
          <li><a href="http://dev.gentoo.org/~dsd/genpatches/trunk/2.6.15/4705_squashfs-2.2.patch">4705_squashfs-2.2.patch</a></li>
          <li><a href="http://squashfs.sourceforge.net/">squashfs.sf.net</a></li>
        </ul>

        <h2><a name="modules"></a>Modules</h2>

        <p>Additionally to the patched kernel you'll find some extra modules on
        your grml-system.</p>

        <h3>Package grml-kerneladdons</h3>

        <p>This package contains release specific kernel modules where no extra debian
        package exists yet. The following drivers are included:</p>

        <ul>
          <li>acerhk: give access to the special keys on notebooks of the Acer Travelmate by <a href="http://www.informatik.hu-berlin.de/~tauber/acerhk/">Olaf Tauber</a></li>
          <li>cowloop: copy-on-write loop driver by <a href="http://www.atconsultancy.nl/cowloop/">AT Consultancy</a></li>
          <li>dazuko: <a href="http://www.dazuko.org/">'Your Gateway to File Access Control'</a></li>
          <li>kqemu: <a href="http://fabrice.bellard.free.fr/qemu/qemu-accel.html">QEMU Accelerator
          <li>pcan: driver for low cost CAN-Hardware by Peak System by <a href="http://www.peak-system.com/linux/">Peak-System.com</a> [the grml-team uses this hardware in the <a href="http://www.robocup.tugraz.at/">Robocup-team @ TUG</a>]</li>
          <li>snd-bt-sco: driver to use headset via bluetooth by <a href="http://bluetooth-alsa.sourceforge.net/">bluetooth-alsa.sf.net</a></li>
          Module</a> (with permission by Fabrice Bellard, thanks!), notice that a kqemu enabled debian package is available <a href="http://grml.org/repos/">in the grml-repos</a></li>
          series
        </ul>

        <h3>acx100</h3>

        <p>Drivers for Texas Instruments' ACX100/ACX111 wireless network chips.  This
        includes DWL-[G]520+ PCI, DWL-[G]650+ CardBus, GL-2422MP mini-PCI, DWL-120+
        USB, etc.</p>

        <ul>
          <li><a href="http://acx100.sourceforge.net/">acx100.sf.net</a></li>
        </ul>

        <h3>at76c503a</h3>

        <p>Alternative driver for the Atmel AT76C503A based USB WLAN adapters.
        Currently, the driver has no promiscous, monitor or station mode and no
        support for libpcap, i.e. it does not work with Kismet or Airsnort and it
        cannot act as an WLAN access point. This is a restriction imposed by the
        current firmware.</p>

        <ul>
          <li><a href="http://at76c503a.berlios.de/">at76c503a.berlios.de</a></li>
        </ul>

        <h3>bcm5700</h3>

        <p>Linux driver for the Broadcom BCM5700 series Ethernet Network
        Controllers.</p>

        <ul>
          <li><a href="http://packages.debian.org/unstable/net/bcm5700-source">bcm5700@debian</a></li>
        </ul>

        <h3>drbd0.7</h3>

        <p>RAID 1 over TCP/IP for Linux. Drbd is a block device which is designed to
        build high availability clusters by providing a virtual shared device which
        keeps disks in nodes synchronised using TCP/IP. This simulates RAID 1 but
        avoiding the use of uncommon hardware (shared SCSI buses or Fibre Channel).
        It is currently limited to fail-over HA clusters.</p>

        <ul>
          <li><a href="http://www.drbd.org/">drbd.org</a></li>
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

        <h3>ieee80211</h3>

        <p>The 802.11 (wireless) network stack module for the Linux kernel. Though it
        has been incorporated in latest kernel versions, the bundled one might not be
        up-to-date to build third-party wireless modules such as ipw2100 or ipw2200
        which are common on Centrino notebooks.</p>

        <ul>
          <li><a href="http://ieee80211.sourceforge.net/">ieee80211.sf.net</a></li>
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

        <h3>ivtv0.4</h3>

        <p> The primary goal of the IvyTV Project is to create a kernel driver for
        the iTVC15 familiy of MPEG codecs. The iTVC15 family includes the iTVC15
        (CX24315) and iTVC16 (CX24316). These chips are commonly found on Hauppauge's
        WinTV PVR-250 and PVR-350 TV capture cards. (Take a look at <a
        href="http://wiki.grml.org/doku.php?id=tips">'Hauppauge PVR250'</a> in the
        grml-wiki.)</p>

        <h3>linux-wlan-ng</h3>

        <p>linux-wlan-ng is a set of drivers and utilities that is intended to
        provide the full range of IEEE 802.11 MAC management capabilities for use in
        user-mode utilities and scripts. The package currently supports the Intersil
        802.11b Prism2, Prism2.5, and Prism3 reference designs for PCMCIA, PCI, and
        USB. Additionally, the package includes support for the PLX9052 based PCI to
        PCMCIA adapter with a few different PCMCIA cards.</p>

<!--
        <h3>loop-aes</h3>

        <p>Using loop-aes with &gt;=2.6.13 fails with 'register_blkdev: cannot get
        major 7 for loop'. grml requires a stable loopback device interface. loop-aes
        does not work with dynamic major devices. :-/</p>
-->

        <h3>lufs</h3>

        <p>Linux Userland Filesystem - kernel module source LUFS is a hybrid
        userspace filesystem framework supporting an indefinite number of filesystems
        (localfs, sshfs, ftpfs, httpfs, socketfs, freenetfs, and nutellafs)
        transparently for any application. It consists of a kernel module which
        interacts with the VFS while the main part of the implementation is done in
        the userspace.</p>

        <h3><a name="madwifi"></a>madwifi</h3>

        <p>Driver for Atheros-based Wireless LAN devices - the Multiband Atheros
        Driver for WiFi (madwifi).</p>

        <ul>
          <li><a href="http://madwifi.sourceforge.net/">madwifi.sf.net</a></li>
        </ul>

        <h3>madwifi-ng</h3>

        <p>madwifi-ng is the next generation / new codebase of <a
        href="#madwifi">madwifi</a>. Notice: the madwifi-ng drivers are
        <strong>not</strong> preinstalled.  The debian package is available in
        /usr/src/ on the grml-iso. Install the package via running 'apt-get remove
        madwifi-modules-2.6.15-grml ; dpkg -i /usr/src/madwifing-*.deb'.</p>

        <ul>
          <li><a href="http://madwifi.org/wiki/UserDocs/GettingMadwifi">madwifi.org</a></li>
        </ul>

        <h3>ndiswrapper</h3>

        <p>Some vendors do not release specifications of the hardware or provide a
        linux driver for their wireless network cards. ndiswrapper provides a linux
        kernel module that loads and runs Ndis (Windows network driver API) drivers
        supplied by the vendors.</p>

        <ul>
          <li><a href="http://ndiswrapper.sourceforge.net/">ndiswrapper.sf.net</a></li>
        </ul>

        <h3>openafs</h3>

        <p>The AFS distributed filesystem. AFS is a distributed filesystem allowing
        cross-platform sharing of files among multiple computers.  Facilities are
        provided for access control, authentication, backup and administrative
        management.</p>

        <h3>pwc</h3>

        <p>Drivers for the Philips Webcams.</p>

        <ul>
          <li><a href="http://www.saillard.org/linux/pwc/">Philips USB Webcam Driver for Linux</a></li>
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

        <h3>rt2x00</h3>

        <p>Linux driver for wireless 802.11b and 802.11g cards that are based on the
        Ralink rt2400 and rt2500 chipsets.</p>

        <ul>
          <li><a
          href="http://rt2x00.serialmonkey.com/wiki/index.php/Main_Page">rt2x00.serialmonkey.com</a></li>
        </ul>

<!--
        <h3>shfs</h3>

        <p>Shfs is a simple and easy to use Linux kernel module which allows you
        to mount remote filesystems using a plain shell (ssh) connection. When
        using shfs, you can access all remote files just like the local ones,
        only the access is governed through the transport security of ssh.</p>

        <ul>
          <li><a href="http://shfs.sourceforge.net/">shfs.sf.net</a></li>
        </ul>
-->

        <h3>sl-modem</h3>

        <p>Low-level drivers for the software modems produced by Smart Link Ltd. It
        supports PCI and USB models.</p>

        <ul>
          <li><a href="http://www.smlink.com/main/item.php?ln=en&amp;item_id=84&amp;main_id=32">Smart
          Link. Introducing the First Soft ADSL over Ethernet</a></li>
        </ul>

        <h3>spca5xx</h3>

        <p>Kernel modules for the spca5xx video for linux (v4l) driver (SPCA5XX USB
        Camera).</p>

        <ul>
          <li><a href="http://mxhaard.free.fr/index.html">SPCA5xx webcams Linux driver</a></li>
        </ul>

        <h3>sysprof</h3>

        <p> Sysprof is a sampling CPU profiler that uses a Linux kernel module to
        profile the entire system, not just a single application. Sysprof handles
        shared libraries and applications do not need to be recompiled. In fact they
        don't even have to be restarted.</p>

        <ul>
          <li><a href="http://www.daimi.au.dk/~sandmann/sysprof/">sysprof</a></li>
        </ul>

        <h3>thinkpad</h3>

        <p>Loadable driver modules used by the tpctl utility for configuring IBM
        ThinkPad laptop computers. Included are drivers of the Super I/O and RT/CMOS
        RAM chips, for an interface to the IBM ThinkPad SMAPI BIOS, and for an
        interface to the ThinkPad APM subsystem.</p>

        <ul>
          <li><a href="http://www.linux-thinkpad.org/">Linux-ThinkPad.org</a></li>
        </ul>

        <h3>tidev</h3>

        <p>This driver will be useful to you if you own a Texas Instruments
        calculator and want to use one of the following link cables:</p>

        <ul>
          <li>official "black cable" from Texas Instruments (BlackLink)</li>
          <li>home-made serial link</li>
          <li>home-made parallel cable</li>
          <li>official GraphLink USB from Texas Instruments (SilverLink)</li>
        </ul>

        <p>Notice: You'll also need a linking software such as TiLP to communicate
        with your calculator (not part of the live-cd, run 'apt-get install
        tilp').</p>

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

        <h3>vaiostat</h3>

        <p>Sony Vaio status and control kernel module. This module creates
        some entries in /proc/vaio concerning battery and power usage information,
        and LCD brightness levels on Sony Vaio laptops. Although on newer laptops
        some of this information is handled by ACPI as well, this module is required
        for some older ones, and still works on the newer ones.  Recent kernel
        sources include a SONYPI module that provides similar functionality to this
        one, but it cannot change LCD brightness on some laptops where this module
        works.</p>

        <ul>
          <li><a href="http://queda.net/linux/">queda.net/linux/</a></li>
        </ul>

        <h3>zd1211</h3>

        <p>Driver for the USB wireless dongles that are based on the ZyDAS ZD1211
        802.11b/g USB WLAN chipset.</p>

        <p>Any further wishes, feedback, bug reports? Please <a
        href="/contact/">contact us</a>!</p>

      </div>


<?php include '../static_bottom.inc'; ?>
