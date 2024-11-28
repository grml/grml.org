+++
title = 'Release Notes: Grml 2014.11 - Codename Gschistigschasti'
+++

<p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
border: 0" src="/screenshots/grml_2014.11.jpg" alt="*" /></a></p>

<p><a href="/download/">Download Now</a></p>

<h3>About</h3>

<p>This Grml release provides fresh software packages from Debian
testing (AKA jessie). As usual it also incorporates up2date hardware
support and fixes known bugs from the previous Grml
release.</p>

<h3>New features</h3>

<ul>

<li>new boot option <em>getfile.retries=...</em>: by specifying a number it controls the number of download retries for the netscript=... and netscript=... boot options (defaults to '10' if unset), usage example: 'getfile.retries=42'

<li><a href="/grml2usb/">grml2usb</a>: improved check for bootflag, new option --skip-bootflag and Python3 support

<li>grml-quickconfig: display IP and password if ssh boot option is used

<li>grml-lang: support language settings for Italy

<li>grml-hwinfo: support i2c-tools's decode-dimms, edac-utils and mcelog

<li><a href="/zsh/">grml-zshrc</a>:

<ul>
<li>rework and unify $PATH handling
<li>several improvements in battery information/reporting (incl. support for FreeBSD + OpenBSD)
<li>extend dchange() to support apt-get and multiple package names
</ul>

</li>

<li><a href="/grml-debootstrap/">grml-debootstrap</a>:

<ul>
<li>Adjust locale handling (LANG/LANGUAGE) to match with Debian wheezy defaults
<li>Initial packer/vagrant/autotest setup
<li>New option --vm to install VMs into LVs and such
<li>New option --defaultinterfaces to install default /etc/network/interfaces
<li>Set up default /etc/network/interfaces with dhcp for eth0 in VM use case
<li>Copy /etc/network/interfaces from host system, unless --nointerfaces is used or target is a VM
<li>Support --nokernel option to skip installation of default kernel images
<li>Support execution of --grub when installing to target directory
<li>Switch default filesystem from ext3 to ext4
<li>Provide --debug option for very verbose execution
</ul>

</li>

</ul>

<h3>Important Changes</h3>

<ul>

<li>Switch from http.debian.net to ftp.debian.org as default mirror in grml-live: because of unreliable mirror usage with http.debian.net the grml-live system uses ftp.debian.org as its main mirror

</ul>

<h3>Bits &amp; bolts</h3>

<ul>
<li>Linux kernel is based on <b>3.16.7</b>.</li>
<li>Fixed several bugs from the <a href="http://bts.grml.org/grml/">bug tracking system</a>.</li>
</ul>

<h3>Packages</h3>

<p>Details about shipped packages and their versions on Grml are
available in the <a href="/files/#debian">Debian section</a>. Visit
<a href="/files/grml64-full_2014.11/dpkg.list">dpkg_list</a> for a
detailed list of packages shipped with Grml 2014.11.</p>

<h3>Updates</h3>

<p>Packages are taken from Debian testing, 14th of November
2014. 15 packages have been removed, and these 26 new packages
have been added (plus dependencies, excluding lib* and kernel image):</p>

<pre class="rahmen">

adwaita-icon-theme augeas-tools cpp-4.9 debconf-utils dmeventd
firmware-zd1211 gcc-4.9-base glib-networking
glib-networking-common glib-networking-services
gsettings-desktop-schemas hicolor-icon-theme hiera init iperf
isolinux pxelinux python-parted python-prettytable
python-pyparsing python-six python3.4 python3.4-minimal ruby2.1
rubygems-integration startpar
</pre>

<p>These Debian packages have been removed/replaced (excluding lib* and kernel image):</p>

<pre class="rahmen">
acpi-fakekey cpp-4.8 gcc-4.7-base gptsync info install-info
lio-utils module-init-tools python3.3 python3.3-minimal
qemu-keymaps ruby1.9.1 tsconf xulrunner-24.0 zd1211-firmware
</pre>

<h3>Known issues</h3>

<p>Please visit <a href="/bugs/known/">the known bugs webpage</a>.</p>

<h3>Download Grml 2014.11</h3>

<p>Grml 2014.11 can be downloaded from
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
Charles A. Hewson
Christian Hofstaedtler,
Dansan,
Elias Probst,
Erik Bernstein,
Florian Apolloner,
Florian Klien,
Joeran,
Krisztian VASAS,
Marco d'Itri,
Markus Rekkenbeil,
Martin F. Krafft,
Michael Renner,
Michael Schierl,
Moviuro,
Patrick Schleizer and
Thilo Six
for their contributions.</p>

<h3>More Information</h3>

<p>You can find out more about Grml on <a href="/">our website</a>, <a
href="/contact/#irc">IRC channel</a>, and <a
href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future Grml announcements, please subscribe to <a
href="http://ml.grml.org/mailman/listinfo/grml-announce">Grml's
announcement list</a>.</p>
