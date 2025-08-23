+++
title = 'Release Notes: Grml 2012.05 - Codename Ponyhof'
+++

<p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
border: 0" src="/screenshots/grml_2012.05.jpg" alt="*" /></a></p>

<p><a href="/download/">Download Now</a></p>

<h3>About</h3>

<p>After the downsizing and cleanup release 2011.12 this release brings
some additional tools and the grml-small flavour is back again.</p>

<h3>New features</h3>

<ul>
<li>grml-hwinfo: Support numactl to retrieve NUMA information
<li>Re-add simplified support for brltty
<li>Support 9p-virtio filesystem for mounting the DCS-directory (Debs, Configuration and Scripts - see man grml-autoconfig)
</ul>

<h3>Important Changes</h3>

<ul>
<li>The ssh bootoption sets the specified/generated ssh password for user 'grml' <i>and</i> (new) for root
<li>Using /media as default mount target
<li>Dropped the grml-feedback tool
</ul>

<h3>Bits &amp; bolts</h3>

<ul>
<li>Linux kernel is based on <b>3.3.7</b>. No additional modules are shipped.</li>
<li>Fixed several bugs from the <a href="http://bts.grml.org/grml/">bug tracking system</a>.</li>
</ul>

<h3>Important Reminders</h3>

<ul>

<li>Booting Grml via PXE? Do not forget to add the live-media-path=...
bootoption, otherwise booting will fail with 'No supported filesystem
images found at /live'.  Usage instructions:
live-media-path=/live/$FLAVOUR (where $FLAVOUR corresponds to
grml64-full, grml32-full, grml64-small, grml32-small) - for further
details visit <a
href="https://github.com/grml/grml/wiki/terminalserver">terminalserver
page in the Grml-Wiki</a>.</li>

<li>Booting Grml from hard disk? Do not forget to add the
live-media-path=... bootoption. Or even better: use grml-rescueboot.
Full details at <a
href="https://github.com/grml/grml/wiki/rescueboot">rescueboot in the
Grml-Wiki</a>.</li>

</ul>

<h3>Packages</h3>

<p>Details about shipped packages and their versions on Grml are
available at the <a href="/files/#debian">Debian section</a>.</p>

<h3>Updates</h3>

<p>Packages are taken from Debian testing, 28th of May
2012. These 54 new packages have been added (plus
dependencies, excluding lib* and kernel image):</p>

<pre class="rahmen">
buffer cifs-utils comgt console-setup-linux consolekit
dctrl-tools disktype dos2unix ewf-tools exfat-fuse exfat-utils
firmware-myricom firmware-netxen firmware-qlogic flashrom
fsarchiver gcc-4.5-base gcc-4.7-base genext2fs hexedit hostapd
iftop imvirt-helper info ipmitool iptstate ipxe-qemu irssi kmod
live-boot-grml-doc lrzsz lzop mc-data memtester mosh numactl
open-vm-tools pppoeconf rfkill ser2net slurm smbfs sysstat
tasksel tasksel-data tcptraceroute usb-modeswitch
usb-modeswitch-data vlock wireshark wvdial xmount xorriso
xulrunner-10.0
</pre>

<p>These 7 Debian packages have been removed/replaced (excluding lib* and kernel image):</p>

<pre class="rahmen">
console-terminus gcc-4.4-base genisoimage ipxe
python-central python-pexpect xulrunner-8.0
</pre>

<h3>Known issues</h3>

<p>None at the time of the release!</p>

<p>Take a look at <a
href="/bugs/known/">the known bugs list</a>.
Please report problems using information on <a
href="/bugs/">grml.org/bugs/</a>.</p>


<h3>Download Grml 2012.05</h3>

<p>Grml 2012.05 can be downloaded from
<a href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help
fixing bugs and improving future releases. If you find a problem with
the release please check <a
href="/bugs/known/">the known bugs list</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback and
feature requests <a href="/contact/">to the Grml team</a>!</p>

<h3 id="thanks">Thanks</h3>

<p>Many thanks in this release go to (alphabetically) Axel Beckert,
Charles A. Hewson, ChiCuong HA, Christian Hofstaedtler, Christoph Biedl, Christopher
Schramm, Conny Seidel, Csillag Tamas, Florian Apolloner, Frank
Prochnow, Heinz Ahrens, Holger Baust, John S.  Skogtvedt, Jordan Uggla,
Laurent CARON, Marco d'Itri, Markus Ulrich, Martin Koeppe, Matthias
Strubel, Michael Hanke, Michael Renner, Michael Schierl, Paul Menzel,
Pawel azhag Sadkowski, Thomas Arendsen Hein, Thorsten Glaser, Thorsten
Leemhuis, Timo Boettcher, Tom Oehser, Ulrich Dangel and Vincent McIntyre
for their contributions.</p>

<h3>More Information</h3>

<p>You can find out more about Grml on <a href="/">our website</a>, <a
href="/contact/#irc">IRC channel</a>, and <a
href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future Grml announcements, please subscribe to <a
href="http://ml.grml.org/postorius/lists/grml-announce.ml.grml.org">Grml's
announcement list</a>.</p>
