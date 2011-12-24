<!DOCTYPE html>
<html>
<head>
<title>grml.org - Known Bugs</title>
<meta name="Title" content="grml.org - Known Bugs" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="Report bug(s) at grml.org" />
<meta name="Abstract" content="grml, just another linux-distribution" />
<meta name="fdse-index-as" content="http://www.grml.org/bugs/known/" />
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
<?php include '../../static.inc'; ?>

<div class="content">

        <h1>Known Bugs</h1>

        <p>Additional issues can be found in the Grml Bugtracker. <a href="http://bts.grml.org/grml/">List of Open Issues</a>.</p>

	<p>If you find additional bugs, please <a href="/bugs/">report them</a>.</p>

	<h2>Known Bugs in Grml 2011.12</h2>
        <ul>
	  <li>Systems with nvidia cards might not boot with Kernel Mode-Setting (KMS). Use the 'Disable Kernel Mode-Setting' bootoption in the boot menu to disable KMS.</li>
          <li>testcd bootoption fails to check md5sums. [<a href="http://bts.grml.org/grml/issue1114">Issue 1114</a>]</li>
          <li>grml-terminalserver includes reference to grml2hd. [<a href="http://bts.grml.org/grml/issue1117">Issue 1117</a>]</li>
	</ul>

	<h2>Known Bugs in Grml 2011.05</h2>
	<ul>
	  <li>The menu shown on grml-small offers to start x11. Unfortunately grml-x is not included in grml-small and selecting a window manager will result in an error. (Fixed in git for upcoming release.)</li>
	  <li>iscsitarget does not work because the kernel modules are missing in the released ISOs.</li>
	</ul>

	<h2>Known Bugs in Grml 2010.12</h2>
	<ul>
	  <li>UTF-8 support is broken on tty2 and tty3.</li>
	</ul>

	<h2>Known Bugs in Grml 2010.04</h2>
	<ul>
	  <li>None.</li>
	</ul>

</div>

<?php include '../../static_bottom.inc'; ?>
