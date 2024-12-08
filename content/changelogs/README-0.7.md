+++
title = 'Release Notes: grml 0.7 Bootenschnitzl (20060410)'
url = '/changelogs/README-0.7.html'
+++

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

<p>Fixed several bugs, including:</p>

<ul>
<li><a href="http://bugs.grml.org/cgi/bugreport.cgi?bug=19">#19</a> grml-0.6: gkrellmd and battery status [wishlist]
<li><a href="http://bugs.grml.org/cgi/bugreport.cgi?bug=20">#20</a> grml-0.6: GRMLCFG does not work with floppy disk
<li><a href="http://bugs.grml.org/cgi/bugreport.cgi?bug=21">#21</a> hgrep:    hgrep returns always success
</ul>

<p>and issues reported on <a
href="https://github.com/grml/grml/wiki/grml_0.6">grml_0.6 @
grml-wiki</a>.</p>

<h3>New features</h3>

<p>Several improved, updated and extended configuration files.</p>

<h4>New grml-scripts (some selected ones):</h4>

<ul>
<li>bt-audio: script to connect bluetooth headset to computer
<li>get_tw_cli: get 3ware RAID controller command line interface tool (tw_cli)
<li>event-viewer: program to see all fork/exec/exit/uid/gid events on a
running system using the new netlink/fork connector interface from linux
&gt;=2.6.15
</ul>

<h4>New bootparameters/cheatcodes (some selected ones):</h4>

<ul>
<li>vmware: disable usb/firewire detection during bootprocess, load some SCSI-modules instead
</ul>

<h4><a href="/grml2hd/">grml2hd</a> (install grml to harddisk):</h4>

<ul>
<li>check for given mbr option and prompt for activating it if not set
<li>changed initrd/initramfs generator from yaird to initramfs: now booting via firewire is also possible
<li>added resume, brltty, speakup_synth and swspeak to list of grml2hd-bootparams so it's easier to use out of the box
<li>changed logic in grml2hd dialog for package removal: now select packages which should be kept
</ul>

<p>See <a href="/grml2hd/">grml.org/grml2hd/</a> for more details.</p>

<h4><a href="https://github.com/grml/grml/wiki/usb">grml2usb</a> (install grml
to usb stick):</h4>

<ul>
<li>improved error handling and its output
<li>activate bootoption usb by default in syslinux.cfg
<li>added uninstall option
</ul>

<h4>Special new features:</h4>

<ul>

<li>/bin/sh now points to /bin/bash; reason: Debian does not support zsh as
/bin/sh, zsh is used as interactive shell anyway of course

<li>reworked zsh completion (no error correction on rm and mv commands)

<li>grub can be called from bootmenu (in isolinux) through running 'grub'
now; thanks a lot to Rafael Steiner!

<li>reworked 'swspeak' bootoption: sound output during startup, start
software synthesizer when booting finished via running 'swspeak'

<li>rebuildfstab (generate /etc/fstab): partitions have new mount-options:
'noauto,nouser,dev,suid,exec'; improved partition detection (e.g. reiser4
is detected now)

</ul>

<h3>Kernel</h3>

<p>Based on vanilla kernel 2.6.16.1 including several patches (Reiser4,
Speakup, Squashfs,...) and additional modules:</p>

<pre class="rahmen">
acerhk, acx100, at76c503a, bcm5700, cowloop, dazuko, drbd0.7, eagle-usb,
et131x, exmap, ivtv, kqemu, linux-wlan-ng, lufs, madwifi, madwifi-ng,
ndiswrapper, nozomi, openafs, pcan, pwc, qc-usb, realtime-lsm, rt2400, rt2500,
sdhci, sl-modem, snd-bt-sco, spca5xx, sysprof, thinkpad, tidev, truecrypt,
vaiostat, zd1211
</pre>

<p>Notice: madwifi-ng is available in /usr/src as debian package but not
pre-installed because of conflicts with madwifi. Some more modules (for
example <a href="https://github.com/grml/grml/wiki/ati">fglrx</a> and <a
href="https://github.com/grml/grml/wiki/nvidia">nvidia</a>) are not
pre-installed but available through the <a
href="/repos/">grml-repository</a>.</p>

