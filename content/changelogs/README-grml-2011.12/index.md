+++
title = 'Release Notes: Grml 2011.12 - Codename Knecht Rootrecht'
+++

<p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
border: 0" src="/screenshots/grml_2011.12.jpg" alt="*" /></a></p>

<p><a href="/download/">Download Now</a></p>

<h3>About</h3>

<p>This release brings a downsizing and cleanup: one flavour, two architectures.
The new, smaller flavour has a 350MB ISO size target, while still
delivering over 1.1GB of open source software relevant for system
administrators!</p>

<h3>New features</h3>

<ul>

<li>EFI Boot support from CD-ROM and USB keys (amd64 only)</li>
<li>mDNS support (try <tt>ping grml.local</tt> with libnss-mdns and avahi-daemon
or similar enabled on your host)</li>
<li>NFS Client support and d-bus start automatically</li>
<li><a href="/grml-debootstrap/">grml-debootstrap</a>, the tool of choice to install Debian,
can now directly build virtual machine images.</li>
<li><a href="/grml-live/">grml-live</a>, our build tool, was enhanced with new features to
better integrate with <a href="http://jenkins-ci.org/">Jenkins</a>.
This release, as well as the current <a href="/daily/">daily images</a>
are built from within Jenkins!</li>
</ul>

<h3>Important Changes</h3>

<ul>
<li>The live-media-path=... bootoption is mandatory now. If you're
booting Grml via PXE or from harddisk (e.g. using findiso) please make
sure to add live-media-path=/live/$FLAVOUR to the kernel commandline.
Further details are available at the <a
href="https://github.com/grml/grml/wiki/terminalserver">terminalserver
page</a> and the <a
href="https://github.com/grml/grml/wiki/rescueboot">rescueboot page</a>
in the Grml-Wiki</a>.</li>
<li>Z-Shell configuration has been cleaned up. Quite a few functions
<a href="https://git.grml.org/?p=grml-etc-core.git;a=history;f=etc/zsh/zshrc">have been removed</a>
from the default configuration.</li>
<li>X11 environment has been downsized as well. The window manager is
now fluxbox. idesk has been removed, all available software is now
reachable from the fluxbox menu.</li>
<li>The accessibility support now consists of shipping standard speakup
and enabling sound during boot. A new beep sequence (4 tones) is sounded
just before the quickconfig menu starts. The isolinux menu will beep once,
and the grub menu will beep three times. (The accessibility boot options
have been removed.)</li>
<li>iSCSI Target is now provided by <a href="http://linux-iscsi.org/index.php/LIO-Target">LIO</a>.
The configuration tool <tt>targetcli</tt> is included.</li>
<li>xterm now uses the Terminus font, like the VT consoles.</li>
<li>Virtual Machines automatically get the "noprompt" behaviour.</li>
<li>Ancient config files and examples have been removed from grml-etc(-core).</li>
<li>Ancient scripts have been removed from grml-scripts(-core).</li>
<br>
<li>Anonymous stats are collected during boot up. This includes: Grml release name,
boot media type (local or remote), a random string, used boot option keys
(no values) and if your CPU is 64bit-capable. You can turn this off with the
<b>nostats</b> boot option.</li>
</ul>

<h3>Bits &amp; bolts</h3>

<ul>
<li>Modem support has been removed from grml-network</li>
<li>VT consoles are driven by grml-runtty, our homegrown login and getty
replacement for Live CDs.</li>
<li>Netboot scenarios should no longer use the "nodhcp" boot option.</li>
<li>grml2hd is no longer in PATH to discourage its use even further.
The related boot options have been removed.</li>
<li>grml2usb: compat for releases &lt; 2009.05, grub1 and lilo support
have been removed.</li>
<li>Release builds are now built from Debian's testing distribution, instead of unstable.</li>
<li>Linux kernel is based on <b>3.1.6</b>. No additional modules are shipped.</li>
<li>Fixed several bugs from the <a href="http://bts.grml.org/grml/">bug tracking system</a>.</li>
</ul>

<h3>Packages</h3>

<ul>
<li><a href="/files/grml32_2011.12/dpkg.list">32-bit package list</a></li>
<li><a href="/files/grml64_2011.12/dpkg.list">64-bit package list</a></li>
</ul>

<h3>Updates</h3>

<p>Packages are taken from Debian testing, 23rd of December 2011. More
than 1700 packages have been removed, and these new packages have been
added (plus dependencies):</p>

<pre class="rahmen">
afflib-tools atftp bacula-sd boot-info-script efibootmgr
extundelete grub-efi-amd64-bin hsetroot ia32-libs imvirt
ipxe libnss-myhostname lio-utils mcollective mtx
multiarch-support netcat-openbsd python2.7 sipcalc targetcli
</pre>

<p>These Grml packages have been removed/replaced:</p>

<pre class="rahmen">
grml-debugtools grml-docs grml-files grml-files64
grml-firefox grml-laptop grml-pylib grml-rebuildfstab
grml-rescueboot grml-sectools grml-templates grml-usleep
grml-vpn grml grml64
</pre>

<h3>Known issues</h3>

<p>None at the time of the release!</p>

<p>Take a look at <a
href="/bugs/known/">the known bugs list</a>.
Please report problems using information on <a
href="/bugs/">grml.org/bugs/</a>.</p>

<h3>Download Grml 2011.12</h3>

<p>Grml 2011.12 can be downloaded from
<a href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help
fixing bugs and improving future releases. If you find a problem with
the release please check <a
href="/bugs/known/">the known bugs list</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback and
feature requests <a href="/contact/">to the Grml team</a>!</p>

<a name="thanks"></a>
<h3>Thanks</h3>

<p>Many thanks in this release go to (alphabetically)
Brad Cable,
Christoph Biedl,
Christoph Lupe,
Charles A. Hewson,
Hans BKK,
John G. Heim,
Jordan Uggla,
Julius Plenz
Malte Simon,
Marek Malevič,
Michael Gissing,
Pawel Sadkowski,
Ralf Moll,
Richard Hartmann,
Sedat Dilek,
Thomas Koehler,
Uli Martens
for their ideas and patches - as well as to our new <a href="/team/">contributors</a>.</p>

<h3>More Information</h3>

<p>You can find out more about Grml on <a href="/">our website</a>, <a
href="/contact/#irc">IRC channel</a>, and <a
href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future Grml announcements, please subscribe to <a
href="http://ml.grml.org/mailman/listinfo/grml-announce">Grml's
announcement list</a>.</p>
