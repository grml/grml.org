+++
title = 'Release Notes: Grml 2011.05-rc1 - Codename Just Mari'
+++

<p><strong>Notice: Grml 2011.05-rc1 is a RELEASE CANDIDATE and not
yet the stable release!</strong></p>

<h3>About</h3>

<p>Grml is a bootable live system (Live-CD) based on Debian. It
includes a collection of GNU/Linux software especially for system
administrators and users of texttools. Grml provides automatic hardware
detection. Grml is the perfect rescue system, but you can also use it for
analyzing systems/networks or as a working environment. It is not
necessary to install anything to a harddisk; you don't even need a
harddisk to run it. Due to on-the-fly decompression Grml includes about
2 GB of software and documentation on the live system.</p>

<h3>New features</h3>

<ul>

<li><strong>New Linux kernel version</strong> based on 2.6.38.6</li>

<li>Initramfs is now XZ compressed (smaller)</li>

<li><a href="http://bugs.freestandards.org/show_bug.cgi?id=718">/run</a> has been introduced</li>

</ul>

<h4>Special new features:</h4>

<ul>

<li><strong>dns= bootoption</strong> allows for specifying static nameservers.</li>

<li>grml-feedback, a commandline application for providing feedback to the Grml Team via <a href="http://feedback.grml.org/">feedback.grml.org</a>.</li>

<li>Easier syntax for grml-quickconfig menu files, existing menu files are still valid.</li>

<li>
<strong>grml2iso small ISOs:</strong> grml2iso can now output small ISOs (~ 20MB) with only kernel and initrd. These are meant to be used with fetch=.
</li>

</ul>

<h3>Important Changes</h3>

<ul>
<li>iPXE has replaced gPXE.</li>
<li>Core scripts previously found in grml-scripts are now shipped as grml-scripts-core to facilitate reuse on plain Debian systems.</li>
<li>Due to popular demand, the ratpoison window manager is included once again.</li>
<li>grml-debootstrap adds the security repository for stable and testing installations.</li>
<li>grml-quickconfig will be executed on grml-small.</li>
<li>More complicated disk configurations (LVM and SW-RAID, though not stacked on each other) are supported when booting Grml via grml-rescueboot or with the findiso= and live-media= bootoptions.</li>

</ul>

<h3>Kernel</h3>

<p>Based on vanilla kernel 2.6.38.6 including <a
href="/kernel/">several patches</a> and additional modules:</p>

<pre class="rahmen">
aufs iscsitarget ndiswrapper openafs speakup sysprof
tp-smapi virtualbox-ose-guest xtables-addons
</pre>

<p>Visit <a href="/kernel/">grml.org/kernel/</a> for more details
regarding Grml's kernel. (Note that lzma and squashfs are now part
of the mainline kernel.)</p>

<h3>Bugfixes</h3>

<p>Fixed several bugs and issues reported in the
<a href="http://bts.grml.org/grml/">bug tracking system</a>.</p>

<h3>Packages / Software</h3>

<p>Details about shipped packages and their versions on Grml are
available at the <a href="/files/#debian">Debian section</a>. Visit
<!--
<a href="/files/release-2011.05-rc1/dpkg_get_selections">dpkg_get_selections</a>
for a main package listing and
-->
<a href="/files/release-2011.05-rc1/dpkg_list">dpkg_list</a> for a
detailed list of packages shipped with Grml 2011.05-rc1.</p>

<h3>Updates</h3>

<p>Updated all packages to Debian Unstable branch by 15th of May
2011 (plus some further selected updates).</p>

<p>Removed 80 packages (excluding lib* and *2.6.36-grml*) - please
notice that some of them are available under
different names/in different packages:</p>

<pre class="rahmen">
*2.6.36-grml* lib*

3270-common asn1c backuppc c3270 cdda2wav cedet-common
cfengine2 console-terminus cpp-4.4 csstidy ctrlproxy
detachtty dired doxygen eieio ekeyd g++-4.4 gcc-4.2-base
gcc-4.4 glipper-nognome hal hal-info iamerican ispell
libafterimage0 libaudio-scrobbler-perl log2mail lua5.1
modconf mp3c muscletools nilfs2-tools noshell opie-client
orpheus perl-suid portmap postfix-ldap pperl prismstumbler
python-openssl pytris qprof rc s3switch samba-common-bin
sbm spell spellutils spicctrl tasksel tasksel-data tetradraw
tiny tn5250 unrar-free user-setup viewglob weechat
weechat-core weechat-curses weechat-plugins weechat-scripts
xcardii xfaces xmms2 xmms2-client-cli xmss2-core xmms2-icon
xmms2-plugin-alsa xmms2-plugin-id3v2 xmms2-plugin-jack
xmms2-plugin-mad xmms2-plugin-vorbis xserver-xorg-input-wacom
xserver-xorg-video-geode xserver-xorg-video-nv
xtables-addons-common yatm zec
</pre>

