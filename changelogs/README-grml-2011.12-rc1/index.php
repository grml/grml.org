<!DOCTYPE html>
<html>
<head>
<title>grml.org - Release Notes: Grml 2011.12-rc1 - Codename Knecht Rootrecht</title>
<meta name="Title" content="grml.org - Release Notes: Grml 2011.12-rc1 Knecht Rootrecht" />
<meta name="Author" content="the Grml team [grml.org/team/]" />
<meta name="Keywords" content="grml.org, Grml" />
<meta name="Description" content="Release Notes of Grml 2011.12-rc1" />
<meta name="Abstract" content="Grml, the linux live-cd for sysadmins and texttool users" />
<meta name="Robots" content="index,follow" />
<meta name="Language" content="english" />
<meta name="identifier-url" content="http://grml.org/" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="home" href="/" title="grml.org" />
<link rel="help" href="/features/" title="About" />
<link rel="author" href="/team/" title="Team" />
<link rel="icon" href="/favicon.png" type="image/png" />
<link rel="stylesheet" href="/style.css" type="text/css" />
</head>

<body>
<?php include '../../static.inc'; ?>

      <div class="content">

        <p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
        border: 0" src="/screenshots/grml_2011.12-rc1.jpg" alt="*" /></a></p>

        <h1>Release Notes for Grml 2011.12-rc1 - codename <a
        href="/faq/#releasename">Knecht Rootrecht</a></h1>

        <h3>About</h3>

        <p>This release brings a downsizing and cleanup: one flavour, two architectures.
          The new, smaller "FULL" flavour has a 350MB ISO size target, while still
          delivering over 1.1GB of open source software relevant for system
          administrators!</p>

        <h3>New features</h3>

        <ul>

          <li>New Linux kernel version based on <b>3.1.4</b></li>
          <li><b>EFI Boot</b> support from CD-ROM and USB keys (amd64 only)</li>
	  <li>mDNS support (try <tt>ping grml.local</tt> with libnss-mdns and avahi-daemon
          or similar enabled on your host)</li>
          <li>NFS Client support and d-bus start automatically</li>

        </ul>

        <h4>Special new features:</h4>

        <ul>

          <li><a href="/grml-debootstrap/">grml-debootstrap</a>, the tool of choice to install Debian,
            can now directly build virtual machine images.</li>

          <li><a href="/grml-live/">grml-live</a>, our build tool, was enhanced with new features to
            better integrate with <a href="http://jenkins-ci.org/">Jenkins</a>.
            This release, as well as the current <a href="/daily/">daily images</a>
            are built from within Jenkins!</li>


        </ul>

        <h3>Important Changes</h3>

        <ul>
          <li>Z-Shell configuration has been cleaned up. Quite a few functions
            <a href="http://git.grml.org/?p=grml-etc-core.git;a=history;f=etc/zsh/zshrc">have been removed</a>
            from the default configuration.</li>
	  <li>X11 environment has been downsized as well. The window manager is
            now fluxbox. idesk has been removed, all available software is now
            reachable from the fluxbox menu.</li>
          <li>The accessibility support now consists of shipping standard speakup
            and enabling sound during boot. A new beep sequence (4 tones) is sounded
            just before the quickconfig menu starts. (The boot options have been
            removed.)</li>
          <li>xterm now uses the Terminus font, like the VT consoles.</li>
          <li>Virtual Machines automatically get the "noprompt" behaviour.</li>
          <li>Ancient config files and examples have been removed from grml-etc(-core).</li>
          <li>Ancient scripts have been removed from grml-scripts(-core).</li>
          <br>
          <li>Anonymous stats are collected during boot up. This includes: Grml release name,
            boot media type (local or remote), a random string, used boot option keys
            (no values) and if your CPU is 64bit-capable. You can turn this off with the
            <b>nostats</b> boot option.</li>
        </ul>

        <h3>Bits &amp; bolts</h3>

        <ul>
          <li>Modem support has been removed from grml-network</li>
          <li>VT consoles are driven by grml-runtty, our homegrown login and getty
            replacement for Live CDs.</li>
          <li>Netboot scenarios should no longer use the "nodhcp" boot option.</li>
          <li>grml2hd is no longer in PATH to discourage its use even further.
            The related boot options have been removed.</li>
          <li>grml2usb: compat for releases &lt; 2009.05, grub1 and lilo support
            have been removed.</li>
        </ul>

        <h3>Kernel</h3>

        <p>Based on vanilla kernel 3.1.4. No additional modules are
          shipped.</p>


        <h3>Bugfixes</h3>

        <p>Fixed several bugs and issues reported in the
	<a href="http://bts.grml.org/grml/">bug tracking system</a>.</p>

        <h3>Packages / Software</h3>

        <p>Details about shipped packages and their versions on Grml are
	available at the <a href="/files/#debian">Debian section</a>. Visit
	<!-- -->
        <a href="/files/release-2011.12-rc1/dpkg_get_selections">dpkg_get_selections</a>
	for a main package listing and
	<!-- -->
        <a href="/files/release-2011.12-rc1/dpkg_list">dpkg_list</a> for a
        detailed list of packages shipped with Grml 2011.12-rc1.</p>

        <h3>Updates</h3>

        <p>Updated all packages to Debian Unstable branch by 8th of December
        2011.</p>

        <p>Removed these Grml packages:</p>

