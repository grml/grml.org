+++
title = 'Release Notes: Grml 2020.06 - codename Ausgehfuahangl'
+++

<p><a href="/download/">Download Now</a></p>

<h3>About</h3>

<p>Grml is a Debian based live system focusing on the needs of system administrators.
This Grml release provides fresh software packages from Debian testing (AKA bullseye).
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.</p>

<h3>Important Changes</h3>

<ul>

<li>The default mount point for the live system was changed from <em>/lib/live/mount/medium</em> to <em>/run/live/medium</em>.
This works around a regression which appears on-again-off-again, and follows upstream changes for Debian/bullseye.
If you don't have any custom tools which rely on <em>/lib/live/mount/medium</em> (or its ancestor <em>/live/image</em>),
then this change is irrelevant for you.

<li>Tools like grml2usb, grml-paste and grml-x have been ported from Python2 to Python3 (AKA py3k), we no longer support Python2 in our tools.

<li>The live system no longer uses a custom Grml kernel, instead we switched to the linux-image packages provided by Debian.

</ul>

<h3>New features</h3>

<p>Highlighting the most relevant changes only:</p>

<h4>Misc:</h4>

<ul>

<li><strong>cloud-init support</strong> (grml-full only): <a href="https://cloud-init.io/">cloud-init</a> is a standard multi-distribution method for cross-platform cloud instance initialization.
Cloud-init identifies the cloud it is running on and reads any provided metadata from the cloud and initializes the system accordingly.
This is useful for e.g. setting network configuration, SSH access key and hostname.
To enable it on Grml, boot with boot option <em>`services=cloud-init`</em>.
If you configured a SSH public, logging in as user `grml` works.
For static network configuration you need to boot with boot options <em>`nonetworking services=cloud-init,networking`</em>.

<li><strong>qemu-guest-agent support</strong>: when running in appropriate environments (like <a href="https://www.proxmox.com/en/proxmox-ve">Proxmox VE</a>) this daemon exchanges information between the host and guest system (VM) (also see <a href="https://pve.proxmox.com/wiki/Qemu-guest-agent">Proxmox wiki</a> for further information).
When booting Grml as a VM in such an environment, the network information is visible in the VM summary then, like:</li>

  <img style="margin-left: 20px; margin-bottom: 20px; margin-top: 20px; border: 0" src="../../img/qemu-guest-agent.png" />

<li><strong>network information in grml-quickconfig</strong>: hostname, cloud-init, IP addresses and zeroconf/avahi information:</li>

  <img style="margin-left: 20px; margin-bottom: 20px; margin-top: 20px; border: 0" src="../../img/grml-quickconfig.png" />

</ul>

<h4><a href="/grml-live/">grml-live</a> (build system for creating Grml (based) Linux live systems):</h4>

<ul>
<li>Support for cloud-init (via GRML_FULL)
<li>sudoers: set Defaults secure_path to have sane default settings
<li>initramfs xz-compress: use default xz compression level
<li>GRMLBASE/98-clean-chroot: fix resolvconf symlink handling + get rid of resolvconf workarounds
<li>Rebuild /var/lib/dpkg/available to install not-yet-installed packages in update runs
<li>Sources list setup for security: switch from testing/updates to testing-security
<li>Switch default mount point from /lib/live/mount/medium to /run/live/medium
<li>Provide boot menu for Predictable Network Interface Names
</ul>

<h4><a href="/grml2usb/">grml2usb</a> (tool to install Grml ISO to usb device):</h4>

<ul>
<li>Support more syslinux module locations and support setting custom ones via option <em>--syslinux-libs=...</em>
<li>No longer explicitly list addon files, instead copy all files from <em>/boot/addons/</em>
<li>Provide git-describe based version information when running from within git
<li>Fix path to syslinux *.c32 files
<li>Add smoke autopkgtests to Debian packaging
<li>Abort if required logo.16 file is missing
<li>Avoid custom boot options getting duplicated when used with multiple ISOs
<li>grml2iso supports EFI boot
</ul>

