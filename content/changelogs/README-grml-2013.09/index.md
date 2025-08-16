+++
title = 'Release Notes: Grml 2013.09 - Codename Hefeknuddler'
+++

<p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
border: 0" src="/screenshots/grml_2013.09.jpg" alt="*" /></a></p>

<h3>About</h3>

<p>This Grml release provides fresh software packages after the Debian
stable release (AKA wheezy) has been released. As usual it also
incorporates up2date hardware support and fixes known bugs from the
previous Grml release.</p>

<h3>New features</h3>

<ul>

<li>new boot option <em>encpasswd</em>: takes a hashed password as
argument, setting password of users root and grml to the specified
value (use e.g. 'mkpasswd -H md5' to generate such a hash)

<li><em>grml-hwinfo</em> supports iproute's ip tool, sg_inq from
sg3-utils and lscpu, lsblk, dmsetup ls --tree

<li>grml-lang includes <em>french keymap</em> support

</ul>

<h3>Important Changes</h3>

<ul>

<li><em>UTC</em> is used as default time zone, to use a different
setting you can use the <em>tz</em> boot option (usage example:
tz=Europe/Vienna)

<li>To match the behaviour with the <em>ssh</em> boot option the
<em>passwd</em> boot option now also sets the password for user root -
and not only for user 'grml'.

<li>grml-autoconfig (and its GRMLCFG feature) doesn't support
<em>floppy</em> disks any longer

<li>zshrc: <em>new prompt handling</em>, see <a
href="http://blog.grml.org/archives/381-grml-zshrc-new-prompt-feature.html">Grml
blog for more details</a>

<li>zshrc: to enable <em>power completion</em> / abbreviation
expansion use "ctrl-x ." instead of ",." (see <a
href="https://git.grml.org/f/grml-etc-core/debian/NEWS">debian/NEWS
for details</a>)

<li>Grml does not ship <em>clamav anti-virus definitions</em> any
longer due to space reasons (adding ~70MB to the ISO size). If you
want to get up2date anti-virus definitions please manually invoke the
freshclam utility.

</ul>

<h3>Bits &amp; bolts</h3>

<ul>
<li>Linux kernel is based on <b>3.10.10</b>.</li>
<li>Fixed several bugs from the <a href="http://bts.grml.org/grml/">bug tracking system</a>.</li>
</ul>

<h3>Packages</h3>

<p>Details about shipped packages and their versions on Grml are
available at the <a href="/files/#debian">Debian section</a>. Visit
<a href="/files/grml64-full_2013.09/dpkg.list">dpkg_list</a> for a
detailed list of packages shipped with Grml 2013.09().</p>

<h3>Updates</h3>

<p>Packages are taken from Debian testing, 27th of September
2013. 5 packages have been removed, and these 32 new packages
have been added (plus dependencies, excluding lib* and kernel image):</p>

<pre class="rahmen">
ash augeas-lenses clonezilla dconf-gsettings-backend
dconf-service debugedit dh-python drbl fonts-dejavu-core
gcc-4.8-base info init-system-helpers iproute2 nwipe puppet
puppet-common python3 python3-minimal python3.3
python3.3-minimal ruby-augeas ruby-safe-yaml ruby-shadow
tasksel tasksel-data wakeonlan xdg-utils xpdf
xserver-xorg-input-mouse xserver-xorg-input-vmmouse
xulrunner-17.0 zsh-common
</pre>

<p>These Grml packages have been removed/replaced (excluding lib* and kernel image):</p>

<pre class="rahmen">
epdfview febootstrap makedev python-gnupginterface xulrunner-10.0
</pre>

<h3>Known issues</h3>

<p>Please visit <a href="/bugs/known/">the known bugs webpage</a>.</p>

<h3>Download Grml 2013.09</h3>

<p>Grml 2013.09 can be downloaded from
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
Andreas Gredler,
Benedikt Morbach,
Bernhard Tittelbach,
Christian Hesse,
Christian Hofstaedtler,
Falko Mach,
Florian Ermisch,
Jan Hruban,
Jordan Uggla,
Joe Stingel,
ludinator.
Lukas Prokop,
Martin Šlouf,
Michael Biebl,
Moritz Molle,
Peter Palfrader,
thinkgear,
Thorsten Glaser,
Till Maas,
Ulrich Dangel and
Ziirish
for their contributions.</p>

<h3>More Information</h3>

<p>You can find out more about Grml on <a href="/">our website</a>, <a
href="/contact/#irc">IRC channel</a>, and <a
href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future Grml announcements, please subscribe to <a
href="http://ml.grml.org/postorius/lists/grml-announce.ml.grml.org">Grml's
announcement list</a>.</p>
