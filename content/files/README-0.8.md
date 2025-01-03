+++
title = 'Release Notes: grml 0.8 Funkenzutzler (20060813)'
url = 'files/README-0.8.html'
+++

<p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
border: 0" src="/screenshots/grml_0.8_small.jpg" width="140" alt="*" /></a></p>

<h3>About</h3>

<p>grml is a Debian-based Live-CD. It includes a collection of GNU/Linux
software especially for users of texttools and system administrators. grml
provides automatic hardware detection. You can use grml for example as a
rescue system, for analyzing systems/networks or as a working environment. It
is not necessary to install anything to a harddisk, you don't even need a
harddisk to run it. Due to on-the-fly decompression grml includes about 2.1
GiB of software and documentation on the CD.</p>

<p><strong><a href="/donations/">We do need your help!</a></strong></p>

<h3>Bugfixes</h3>

<p>Fixed several bugs and and issues reported on <a
href="https://github.com/grml/grml/wiki/grml_0.7">grml_0.7 @
grml-wiki</a>.</p>

<h3>New features</h3>

<p>Several improved, updated and extended configuration files.</p>

<h4>New grml-scripts (some selected ones):</h4>

<ul>

<li>blacklist: blacklist module via module-init-tools
(/etc/modprobe.d/grml)

<li>unblacklist: remove blacklisted module from /etc/modprobe.d/grml

<li>install-packages-useful: a script which installs useful software on
your grml system. This script is similar to Ubuntu's <a
href="http://easyubuntu.freecontrib.org/">EasyUbuntu</a> and <a
href="http://robotgeek.org/blog/easybreezy/">EasyBreezy</a>

<li>grml-policy-rc.d: a wrapper script for invoke-rc.d to avoid automatical
startup of init scripts via invoke-rc.d; take a look at 'man
grml-policy-rc.d' for more details

<li>osd_server.py: listen for incoming messages on a specific port and
print them via osd_cat; run 'grml-tips osd' for more details (thanks to
Ulrich Dangel, Alexander Bernauer and Rico Schickel)

<li>myip: return IP address of running system on stdout

<li>grml-tpm: set up a system for use with <a
href="http://en.wikipedia.org/wiki/Trusted_platform_module">TPM
technology</a>

<li>grml-resolution: change X resolution via a simple menu frontend (script
based on work by Florian Keller)

<li>grml-hostname: set hostname of system

</ul>

<h4>New bootparameters/cheatcodes (some selected ones):</h4>

<ul>

<li>splash: text based bootsplash (based on contribution by Florian
Keller)

<li>noblank: disable console blanking

</ul>

<h4><a href="/grml2hd/">grml2hd</a> (install grml to harddisk):</h4>

<ul>

<li>partition selector (just invoke grml2hd without any further options)

<li>added support for setting hostname via grml-hostname

<li>grml-setlang: set language system-wide on grml system. Set $LANG,
$LC_ALL, $COUNTRY,... in /etc/default/locale (formerly known as
/etc/environment)

<li>grml-setkeyboard: set keyboard layout system-wide on grml system via
/etc/sysconfig/keyboard (Notice: Does not affect the currently used keyboard
layout, use grml-lang instead to temporarly change settings)

<li><a
href="http://grml.supersized.org/archives/154-reworked-grml2hd-utils,-improved-grml2hd.html">reworked
grml2hd-utils</a>
</ul>

<p>See <a href="/grml2hd/">grml.org/grml2hd/</a> for more details regarding
grml2hd.</p>

<h4>Special new features:</h4>

<ul>

<li>updated to X.org 7.0

<li>using Lat15-Terminus16 as default console font (disable via bootoption
'nodefaultfont')

<li>text based bootsplash (see bootoption 'splash'), based on contribution
by Florian Keller

<li>switched from kaffe to <a
href="http://packages.debian.org/jikes">jikes</a> and <a
href="http://packages.debian.org/jamvm">jamvm</a>

<li>added window managers <a
href="http://troll.linux.net.pl/~harnir/fvwm-crystal/">fvwm-crystal</a> and <a
href="http://wmii.de/dwm/">dwm</a>

<li>added support for UMTS vodafone cards (austrian providers like A1,
T-Mobile and 3 work out-of-the-box) - see 'grml-tips umts'

<li>added /etc/rc{0..6}.d/ /etc/rcS.d directories with important_notice to
inform users about <a href="http://packages.debian.org/file-rc">file-rc</a>

<li>/etc/init.d/boolocal.{pre,middle,post}: add your own commands/stuff to
bootup sequence, see "man grml-autoconfig" for more details

<li>setup of files in /boot/grub/ to be able to install grub; provide
sample menu.lst for use with grml2hd - see 'grml-tips grub'</li>

