<!DOCTYPE html>
<html>
<head>
<title>grml.org - Bugs</title>
<meta name="Title" content="grml.org - Report bug" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="Report bug(s) at grml.org" />
<meta name="Abstract" content="grml, just another linux-distribution" />
<meta name="fdse-index-as" content="http://www.grml.org/bugs/" />
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

        <p><img style="float: right" src="/img/face-tongue.png" alt="*" /></p>

        <h1>Reporting Bugs</h1>

	<p>
	Please check for <a href="/bugs/known/">known bugs</a> first.</p>

        <ul>
          <li>Web: <a href="http://bts.grml.org/grml/user?@template=register">Register</a> and then <a href="http://bts.grml.org/grml/issue?@template=item">Create an issue</a></li>
          <li>Using E-Mail: Send mail to <code>bugs (at) grml.org</code></li>
        </ul>

        <p>Please be as specific as possible.</p>

	<p>
        Include at least:
        <ul>
            <li>Steps to reproduce the problem</li>
            <li>Expected behaviour</li>
            <li>Actual behaviour</li>
            <li>Your system configuration (run <code>grml-hwinfo</code>)</li>
            <li>Software versions (try <code>foo --version</code> or <code>dpkg -l foo</code>)</li>
        </ul>
        </p>

        <p>Take a look at "<a href="http://www.chiark.greenend.org.uk/~sgtatham/bugs.html">How to Report Bugs Effectively</a>".</p>

        <p>Note: all bugs are made public.</p>

        <p><b>Thank you for helping us improve Grml!</b></p>
</div>

<?php include '../static_bottom.inc'; ?>
