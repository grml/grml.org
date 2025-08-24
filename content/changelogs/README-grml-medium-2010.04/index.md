+++
title = 'Release Notes: grml-medium 2010.04 - codename Grmlmonster'
+++

<p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
border: 0" src="/screenshots/grml_2010.04.jpg" alt="*" /></a></p>

<h3>About</h3>

<p>Grml is a bootable live system (Live-CD) based on Debian. It
includes a collection of GNU/Linux software especially for system
administrators and users of texttools. Grml provides automatic hardware
detection. You can use Grml (for example) as a rescue system, for
analyzing systems/networks or as a working environment. It is not
necessary to install anything to a harddisk; you don't even need a
harddisk to run it. Due to on-the-fly decompression Grml includes about
2 GB of software and documentation on the CD.</p>

<p>Whereas grml provides about 2.1 GB of software on a ~700 MB ISO and
<a href="/faq/#whatissmall">grml-small</a> is a flavor with only ~100 MB
ISO-size, <a href="/faq/#whatismedium">grml-medium</a> tries to close
the gap between those two flavours providing an ISO with ~200MB. It does
not provide all the software shipped with normal/big/large grml but
provides essential stuff, a full featured kernel and the X.org server.
You can use the Debian package management system to install software on
the fly (assuming you have network access to a Debian mirror). Take a
look at the '<a href="/files/">Debian-Information</a>'-section if you
are searching for the package list.</p>

<h3>New features</h3>

<h4>Special new features:</h4>

<ul>

<li><strong>vnc bootoption</strong>: booting with vnc=yourpassword and
the startx bootoption automatically starts the vnc service for user
'grml' using graphical remote access with provided password

<li><strong>dmraid related bootoptions</strong>: nodmraid to not
enable present dmraid devices,
dmraid=on to automatically enable any present dmraid devices and
dmraid=off to actively try to stop any possibly present dmraid
devices.

<li>New <strong>bootoption bootid</strong> for improving reliability
of boot process. The specified argument to the bootoption is matched
against a token on the ISO to make sure that only the correct Grml
version gets booted.</li>

<li>More <strong>robust network booting</strong>: The last Grml
release (2010.04) already invented the ethdevice= bootoption which
allows you to specify a specific NIC for booting. The bootoption
ethdevice and its surrounding code has been extended so it is possible to specify
multiple devices at once that should be configured. If you don't have
any specific configuration all present NICs will be used for
configuration via DHCP automatically. Visit <a
href="http://grml.supersized.org/archives/337-More-robust-network-booting.html">the
Grml developer blog for further information</a>

<li>Providing an improved <strong>default configuration for
top(1)</strong> utility when running as (non-root) user

<li>Improved <strong>serial console</strong> handling through
/etc/inittab*. Using normal getty instead of mgetty and several baud
rate settings (115200,57600,38400,19200,9600,4800,2400,1200) to let
getty figure out which mode should be used.

<li>Reworked <strong>xinitrc handling</strong>: modularize the code into ~/.xinitrc.d/
and support configuration through ~/.config/grml/xinitrc.

</ul>

<h4>New features in <a href="/zsh/#grmlzshrc">Grml's Zsh</a></h4>

<ul>

<li>new function changed()

<li>zshrc: map backtab to reverse-menu-complete

<li>smarter C-z shortcut

