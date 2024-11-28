+++
title = 'Release Notes: grml-small 0.4-rc1 Springginckerl (20070508)'
url = 'files/README-grml-small-0.4-rc1.html'
+++

<p><strong>Notice: grml-small 0.4-rc1 is a RELEASE CANDIDATE and not
yet the stable release!</strong></p>

<h3>About</h3>

<p>grml is a Debian-based Live-CD. It includes a collection of GNU/Linux
software especially for users of texttools and system administrators. grml
provides automatic hardware detection. You can use grml for example as a
rescue system, for analyzing systems/networks or as a working environment. It
is not necessary to install anything to a harddisk, you don't even need a
harddisk to run it. Due to on-the-fly decompression grml includes about 2.1
GiB of software and documentation on the CD.</p>

<p>Whereas grml provides about 2.1 GB of software on a 700 MB
ISO, grml-small is a flavor with only ~58 MB ISO-size (~170 MB
uncompressed). It does not provide a lot of software but the
essential stuff for being a rescue system on a business card
CD-ROM or a small USB device. You can use the Debian package
management system to install software on the fly (assuming you
have network access to a Debian mirror). Take a look at the '<a
href="/files/">Debian-Information'-section</a> if you are
searching for the package list.</p>

<h3>Bugfixes</h3>

<p>Fixed several bugs and and issues reported on <a
href="https://github.com/grml/grml/wiki/grml-small_0.3">grml-small_0.3
@ grml-wiki</a>.</p>

<h3>New features</h3>

<p>Several improved, updated and extended configuration files.</p>

<p>Synched all grml-packages with the ones used in grml 1.0,
providing several new and improved features.</p>

<h3>Kernel</h3>

<p>Based on vanilla kernel 2.6.20.11 including <a
href="/kernel/">several patches</a>. See <a
href="/kernel/">grml.org/kernel/</a> for more details.</p>

<!--
<h3>Important Changes</h3>

<p><strong>swap partitions:</strong> ...
-->

<h3>Packages / Software</h3>

<p>Details about shipped packages and their versions on grml are
available at the <a href="http://grml.org/files/#debian">Debian
section</a>.</p>

<h3>Updates</h3>

<p>Updated all packages to Debian Unstable branch by 20070507.</p>

<p>Removed 9 packages (excluding lib* and 2.6.18-grml*) [please notice
that some of them are available under a different name]:</p>

<pre class="rahmen">
*2.6.18-grml* lib*

fdisk-udeb grml-fixes grml-sysvinit hotplug-utils kbdconfig lvm-common
nparted sh-lib slang1a-utf8

</pre>

<p>Added 8 new packages (exluding lib* and *2.6.20-grml*):</p>

<pre class="rahmen">

bridge-utils bsdmainutils deborphan grml-debootstrap grml-shlib grml-small
most wipe

</pre>

<h3>Known issues</h3>

<p>Take a look at <a
href="https://github.com/grml/grml/wiki/release_candidate">grml_release
candidate @ grml-wiki</a>.  Please report problems using
information on <a href="/bugs/">grml.org/bugs/</a>.</p>
<!--
<p>Take a look at <a
href="https://github.com/grml/grml/wiki/grml-small_0.4">grml_0.4-small
@ grml-wiki</a>.  Please report problems using information on
<a href="/bugs/">grml.org/bugs/</a>.</p>
-->

<h3>Download grml-small 0.4-rc1</h3>

<p>grml-small 0.4-rc1 can be downloaded from mirrors listed on <a
href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<!--
<p>Your comments, bug reports, patches, and suggestions will
help fix bugs and improve future releases. If you find a
problem with the release please check <a
href="https://github.com/grml/grml/wiki/grml-small_0.4">grml_0.4-small
@ grml-wiki</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback,
feature requests and bug reports to the grml-team!</p>
-->

<p>Your comments, bug reports, patches, and suggestions will
help fix bugs and improve the upcoming stable release. If you
find a problem with the release candidate please check <a
href="https://github.com/grml/grml/wiki/release_candidate">grml_release
candidate @ grml-wiki</a> and report problems using information
on <a href="/bugs/">grml.org/bugs/</a>. Please send your
feedback, feature requests and bug reports to the
grml-team!</p>

<ul>
<li><a href="/contact/">grml.org/contact/</a>
<li><a href="/irc/">#grml on irc.freenode.org</a>
</ul>

<h3>Thanks</h3>

<p>Many thanks in this release go to the ones of you who <a
href="/donations/">donated something to the grml-team</a> and
of course to all those who have sent feedback since the last
release!</p>

<h3>More Information</h3>

<p>You can find out more about grml on <a href="/">our website</a>, <a
href="/irc/">IRC channel</a>, and <a href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future grml announcements, please subscribe to <a
href="http://lists.mur.at/mailman/listinfo/grml-announce"> grml's
announcement list</a>.</p>


<p><a
href="http://www.spreadshirt.net/shop.php?article_id=3966156&view_id=4#top"><img
align="right" style="margin-left: 20px; border: 0"
src="/img/grmlshirt_0.9.jpg" alt="the grml 0.9 shirt" /></a></p>

<h3>Further Questions?</h3>

<p><a href="http://grml.org/contact/">Contact us.</a></p>
