<!DOCTYPE html>
<html>
<head>
<title>grml.org - Release Notes: grml 0.9 Bootenschnitzl</title>
<meta name="Title" content="grml.org - Files" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="Files of grml.org" />
<meta name="Abstract" content="grml, just another linux-distribution" />
<meta name="fdse-index-as" content="http://www.grml.org/files/" />
<meta name="Robots" content="index,follow" />
<meta name="Language" content="english" />
<meta name="identifier-url" content="http://www.grml.org/" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="home" href="/" title="grml.org" />
<link rel="help" href="/features/" title="About" />
<link rel="author" href="/team/" title="Team" />
<link rel="icon" href="/favicon.png" type="image/png" />
<link rel="stylesheet" href="/style.css" type="text/css" />
</head>

<body>
<?php include '../static.inc'; ?>

      <div class="content">

        <p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
        border: 0" src="/screenshots/grml_0.9_small.jpg" width="140" alt="*" /></a></p>

        <h1>Release Notes:<br />grml 0.9-rc1 - codename <a
        href="/faq/#releasename">dioptrienotto</a> (20061127)</h1>

        <p><strong>Notice: grml 0.9-rc1 is a RELEASE CANDIDATE and not
	yet the stable release!</strong></p>

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
        href="http://wiki.grml.org/doku.php?id=grml_0.8">grml_0.8 @
        grml-wiki</a>.</p>

        <h3>New features</h3>

        <p>Several improved, updated and extended configuration files.</p>

        <h4>New grml-scripts (some selected ones):</h4>

        <ul>

	  <li>fma: fast manual access, speeds up access for reading manpages

          <li>getsf: download project from sourceforge.net

          <li>grml-ap: set up your box as access point

          <li>grml-bridge: set up your box as bridge

	  <li>grml-debootstrap: wrapper around debootstrap for
	  installing plain Debian via grml

          <li>grml-router: set up your box as NAT-router

	  <li>random-hostname: print random hostname to stdout

          <li>reread_partition_table: re-read partition table of specific disk

        </ul>

        <h4>New bootparameters/cheatcodes:</h4>

        <ul>

          <li>dos: boot into FreeDOS 1.0 from <a
          href="http://www.finnix.org/Balder">the Balder project</a></li>

	  <li>noraid: disable automatic activation of software RAID
	  arrays</li>

          <li>lang=$LANG-utf: unicode support, usage example:
	  lang=de-utf8</li>

        </ul>

        <h4><a href="/grml2hd/">grml2hd</a> (install grml to harddisk):</h4>

        <ul>

          <li>support customization of grml2hd through
	  /etc/grml2hd/customization</li>

          <li>allow installation of lilo into MBR of the first disk on the system.
          (Feature based on patch contributed by Alexander Bernauer.)</li>

	  <li>adjust /etc/default/rcS according to bootoption utc/gmt
	  and /etc/localtime according to bootoption tz</li>

	  <li>integration of random-hostname</li>

        </ul>

        <p>See <a href="/grml2hd/">grml.org/grml2hd/</a> for more details regarding
        grml2hd.</p>

        <h4>Special new features:</h4>

        <ul>

	  <li>updated to X.org 7.1.1</li>

          <li>unicode support through bootoption lang=$LANG-utf8

          <li>added FreeDOS 1.0 from the <a
          href="http://www.finnix.org/Balder">Balder project</a>; boot into it using the bootoption 'dos'

	  <li>new handling for added/removed devices: /etc/fstab is
	  rebuild automatically if new block devices are added or
	  removed; mounting usb devices is possible through /mnt/usb-sd*

          <li>grml-rebuildfstab (that's a shell command now as well, just run
          'grml-rebuildfstab' to rebuild /etc/fstab) supports fs-LABELs and UUIDs;
          see 'man rebuildfstab' for details

	  <li>split package grml-etc into grml-etc + grml-etc-core (the
	  latter one provides the core configuration files for e.g. zsh,
	  screen and vim)

	  <li>bootoption 'grub' boots into <a
	  href="http://home.arcor.de/mschierlm/bootdisk/">The All In One
	  Boot Floppy</a> (which provides Grub), contributed by Michael
	  Schierl</li>

        </ul>

        <h3>Kernel</h3>

	<p>Based on vanilla kernel 2.6.18.3 including <a
	href="/kernel/">several patches</a> (Speakup, Squashfs,...) and
	additional modules:</p>