<li>Switch `minimal-shell()' from ksh93 to mksh

<li>Use wrapper functions for changing title/screen

<li>Some minor bugfixes and code enhancements

</ul>

<h4>Major changes in grml-scripts:</h4>

<ul>

<li>grml-quickconfig: rewritten from scratch with proper customisation support, now being shipped through
new Debian package grml-quickconfig

<li>Remove deprecated bt-audio script

<li>grml-lock: add support for graphical version via gdialog/zenity

<li>grml-setlang: do not set LC_CTYPE any longer

<li>grml-hostname: address xauth issue

<li>zsh-login: do not disable grml-quickconfig for serial console

<li>grml-info: improve support for customisation

</ul>

<h4><a href="/grml2usb/">grml2usb</a> (install Grml ISO(s) on usb device for booting):</h4>

<ul>

<li>Mount vfat devices with explicit iocharset option
<li>Support bootid bootoption
<li>Also set GRML_DEFAULT when running with --dry-run
<li>Make sure that --grub-mbr requires --grub
<li>... some minor bugfixes

</ul>

<p>Visit <a href="https://github.com/grml/grml/wiki/usb">the usb webpage
in the Grml wiki</a> and <a href="/grml2usb/">grml.org/grml2usb</a> for
more details regarding grml2usb.</p>

<h4><a href="/grml-debootstrap/">grml-debootstrap</a> (wrapper around debootstrap for installing plain Debian via Grml):</h4>

<ul>

<li>Add support for specifying filesystem + provide /etc/network/interfaces.examples
<li>Introduce option --nopackages
<li>Display executed debootstrap cmdline when running it
<li>Introduce --pre-scripts to be executed before chroot-scripts
<li>Remove cached debs by default to reduce diskpace during bootstrap
<li>Support and enable per default --keyring option
<li>... plus some bugfixes and minor enhancements

</ul>

<p>Visit <a href="/grml-debootstrap/">grml.org/grml-debootstrap/</a> for more
details regarding grml-debootstrap.</p>

<h4><a href="/grml-live/">grml-live</a> (build system for creating a
Grml (based) Linux live system):</h4>

<ul>

<li>Support for logging build information to database via grml-live-db
<li>Support new option '-d &lt;date&gt;' to use specified date instead of build time as date of release
<li>Add support for /boot/isolinux/submenu*.cfg files
<li>Add persistency feature to boot menu
<li>Simplify syslinux.cfg
<li>Disable PDiffs by default via /etc/apt/apt.conf.d/20pdiffs
<li>Support DEFAULT_BOOTOPTIONS via configuration file
<li>Store package list on ISO
<li>Ignore $EXIT_ON_MISSING_PACKAGES if running a dirty build through -B
<li>Rename /etc/grml/fai/files to /etc/grml/fai/config/files and move /etc/grml/fai/live-initramfs to /etc/grml/fai/config
<li>Provide buildd as separate Debian package buildd, use nail instead of mutt in buildd for sending mails
<li>.... plus several software related updates and bugfixes - check out the changelog for details

</ul>

<p>Visit <a href="/grml-live/">grml.org/grml-live</a> for
more details regarding grml-live.</p>

<h3>Kernel</h3>

<p>Based on vanilla kernel 2.6.33.2 including <a
href="/kernel/">several patches</a> and additional modules:</p>

<pre class="rahmen">
aufs virtualbox-ose-guest
</pre>

<p>Visit <a href="/kernel/">grml.org/kernel/</a> for more details
regarding Grml's kernel.</p>

<h3>Bugfixes</h3>

<p>Fixed several bugs and issues reported on <a
href="https://github.com/grml/grml/wiki/grml-medium_2009.10">grml-medium_2009.10 @
grml-wiki</a> and in the <a href="http://bts.grml.org/grml/">bug
tracking system</a>.</p>

<h3>Important Changes</h3>

<ul>

<li>Bootoption <strong>home</strong> has been dropped, the persistency
feature present since 2009.10 replaces this option.</li>

<li>Grml uses <strong>lang=en as default</strong> instead of lang=us
if no 'lang' bootoption has been specified.</li>

<li><strong>CPU frequency scaling enabled</strong> on all hardware
<strong>by default</strong> so it's no longer limited to laptops
only.</li>

<li>Grml's udev package has been dropped in favour of Debian's plain
version and adding Grml specified configuration and scripts through
Debian package <strong>grml-udev-config</strong>.</li>

<li>As the bootoption <strong>bootid</strong> is used as default
bootoption you need to make sure that you've an according and valid
bootid=... entry in your kernel cmdline or use the ignore_bootid
bootoption to skip the boot id check. This is especially relevant for
grml2usb installations (make sure to use a recent grml2usb version) as
well as booting with isofrom/findiso bootoptions from harddisks.</li>

</ul>

<h3>Packages / Software</h3>

<p>Details about shipped packages and their versions on grml-medium are
available at the <a href="/files/#debian">Debian section</a>. Visit <a
href="/files/release-2010.04-medium/dpkg_get_selections">dpkg_get_selections</a>
for a main package listing and <a
href="/files/release-2010.04-medium/dpkg_list">dpkg_list</a> for a more
detailed list of packages shipped with grml-medium 2010.04.</p>

<h3>Updates</h3>

<p>Updated all packages to Debian Unstable branch by 24st of march
2010 (plus some further selected updates).</p>

<p>Removed 21 packages (excluding lib* and *2.6.31-grml*) - please
notice that some of them are available under
different names/in different packages:</p>

<pre class="rahmen">
*2.6.31-grml* lib*

acl aufs-tools console-setup consolekit cpp-4.3
dbus finger gcc-4.3 gcc-4.3-base
grml-mercurial-utils grml-scanpartitions hal
hal-info memtest86+ mercurial mercurial-common
openssl-blacklist policykit ttf-dejavu
ttf-dejavu-extra xserver-xorg-input-hyperpen
</pre>

<p>Added 18 new packages (exluding lib* and *2.6.33-grml*):</p>

<pre class="rahmen">
apt-xapian-index cpp-4.4 gcc-4.4
grml-quickconfig grml-quickconfig-standard
grml-udev-config iptraf iso-codes jfsutils
kexec-tools keyboard-configuration python-debian
python-xapian python2.6 python2.6-minimal slsh
ufsutils zerofree
</pre>

<h3>Major changes since release 2009.10 (20091031)</h3>

<ul>

<li>Grml <a href="http://grml.supersized.org/archives/336-Grml-goes-microblogging.html">goes microblogging</a>.</li>
<li>New <a href="http://ml.grml.org/postorius/lists/grml-devel.ml.grml.org">Grml developer mailinglist</a>.</li>

</ul>

<h3>Known issues</h3>

<p>Take a look at <a
href="https://github.com/grml/grml/wiki/grml-medium_2010.04">grml-medium_2010.04 @ grml-wiki</a>.
Please report problems using information on <a
href="/bugs/">grml.org/bugs/</a>.</p>

<h3>Download grml-medium 2010.04</h3>

<p>grml-medium 2010.04 can be downloaded from the mirrors listed on <a
href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help
fixing bugs and improving future releases. If you find a problem with
the release please check <a
href="https://github.com/grml/grml/wiki/grml-medium_2010.04">grml-medium_2010.04 @
grml-wiki</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback and
feature requests <a href="/contact/">to the Grml team</a>!</p>

<ul>
<li><a href="/contact/">grml.org/contact/</a>
<li><a href="/irc/">#grml on irc.freenode.org</a>
</ul>

<h3 id="thanks">Thanks</h3>

<p>Many thanks (alphabetically) in this release go to
Alexander Menk,
Andras Korn,
Axel Beckert,
Christoph Biedl,
Christian Hofstaedtler,
Daniel Borkmann,
Gregor Perner,
Jordan Uggla,
Mark Jonas,
Martha Augsburger,
Pawel Sadkowski,
Richard Hartmann,
Sedat Dilek,
Stefan Weiss,
Suhanov Maxim,
Timo Boettcher,
Thomas Arendsen Hein,
Tong Sun,
Xuân Baldauf and
Zoran Dzelajlija
for their contributions.</p>

<h3>More Information</h3>

<p>You can find out more about grml on <a href="/">our website</a>, <a
href="/irc/">IRC channel</a>, and <a
href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future Grml announcements, please subscribe to <a
href="http://lists.mur.at/mailman/listinfo/grml-announce">Grml's
announcement list</a>.</p>

<p>If you are interested in development releases grab the daily ISOs
from <a href="http://daily.grml.org/">daily.grml.org</a>.</p>

<h3>Further Questions?</h3>

<p>Please feel free to <a href="/contact/">contact us.</a></p>
