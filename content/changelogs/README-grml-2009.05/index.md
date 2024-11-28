+++
title = 'Release Notes: grml 2009.05 - Codename Lackdose-Allergie'
+++

<p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
border: 0" src="/screenshots/grml_2009.05.jpg" width="140" alt="*" /></a></p>

<h3>About</h3>

<p>grml is a Debian-based Live-CD. It includes a collection of GNU/Linux
software especially for system administrators and users of texttools.
grml provides automatic hardware detection. You can use grml for example
as a rescue system, for analyzing systems/networks or as a working
environment. It is not necessary to install anything to a harddisk, you
don't even need a harddisk to run it, unless you want to. Due to
on-the-fly decompression grml includes more than 2GB of software and
documentation on the CD.</p>

<h3>Main Bugfixes</h3>

<ul>

<li>improved localtime / utc / gmt handling (thanks to Thomas Lehmann for his work)

<li>vimrc: enable features (like syntax highlighting) only if available

</ul>

<p>Fixed several small bugs and issues reported on <a
href="https://github.com/grml/grml/wiki/grml_2008.11">grml_2008.11 @
grml-wiki</a> and in the <a href="http://bts.grml.org/grml/">bug
tracking system</a>.</p>

<h3>New features</h3>

<h4>Special new features:</h4>

<ul>

<li>bootoption <strong>persistent</a></strong>: use persistency
feature on grml, check out <a
href="https://github.com/grml/grml/wiki/persistency">the persistency
webpage in the grml wiki</a> for further details.

<li>bootoption <strong>findiso</strong>: dynamic version of bootoption
isofrom. findiso looks for the specified ISO file on all disks where
it usually looks for the .squashfs file (so you don't have to know the
device name compared to isofrom=...). Useful when booting from
harddisk. Usage example: 'grml findiso=/grml_2009.05.iso'

<li>bootoption <strong>bsd</strong>: boot minimal <a
href="https://www.mirbsd.org/">MirOS BSD</a> operating system.

<li>bootoption <strong>hdt</strong>: minimalistic <a href="http://syslinux.zytor.com/wiki/index.php/Hdt_(Hardware_Detection_Tool)">hardware detection tool</a>

<li>bootoption <strong>readonly</strong>: mark ALL /dev/[hs]*dX devices
as read-only, this is important for forensic investigations and is automatically
activated when booting via 'forensic'

<li>bootoption <strong>hwspeak</strong>: probe all available
speakup hardware modules (hear all output directed to the console via
special hardware)

<li><a href="/zsh/">Zsh</a> supports <a
href="http://michael-prokop.at/blog/2009/05/30/directory-specific-shell-configuration-with-zsh/">directory
specific shell configuration</a>

</ul>

<h4>New grml-scripts:</h4>

<ul>

<li><strong>grml-chroot</strong>: wrapper around chroot with
proc/sys/pts/dev filesystem handling</li>

<li><strong>grml-exec-wrapper</strong>: simple but smart program
execution wrapper for executing commands which checks whether the
specified program is available at all</li>

<li><strong>swspeak-setup</strong>: activate software speak(up)
features (used within the swspeak bootoption)</li>

</ul>

<h4><a href="/grml2usb/">grml2usb</a> (install grml ISO(s) on usb device for booting):</h4>

<ul>

<li>fresh re-implementation from scratch

<li>featuring multi-ISO support

<li>providing support for additional bootoptions

<li>use of grub as default bootmanager (syslinux on request)

<li>automatic installation of a known-to-work MBR (master boot record)

</ul>

<p>Visit <a href="https://github.com/grml/grml/wiki/usb">the usb webpage
in the grml wiki</a> and <a href="/grml2usb/">grml.org/grml2usb</a> for
more details regarding grml2usb.</p>

<h4><a href="/grml-debootstrap/">grml-debootstrap</a> (wrapper around debootstrap for installing plain Debian via grml):</h4>

<ul>

<li>support setting Debian suite components (like main, contrib,...)
through $COMPONENTS

<li>support setting aptitude/apt-get options through $DPKG_OPTIONS.

<li>support selection of netinstall vs. local mirror in interactive
menu

<li>drop $CHROOTMIRROR variable, instead use $MIRROR for debootstrap as well as inside the chroot

<li>provide $MNTPOINT as environment variable for usage inside /etc/debootstrap/scripts/.

<li>bugfixes for software RAID handling

<li>and more updates... check out the <a
href="https://git.grml.org/f/grml-debootstrap/debian/changelog">Debian changelog</a> for details

</ul>

<p>Visit <a href="/grml-debootstrap/">grml.org/grml-debootstrap/</a> for more
details regarding grml-debootstrap.</p>

<h3>Kernel</h3>

<p>Based on vanilla kernel 2.6.28.10 including <a
href="/kernel/">several patches</a> and additional modules:</p>

<pre class="rahmen">
aufs drbd8 iscsitarget kqemu loop-aes lzma ndiswrapper openafs rt2400
rt73 sl-modem speakup squashfs sysprof tp-smapi virtualbox-ose-guest
xtables-addons
</pre>

<p>Visit <a href="/kernel/">grml.org/kernel/</a> for more details
regarding the grml-kernel.</p>

<h3>Important Changes</h3>

<ul>

<li><strong>speakup</strong>: modified bootoption for speakup (kernel
driver to hear all output directed to the console): use
speakup.synth=... for loading a specific module instead of
speakup_synth=... (notice the dot instead of '_'). Usage example:
speakup.synth=apollo.</li>

