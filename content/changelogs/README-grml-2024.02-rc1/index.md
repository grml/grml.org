+++
title = 'Release Notes: Grml 2024.02-rc1 - codename Glumpad'
+++

<p><strong>NOTE: the <a href="/changelogs/README-grml-2024.02/">stable release 2024.02</a> is already available!</strong></p>

<p><a href="/download/prerelease/">Download Now</a></p>

<h3>About</h3>

<p>Grml is a Debian based live system focusing on the needs of system administrators.
This Grml release provides fresh software packages from Debian trixie.
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.</p>

About <a href="/faq/#releasename">the codename</a>.

<h3>New features</h3>

<p>Highlighting the most relevant changes only:</p>

<h4>Misc:</h4>

<ul>
<li><strong>grml-hwinfo</strong>: add inxi output and collect information about network devices via ethtool
</ul>

<h4><a href="/grml-live/">grml-live</a> (build system for creating Grml (based) Linux live systems):</h4>

<ul>
<li>Initial arm64 / aarch64 support
<li>Add support for Debian/trixie (current Debian/testing)
<li>Use serial console with a setting of 115200n8 by default
<li>Update zsh completion + ship it via Debian package
<li>Unify boot options order between isolinux/syslinux and GRUB
<li>Improved memtest + chainloader handling
<li>Remove Grml release name from the boot options
<li>Misc software related changes in GRMLBASE, GRML_SMALL + GRML_FULL classes
</ul>

<h4><a href="/zsh/">grml-zshrc</a> (Zsh configuration):</h4>

<ul>
<li>zshrc: fixed outdated url in <em>weather</em> function
<li>/etc/skel/.zshrc: suggest J as global alias for jq usage
</ul>

<h4><a href="/grml-debootstrap/">grml-debootstrap</a> (wrapper around debootstrap for installing pure Debian):</h4>

<ul>
<li>Initial arm64 support
<li>Add EFI support for VMs
<li>Don't install busybox any longer by default
<li>Refactored error handling
<li>Dropped support for installing releases before jessie
<li>Use persistent device names under /dev/disk/by-id/ for GRUB's install_devices
</ul>

<h3>Bits &amp; bolts</h3>

<ul>
<li>Linux kernel <b>6.5</b>.</li>
<li>Fixed several bugs from the <a href="https://github.com/grml/grml/issues/">issue tracking system</a>.</li>
</ul>

<h3>Packages</h3>

<p>Details about shipped packages and their versions in Grml are
available in the <a href="/files/#debian">Debian section</a>. Visit
<a href="/files/grml64-full_2024.02/dpkg.list">dpkg_list</a> for a
detailed list of packages shipped with Grml 2024.02(-rc1).</p>

<h3>Updates</h3>

<p>Packages are taken from Debian trixie/testing as of 2nd of February 2024.
The following 9 relevant packages have been added (excluding e.g. lib*, fonts*, *-base/*-bin/*-common/*-core/*-data, gcc-*/cpp-*, perl*, python*, ruby* and kernel image):</p>

<ul>
<li>dhcpcd: DHCPv4 and DHCPv6 dual-stack client (replacement for deprecated isc-dhcp-client)
<li>f3: test real flash memory capacity
<li>fwupd/fwupd-amd64-signed: Tools to manage UEFI firmware updates
<li>lolcat: colorful `cat`
<li>lz4: Fast LZ compression algorithm library - tool
<li>pixz: (dependency of clonezilla)
<li>toilet: display large colourful characters in text mode
<li>udisks2: D-Bus service to access and manipulate storage devices
</ul>

<p>The following 9 Debian packages have been removed/replaced (excluding lib*, *-base/-bin/*-common/*-core/*-data, gcc-*/cpp-*, perl*, python*, ruby* and kernel image):</p>

<ul>
<li>dmraid: obsolete (see <a href="https://bugs.debian.org/1056944">#1056944</a>)
<li>dstat: unmaintained upstream (see <a href="https://bugs.debian.org/1034856">#1034856</a>)
<li>fai-server: irrelevant, no longer a dependency of grml-live
<li>fakeroot: irrelevant, no longer a dependency of devscripts
<li>firmware-ath9k-htc: conflicts with/replaced by firmware-atheros
<li>iso-codes: irrelevant, no longer a dependency of qemu-system-*
<li>lsb-base: irrelevant, no longer a dependency of uml-utilities
<li>lua-lpeg: irrelevant, no longer a dependency of nmap
<li>thin-provisioning-tools: broken in Debian/testing (see <a href="https://bugs.debian.org/1041089">#1041089</a>)
</ul>

<h3>Known issues</h3>

<p>Please visit the <a href="/bugs/known/">known bugs</a> web page.</p>

<h3>Download Grml 2024.02-rc1</h3>

<p>Grml 2024.02-rc1 can be downloaded from
<a href="/download/prerelease/">grml.org/download/prerelease/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help fixing bugs and improving future releases.
If you find a problem with the (pre-)release, please check <a href="/bugs/known/">the known bugs list</a> and report problems using information on <a href="/bugs/">grml.org/bugs/</a>.
We also welcome feature requests and any kind of constructive feedback.
If you want to reach out to the Grml team, please visit our <a href="/contact/">contact webpage</a>.</p>

<a name="thanks"></a>
<h3>Thanks</h3>

<p>Many thanks in this release go to (alphabetically)
2f2a,
Alhyene,
anarcat,
András Korn,
Chris Hofstaedtler,
Christopher Bock,
Csillag Tamas,
Daniel Richard G,
Daniel Winzen,
Felix Egli,
flobee,
GavinPacini,
Giovanni Rosa,
János Pásztor,
Keith Irwin,
Marc Haber,
Michael Schierl,
Patrick Schleizer,
Roland Sommer and
willmcginnis
for their contributions.</p>

<h3>More Information</h3>

<p>You can find out more about Grml on <a href="/">our website</a>, <a href="/contact/#irc">IRC channel</a>, and <a href="https://github.com/grml/grml/wiki">wiki</a>.

<p>To sign up for future Grml announcements, please subscribe to <a href="http://ml.grml.org/mailman/listinfo/grml-announce">Grml's announcement list</a> or
follow our <a href="https://blog.grml.org/">blog</a>.</p>