<li>run 'zsh-help' for some hints regarding <a href="/zsh/">the best shell
on earth</a>

</ul>

<h3>Kernel</h3>

<p>Based on vanilla kernel 2.6.17.7 including several patches (Reiser4,
Speakup, Squashfs,...) and additional modules:</p>

<pre class="rahmen">
acerhk, acx100, adp94xx, bcm5700, cowloop, dazuko, drbd0.7, et131x, exmap, ipw3945,
ivtv0.7, kqemu, linux-wlan-ng, lufs, madwifi, ndiswrapper, nozomi, openafs, pcan,
pwc, qc-usb, realtime-lsm, rt2x00, rt2400, rt2500, rt2570, sl-modem, snd-bt-sco,
spca5xx, sysprof, thinkpad, tidev, truecrypt, vaiostat, zd1211
</pre>

<p>Notice: some more modules (for example <a
href="https://github.com/grml/grml/wiki/ati">fglrx</a> and <a
href="https://github.com/grml/grml/wiki/nvidia">nvidia</a>) are not
pre-installed but available through the <a
href="/repos/">grml-repository</a>.</p>

<p>See <a href="/kernel/">grml.org/kernel/</a> for more details regarding
the grml-kernel.</p>

<h3>Important Changes</h3>

<p>The <strong>software RAID devices</strong> like /dev/md0 aren't created
by default anymore.  See /etc/udev/mdadm.rules and <a
href="http://bugs.debian.org/381181">#381181</a> for the reason. If you need
/dev/md*-devices just run the following command (you will find this tip in
'grml-tips mdadm' as well):</p>

<pre class="rahmen">
cd /dev &amp;&amp; MAKEDEV md
</pre>

<p>There might be <a
href="http://michael-prokop.at/blog/2006/08/01/problems-running-dri-with-current-xorg-on-debianunstable/">problems
running DRI with current X.org</a>. Check whether
<strong>DRI/3d-support</strong> works for you via running:

<pre class="rahmen">
% glxinfo | grep direct
direct rendering: Yes</pre>

<p>If it does not return 'Yes' the following command might solve your problem:</p>

<pre class="rahmen">
apt-get install libgl1-mesa-dri/experimental libgl1-mesa-glx/experimental
</pre>

<h3>Packages / Software</h3>

<p>Details about shipped packages and their versions on grml are available at
the <a href="/files/#debian">Debian section</a>.</p>

<h3>Updates</h3>

<p>Updated all packages to Debian Unstable branch by 20060811.</p>

<p>Removed 114 packages [please notice that some of them are available under
different names/in different packages]:</p>

<pre class="rahmen">
*2.6.16-grml* lib*

3ware-3dm2-old-binary acx100-firmware aget aide antlr apache apache-common
apachetoolbox apachetop apticron automake1.6 ccdv cdrecord-prodvd-binary cpm
cpp-4.0 cpudyn cron-apt dahb-txt dbconfig-common dchroot debfoster eagle-usb-data
eagle-usb-utils ecj-bootstrap edictionary fastjar fcheck fftw2 fglrx-control
figfonts fonts-ttf-west-european ftester g++-4.0 gcc-4.0 gcc-4.0-base gcj-4.0-base
giftrans gij-4.0 gjdoc gramofile grml-splash hgrep httpf ices2 installwatch ipac-ng
ipsc ipw2100-firmware ipw2200-firmware ipython-common isdnutils-xtools kaffe
kaffe-common kaffe-pthreads lbxproxy m-tx magma maradns mod-chroot-common
musepack-decoder musepack-encoder musepack-replaygain musixtex mwcollect
mysql-client-4.1 nbsmtp newsflash nis ntp-server ntp-simple numlockx ooo2dbk
pekwmsvn php5-common pipemeter postgresql-common proftpd proftpd-common prospect
proxymngr python-id3lib python-pymad python2.3-apt python2.3-bsddb3
python2.3-crypto python2.3-elementtree python2.3-eyed3 python2.3-fuse
python2.3-id3lib python2.3-ipython python2.3-profiler python2.3-zopeinterface
python2.4-celementtree python2.4-elementtree qtparted queue scavr shunit sslwrap
tasksel tiger torsmo tripwire update-apt vncserver xfonts-base-transcoded
xfree86-driver-synaptics xfwp xlibmesa-dri xlibs-data xmon xprint xprint-common
xserver-common
</pre>

<p>Added 117 new packages (exluding lib*, xserver-xorg-* and
*2.6.17-grml*):</p>