<p>Added 27 new packages (exluding lib* and *2.6.38-grml*):</p>

<pre class="rahmen">
clipit console-setup-linux cpp-4.6 etherboot-qemu
firmware-realtek g++-4.6 gcc-4.6 gcc-4.6-base gir1.2-glib-2.0
git-man grml-feedback grml-scripts-core gs-cjk-resource
nginx-common nginx-full nvidia-common openafs-client
qemu-keymaps qemu-utils ratpoison rdfind rpcbind rs
ruby-ncurses seabios snmp v4l-utils
</pre>

<h3>Major news since release 2010.12</h3>

<ul>

<li>Grml development blog <a href="http://blog.grml.org/archives/350-A-new-home.html">moved to a new home</a> - now available at <a href="http://blog.grml.org/">blog.grml.org</a>.</li>

<li>
<a href="/survey2011-results/">Results of the Grml user survey</a> have been published.
</li>

<li>
German magazine <a href="http://www.heise.de/ct/meldung/c-t-extra-Netzwerke-ab-sofort-bestellbar-1200214.html">c't extra Netzwerke 01/2011</a> featured a special edition of Grml 2010.12.
</li>

<li>
German <a href="http://www.linux-magazin.de/Heft-Abo/Ausgaben/2011/03">Linux Magazine 03/11</a> featured Grml 2010.12 on DVD (DELUG version).
</li>

</ul>

<h3>Known issues</h3>

<p>Take a look at <a
href="https://github.com/grml/grml/wiki/release_candidate">the release
candidate webpage in the grml-wiki</a>. Please report problems using
information on <a href="/bugs/">grml.org/bugs/</a>.</p>

<!--
<p>Take a look at <a
href="https://github.com/grml/grml/wiki/grml_2011.05">grml_2011.05 @ grml-wiki</a>.
Please report problems using information on <a
href="/bugs/">grml.org/bugs/</a>.</p>
-->

<h3>Download Grml 2011.05-rc1</h3>

<p>Grml 2011.05-rc1-rc1 can be downloaded from
<a href="/download/prerelease/">grml.org/download/prerelease/</a>.</p>

<!--
<h3>Download Grml 2011.05-rc1</h3>

<p>grml 2011.05-rc1 can be downloaded from <a href="/download/">grml.org/download/</a>.</p>
-->

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help
fixing bugs and improving future releases. If you find a problem with
the release please check <a
href="https://github.com/grml/grml/wiki/grml_2011.05">grml_2011.05 @
grml-wiki</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback and
feature requests <a href="/contact/">to the Grml team</a>!</p>

<ul>
<li><a href="/contact/">grml.org/contact/</a>
<li><a href="/irc/">#grml on irc.freenode.org</a>
</ul>

<a name="thanks"></a>
<h3>Thanks</h3>

<p>The Grml team specially wants to thank <strong>Marianne</strong>, you know who you are!</p>

<p>Many thanks in this release go to (alphabetically)
Andreas Korsten,
Axel Beckert.
Bernhard Tittelbach,
Bert Schulze,
Christoph Biedl,
Dennis Hoppe,
Faheem Mitha,
Joerg Mueller,
Johann Felix Soden,
Jordi Funollet,
Jordan Uggla,
K. Wulff,
Lukas Prokop,
Martin Scharm,
Matthias Kopfermann,
Michael Renner,
Moritz Augsburger,
Richard Hartmann,
Roger Leigh,
Sebastian Boehm,
Sedat Dilek,
Thomas Koehler,
Thorsten Glaser,
Vsevolod Kozlov,
for their contributions.</p>

<p>We also would like to thank everyone who filled out the <a href="/survey2011-results/">Grml user survey 2011</a>.</p>

<h3>Release of the stable version</h3>

<p>The stable release of Grml 2011.05 is scheduled for end of May
2011.</p>

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
