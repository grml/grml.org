+++
title = 'Release Notes: Grml 2021.07-rc1 - codename JauKerl'
+++

<p><strong>NOTE: the <a href="/changelogs/README-grml-2021.07/">stable release 2021.07</a> is already available!</strong></p>

<p><a href="/download/prerelease/">Download Now</a></p>

<h3>About</h3>

<p>Grml is a Debian based live system focusing on the needs of system administrators.
This Grml release provides fresh software packages from Debian bullseye.
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.</p>

<h3>Important Changes</h3>

<ul>

<li>The <a href="https://blog.grml.org/archives/405-Grml-IRC-channel-moving-to-OFTC.html">Grml IRC channel moved to OFTC</a>

<li>The network configuration tool <em>netcardconfig</em> no longer prompts for uncommon wireless/WiFi options, to simplify and speed up its usage

</ul>

<h3>New features</h3>

<p>Highlighting the most relevant changes only:</p>

<h4>Misc:</h4>

<ul>
<li><strong>grml-terminalserver</strong>: support for UEFI PXE boot (now supporting BIOS boot via pxelinux and EFI boot via GRUB)
<li><strong>netcardconfig</strong>: support for enabling blocked devices via rfkill
<li><strong>forensic mode</strong>: improved handling for block device changes and parent device handling
<li><strong>grml-chroot</strong>: support efivarfs in EFI environments
</ul>

<h4><a href="/grml-live/">grml-live</a> (build system for creating Grml (based) Linux live systems):</h4>

<ul>
<li>Support EFI capable ipxe.efi boot addon
<li>GRUB: don't display BIOS only addons when running in EFI mode
<li>Provide setup files for EFI boot in netboot package
<li>initramfs-tools: use upstream's xz handling to support multithreading
<li>GRMLBASE/16-depmod: no longer rely on /boot/System.map-* file
<li>Use 1m as new default squashfs block size
<li>GRUB templates: do not set root/chainloader but just exit for boot from next device
<li>GRUB templates: provide menu entry for UEFI Firmware Settings
<li>GRMLBASE/01-packages: also detect and report unknown package names
<li>Several software packaging related changes in GRMLBASE, GRML_SMALL + GRML_FULL
</ul>

<h4><a href="/grml2usb/">grml2usb</a> (tool to install Grml ISO to usb device):</h4>

<ul>
<li>Use <em>GRML</em> as FAT label when creating the file system
<li>Fix race condition with blockdev/BLKRRPART due to lack of fsync
</ul>

<h4>grml-hwinfo (tool to collect hardware information):</h4>

<ul>
<li>store <em>ip netconf</em> output in file <em>ip_netconf</em>
<li><em>sysdump</em>: rework ignore list code and ignore further files
<li>provide information to user if <em>sysdump</em> might be hanging
</ul>

<h4><a href="/zsh/">grml-zshrc</a> (Zsh configuration):</h4>

<ul>
<li>zshrc: no longer set histignorealldups
<li>zshrc: add lrzip support for simple-extract()
<li>zshrc: set title in alacritty
<li>zshrc: enable transient_rprompt to fix sad-smiley situation in rprompt
</ul>

<h4><a href="/grml-debootstrap/">grml-debootstrap</a> (wrapper around debootstrap for installing pure Debian):</h4>

<ul>
<li>Use bullseye as default Debian release
<li>No longer automatically install os-prober
<li>Support XFS and F2FS in VMs
<li>EFI support: check + mount efivarfs to support Debian kernels &gt;=5.10
<li>Improve EFI detection
<li>Bail out if architecture isn't set nor can be identified automatically
<li>Use shorter fs label for EFI partition to not break with recent dosfstools
<li>Do not enable escape characters on dumb terminals
</ul>

<h3>Bits &amp; bolts</h3>

<ul>
<li>Linux kernel <b>5.10</b>.</li>
<li>Fixed several bugs from the <a href="https://github.com/grml/grml/issues/">issue tracking system</a>.</li>
</ul>

<h3>Packages</h3>