<h4>grml-hwinfo (tool to collect hardware information):</h4>

<ul>
<li>Store output of `lscpu -e` in file `lscpu_extended`
<li>Store cpuid output in file `cpuid`, add cpuid to Recommends
<li>Record uptime (/proc/uptime in `proc_uptime` and uptime(1) in file `uptime`)
<li>Report SecureBoot state via mokutil
<li>Store "$HOME"/.local/share/xorg/Xorg.0.log (if available) as user_Xorg.0.log
<li>Log output of verbose lsusb run in file lsusb_verbose
<li>Provide output of verbose lspci run in file lspci_verbose
<li>Recommend acpica-tools package and provide acpidump output (as root)
</ul>

<h4><a href="/zsh/">grml-zshrc</a> (Zsh configuration):</h4>

<ul>
<li>Add zstd support to simple-extract()
<li>Reset $REPLY parameter before calling prompt token functions
<li>Disable bracketed paste mode for dumb terminals
<li>Fix urxvt multi-line issue
<li>commit-to-history: keep escaped character
<li>Support PAGER='less -Mr' usage and fall back to vi if LESSOPEN is unset
</ul>

<h4><a href="/grml-debootstrap/">grml-debootstrap</a> (wrapper around debootstrap for installing pure Debian):</h4>

<ul>
<li>Add support for .ssh/authorized_keys via cmdline option --sshcopyauth
<li>Support BOOT_APPEND usage outside of VMs
<li>Support <a href="https://gitlab.mister-muffin.de/josch/mmdebstrap">mmdebstrap</a> via DEBOOTSTRAP=mmdebstrap
<li>Use new security.debian.org repository layout for bullseye and newer
<li>Fix detection of predictable network interface names
<li>Add option <em>--sshcopyid</em> to authorise root login
<li>Provide workaround for Debian bug <a href="https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=918590">#918590</a> with LVM + udev in VM installations
<li>/etc/fstab: provide header comment, pointing to man pages and systemctl daemon-reload
<li>Add DHCP setting for Predictable Network Interface Names
</ul>

<h3>Bits &amp; bolts</h3>

<ul>
<li>Linux kernel <b>5.6</b>.</li>
<li>Fixed several bugs from the <a href="https://github.com/grml/grml/issues/">issue tracking system</a>.</li>
</ul>

<h3>Packages</h3>

<p>Details about shipped packages and their versions in Grml are
available in the <a href="/files/#debian">Debian section</a>. Visit
<a href="/files/grml64-full_2020.06/dpkg.list">dpkg_list</a> for a
detailed list of packages shipped with Grml 2020.06.</p>

<h3>Updates</h3>

<p>Packages are taken from Debian testing as of 24th of June 2020.
22 packages have been removed, and these 30 new packages
have been added (excluding lib*, *-common, python3-* and kernel image):</p>

<ul>

