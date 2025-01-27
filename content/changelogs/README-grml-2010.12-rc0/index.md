+++
title = 'Release Notes: Grml 2010.12-rc0 - Codename Gebrüder Grml'
+++

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

<li><strong>New Linux kernel version</strong> based on 2.6.36.2</li>

<li><strong>Config-less X</strong> to take advantage of X.org's automatic configuration</li>

<li>Support for Kernel Mode Setting (KMS)</li>

<li><strong>grml-rescueboot / loopback.cfg feature</strong> (note: more details will follow - TODO)</li>

<li>Initial release of <a href="/kantan/">Kantan</a>, an <strong>automated testing suite</strong> for continuous integration and a test environment; see <a href="/kantan/">grml.org/kantan/</a> for details (not shipped in Grml by default though)

<li><strong>Incremental grml-rebuildfstab</strong> triggered by udev events for faster execution time</li>

</ul>

<h4>Special new features:</h4>

<ul>

<!--
<li><strong>vim: persistant undo</strong> via ~/.vim/undo to undo changes even after you have saved and reloaded a file (disable the feature via: '<em>TODO</em>')</li>
-->

<li><strong>Improved serial console on multiple devices</strong> (thanks to Marc Haber)</li>

<li><strong>vnc_connect bootoption</strong> allowing to connect to an existing listening vnc client for NAT traversal.  Can be used to connect easily from devices behind firewalls as connection is initiated from the vnc server instead of the vnc client.</li>

<li><strong>grml-terminalserver no longer needs to rebuild the initrd</strong>, default initrd/initramfs shipped on ISO is fully-featured for PXE boot.</li>

<li>The <strong>netscript bootoption</strong> provides the new environment variable named NETSCRIPT to provide an option to ensure that the script is executed under the according environment.</li>

<li><strong>Updated manifold boot features</strong> (thanks to Thorsten Glaser): dd-ed ISOs (for booting via USB) now use isolinux as bootloader as well, so you get the same boot menu in normal CD boot as well as in USB boot.</li>

</ul>

<h4>New features in <a href="/zsh/#grmlzshrc">Grml's Zsh</a></h4>

<ul>
<li>Fully documented, see <a href="/zsh/">grml.org/zsh</a>  (thanks to Joerg Woelke) - <a href="/zsh/grmlzshrc.html">available online</a> as well as offline ('man 5 grmlzshrc')
<li>Uses zsh's built-in vcs_info and falls back to a grml-packaged version if the current version of zsh does not come with its own implementation
</ul>

<h3>Important Changes</h3>

<ul>

<li><strong>Removed many window managers</strong> (fvwm/fvwm-crystal, ratpoison, dwm, twm, w9wm, evilwm, jwm, pekwm) due to size and out-of-the-box configuration issues. See <a href="http://bts.grml.org/grml/issue897">issue897</a> for the discussion.</li>

<li>grml2hd is no longer available from <strong>grml-quickconfig</strong>, the selection dialog displayed after grml-full or grml-medium are done booting.</li>

<li>Reworked <strong>/etc/runlevel.conf</strong> deployment. Instead of providing runlevel.conf through grml-etc it's being deployed through grml-live to improve customization capabilities.</li>

<li><strong>Rewrite of grml-x</strong> due to new xorg.conf handling, please note that some options that are now unnecessary have been removed and that all single-dash options (-force, -nostart,...) became common long options (--force, --nostart,...).</li>

<li>Switched from live-initramfs to <strong>live-boot</strong> based on version 2.0.12.</li>

<li>Switched from pump to <strong>ISC dhclient</strong>, triggered by udev events during boot (use nodhcp to turn this off).</li>

<li>Network configuration via <strong>/etc/network/interfaces</strong> supported during boot-up (static IP address assignment - e.g. via ip=... booption - and dhcp are both configured via /etc/network/interfaces).</li>

<li>Reworked <strong>sound mixer handling</strong> to improve handling of IBM hardware and multiple soundcards.</li>

</ul>

<h3>Kernel</h3>

<p>Based on vanilla kernel 2.6.36.2 including <a
href="/kernel/">several patches</a> and additional modules:</p>

