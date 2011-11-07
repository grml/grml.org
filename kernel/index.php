<!DOCTYPE html>
<html>
<head>
<title>grml.org - Kernel</title>
<meta name="Title" content="grml.org - Kernel" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="Kernel of grml.org" />
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

        <p><img style="float: right" src="/img/kernel.png" alt="*" /></p>

        <h1>Kernel</h1>

        <p>The Linux kernel 2.6 provided by the Grml system is based on the
        latest stable(!) vanilla kernel (taken from <a
        href="http://kernel.org/">kernel.org</a>) we consider 'useful
        and working'. The grml-kernel includes <a
        href="#patches">several patches</a> and <a
        href="#modules">modules</a>.  If you experience any problems
        please don't hesitate to <a href="/contact/">contact us</a>!</p>

        <h2>grml / grml-medium / grml-small 2011.05</h2>

        <p>The 2011.05 releases of Grml provide kernel 2.6.38:</p>

<pre class="rahmen">
grml@grml ~ % uname -a
Linux grml 2.6.38-grml #1 SMP PREEMPT Tue May 24 15:10:58 UTC 2011 i686 GNU/Linux</pre>

        <p>The <a
        href="http://git.grml.org/?p=grml-kernel.git;a=blob;f=config/config-2.6.38-grml;hb=HEAD">kernel
        configuration of 2.6.38-grml</a> is available online.</p>

        <h2>grml64 / grml64-medium / grml64-small 2011.05</h2>

        <p>The 2011.05 64bit releases of Grml provide kernel 2.6.38:</p>

<pre class="rahmen">
grml@grml ~ % uname -a
Linux nique 2.6.38-grml64 #1 SMP PREEMPT Tue May 24 23:35:23 UTC 2011 x86_64 GNU/Linux</pre>

        <p>The <a
        href="http://git.grml.org/?p=grml-kernel.git;a=blob;f=config/config-2.6.38-grml64;hb=HEAD">kernel
        configuration of 2.6.38-grml64</a> is available online.</p>

        <p>Notice: grml-small does not ship any further extra kernel
        packages besides the core kernel packages and lacks speakup
        support.</p>

        <h2><a name="patches"></a>Kernel Patches of 2.6.38-grml[64]</h2>

        <p>The kernel 2.6.38-grml[64] is based on 2.6.38.7. Find more
        information about the patches used in the grml-kernel <a
        href="http://git.grml.org/?p=grml-kernel.git;a=blob;f=2.6.38/README;hb=HEAD">in
        the grml-kernel repository</a>.</p>

        <h2><a name="modules"></a>Modules shipped with release 2011.05</h2>

        <p>Additionally to the patched kernel you'll find some extra modules on
        your grml-system.</p>

        <h3>aufs</h3>

        <p>Another Unionfs implementation, being an advanced multi layered unification filesystem, check out <a
        href="http://aufs.sourceforge.net/">the feature section on the project
        homepage</a> for further details.</p>

        <ul>
          <li><a href="http://aufs.sourceforge.net/">aufs.sf.net</a></li>
        </ul>

        <h3>iscsitarget</h3>

        <p>The aim of the project is to develop an open source iSCSI
        target with professional features, that works well in enterprise
        environment under real workload, and is scalable and versatile
        enough to meet the challenge of future storage needs and
        developements. We provide this kernel module for backwards
        compability, you might want to use the iscsi driver named stgt
        of 2.6.20 as well.</p>

        <ul>
          <li><a href="http://iscsitarget.sourceforge.net/">iscsitarget.sourceforge.net</a></li>
        </ul>

        <h3>ndiswrapper</h3>

        <p>Some vendors do not release specifications of the hardware or provide a
        linux driver for their wireless network cards. ndiswrapper provides a linux
        kernel module that loads and runs Ndis (Windows network driver API) drivers
        supplied by the vendors.</p>

        <ul>
          <li><a href="http://ndiswrapper.sourceforge.net/">ndiswrapper.sf.net</a></li>
        </ul>

        <h3>openafs</h3>

        <p>The AFS distributed filesystem. AFS is a distributed filesystem allowing
        cross-platform sharing of files among multiple computers.  Facilities are
        provided for access control, authentication, backup and administrative
        management.</p>

        <p>Notice: the module is named libafs.ko on grml 0.7. Running 'modprobe
        openafs' works because of a symlink, but the loaded module is named libafs
        anyway so run 'rmmod libafs' to remove it.</p>

        <h3><a name="speakup"></a>speakup</h3>

        <p>Speakup is a screen reader/speech access system for the GNU/Linux
        Operating System, used by people who are blind.</p>

        <ul>
          <li><a href="http://www.linux-speakup.org/">www.linux-speakup.org</a></li>
        </ul>

        <h3><a name="squashfs"></a>squashfs</h3>

        <p>Squashfs is a compressed read-only filesystem for Linux.  Squashfs is
        intended for general read-only filesystem use, for archival use (i.e. in
        cases where a .tar.gz file may be used), and in constrained block
        device/memory systems (e.g. embedded systems) where low overhead is
        needed.<br />

        Via using the module loop it is possible to mount a filesystem file. squashfs
        is a "loop" with (de)compression (Compressed Loopback Device) and it is
        possible to mount a compressed filesystem like a block device and seamlessly
        decompress its data while accessing it.<br />

        Whereas Knoppix uses the cloop mechanism, grml is based on the newer
        mechanism squashfs. The filesystem has been compressed into the file
        "/live/grml.squashfs" and is mounted by the initial init process using squashfs.</p>

        <ul>
          <li><a href="http://squashfs.sourceforge.net/">squashfs.sf.net</a></li>
        </ul>

        <h3>sysprof</h3>

        <p> Sysprof is a sampling CPU profiler that uses a Linux kernel module to
        profile the entire system, not just a single application. Sysprof handles
        shared libraries and applications do not need to be recompiled. In fact they
        don't even have to be restarted.</p>

        <ul>
          <li><a href="http://www.daimi.au.dk/~sandmann/sysprof/">sysprof</a></li>
        </ul>

        <h3>tp-smapi</h3>

        <p>The tp_smapi kernel module exposes some features of the ThinkPad
        hardware/firmware via a sysfs interface. Currently, the main implemented
        functionality is control of battery charging and extended battery
        status.  The underlfying hardware interfaces are SMAPI and direct access
        to the embedded controller.</p>

        <ul>
          <li><a href="http://tpctl.sourceforge.net/">tpctl.sf.net</a></li>
        </ul>

        <h3>virtualbox-ose</h3>

        <p>VirtualBox is a free x86 virtualization solution allowing a wide
        range of x86 operating systems such as Windows, DOS, BSD or Linux to run
        on a Linux system. The <em>ose</em>-version is the Open Source Edition
        of Virtualbox. The kernel modules for VirtualBox
        (virtualbox-ose-modules-2.6.38-grml) and the VirtualBox guest addition
        modules (virtualbox-ose-guest-modules-2.6.38-grml).</p>

        <ul>
          <li><a href="http://www.virtualbox.org/">virtualbox.org</a></li>
        </ul>

        <h3>xtables-addons</h3>

        <p>This package contains the set of loadable kernel modules for the
        xtables-addons project. It contains new targets for iptables, such as
        TARPIT, CHAOS, TEE, geoip, ipset, IPMARK, DELUDE, condition, etc..</p>

      </div>

<?php include '../static_bottom.inc'; ?>