<p>See <a href="/kernel/">grml.org/kernel/</a> for more details
regarding the grml-kernel.</p>

<h3>Updates</h3>

<p>Updated all packages to Debian Unstable branch by 20060407 plus some minor
updates until 20060409.</p>

<p>Removed 34 packages [please notice that some of them are available under
different names/in different packages]:</p>

<pre class="rahmen">
*2.6.15-grml* lib*

bzrtools cryptsetup-luks fam fonts-ttf-decoratives gkrellm-common grml-fixes
ivtv0.4-utils jikes jikes-kaffe ldaptor-common mirror mozilla-firefox-adblock
multiseat munin mysql-server mysql-server-4.1 pdns-backend-mysql pgpool php5
php5-mysql php5-pgsql php5-sqlite pmx postfix-mysql postfix-pgsql postfix-policyd
postgresql-8.1 postgresql-contrib-8.1 preview-latex python2.3-subversion schroot
sqlrelay-mysql tpb wacom-tools
</pre>

<p>Added 48 new packages (exluding lib* and *2.6.16-grml*):</p>

<pre class="rahmen">
3270-common apt-index-watcher array-util arrayprobe bar bcrelay brltty-flite btsco
bwm-ng c3270 cryptsetup cvsconnect cw cwcp dbconfig-common devio ecj-bootstrap
fontconfig-config gamin gcc-4.1-base gcj-4.1-base gcom gij-4.0 glimpse i855crt
ivtv-utils lanmap latex-mk linux-wlan-ng-firmware lomoco moreutils mpt-status
nbsmtp o3read openipmi p7zip pfqueue postgresql-client-common python-subversion
python2.4-selinux python2.4-semanage qpxtool rkhunter tcptraceroute tct truecrypt
unixcw user-setup
</pre>

<h3>Upgrade notes</h3>

<p>As usual you can upgrade your grml harddisk system to the latest grml
version running 'apt-get update; apt-get install grml'. Notice: If you are
using grml in a productive environment and/or use a grml2hd installation we
strongly recommend to subscribe to <a
href="/mailinglist/">the grml-user mailinglist</a>!</p>

<h3>Download grml 0.7</h3>

<p>grml 0.7 can be downloaded from mirrors listed on <a
href="/download/">grml.org/download/</a>.</p>

<h3>Known issues</h3>

<p>None reported so far. Take a look at <a
href="https://github.com/grml/grml/wiki/grml_0.7">grml_0.7 @ grml-wiki</a>
and <a href="http://bugs.grml.org/">the grml bug tracking system</a>.</p>

<p>Your comments, bug reports, patches, and suggestions will help fix bugs
and improve future releases. If you find a problem with the release please
check <a href="https://github.com/grml/grml/wiki/grml_0.7">grml_0.7 @
grml-wiki</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>.</p>

<h3>Changes since release 0.6 (20060122)</h3>

<ul>
<li><a href="http://dir.gmane.org/gmane.linux.distributions.grml.user">grml
user mailinglist available on gmane</a></li>
</ul>

<h3>Feedback</h3>

<p>Please send your feedback, feature requests and bug reports to the
grml-team!</p>

<ul>
<li><a href="/contact/">grml.org/contact/</a>
<li><a href="/irc/">#grml on irc.freenode.org</a>
</ul>

<h3>Thanks</h3>

<p>Many thanks in this release go to Rafael Steiner for the grub-in-isolinux
feature and to all those who have sent feedback since the last release!</p>

<h3>More Information</h3>

<p>You can find out more about grml on <a href="/">our website</a>, <a
href="/irc/">IRC channel</a>, and <a href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future grml announcements, please subscribe to <a
href="http://lists.mur.at/mailman/listinfo/grml-announce"> grml's
announcement list</a>.</p>


<h3>Further Questions?</h3>

<p><a href="/contact/">Contact us.</a></p>