<p>Details about shipped packages and their versions in Grml are
available in the <a href="/files/#debian">Debian section</a>. Visit
<a href="/files/grml64-full_2021.07/dpkg.list">dpkg_list</a> for a
detailed list of packages shipped with Grml 2021.07(-rc1).</p>

<h3>Updates</h3>

<p>Packages are taken from Debian bullseye/testing as of 12th of July 2021.
The following 19 packages have been added (excluding lib*, *-common, perl-*, python3-* and kernel image):</p>

<ul>
<li>bsdextrautils (extra utilities from 4.4BSD-Lite, via util-linux)
<li>cpp-10 (replacement for cpp-9, dependency of x11-xserver-utils)
<li>firmware-ath9k-htc (firmware for AR7010 and AR9271 USB wireless adapters)
<li>grub-efi-amd64-signed (signed GRUB package, for EFI PXE boot support in grml-terminalserver)
<li>inxi (full featured system information script)
<li>jq (lightweight and flexible command-line JSON processor)
<li>media-types (List of standard media types and their usual file extension)
<li>mmdebstrap (create a Debian chroot)
<li>mokutil (tools for manipulating machine owner keys)
<li>ncal (display a calendar, dependency of bsdmainutils)
<li>python3.9 / python3.9-minimal (replacement for python3.8, new python version)
<li>ruby-rubygems (Package management framework for Ruby)
<li>shim-helpers-amd64-signed / shim-signed / shim-signed-common / shim-unsigned (Secure Boot chain-loading bootloader, for EFI PXE boot support in grml-terminalserver)
<li>speedtest-cli (command line interface for testing internet bandwidth using speedtest.net)
<li>wireless-regdb (wireless regulatory database for Linux)
</ul>

<p>The following 12 Debian packages have been removed/replaced (excluding lib*, *-data, *-common, perl-*, python-* and kernel image):</p>

<ul>
<li>comgt (Option GlobeTrotter and Vodafone datacard control tool, no longer considered relevant, please raise your voice if it should be part of the stable release!)
<li>cpp-9 (replaced by cpp-10)
<li>mime-support (replaced by media-types)
<li>moblin-icon-theme (unmaintained upstream)
<li>python2 / python2-minimal / python2.7 / python2.7-minimal / python3.8 / python3.8-minimal (python2 is deprecated and python3.8 got replaced by python3.9)
<li>usb.ids (USB ID Repository, no longer required by usbutils)
<li>wvdial (Point-to-Point Protocol dialer, no longer considered relevant nowadays, please raise your voice if it should be part of the stable release!)
</ul>

<h3>Known issues</h3>

<p>Please visit the <a href="/bugs/known/">known bugs</a> web page.</p>

<h3>Download Grml 2021.07-rc1</h3>

<p>Grml 2021.07-rc1 can be downloaded from
<a href="/download/prerelease/">grml.org/download/prerelease/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help fixing bugs and improving future releases.
If you find a problem with the (pre-)release, please check <a href="/bugs/known/">the known bugs list</a> and report problems using information on <a href="/bugs/">grml.org/bugs/</a>.
We also welcome feature requests and any kind of constructive feedback.
If you want to reach out to the Grml team, please visit our <a href="/contact/">contact webpage</a>.</p>

<a name="thanks"></a>
<h3>Thanks</h3>

<p>Many thanks in this release go to (alphabetically)
a-wing,
Chris Hofstaedtler,
dann frazier,
Evgeni Golov,
Guillem Jover,
Helmut Grohne,
lunik1,
Manuel Montecelo,
Manuel Rom,
Mihai Moldovan,
Paul Menzel,
Ralf Moll,
Simon Bruder and
Volodymyr Fedorov
for their contributions.</p>

<h3>More Information</h3>

<p>You can find out more about Grml on <a href="/">our website</a>, <a href="/contact/#irc">IRC channel</a>, and <a href="https://github.com/grml/grml/wiki">wiki</a>.
<p>To sign up for future Grml announcements, please subscribe to <a href="http://ml.grml.org/postorius/lists/grml-announce.ml.grml.org">Grml's announcement list</a> or follow our <a href="https://blog.grml.org/">blog</a>.</p>