<pre class="rahmen">
  grml-debugtools grml-docs grml-files grml-files64
  grml-firefox grml-laptop grml-pylib grml-rebuildfstab
  grml-rescueboot grml-sectools grml-templates grml-usleep
  grml-vpn grml grml64
</pre>

        <p>Removed 1745 packages, compared to the previous
          GRML_FULL flavour.</p>

        <p>Added these important new packages (plus dependencies):</p>

<pre class="rahmen">
  afflib-tools atftp bacula-sd efibootmgr grub-efi-amd64-bin
  ia32-libs imvirt ipxe mcollective mtx multiarch-support
  netcat-openbsd python2.7 sipcalc
</pre>

        <h3>Known issues</h3>

        <p><b>iSCSI Target</b> support is currently in limbo, as
          the user land tools for the new in-kernel iSCSI target are not yet
          in Debian unstable/testing and shipping the old iscsitarget modules
          in binary form appears to be almost impossible with the new DKMS packaging.
          </p>

        <p>Take a look at <a
        href="/bugs/known/">the known bugs list</a>.
        Please report problems using information on <a
          href="/bugs/">grml.org/bugs/</a>.</p>

        <h3>Download Grml 2011.12-rc1</h3>

        <p>Grml 2011.12-rc1 can be downloaded from
        <a href="http://grml.org/download/prerelease/">grml.org/download/prerelease/</a>.</p>

        <!--
        <p>Grml 2011.12-rc1 can be downloaded from <a href="/download/">grml.org/download/</a>.</p>
        -->

        <h3>Feedback</h3>

        <p>Your comments, bug reports, patches, and suggestions will help
        fixing bugs and improving future releases. If you find a problem with
        the release please check <a
          href="/bugs/known/">the known bugs list</a> and report problems using information on <a
          href="/bugs/">grml.org/bugs/</a>. Please send your feedback and
        feature requests <a href="/contact/">to the Grml team</a>!</p>

        <ul>
          <li><a href="/contact/">grml.org/contact/</a>
          <li><a href="/irc/">#grml on irc.freenode.org</a>
        </ul>

        <a name="thanks"></a>
        <h3>Thanks</h3>

        <p>Many thanks in this release go to (alphabetically)
	  TBD,
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

        <p>Please feel free to <a href="http://grml.org/contact/">contact us.</a></p>

</div>

<?php include '../../static_bottom.inc'; ?>