<pre class="rahmen">
aufs iscsitarget loop-aes lzma ndiswrapper openafs
speakup squashfs sysprof tp-smapi virtualbox-ose-guest
xtables-addons
</pre>

<p>Visit <a href="/kernel/">grml.org/kernel/</a> for more details
regarding Grml's kernel.</p>

<h3>Bugfixes</h3>

<p>Fixed several bugs and issues reported on <a
href="https://github.com/grml/grml/wiki/grml_2010.04">grml_2010.04 @
grml-wiki</a> and in the <a href="http://bts.grml.org/grml/">bug
tracking system</a>.</p>

<h3>Packages / Software</h3>

<p>Details about shipped packages and their versions on Grml are
available at the <a href="/files/#debian">Debian section</a>. Visit
<!--
<a href="/files/release-2010.12-rc0/dpkg_get_selections">dpkg_get_selections</a>
for a main package listing and
-->
<a href="/files/release-2010.12-rc0/dpkg_list">dpkg_list</a> for a
detailed list of packages shipped with Grml 2010.12-rc0.</p>

<h3>Updates</h3>

<p>Updated all packages to Debian Unstable branch by 15th of december
2010 (plus some further selected updates).</p>

<p>Removed 174 packages (excluding lib* and *2.6.33-grml*) - please
notice that some of them are available under
different names/in different packages:</p>

<pre class="rahmen">
*2.6.33-grml* lib*

2vcard abs-guide ace-of-penguins apt-xapian-index
archivemail asr-manpages astyle aterm aub auto-apt axp
bibcursed bluez-alsa cabber calcurse calife camserv
cbrowser cddb cdecl cdrbq cdrecord cdtool check clive
cmatrix conky console-common console-tools
cpuburn-in-binary cvs-buildpackage cw cwcp ddccontrol
ddccontrol-db dvdrtools dwm dwm-tools emcast evilwm faad
fdflush fdutils fgetty figlet filepp filetraq fluxconf
fnord fusesmb fvwm fvwm-crystal-minimal geresh gif2png
giftcurs gnupg-curl gnupg-pkcs11-scd gocr gq gs-common
habak hasciicam hnb hotkeys i8kutils ibritish icecast2
ifplugd ike-scan ingerman ipx irb irb1.8 irpas isakmpd
isdnactivecards jailtool jwm kbd-compat kqemu-common
live-initramfs loco lslk mgetty mgp moosic mp3blaster
mp3wrap mpage mplayer-skin-blue mrxvt mrxvt-common
mtd-tools multi-aterm ncpfs nedit netstat-nat
nictools-nopci nstx odbcinst1debian1 offlineimap
openafs-client opencryptoki pamusb-tools pcopy
pdns-backend-ldap pdns-backend-pgsql pdns-backend-pipe
pdns-backend-sqlite pdns-server pdumpfs pekwm perf
playmp3list pmidi postgresql-client-8.4 ppmd psfontmgr psh
python-xapian ratmenu ratpoison rdiff rdiff-backup rdoc
rdoc1.8 rman router-audit-tool scsiadd smake snmp snowdrop
speechd-up splitvt starttls swapd tcl8.3 thttpd tla
toshset toshutils tpm-tools trousers ttmkfdir twm unixcw
uswsusp w9wm wmmisc wprint wyrd x2x xfonts-intl-european
xfs xpdf-common xserver-xorg-input-aiptek
xserver-xorg-input-elographics xserver-xorg-input-evtouch
xserver-xorg-input-joystick xserver-xorg-input-kbd
xserver-xorg-input-mouse xserver-xorg-input-penmount
xserver-xorg-input-vmmouse xserver-xorg-input-void
xserver-xorg-video-amd xserver-xorg-video-dummy
xserver-xorg-video-glint xserver-xorg-video-ivtv
xserver-xorg-video-radeonhd xserver-xorg-video-tga
xserver-xorg-video-v4l xserver-xorg-video-via yaird ysm
</pre>

<p>Added 46 new packages (exluding lib* and *2.6.36-grml*):</p>

<pre class="rahmen">