<pre class="rahmen">
  acerhk, acx100, adp94xx, arcmsr, bcm5700, cowloop, drbd8, et131x,
  exmap, ipw3945, ivtv, kqemu, kvm, linux-wlan-ng, madwifi, misdn,
  ndiswrapper, nozomi, openafs, pcan, qc-usb, r1000, realtime-lsm,
  rt2400, rt2500, rt2570, rt2x00, sl-modem, snd-bt-sco, spca5xx,
  sysprof, tidev, tpm_emulator, truecrypt, unionfs
</pre>

         <p>Notice: some more modules (for example <a
         href="http://wiki.grml.org/doku.php?id=ati">fglrx</a> and <a
         href="http://wiki.grml.org/doku.php?id=nvidia">nvidia</a>) are not
         pre-installed but available through the <a
         href="http://grml.org/repos/">grml-repository</a>.</p>

         <p>See <a href="/kernel/">grml.org/kernel/</a> for more details regarding
         the grml-kernel.</p>

         <h3>Important Changes</h3>

	 <p><strong>swap partitions:</strong> by default grml does
	 <strong>not</strong> automatically use swap partitions anymore.
	 Run 'grml-swapon' when running grml or boot using 'grml swap'
	 for enabling all detected and usable swap partitions.</p>

	 <p><strong>software raid:</strong> starting with grml 0.9
	 booting the system tries to enable all present software raid
	 arrays. If you do <strong>not</strong> want to enable software
	 raid boot using one of the bootoptions 'noraid', 'forensic' or
	 'raid=noautodetect'.</p>

	 <p><strong>zsh global aliases:</strong> the global aliases
	 setup has been changed; now the global aliases (like: 'G' is
	 same '|grep') are not enabled by default any more, instead a
	 new setup named 'powerful abbreviation expansion' is available.
	 Usage example: type 'N' and press ',.' to expand the 'N' into
	 '&amp;&gt;/dev/null'. Take a look at <a
	 href="/zsh/#grmlzshrefcard">the grml zsh refcard</a> for more
	 details.</p>

         <h3>Packages / Software</h3>

         <p>Details about shipped packages and their versions on grml are available at
         the <a href="http://grml.org/files/#debian">Debian section</a>.</p>

         <h3>Updates</h3>

         <p>Updated all packages to Debian Unstable branch by 200611xx.</p>

         <p>Removed 53 packages [please notice that some of them are available under
         different names/in different packages]:</p>

<pre class="rahmen">
  *2.6.17-grml* lib*

  apache2-common apt-index-watcher bluez-pin bookmarkbridge camgrab cdw
  cdw-common cthumb divine dnotify drbd0.7-utils duplicity
  euro-support-console euro-support-x firefox firefox-webdeveloper
  flashplugin-nonfree gcj-4.1-base gconf2-common gnupg2
  grml-kerneladdons grml-reportbug gtkrecover ipchains ipw3945-ucode
  jaxml lout-doc lpr mime-codecs mozilla-mplayer mplayer-nogui mtop
  ndiswrapper-utils-1.7 netkit-inetd ppmtofb python-gnupginterface
  python2.3-pymad python2.3-pyopenssl python2.3-pyparsing
  python2.3-twisted-bin python2.4-selinux python2.4-semanage scanerrlog
  stunnel truecrypt turkey update x-window-system-core
  xfonts-100dpi-transcoded xfonts-75dpi-transcoded xfonts-konsole xlibs
  xorg
</pre>

         <p>Added 112 new packages (exluding lib* and *2.6.18-grml*):</p>

<pre class="rahmen">

  aamath ace-of-penguins afflib apache2.2-common apf-client apf-server
  aria2 asused automake avahi-daemon ccontrol cdrskin classpath-gtkpeer
  conntrack cupsys-bsd ddccontrol ddccontrol-db diakonos diction dov4l
  drbd8-utils dsbltesters dwm-tools dynafont emacs emelfm
  firmware-ipw3945 firmware-qlogic glipper-nognome gpgv grml-debootstrap
  grml-etc-core grml-network guessnet histring hoz ht iceweasel ink
  inotail inotify-tools iscsitarget-2.6.18-grml iwatch konwert
  konwert-filters latex-ucs mathomatic medusa misdn-utils molly-guard
  mpg123-alsa mplayer mplayer-skin-blue ndiswrapper-utils-1.9 ne
  obexpushd openbsd-inetd pax-utils ptfinder pwman3 pxfw pydb
  python-crypto python-jaxml python-pymad python-pysqlite2
  python-selinux python-semanage python-twisted-bin python2.5
  python2.5-minimal qtparted rake rdoc rdoc1.8 reniced reportbug
  resolvconf retty ruby-prof sic smap ssdeep stealth stunnel4 synergy
  sysvinit-utils tesseract-ocr toilet toilet-fonts update-inetd
  upstreamdev vim-python vim-ruby webcam-server wikipedia2text wodim
  xen-utils-common xmlindent xmms2 xmms2-client-cli xmms2-core
  xmms2-plugin-alsa xmms2-plugin-id3v2 xmms2-plugin-jack
  xmms2-plugin-mad xmms2-plugin-vorbis xsel xserver-xorg-input-vmmouse
  xserver-xorg-video-ivtv videogen youtube-dl

