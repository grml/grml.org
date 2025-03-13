+++
title = 'Zsh'
icon = 'zsh_lover'
+++

<p><a href="#intro">Introduction</a> / <a
href="#grmlzshrefcard">grml-zsh-refcard</a> / <a
href="#grmlzshrc">grmlzshrc(5)</a> / <a
href="#grmlzshconfig">grml-zsh-config</a> / <a
href="#zshlovers">zsh-lovers</a> / <a
href="#resources">Resources</a></p>

<h2><a name="intro"></a>Introduction</h2>

<p>One of the main features of the grml system is the <a
href="https://zsh.sourceforge.net/">zsh</a> (Z shell). The zsh is the default
<em>interactive</em> shell of the grml system. On this webpage you will
find information regarding the zsh on grml.</p>

<h2><a name="grmlzshrefcard"></a>grml-zsh-refcard</h2>

The grml-zsh-refcard provides a short overview of defined aliases,
functions and settings of zsh on the grml system. Download it, print it
and improve your zsh skills!

* [grml-zsh-refcard.pdf](grml-zsh-refcard.pdf) (~108kB)

<h2><a name="grmlzshrc"></a>grmlzshrc(5)</h2>

grmlzshrc(5) is a manpage providing detailled information about grml's
zsh configuration. On the grml system it is available offline via `man
grmlzshrc`. An online version is available as well:

* [grmlzshrc(5)](grmlzshrc.html)

<h2><a name="grmlzshconfig"></a>grml-zsh-config</h2>

You do not have to use grml/Debian to use grml's zsh configuration.
Just retrieve and install the configuration files in your home directory
via executing for example:

    # IMPORTANT: please note that you might override an existing
    # configuration file in the current working directory! =>
    wget -O .zshrc      https://grml.org/console/zshrc

    # Optionally also grab the user configration:
    # wget -O .zshrc.local https://grml.org/console/zshrc.local

Tip: [Archlinux](https://www.archlinux.org/) users may use an
[official grml-zsh-config package](https://www.archlinux.org/packages/extra/any/grml-zsh-config/).

<h2><a name="zshlovers"></a>zsh-lovers</h2>

zsh-lovers is a small project which tries to collect tips, tricks and
examples for the Z shell. Authors of the zsh-lovers manual page are
[Christian 'strcat' Schneider](https://www.strcat.de/),
[Matthias Kopfermann](/team/) and [Michael Prokop](/team/).

Main part of zsh-lovers is the manual page which is available in
several formats:

* [zsh-lovers.1](zsh-lovers.1) (manual page)
* [zsh-lovers.pdf](zsh-lovers.pdf)
* [zsh-lovers.html](zsh-lovers.html)

The zsh-lovers archive includes the zsh-lovers manual page and several zsh configuration files.
It's available through the zsh-lovers packages from [the Grml repository](/files/).

Feedback is welcome via [github.com/grml/zsh-lovers](https://github.com/grml/zsh-lovers).

<h2><a name="resources"></a>Resources</h2>

<h3>General/Useful:</h3>

<ul>
  <li><a href="https://www.zsh.org/">zsh.org</a>: zsh-homepage
  <li><a href="https://zsh.sourceforge.io">zsh.sourceforge.io/</a> - <em>main</em> zsh-homepage
  <li><a href="https://sourceforge.net/projects/zsh/">zsh.sf.net</a> - zsh-projectpage
  <li><a href="https://zsh.sourceforge.io/FAQ/">Z-Shell FAQs</a>
  <li><a href="https://www.zsh.org/mla/">Zsh - mailing list archive</a>
  <li><a href="https://www.bash2zsh.com">From Bash to Z Shell: Conquering the
  Command Line</a>
  <li><a href="https://www.bash2zsh.com/zsh_refcard/refcard.pdf">Zsh reference-card (PDF)</a>
  <li><a href="http://www.opengroup.org/onlinepubs/007908799/xcu/shellix.html">The Single UNIX ® Specification, Version 2 - Shell Command Language Index</a></li>
  <li><a href="https://bugs.debian.org/cgi-bin/pkgreport.cgi?pkg=zsh">Debian bug reports for zsh</a>
  <li><a href="https://www.strcat.de/zsh/">Zsh-Webpage</a> by Christian Schneider
  <li><a href="https://adamspiers.org/computing/shells/">Adam's UNIX shells page</a>
  <!--
  <li><a href="http://developer.berlios.de/projects/netzworkk/">kwtools</a> - a
  big zsh-scriptcollection (based on <a
  href="http://packages.debian.org/unstable/misc/dialog">dialog</a>) by Kai Wilke for
  often used apps
  <li><a href="http://www.rayninfo.co.uk/tips/zshtips.html">Zzappers Best of ZSH tips</a> by David Rayner
  -->
  <li><a href="https://zsh.sourceforge.net/links.html">more links on zsh-homepage</a>
  <!--
  <li><a href="http://www.int.gu.edu.au/courses/2010int/nscp_shells.html">NCSP - Unix Shells</a>
  -->
</ul>

<h3>Articles:</h3>

<ul>
  <li><a href="https://zsh.sourceforge.net/Guide/zshguide.html">A User's Guide to the Z-Shell</a> by Peter Stephenson (1999) </li>
<!--
  <li><a href="https://www.ibm.com/developerworks/linux/library/l-z.html?dwzone=linux">Curtains up: introducing the Z shell</a> by IBM Developerworks (2001)</li>
  <li><a href="http://www-106.ibm.com/developerworks/linux/library/l-z.html?dwzone=linux">Introducing the Z-Shell</a> by IBM Developerworks (1.2.2001)</li>
  <li><a href="http://ezine.daemonnews.org/199910/zsh.html">Artikel in BSD-News</a> by Dominic Mitchell (October 1999)</li>
  <li><a href="http://www.linux-mag.com/cgi-bin/printer.pl?issue=2002-05&amp;article=power">Making the Transition to Zsh</a> by John Beppu (May 2002)</li>
  <li>Writing Zsh Completion Functions (July 2002): <a
  href="http://www.linux-mag.com/2002-07/power_01.html">part 1</a> und <a
  href="http://www.linux-mag.com/2002-07/power_02.html">part 2</a></li>
  <li><a href="http://www.acm.uiuc.edu/workshops/zsh/toc.html">Zsh Workshop</a> by Larry P. Schrof
  -->
</ul>

<h3>Zsh configuration files:</h3>

<ul>
  <li><a href="https://www.strcat.de/dotfiles/">zsh-config of Christian Schneider</a>
  <!--
  <li><a href="https://zshwiki.org/home/links/configs">zsh-configuration-files @ zshwiki.org </a></li>
  <li><a href="http://www.dotfiles.com/index.php?app_id=4">zshrcs @ dotfiles.com</a></li>
  -->
</ul>
