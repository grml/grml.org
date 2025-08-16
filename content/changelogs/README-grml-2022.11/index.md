+++
title = 'Release Notes: Grml 2022.11 - codename MalGuckes'
+++

<p><a href="/download/">Download Now</a></p>

<h3>About</h3>

<p>Grml is a Debian based live system focusing on the needs of system administrators.
This Grml release provides fresh software packages from Debian bookworm.
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.</p>

<h3>Important Changes</h3>

<ul>
<li>The Grml live system now uses the merged-/usr layout
<li>Updated Perl from v5.32 to v5.36
<li>Updated Python3 from v3.9 to v3.10
<li>Updated Ruby from v2.7 to v3.0
</ul>

<h3>New features</h3>

<p>Highlighting the most relevant changes only:</p>

<h4>Misc:</h4>

<ul>
<li><strong>grml-hwinfo</strong>: iterate over present disks to collect <em>sfdisk -d</em> information
<li><strong>grml-terminalserver</strong>: suggest a proper IP range usage when configuring DHCP clients
<li><strong>netcardconfig</strong>: netcardconfig: avoid suggesting default gateway if a default route exists already
<li>Integration of Memtest86+ v6, providing UEFI support
</ul>

<h4><a href="/grml-live/">grml-live</a> (build system for creating Grml (based) Linux live systems):</h4>