<li><strong>zshrc</strong>: setup merge of /etc/zsh/zshrc and
/etc/skel/.zshrc into one single file, check out <a
href="/zsh/#grmlzshrefcard">grml-zsh-refcard</a> for details.</li>

<li><strong>vimrc</strong>: disable digraph by default (it's
especially annoying for users not being aware of it)</li>

<li><strong>dillo</strong> was replaced with <strong>xlinks2</strong>
as dillo's dependency libgtk1.2 was removed from Debian/unstable</li>

<li><strong>madwifi drivers</strong>: the madwifi drivers have been
replaced by the ath5k and ath9k kernel drivers of kernel 2.6.28.</li>

</ul>

<h3>Packages / Software</h3>

<p>Details about shipped packages and their versions on grml are
available at the <a href="/files/#debian">Debian section</a>. Visit <a
href="/files/release-2009.05/dpkg_get_selections">dpkg_get_selections</a>
for a main package listing and <a
href="/files/release-2009.05/dpkg_list">dpkg_list</a> for a more
detailed list of packages shipped with grml 2009.05.</p>

<h3>Updates</h3>

<p>Updated all packages to Debian Unstable branch by 19th of may
2009 (plus some further selected updates).</p>

<p>Removed 82 packages (excluding lib* and *2.6.26-grml*) - please
notice that some of them are available under
different names/in different packages:</p>

<pre class="rahmen">
*2.6.26-grml* lib*

bzr cheops cryopid cupsddk cupsddk-drivers cupsys cupsys-bsd cupsys-client
db4.3-util dillo dropbear elfkickers es fblogo firescope fragroute funionfs
g++-4.1 gcc-4.1 gdk-imlib11 gqcam gqview hdaps-utils honeyd hpijs hplip
hplip-data idswakeup ifupdown-scripts-zg2 igal imlib-base imlib11 ipset jmon
linux-wlan-ng lmbench lspowertweak madwifi-tools nemesis nttcp open-vm-tools
paketto potion powertweak-gtk powertweakd python-feedparser python-imaging
python-newt python-numeric python-pyogg python-urlgrabber sam shc shorewall
shorew all-common shorewall-shell sing sjog snort snort-common
snort-common-libraries snort-rules-default snownews stegdetect tetex-base tspc
ttf-bitstream-vera unionfs-tools vim-python vim-ruby waproamd xdialog xmove
xserver-xorg-input-elo2300 xserver-xorg-input-evtouch xserver-xorg-video-cyrix
xserver-xorg-video-i810 xserver-xorg-video-imstt xserver-xorg-video-ivtv
xserver-xorg-video-nsc xserver-xorg-video-vga xsteg
</pre>

<p>Added 28 new packages (exluding lib* and *2.6.28-grml*):</p>

<pre class="rahmen">
console-setup consolekit cowbuilder debsig-verify dvtm elfsh gcc-4.4-base
geeqie geeqie-common geoip-database gs-common icedax igal2 iw policykit
python-numpy python-repo rtbug sensible-utils speakup-tools tf tor-geoipdb
tsconf ttf-freefont u3-tool virtualbox-ose-guest-x11 xserver-common
xtables-addons-common
</pre>

<h3>Major changes since release 2008.11 (20081201)</h3>

<ul>

<li>Moritz Augsburger joined <a href="/team/">the grml-team</a>

</ul>

<h3>Known issues</h3>

<!--
<p>Take a look at <a
href="https://github.com/grml/grml/wiki/release_candidate">the release
candidate webpage in the grml-wiki</a>. Please report problems using
information on <a href="/bugs/">grml.org/bugs/</a>.</p>
-->

<p>Take a look at <a
href="https://github.com/grml/grml/wiki/grml_2009.05">grml_2009.05 @ grml-wiki</a>.
Please report problems using information on <a
href="/bugs/">grml.org/bugs/</a>.</p>

<h3>Download grml 2009.05</h3>

<p>grml 2009.05 can be downloaded from the mirrors listed on <a
href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help
fixing bugs and improving future releases. If you find a problem with
the release please check <a
href="https://github.com/grml/grml/wiki/grml_2009.05">grml_2009.05 @
grml-wiki</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback and
feature requests <a href="/contact/">to the grml-team</a>!</p>

<ul>
<li><a href="/contact/">grml.org/contact/</a>
<li><a href="/irc/">#grml on irc.freenode.org</a>
</ul>

<h3>Thanks</h3>

<p>Many thanks in this release go to Thomas Lehmann, Wernfried Haas,
Jan-Hendrik Zab, Christian Hofstaedtler, Ralf Moll, Marc Haber,
Thorsten Glaser, Lothar Speil, Michael Whapples, Andreas Korsten,
Baptiste Daroussin, Ulrich Dangel and Moritz Augsburger
for their contributions. Many thanks also to the ones of you who
<a href="/donations/">donated something to the grml-team</a> and
of course to all those who have sent feedback since the last
release!</p>

<h3>More Information</h3>

<p>You can find out more about grml on <a href="/">our website</a>, <a
href="/irc/">IRC channel</a>, and <a
href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future grml announcements, please subscribe to <a
href="http://lists.mur.at/mailman/listinfo/grml-announce"> grml's
announcement list</a>.</p>

<h3>Further Questions?</h3>

<p><a href="http://grml.org/contact/">Contact us.</a></p>