</pre>

         <h3>Upgrade notes</h3>

         <p>As usual you can upgrade your grml harddisk system to the latest grml
         version running 'apt-get update; apt-get install grml'. Take a look at <a
         href="http://wiki.grml.org/doku.php?id=upgrading">the upgrading webpage in
         the grml-wiki</a> as well. Notice: If you are using grml in a productive
         environment and/or use a grml2hd installation we strongly recommend to
         subscribe to <a href="http://grml.org/mailinglist/">the grml-user
         mailinglist</a>!</p>

         <h3>Changes since release 0.8 (20060413)</h3>

         <ul>
           <li><a href="http://ml.grml.org/list/hg-commits.en.html">grml repository commits mailinglist</a> available.
           <li>Updated <a href="/zsh/#grmlzshrefcard">grml-zsh-refcard</a>.
           <li>Public mercurial repositories available at <a
	   href="http://hg.grml.org/">hg.grml.org</a>.
           <li>Ulrich Dangel joined <a href="/team/">the grml-team</a>.
         </ul>

         <h3>Known issues</h3>

	 <p>Take a look at <a
	 href="http://wiki.grml.org/doku.php?id=release_candidate">grml_release
	 candidate @ grml-wiki</a>.  Please report problems using
	 information on <a href="/bugs/">grml.org/bugs/</a>.</p>

<!--
         <p>Take a look at <a
         href="http://wiki.grml.org/doku.php?id=grml_0.9">grml_0.9 @ grml-wiki</a>.
         Please report problems using information on <a
         href="/bugs/">grml.org/bugs/</a>.</p>
-->

         <h3>Download grml 0.9-rc1</h3>

	 <p>grml 0.9-rc1 can be downloaded from the directory named
	 'devel' on the mirrors listed on <a
	 href="/download/">grml.org/download/</a>.</p>

<!--
         <h3>Download grml 0.9</h3>

         <p>grml 0.9 can be downloaded from mirrors listed on <a
         href="/download/">grml.org/download/</a>.</p>
-->
         <h3>Feedback</h3>

<!--
         <p>Your comments, bug reports, patches, and suggestions will help fix bugs
         and improve future releases. If you find a problem with the release please
         check <a href="http://wiki.grml.org/doku.php?id=grml_0.9">grml_0.9 @
         grml-wiki</a> and report problems using information on <a
         href="/bugs/">grml.org/bugs/</a>. Please send your feedback, feature
         requests and bug reports to the grml-team!</p>
 -->

	 <p>Your comments, bug reports, patches, and suggestions will
	 help fix bugs and improve the upcoming stable release. If you
	 find a problem with the release candidate please check <a
	 href="http://wiki.grml.org/doku.php?id=release_candidate">grml_release
	 candidate @ grml-wiki</a> and report problems using information
	 on <a href="/bugs/">grml.org/bugs/</a>. Please send your
	 feedback, feature requests and bug reports to the
	 grml-team!</p>

         <ul>
           <li><a href="/contact/">grml.org/contact/</a>
           <li><a href="/irc/">#grml on irc.freenode.org</a>
         </ul>

         <h3>Thanks</h3>

	 <p>Many thanks in this release go to Wolfgang Karall, Frank
	 Terbeck, Alexander Bernauer, Moritz Augsburger, Arnt Karlsen
	 and Marc Haber for their contributions. Many thanks also to the
	 ones of you who <a href="/donations/">donated something to the
	 grml-team</a> and of course to all those who have sent feedback
	 since the last release!</p>

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

</div>

<?php include '../static_bottom.inc'; ?>
