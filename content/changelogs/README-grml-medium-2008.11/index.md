+++
title = 'Release Notes: grml-medium 2008.11 - codename Schluchtenscheisser'
+++

<p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
border: 0" src="/screenshots/grml_2008.11.jpg" width="140" alt="*" /></a></p>

<h3>About</h3>

<p>grml is a Debian-based Live-CD. It includes a collection of GNU/Linux
software especially for users of texttools and system administrators.
grml provides automatic hardware detection. You can use grml for example
as a rescue system, for analyzing systems/networks or as a working
environment. It is not necessary to install anything to a harddisk, you
don't even need a harddisk to run it, unless you want to (use grml2hd
for this). Due to on-the-fly decompression grml includes about 2.1GB
of software and documentation on the CD.</p>

<p>Whereas grml provides about 2.1GB of software on a ~700MB ISO
and grml-small is a flavor with only ~75MB ISO-size, grml-medium
tries to close the gap between those two flavours providing an ISO
with ~200MB. It does not provide all the software shipped with
normal/big/large grml but provides essential stuff, a full featured
kernel and the X.org server. You can use the Debian package
management system to install software on the fly (assuming you have
network access to a Debian mirror). Take a look at the <a
href="/files/">'Debian-Information'-section</a> if you are
searching for the package list.</p>

<h3>Bugfixes</h3>

<p>Fixed several bugs and issues reported on <a
href="https://github.com/grml/grml/wiki/grml-medium_0.1">grml-medium_0.1 @
grml-wiki</a>.</p>

<h4>New grml-script:</h4>

<ul>

<li><strong>grml-chroot</strong>: wrapper around chroot with
proc/sys/pts/dev filesystem handling</li>

</ul>

<h4><a href="/grml-live/">grml-live</a> (build system for creating a grml (based) live-cd):</h4>

<ul>

<li>several new packages in the different flavour classes

<li>improve error handling

<li>improve checks for -[no]lzma for different squashfs-tools

<li>output grml version in grml's live-initramfs script

<li>automatically activate grml-testing repository for devel releases and daily snapshots

<li>and several other updates... check out the <a
href="https://git.grml.org/f/grml-live/debian/changelog">Debian changelog</a> for details

</ul>

<p>See <a href="/grml-live/">grml.org/grml-live/</a> for more
details regarding grml-live.</p>

<h4><a href="/grml-debootstrap/">grml-debootstrap</a> (wrapper around debootstrap for installing plain Debian via grml):</h4>

<ul>

<li>Provide interactive configuration dialog if the configuration
file wasn't set up.

<li>Initial support for SW-RAID.

<li>Use root=UUID=... by default if possible to avoid possible
race conditions with libata vs. pata

<li>Use stages based on target information, this gives us the
possibility to run multiple instance of grml-debootstrap.

<li>Use policy-rc.d inside chroot to avoid startup of daemons.

<li>Remove stages after successful execution.

<li>Move stages to /var/cache/grml-debootstrap.

<li>Install devices using our own device tarball instead of
running MAKEDEV (which is just an ungly fork bomb).

<li>Run aptitude with --without-recommends option.

<li>Copy /etc/debootstrap/[s]bin as well to the chroot if they
are present

<li>Allow symlinks when coping existing files to chroot

<li>Pre-seed packages using /etc/debootstrap/debconf-selections

<li>Support DEBOOTSTRAP_OPT for passing extra parameters to the
debootstrap command

<li>Support KEEP_SRC_LIST to allow user to provide their own apt
sources.list from /etc/debootstrap/etc/apt/sources.list

<li>and a lot more updates... check out the <a
href="https://git.grml.org/f/grml-debootstrap/debian/changelog">Debian changelog</a> for details

</ul>

<p>Special thanks to Tong Sun for his contributions and to <a
href="http://www.sipwise.com/">Sipwise GmbH</a> for sponsoring
development of grml-debootstrap.</p>

<p>See <a href="/grml-debootstrap/">grml.org/grml-debootstrap/</a> for more
details regarding grml-debootstrap.</p>

<h4>Special new features:</h4>

<ul>

<li>integration of <a
href="http://www.zsh.org/mla/users/2008/msg00842.html">vcs_info</a>
within Zsh prompt (<a
href="/screeni/gkrellShoot_08-11-03_235459.png">demo
screenshot</a>)

<li>use random password if bootoption 'ssh' doesn't have an
option (thanks to Michael Holzt and Marc Haber)</li>

<li>(re-)implemented <a
href="/cheatcodes/">the
isofrom and tohd bootoptions</a></li>

<li>moved from syslog-ng to rsyslog</li>

<li>added supported for swedish keyboard (thanks to Martin Karresand)</li>

</ul>

<h3>Kernel</h3>

<p>Based on vanilla kernel 2.6.26.8 including <a
href="/kernel/">several patches</a> and additional modules:</p>

<pre class="rahmen">
at76-usb atl2 aufs madwifi rt2400 rt2500 rt73 squashfs
</pre>

<p>Notice: some more modules (like <a
href="https://github.com/grml/grml/wiki/ati">fglrx</a> and <a
href="https://github.com/grml/grml/wiki/nvidia">nvidia</a>) are not
pre-installed but available through the <a
href="http://deb.grml.org/">grml-repository</a>.</p>

<p>See <a href="/kernel/">grml.org/kernel/</a> for more details
regarding the grml-kernel.</p>

