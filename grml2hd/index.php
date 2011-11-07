<!DOCTYPE html>
<html>
<head>
<title>grml.org - grml2hd</title>
<meta name="Title" content="grml.org - grml2hd" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="grml2hd of grml.org" />
<meta name="Abstract" content="grml, just another linux-distribution" />
<meta name="fdse-index-as" content="http://www.grml.org/kernel/" />
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

        <p><img style="float: right" src="/img/clanbomber.png" alt="*" /></p>

        <h1>grml2hd</h1>

        <p>Index:</p>

        <ul>
          <li><a href="#preface">Preface</a></li>
          <li><a href="#screenshots">Screenshots</a></li>
          <li><a href="#faq">Frequently Asked Questions</a></li>
          <li><a href="#known_issues">Known Issues</a></li>
        </ul>

        <h2><a name="preface"></a>Preface</h2>

        <p>grml2hd is the installer for <strong>installing the running grml
        system</strong> to a harddisk.</p>

        <p><strong>Important!</strong> The Grml team does not take responsibility for
        loss of any data!</p>

        <p>grml2hd supports filesystems ext2/ext3/ext4, JFS, XFS and reiserfs. You
        should have a partition with at least 2.7 GB free space to use Grml. You
        can choose the one you would like to use when running grml2hd.  You are
        prompted for the root-password, the username and some more
        easy-to-answer-questions and that's it! Take a look at the <a
        href="#screenshots">screenshots</a> to get an idea.  Depending of your
        hardware you can get a working linux box within 5 to 30 minutes.</p>

        <p><strong>Notice:</strong> If you are using Grml in a productive environment
        and/or use a grml2hd installation we strongly recommend to subscribe to <a
        href="/mailinglist/">the grml user mailinglist</a>! Notice that Grml is based
        on Debian unstable, so you really should be familiar with Debian unstable if you
        plan to use grml as a harddisk system.</p>

        <p>Make sure you are using the latest version of grml2hd. Just run 'apt-get
        update ; apt-get install grml2hd' if you have network access.</p>

        <p>Please make sure that your grml-ISO is ok. Otherwise installation
        will not be possible and might hang at a specific point. Verify the
        ISO via booting with 'grml testcd'. Check your CD low-level running

<pre class="rahmen">
# readcd -c2scan dev=/dev/cdrom</pre>

        <p>If you are running a grml2hd installation we strongly recommend to
        subscribe to the <a href="http://grml.org/mailinglist/">grml-user
        mailinglist</a>!</p>

        <p>For more information take a look at <a href="grml2hd.html">the grml2hd
        manpage</a>.</p>

        <h2><a name="screenshots"></a>Screenshots of installation</h2>

	<p>An image gallery providing <strong>screenshots for all the
	steps</strong> of grml2hd is <a href="gallery/">available
	online. Just take the tour!</a></p>

<!--
        <p><a href="/grml2hd/img/big/screeni1.png"><img style="border: 0" src="/grml2hd/img/small/screeni1.png" alt="*" /></a></p>
        <p>Let's install grml to partition /dev/hda5 and write lilo to MBR of /dev/hda.</p>

        <p><a href="/grml2hd/img/big/screeni2.png"><img style="border: 0" src="/grml2hd/img/small/screeni2.png" alt="*" /></a></p>
        <p>The welcome screen.</p>

        <p><a href="/grml2hd/img/big/screeni3.png"><img style="border: 0" src="/grml2hd/img/small/screeni3.png" alt="*" /></a></p>
        <p>Choose the filesystem you want to use.</p>

        <p><a href="/grml2hd/img/big/screeni4.png"><img style="border: 0" src="/grml2hd/img/small/screeni4.png" alt="*" /></a></p>
        <p>Are you sure you want to install it to harddisk?</p>

        <p><a href="/grml2hd/img/big/screeni5.png"><img style="border: 0" src="/grml2hd/img/small/screeni5.png" alt="*" /></a></p>
        <p>Copying files to harddisk...</p>

        <p><a href="/grml2hd/img/big/screeni6.png"><img style="border: 0" src="/grml2hd/img/small/screeni6.png" alt="*" /></a></p>
        <p>... and still copying...</p>

        <p><a href="/grml2hd/img/big/screeni7.png"><img style="border: 0" src="/grml2hd/img/small/screeni7.png" alt="*" /></a></p>
        <p>Copying was successful!</p>

        <p><a href="/grml2hd/img/big/screeni8.png"><img style="border: 0" src="/grml2hd/img/small/screeni8.png" alt="*" /></a></p>
        <p>Enter password for user root.</p>

        <p><a href="/grml2hd/img/big/screeni9.png"><img style="border: 0" src="/grml2hd/img/small/screeni9.png" alt="*" /></a></p>
        <p>Choose an username.</p>

        <p><a href="/grml2hd/img/big/screeni10.png"><img style="border: 0" src="/grml2hd/img/small/screeni10.png" alt="*" /></a></p>
        <p>Enter realname.</p>

        <p><a href="/grml2hd/img/big/screeni11.png"><img style="border: 0" src="/grml2hd/img/small/screeni11.png" alt="*" /></a></p>
        <p>Enter password for selected user.</p>

        <p><a href="/grml2hd/img/big/screeni12.png"><img style="border: 0" src="/grml2hd/img/small/screeni12.png" alt="*" /></a></p>
        <p>Running lilo was successful too.</p>

        <p><a href="/grml2hd/img/big/screeni13.png"><img style="border: 0" src="/grml2hd/img/small/screeni13.png" alt="*" /></a></p>
        <p>Done!</p>

        <p><a href="/grml2hd/img/big/screeni14.png"><img style="border: 0" src="/grml2hd/img/small/screeni14.png" alt="*" /></a></p>
        <p>It took only 7 minutes and 12 seconds to install grml Linux to harddisk!
        (And including taking some screenshots ;-))</p>