<pre class="rahmen">
3ware-3dm2-binary 3ware-cli-binary acpi-support aircrack-ng ajaxterm btscanner cdck
cdpr cedet-common classpath classpath-common cmospwd cpp-4.1 cpuid cpulimit crywrap
cupsys-common curlftpfs debdelta debian-goodies dwm eieio emcast facter freeglut3
fusesmb fvwm fvwm-crystal-minimal g++-4.1 gcc-4.1 gconf2-common grep-dctrl
grml-policyrcd habak id3 ipmitool ipw-firmware ipw3945-ucode ipw3945d jamvm jikes
lame latexmk linuxlogo lspowertweak madwifi-doc magicrescue mesa-utils mktemp
modconf mp3val mrb mrxvt mrxvt-common mysql-client-5.0 ndisc6 ndiswrapper-common
ndiswrapper-utils-1.1 ndiswrapper-utils-1.7 ndiswrapper-utils-1.8 nethogs ntfs-3g
num-utils open-iscsi p3nfs pcopy pekwm pktstat policyrcd-script-zg2 powertweak-gtk
powertweakd prism54-firmware pymacs python-celementtree python-central
python-elementtree python-minimal python-mode python-support remind snmp sudoku
syrep tdb-dev tetrinet-client thc-ipv6 tinysnmp-tools tpm-tools trayer trousers
tshark twolame txt2pdbdoc tzdata unclutter unionfs-tools uswsusp vbindiff vobcopy
vsftpd weechat weechat-scripts wikipediafs wireshark wireshark-common wyrd xbitmaps
xclip xcursor-themes xfonts-biznet-100dpi xfonts-biznet-75dpi xfonts-biznet-base
xfonts-encodings xfonts-utils xkb-data xorg xutils-dev
</pre>

<h3>Upgrade notes</h3>

<p>As usual you can upgrade your grml harddisk system to the latest grml
version running 'apt-get update; apt-get install grml'. Take a look at <a
href="https://github.com/grml/grml/wiki/upgrading">the upgrading webpage in
the grml-wiki</a> as well. Notice: If you are using grml in a productive
environment and/or use a grml2hd installation we strongly recommend to
subscribe to <a href="/mailinglist/">the grml-user
mailinglist</a>!</p>

<h3>Changes since release 0.7 (20060410)</h3>

<ul>
<li>grml on <a href="/news/#wlt06">linuxdays graz and
vienna 2006</a>
<li>grml <a
href="http://grml.supersized.org/archives/159-grml-in-the-german-LinuxUser-magazine.html">in
the German LinuxUser magazine</a>.
<li><a href="http://planet.grml.org/">Planet grml</a> available.
<li>Timo Boettcher joined <a href="/team/">the
grml-team</a>.
</ul>

<h3>Known issues</h3>

<p>Take a look at <a
href="https://github.com/grml/grml/wiki/grml_0.8">grml_0.8 @ grml-wiki</a>.
Please report problems using information on <a
href="/bugs/">grml.org/bugs/</a>.</p>

<h3>Download grml 0.8</h3>

<p>grml 0.8 can be downloaded from mirrors listed on <a
href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help fix bugs
and improve future releases. If you find a problem with the release please
check <a href="https://github.com/grml/grml/wiki/grml_0.8">grml_0.8 @
grml-wiki</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback, feature
requests and bug reports to the grml-team!</p>

<ul>
<li><a href="/contact/">grml.org/contact/</a>
<li><a href="/irc/">#grml on irc.freenode.org</a>
</ul>

<h3>Thanks</h3>

<p>Many thanks in this release go to Florian Keller for his code
contributions, to Jörg Müller for the releasename, to Ulrich Dangel,
Alexander Bernauer and Rico Schickel for osd_server.py, to Thomas Konrad for
the wallpaper and CD-Cover and of course to all those who have sent feedback
since the last release!</p>

<p>Thanks a lot for all <a href="/donations/">the donations</a>! Special
thanks go to <a href="http://www.ibm.com/at/">IBM/Lenovo Austria</a> for
providing us a x305 server which will serve as buildsystem in the near
future. While working on the grml-trusted project (details will follow soon)
we also got a <a
href="http://michael-prokop.at/blog/2006/07/02/thinkpad-t60-laptop-with-debiangrml-linux/">Thinkpad
T60 laptop</a> for about 3 months. Thanks a lot!</p>

<h3>More Information</h3>

<p>You can find out more about grml on <a href="/">our website</a>, <a
href="/irc/">IRC channel</a>, and <a href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future grml announcements, please subscribe to <a
href="http://lists.mur.at/mailman/listinfo/grml-announce"> grml's
announcement list</a>.</p>


<p><a
href="http://www.spreadshirt.net/shop.php?op=article&article_id=3466153#top"><img
align="right" style="margin-left: 20px; border: 0"
src="/img/grmlshirt_0.8.jpg" alt="the grml 0.8 shirt" /></a></p>

<h3>Further Questions?</h3>

<p><a href="/contact/">Contact us.</a></p>