<ul>
<li>Support Memtest86+ with UEFI
<li>Support Debian/bookworm
<li>Support for ZFS via new ZFS FAI class
<li>Provide workaround for kmod/initramfs-tools issue with NFS/netboot
<li>Exclude /var/lib/dkms/* from squashfs
<li>GRMLBASE/50-lvm: also clear /lib/udev/rules.d/69-lvm.rules
<li>Disable man-db settings to speed up package installation
<li>Use grubx64.efi file from grml_chroot, instead of relying on host system
<li>isolinux: fix toram=... variable usage within isolinux configs
<li>Provide information how ISO was generated in file conf/buildinfo.json
<li>Misc software related changes in GRMLBASE, GRML_SMALL + GRML_FULL classes
</ul>

<h4><a href="/grml2usb/">grml2usb</a> (tool to install Grml ISO to usb device):</h4>

<ul>
<li>grml2iso: support parallel execution
</ul>

<h4><a href="/zsh/">grml-zshrc</a> (Zsh configuration):</h4>

<ul>
<li>zshrc: run <em>tlog</em> alias with --follow=name
<li>zshrc: support setting title in <em>foot</em> terminal emulator
<li>zshrc: use <em>ip</em> from iproute2 with color support
<li>zshrc: support <em>NOETCHOSTS</em> option to deactivate parsing of "/etc/hosts" for host completion
<li>zshrc: do not unconditionally overwrite <em>$COLORTERM</em>
<li>tmux.conf: source user-specific local conf file <em>~/.tmux.conf.local</em>
<li>tmux.conf: Add <em>bind-key J</em> to join marked pane to active window
</ul>

<h4><a href="/grml-debootstrap/">grml-debootstrap</a> (wrapper around debootstrap for installing pure Debian):</h4>

<ul>
<li>EFI support: fix for grub-install usage with efivarfs
<li>Install dbus by default
<li>VMs: create partition with alignment starting at 4MiB + ending at 100%
</ul>

<h3>Bits &amp; bolts</h3>

<ul>
<li>Linux kernel <b>6.0</b>.</li>
<li>Fixed several bugs from the <a href="https://github.com/grml/grml/issues/">issue tracking system</a>.</li>
</ul>

<h3>Packages</h3>

<p>Details about shipped packages and their versions in Grml are
available in the <a href="/files/#debian">Debian section</a>. Visit
<a href="/files/grml64-full_2022.11/dpkg.list">dpkg_list</a> for a
detailed list of packages shipped with Grml 2022.11(-rc1).</p>

<h3>Updates</h3>

<p>Packages are taken from Debian bookworm/testing as of 11th of November 2022.
The following 18 packages have been added (excluding lib*, *-base/*-bin/*-common/*-core/*-data, cpp-*, perl*, python*, ruby* and kernel image):</p>

<ul>
<li>dbus-daemon: simple interprocess messaging system
<li>exfatprogs: exFAT file system utilities
<li>f2fs-tools: Tools for Flash-Friendly File System
<li>hping3: Active Network Smashing Tool
<li>inetutils-telnet: telnet client
<li>jo: command-line processor to output JSON from a shell
<li>mbuffer: tool for buffering data streams
<li>myrescue: rescue data from damaged disks
<li>nftables: Program to control packet filtering rules by Netfilter project
<li>ntpsec: Network Time Protocol daemon and utility programs
<li>ntpsec-ntpdate: client for setting system time from NTP servers
<li>ntpsec-ntpdig: ntpdig SNTP client
<li>pkexec: run commands as another user with polkit authorization
<li>polkitd: framework for managing administrative policies and privileges
<li>sqlite3: Command line interface for SQLite 3
<li>stenc: SCSI Tape Encryption Manager
<li>usrmerge: Convert the system to the merged /usr directories scheme
<li>util-linux-extra: interactive login tools
</ul>

<p>The following 26 Debian packages have been removed/replaced (excluding lib*, *-base/-bin/*-common/*-core/*-data, cpp-*, perl*, python*, ruby* and kernel image):</p>

<ul>
<li>bacula-console/bacula-fd/bacula-sd (no longer considered relevant for the live system)
<li>bonnie++ (use fio for benchmarking)
<li>bsdmainutils (transitional package, replaced by bsdutils, debianutils, bsdextrautils and ncal (ncal not being shipped by Grml))
<li>espeak (replaced by espeak-ng)
<li>exfat-utils (replaced by exfatprogs)
<li>facter/hiera/mcollective/puppet (no longer considered relevant for the live system)
<li>firmware-intelwimax (no longer shipped with firmware-nonfree)
<li>glib-networking/glib-networking-services/gsettings-desktop-schemas (used to be dependencies of firefox/qemu-system-gui/usbview/vim-gtk3)
<li>mercurial (no longer considered relevant for the live system)
<li>ncal (no longer considered relevant for the live system)
<li>nilfs-tools (used to be a dependency of partclone)
<li>ntp (replaced by ntpsec/ntpsec-ntpdate/ntpsec-ntpdig)
<li>ntpdate (replaced by ntpsec/ntpsec-ntpdate/ntpsec-ntpdig)
<li>slurm (no longer available in Debian/testing, see <a href="https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=993874">#993874</a>)
<li>subversion (no longer considered relevant for the live system)
<li>tshark (requires ~155MB of disk space, please raise your voice if it should be part of the stable release)
<li>update-inetd (used to be a dependecy of atftpd)
<li>wireshark/wireshark-qt (requires ~155MB of disk space, please raise your voice if it should be part of the stable release)
</ul>

<h3>Known issues</h3>

<p>Please visit the <a href="/bugs/known/">known bugs</a> web page.</p>

<h3>Download Grml 2022.11</h3>

<p>Grml 2022.11 can be downloaded from
<a href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help fixing bugs and improving future releases.
If you find a problem with the (pre-)release, please check <a href="/bugs/known/">the known bugs list</a> and report problems using information on <a href="/bugs/">grml.org/bugs/</a>.
We also welcome feature requests and any kind of constructive feedback.
If you want to reach out to the Grml team, please visit our <a href="/contact/">contact webpage</a>.</p>

<a name="thanks"></a>
<h3>Thanks</h3>

<p>Many thanks in this release go to (alphabetically)
Alexander Kobel,
András Korn,
Arun,
Atrate,
Bhoppi Chaw,
Chris Hofstaedtler,
Chris S,
Christian Hesse,
Christoph Biedl,
d630,
Evgeni Golov,
Frank Terbeck,
haidinger,
Hanabishi,
Karl Voit,
Manuel Rom,
miles170,
Pásztor János,
Ralf Moll,
Roman Volosatovs and
Thorsten Glaser
for their contributions.</p>

<h3>More Information</h3>

<p>You can find out more about Grml on <a href="/">our website</a>, <a href="/contact/#irc">IRC channel</a>, and <a href="https://github.com/grml/grml/wiki">wiki</a>.

<p>To sign up for future Grml announcements, please subscribe to <a href="http://ml.grml.org/postorius/lists/grml-announce.ml.grml.org">Grml's announcement list</a> or
follow our <a href="https://blog.grml.org/">blog</a>.</p>