<li>avahi-utils (Avahi browsing, publishing and discovery utilities)
<li>bind9-dnsutils (Clients provided with BIND 9)
<li>bind9-libs (dependency of avahi-daemon, bind9-dnsutils, bind9host + libnss-mdns)
<li>borgbackup (deduplicating and compressing backup program)
<li>cloud-init (initialization system for infrastructure cloud instances)
<li>cpp-9 (replacement for cpp-8)
<li>dnsutils (Clients provided with BIND)
<li>fuse3 (dependency of borgbackup, exfat-fuse, ntfs-3g, sshfs + testdisk)
<li>gcc-10-base (replacement for gcc-8)
<li>gcc-9-base (replacement for gcc-8)
<li>iperf3 (Internet Protocol bandwidth measuring tool)
<li>logsave (dependency of e2fsprogs)
<li>lua-lpeg (dependency of nmap)
<li>ncdu (ncurses disk usage viewer)
<li>pci.ids (dependency of sysfsutils)
<li>perl-modules-5.30 (related package for new perl version)
<li>python3.8-minimal (replacement for python3.7-minimal)
<li>python3.8 (replacement for python3.7)
<li>qemu-system-gui (QEMU full system emulation binaries (user interface and audio support))
<li>qrencode (QR Code encoder into PNG image)
<li>radvd (Router Advertisement Daemon)
<li>ruby2.7 (replacement for ruby2.5)
<li>runit-helper (dependency of acpi-support, acpid, irqbalance + openssh-server)
<li>sound-theme-freedesktop (dependency of vim-gtk3)
<li>tmate (terminal multiplexer with instant terminal sharing)
<li>tree (displays an indented directory tree, in color)
<li>usb.ids (dependency of usbutils)
<li>vim-gtk3 (Vi IMproved - enhanced vi editor - with GTK3 GUI, replacement for vim-gtk/GTK2)
<li>wireguard (fast, modern, secure kernel VPN tunnel)
<li>zstd (fast lossless compression algorithm -- CLI tool)

</ul>

<p>These Debian packages have been removed/replaced (excluding lib*, *-data, *-common, python-* and kernel image):</p>

<ul>

<li>ash (replaced with dash)
<li>cpp-8 (replaced with cpp-9)
<li>cryptsetup-run (transitional package for cryptsetup)
<li>fuse (replaced with fuse3)
<li>gcc-8-base (replaced with gcc-9-base + gcc-10-base)
<li>gdbm-l10n (reverse dependency only)
<li>hfsprogs (not DFSG-Free)
<li>ipsec-tools (dead upstream, consider using wireguard instead)
<li>lilo (should no longer be relevant nowadays)
<li>linux-libc-dev (reverse dependency only)
<li>pm-utils (reverse dependency only)
<li>powermgmt-base (reverse dependency only)
<li>python3-prettytable (reverse dependency only)
<li>python3.7 (replaced with python3.8)
<li>python3.7-minimal (replaced with  python3.8-minimal)
<li>racoon (dead upstream, consider using wireguard instead)
<li>rng-tools (unavailable in Debian/testing, see <a href="https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=951663">#951663</a>)
<li>ruby-did-you-mean (reverse dependency only)
<li>ruby-json (reverse dependency only)
<li>ruby2.5 (replaced with ruby2.7)
<li>tasksel (became priority=optional in Debian)
<li>vim-gtk (replaced with vim-gtk3)

</ul>

<h3>Known issues</h3>

<p>Please visit the <a href="/bugs/known/">known bugs</a> web page.</p>

<h3>Download Grml 2020.06</h3>

<p>Grml 2020.06 can be downloaded from
<a href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help
fixing bugs and improving future releases. If you find a problem with
the release please check <a
href="/bugs/known/">the known bugs list</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback and
feature requests <a href="/contact/">to the Grml team</a>!</p>

<h3 id="thanks">Thanks</h3>

<p>Many thanks in this release go to (alphabetically)
Albert Dengg,
András Korn,
Antoine Beaupré,
Axel Beckert,
Chris Hofstaedtler,
Florian Apolloner,
Garrett Holmstrom,
Iru Cai,
Joel Wirāmu Pauling,
Jordan Uggla,
Lukas Prokop,
Marc Haber,
Michael Stone,
Moviuro,
Patrick Schleizer,
Ralf Moll and
ur4t
for their contributions.</p>

<h3>More Information</h3>

<p>You can find out more about Grml on <a href="/">our website</a>, <a
href="/contact/#irc">IRC channel</a>, and <a
href="https://github.com/grml/grml/wiki">wiki</a>.

<p>To sign up for future Grml announcements, please subscribe to <a
href="http://ml.grml.org/postorius/lists/grml-announce.ml.grml.org">Grml's
announcement list</a>.</p>