-->

        <h2><a name="faq"></a>Frequently Asked Questions (FAQ)</h2>

        <h3><a name="automatic"></a>How do I use the automatic installation?</h3>

        <p>You can install grml without any manual interaction. Either configure
        /etc/grml2hd/config and run 'GRML2HD_NONINTERACTIVE=1 grml2hd' afterwards or
        take a look at the boot parameter 'grml2hd' (take a look at the bootsplash
        F9). If you want to install it via network take a look at the grml2hd
        configuration dialog within <a
        href="/terminalserver/">grml-terminalserver</a>.</p>

        <h3><a name="update"></a>How about installing software and updates?</h3>

        <p>If you install grml to harddisk you have a Debian unstable with some
        special packages. You can install any software you like from the pools which
        are defined in /etc/apt/sources.list and of course you can keep your system
        up to date via running 'apt-get update; apt-get upgrade'. So if you are
        missing some software just install it as you are used from your 'normal'
        Debian system. Of course you also get all updates of grml-packages (unless
        you remove the grml.org-line in your sources.list).  If you encounter any
        problems when running 'apt-get update' just compare /etc/apt/sources.list
        with /etc/apt/sources.list.grml. /etc/apt/sources.list.grml is a repository
        list provided by package grml-etc which provides current package lists. If
        you want to use the grml-list just symlink it: 'ln -sf
        /etc/apt/sources.list.grml /etc/apt/sources.list'.</p>

        <h3><a name="binary"></a>What about binary compatibility between grml and Debian?</h3>

        <p>As grml is based on Debian you have full binary compatibility between grml
        and Debian (sid/unstable).</p>

        <h2><a name="known_issues"></a>Known Issues</h2>

        <h3><a name="lilo"></a>I can't boot my grml system because Lilo says LI L99 99 99...</h3>

        <p>You probably did not install lilo to master boot record (MBR) boot chose
        'install lilo into partition' in the grml2hd dialog. So now you don't have a
        bootmanager in your MBR.  Solution: Install lilo to MBR. Example:</p>

<pre class="rahmen">
sudo mount -o rw,dev,suid /mnt/hda1 # mount harddisk
sudo chroot /mnt/hda1 # chroot into the grml-system
vim -X /etc/lilo.conf # adjust the line containing the bootoption to 'boot=/dev/hda'
lilo  # now run lilo again, leave chroot environment (exit) and reboot your system afterwards</pre>

        <h3><a name="xfs"></a>I installed grml on a XFS filesystem and grml does not boot anymore</h3>

        <p>XFS and lilo don't work together when lilo is installed in the boot sector
        of the harddisk because the XFS superblock goes where lilo would be
        installed.  You have to install lilo in the master boot record of your
        harddisk to solve this problem.</p>

	<p>If you read this after installing grml to your harddisk you should
	use the grml live-cd and fix /etc/lilo.conf manually and rerun lilo
	(see above).</p>

<!--
        <h3><a name="scsi"></a>I installed grml to an SCSI device and now I can not boot it anymore</h3>

        <p>To access an SCSI device you probably need a specific kernel module. As
        grml uses an initial ramdisk providing hardware recognition when running from
        CD, the SCSI devices can be accessed when running from CD. grml2hd installs
        the running grml system to harddisk without the initial ramdisk.  Therefore
        booting such a (non-CD-)system might not work anymore. To fix this issue
        please install a kernel with SCSI-device support in the chroot after running
        grml2hd:</p>

<pre class="rahmen">
sudo mount -o rw,dev,suid /mnt/hda1 # mount harddisk where grml is installed
sudo chroot /mnt/hda1               # chroot into the grml-system
apt-cache search linux-image        # search for an appropriate kernel
apt-get install linux-image....     # instal the kernel image (for example: linux-headers-2.6.13-1-686)
vim -X /etc/lilo.conf               # adjust lilo for use with initrd
lilo  # now run lilo again, leave chroot environment (exit) and reboot your system afterwards</pre>

        <p>Please notice: devfs is deactivated starting with kernel 2.6.13, so there
        might be issues left with initrd-tools/mkinitrd and kernel &gt;=2.6.13 (see
        <a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=315654">bug
        #315654</a>). An alternative for initrd-tools is 'initramfs-tools' which is
        available in Debian unstable and grml. It supports booting without devfs.
        Take a look at mkinitrd.yaird and mkinitramfs to create an initramfs
        yourself.</p>
-->

      </div>

<?php include '../static_bottom.inc'; ?>