3270-common acpi-fakekey anthy-common aufs-tools
bitlbee-common c3270 console-setup cups-ppdc diff ekeyd
fbcat gcc-4.2-base gcc-4.3-base gconf2-common git
grml-rescueboot growisofs hunspell hunspell-de-de
hunspell-en-us i3-wm iamerican isc-dhcp-client
isc-dhcp-common isc-dhcp-server jackd2 kbd keynav
live-boot live-boot-initramfs-tools lua5.1 m17n-contrib
mktemp nsd3 odbcinst1debian2 postgresql-client-9.0
python-apt-common python-chardet python-mutagen
python-openssl python-pycurl squashfs-tools suckless-tools
x11vnc-data xserver-xorg-video-nouveau zenity
</pre>

<h3>Major changes since release 2010.04 (20100429)</h3>

<ul>

<li><a href="/reports/devmeeting_2010/">Grml developer meeting</a> in Vienna.</li>

<li>Christian Hofstaedter joined the <a href="/team/">Grml team</a>.</li>

<li><a href="http://grml.supersized.org/archives/347-Event-Grml-at-FrOSCon-2010.html">Grml at FrOSCon 2010</a>.</li>

<li>German magazine <a href="http://www.freiesmagazin.de/">freiesMagazin</a> provides an article about Grml in edition 06/2010.</li>

<li><a href="http://grml.supersized.org/archives/343-Event-Grml-Talk-in-DornbirnAustria.html">Grml talk at Net Culture Lab</a> in Dornbirn.</li>

</ul>

<h3>Known issues</h3>

<p>Take a look at <a
href="https://github.com/grml/grml/wiki/release_candidate">the release
candidate webpage in the grml-wiki</a>. Please report problems using
information on <a href="/bugs/">grml.org/bugs/</a>.</p>

<!--
<p>Take a look at <a
href="https://github.com/grml/grml/wiki/grml_2010.12">grml_2010.12 @ grml-wiki</a>.
Please report problems using information on <a
href="/bugs/">grml.org/bugs/</a>.</p>
-->

<h3>Download Grml 2010.12-rc0</h3>

<p>Grml 2010.12-rc0-rc1 can be downloaded from
<a href="/download/prerelease/">grml.org/download/prerelease/</a>.</p>

<!--
<h3>Download Grml 2010.12-rc0</h3>

<p>grml 2010.12-rc0 can be downloaded from <a href="/download/">grml.org/download/</a>.</p>
-->

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help
fixing bugs and improving future releases. If you find a problem with
the release please check <a
href="https://github.com/grml/grml/wiki/grml_2010.12">grml_2010.12 @
grml-wiki</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback and
feature requests <a href="/contact/">to the Grml team</a>!</p>

<ul>
<li><a href="/contact/">grml.org/contact/</a>
<li><a href="/irc/">#grml on irc.freenode.org</a>
</ul>

<a name="thanks"></a>
<h3>Thanks</h3>

<p>Many thanks (alphabetically) in this release go to
Adriana Teixera,
Alexander 'Leo' Bergolth,
Antonio Diaz Diaz,
Andrey Rahmatulli,
Axel Beckert,
Carsten Hey,
Christoph Biedl,
Eduard Bloch,
Jens Kubieziel,
Bernd Arnold,
Gregor Perner,
Jan-Pieter Jacobs,
Joerg Woelke,
Jordan Uggla,
Marc Haber,
Marek Straka,
Martin Krafft,
Marvin Vek,
Michael Gissing,
Michael Stapelberg,
Michel Isard,
Peter Palfrader,
Richard Hartmann,
Sedat Dilek,
Sven Joachim,
Thomas Koehler,
Thorsten Glaser and
Tonnerre Lombard
for their contributions.</p>

<p>We also would like to thank everyone who made <a href="/reports/devmeeting_2010/">the Grml-developer
meeting</a> possible. This includes <a href="http://metalab.at/">Metalab</a>,
<a href="http://www.tarent.de/">Tarent</a> and many unnamed generous private sponsors.</p>

<h3>Release of the stable version</h3>

<p>The stable release of Grml 2010.12 is scheduled for end of december
2010.</p>

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