<h3>Important Changes</h3>

<p>Using a new <strong>version schema</strong>: as we want to
improve tracking of all the different flavours and releases of
grml we decided to use "$flavour $YYYY.MM" for the stable
releases. No further confusing 'grml 1.1 vs. grml64 0.2'.</p>

<p>Switched from old IDE drivers to <strong>libata</strong>
drivers. What might have been known as /dev/hdX on your system
will become /dev/sdX nowadays.</p>

<p><strong>Truecrypt</strong> isn't shipped anymore Because
Truecrypt is licensed under a specific license named 'TrueCrypt
License 2.6' which doesn't permit us to distribute Truecrypt. See
<a href="http://www.truecrypt.org/legal/license">section VI/4 of
the license</a> for details.</p>

<p><strong>Locales</strong> provided via /usr/share/locale have
been removed due to space reasons, though /usr/share/i18n/locales
hasn't been modified as well as package specific files.</p>

<h3>Packages / Software</h3>

<p>Details about shipped packages and their versions on grml are
available at the <a href="/files/#debian">Debian section</a>. See <a
href="/files/release-2008.11-medium/dpkg_get_selections">dpkg_get_selections</a>
for a main package listing and <a
href="/files/release-2008.11-medium/dpkg_list">dpkg_list</a> for a more detailed
list of packages shipped with grml-medium 2008.11.</p>

<h3>Updates</h3>

<p>Updated all packages to Debian Unstable branch by 20th of
november 2008 (plus some further selected updates).</p>

<p>Removed 23 packages (excluding lib* and *2.6.23-grml*) - please
notice that some of them are available under
different names/in different packages:</p>

<pre class="rahmen">
*2.6.23-grml* lib*

cpp-4.2 firmware-ipw3945 gcc-4.1-base gcc-4.2 genisoimage info ipw3945d
nvclock python2.4 python2.4-minimal radeontool rt73-common
squashfs-tools syslog-ng sysutils toshset unzoo w3m x11-apps
x11-session-utils x11-xfs-utils xbase-clients xserver-xorg-video-newport
</pre>

<p>Added 27 new packages (exluding lib* and *2.6.26-grml*):</p>

<pre class="rahmen">
ca-certificates cpp-4.3 gcc-4.3 gcc-4.3-base genext2fs grub-common
irqbalance latencytop lzma make mercurial-common netcat-traditional
nfs-kernel-server openssh-blacklist openssl-blacklist powertop rsyslog
squashfs-lzma-tools syslinux-common xfsdump xserver-xorg-video-geode
xserver-xorg-video-mach64 xserver-xorg-video-openchrome
xserver-xorg-video-r128 xserver-xorg-video-radeon
xserver-xorg-video-radeonhd zoo
</pre>

<h3>Upgrade notes</h3>

<p>As usual you can upgrade your grml harddisk system to the latest grml
version running 'apt-get update; apt-get install grml'. Take a look at <a
href="https://github.com/grml/grml/wiki/upgrading">the upgrading webpage in
the grml-wiki</a> as well. Notice: If you are using grml in a productive
environment and/or use a grml2hd installation we strongly recommend to
subscribe to <a href="/mailinglist/">the grml-user
mailinglist</a>!</p>

<h3>Major changes since release grml-medium 0.1 (20080224)</h3>

<ul>

<li><a href="/2008/10/01/">Migration from Mercurial to Git</a>.

<li>Developer related mailinglists moved from mlmmj to mailmain setup at
<a href="http://ml.grml.org/">ml.grml.org</a>.

</ul>

<h3>Known issues</h3>

<p>Take a look at <a
href="https://github.com/grml/grml/wiki/grml-medium_2008.11">grml-medium_2008.11 @ grml-wiki</a>.
Please report problems using information on <a
href="/bugs/">grml.org/bugs/</a>.</p>

<h3>Download grml-medium 2008.11</h3>

<p>grml-medium 2008.11 can be downloaded from mirrors listed on <a
href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help fix bugs
and improve future releases. If you find a problem with the release please
check <a href="https://github.com/grml/grml/wiki/grml-medium_2008.11">grml-medium_2008.11 @
grml-wiki</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback, feature
requests and bug reports to the grml-team!</p>

<ul>
<li><a href="/contact/">grml.org/contact/</a>
<li><a href="/irc/">#grml on irc.freenode.org</a>
</ul>

<h3 id="thanks">Thanks</h3>

<p>Many thanks in this release go to Tong Sun, Martin Karresand,
Ralf Schlatterbeck, Thomas Köhler, Peter Palfrader, Michael Holzt,
Florian Schuele, Marc Haber, Sipwise GmbH, Charles Hewson, Thomas
Lehmann, Christian Vogel, Andreas Roedl and Christian Hofstaedtler
for their contributions. Many thanks also to the ones of you who
<a href="/donations/">donated something to the grml-team</a> and
of course to all those who have sent feedback since the last
release!</p>

<h3>More Information</h3>

<p>You can find out more about grml on <a href="/">our website</a>, <a
href="/irc/">IRC channel</a>, and <a href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future grml announcements, please subscribe to <a
href="http://lists.mur.at/mailman/listinfo/grml-announce"> grml's
announcement list</a>.</p>

<h3>Further Questions?</h3>

<p><a href="/contact/">Contact us.</a></p>
