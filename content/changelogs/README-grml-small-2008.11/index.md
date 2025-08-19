+++
title = 'Release Notes: grml-small 2008.11 - codename Schluchtenscheisser'
+++

<h3>About</h3>

<p>grml is a Debian-based Live-CD. It includes a collection of GNU/Linux
software especially for users of texttools and system administrators.
grml provides automatic hardware detection. You can use grml for example
as a rescue system, for analyzing systems/networks or as a working
environment. It is not necessary to install anything to a harddisk, you
don't even need a harddisk to run it, unless you want to (use grml2hd
for this). Due to on-the-fly decompression grml includes about 2.1GB
of software and documentation on the CD.</p>

<p>Whereas grml provides about 2.1 GB of software on a 700 MB ISO,
grml-small is a flavor with only ~75 MB ISO-size (~240 MB
uncompressed). It does not provide a lot of software but the
essential stuff for being a rescue system on a business card CD-ROM
or a small USB device. You can use the Debian package management
system to install software on the fly (assuming you have network
access to a Debian mirror). Take a look at the <a
href="/files/">'Debian-Information'-section</a> if you are
searching for the package list.</p>

<h3>Bugfixes</h3>

<p>Fixed several bugs and issues reported on <a
href="https://github.com/grml/grml/wiki/grml-small_0.4">grml-small
0.4 @ grml-wiki</a>.</p>

<h4>New grml-script:</h4>

<ul>

<li><strong>grml-chroot</strong>: wrapper around chroot with
proc/sys/pts/dev filesystem handling</li>

</ul>

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

<li>using same kernel version as in grml / grml-medium for easy
installation further features/modules on request</li>

<li>integration of <a
href="http://www.zsh.org/mla/users/2008/msg00842.html">vcs_info</a>
within Zsh prompt (<a
href="/screeni/gkrellShoot_08-11-03_235459.png">demo
screenshot</a>)

<li>use random password if bootoption 'ssh' doesn't have an
option (thanks to Michael Holzt and Marc Haber)</li>

<li>(re-)implemented <a
href="https://grml.org/cheatcodes/">the
isofrom and tohd bootoptions</a></li>

<li>moved from syslog-ng to rsyslog</li>

<li>added supported for swedish keyboard (thanks to Martin Karresand)</li>

</ul>

<h3>Kernel</h3>

<p>Based on vanilla kernel 2.6.26.8 including <a
href="/kernel/">several patches</a>.  Notice: some more modules
aren't pre-installed but available through the <a
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

<h3>Packages / Software</h3>

<p>Details about shipped packages and their versions on grml are
available at the <a href="/files/#debian">Debian section</a>. See <a
href="/files/release-2008.11-small/dpkg_get_selections">dpkg_get_selections</a>
for a main package listing and <a
href="/files/release-2008.11-small/dpkg_list">dpkg_list</a> for a more detailed
list of packages shipped with grml-small 2008.11.</p>

<h3>Updates</h3>

<p>Updated all packages to Debian Unstable branch by 20th of
november 2008 (plus some further selected updates).</p>

<p>Removed 15 packages (excluding lib* and *2.6.20-grml*) - please
notice that some of them are available under
different names/in different packages:</p>

<pre class="rahmen">
*2.6.20-grml* lib*

dhcp-client firmware-ipw3945 gcc-3.3-base gcc-4.1-base gettext-base
grml-small ipw3945d localepurge modutils nvi pppoeconf prism54-firmware
syslog-ng tinysnmp-tools unzoo
</pre>

<p>Added 41 new packages (exluding lib* and *2.6.26-grml*):</p>

<pre class="rahmen">
apt-utils bc debian-archive-keyring dhcp3-client dhcp3-common ed ethtool
gcc-4.2-base gcc-4.3-base gnupg gpgv grml-crypt grml-debian-keyring
grml-hwinfo grml-policyrcd grml-vpn grml2hd-utils grub-common htop hwinfo
ipsec-tools iptables keychain live-initramfs lzma md5deep
netcat-traditional nfs-common openssh-blacklist policyrcd-script-zg2
portmap realpath resolvconf rsyslog sysfsutils syslinux-common traceroute
user-setup vim-common vim-tiny zoo
</pre>

<h3>Upgrade notes</h3>

<p>As usual you can upgrade your grml harddisk system to the latest grml
version running 'apt-get update; apt-get install grml'. Take a look at <a
href="https://github.com/grml/grml/wiki/upgrading">the upgrading webpage in
the grml-wiki</a> as well. Notice: If you are using grml in a productive
environment and/or use a grml2hd installation we strongly recommend to
subscribe to <a href="/mailinglist/">the grml-user
mailinglist</a>!</p>

<h3>Major changes since release grml-small 0.4 (20070518)</h3>

<ul>

<li><a href="/2008/10/01/">Migration from Mercurial to Git</a>.

<li>Developer related mailinglists moved from mlmmj to mailmain setup at
<a href="http://ml.grml.org/">ml.grml.org</a>.

<li>For information regarding further changes visit <a href="/news/">the news section</a>.

</ul>

<h3>Known issues</h3>

<p>Take a look at <a
href="https://github.com/grml/grml/wiki/grml-small_2008.11">grml-small_2008.11 @ grml-wiki</a>.
Please report problems using information on <a
href="/bugs/">grml.org/bugs/</a>.</p>

<h3>Download grml-small 2008.11</h3>

<p>grml-small 2008.11 can be downloaded from mirrors listed on <a
href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help fix bugs
and improve future releases. If you find a problem with the release please
check <a href="https://github.com/grml/grml/wiki/grml-small_2008.11">grml-small_2008.11 @
grml-wiki</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback, feature
requests and bug reports to the grml-team!</p>

<ul>
<li><a href="/contact/">grml.org/contact/</a>
<li><a href="/irc/">#grml on irc.freenode.org</a>
</ul>

<h3>Thanks</h3>

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
