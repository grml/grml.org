+++
title = 'Release Notes: Grml 2012.05-rc1 - Codename Ponyhof'
+++

<h3>About</h3>

<p>After the downsizing and cleanup release 2011.12 this release brings
some additional tools and the grml-small flavour is back again.</p>

<h3>New features</h3>

<ul>

<li>grml-hwinfo: Support numactl to retrieve NUMA information
<li>Re-add simplifed support for brltty
<li>Support 9p-virtio filesystem for mounting the DCS-directory (Debs, Configuration and Scripts - see man grml-autoconfig)

</ul>

<h3>Important Changes</h3>

<ul>
<li>The ssh bootoption sets the specified/generated ssh passwort for user 'grml' <i>and</i> (new) for root
<li>Using /media as default mount target
<li>Dropped the grml-feedback tool
<li>Add a few kB of lines made of # charaters to the end of the main syslinux config file
</ul>

<h3>Bits &amp; bolts</h3>

<ul>
<li>Linux kernel is based on <b>3.3.6</b>. No additional modules are shipped.</li>
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

<li>Booting Grml from Harddisk? Do not forget to add the
live-media-path=... bootoption. Or even better: use grml-rescueboot.
Full details at <a
href="https://github.com/grml/grml/wiki/rescueboot">rescueboot in the
Grml-Wiki</a>.</li>

</ul>

<h3>Packages</h3>

<p>Details about shipped packages and their versions on Grml are
available at the <a href="/files/#debian">Debian section</a>. Visit
<a href="/files/release-2012.05-rc1/dpkg_list">dpkg_list</a> for a
detailed list of packages shipped with Grml 2012.05-rc1.</p>

<h3>Updates</h3>

<p>Packages are taken from Debian testing, 15th of May
2012. 7 packages have been removed, and these 52 new packages
have been added (plus dependencies, excluding lib* and kernel image):</p>

<pre class="rahmen">
buffer cifs-utils comgt console-setup-linux consolekit
dctrl-tools disktype dos2unix ewf-tools exfat-fuse
exfat-utils firmware-myricom firmware-netxen
firmware-qlogic flashrom fsarchiver gcc-4.5-base
gcc-4.7-base genext2fs hexedit hostapd iftop info ipmitool
iptstate ipxe-qemu irssi kmod live-boot-grml-doc lrzsz
lzop mc-data memtester mosh numactl open-vm-tools
pppoeconf rfkill ser2net slurm smbfs tasksel tasksel-data
tcptraceroute usb-modeswitch usb-modeswitch-data vlock
wireshark wvdial xmount xorriso xulrunner-10.0
</pre>

<p>These Grml packages have been removed/replaced (excluding lib* and kernel image):</p>

<pre class="rahmen">
console-terminus gcc-4.4-base genisoimage ipxe
python-central python-pexpect xulrunner-8.0
</pre>

<h3>Known issues</h3>

<ul>

<li>wallpaper: there's no wallpaper shipped with the ISO</li>

<li>grml-small: the lang bootoption sets the LC_* environment variable
to POSIX and therefore lacks support display of special characters like
german umlauts</li>

<li>grml64: entries Grub2, iPXE and MirOS bsd4grml under "Further boot options -&gt; Addons" do not work</li>

<li>grml32: entry iPXE under "Further boot options -&gt; Addons" does not work</li>

</ul>

<h3>Download Grml 2012.05-rc1</h3>

<p>Grml 2012.05-rc1 can be downloaded from
<a href="/download/prerelease/">grml.org/download/prerelease/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help
fixing bugs and improving future releases. If you find a problem with
the release please check <a
href="/bugs/known/">the known bugs list</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback and
feature requests <a href="/contact/">to the Grml team</a>!</p>

<a name="thanks"></a>
<h3>Thanks</h3>

<p>Many thanks in this release go to (alphabetically) Axel Beckert,
Charles A. Hewson, ChiCuong HA, Christian Hofstaedtler, Christoph Biedl, Christopher
Schramm, Conny Seidel , Csillag Tamas, Florian Apolloner, Frank
Prochnow, Heinz Ahrens, Holger Baust, John S.  Skogtvedt, Jordan Uggla,
Laurent CARON , Marco d'Itri, Markus Ulrich, Martin Koeppe, Matthias
Strubel, Michael Hanke, Michael Renner, Michael Schierl, Paul Menzel,
Pawel azhag Sadkowski, Thomas Arendsen Hein, Thorsten Glaser, Thorsten
Leemhuis, Timo Boettcher, Tom Oehser, Ulrich Dangel and Vincent McIntyre
for their contributions.</p>

<h3>More Information</h3>

<p>You can find out more about Grml on <a href="/">our website</a>, <a
href="/contact/#irc">IRC channel</a>, and <a
href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future Grml announcements, please subscribe to <a
href="http://ml.grml.org/mailman/listinfo/grml-announce">Grml's
announcement list</a>.</p>
