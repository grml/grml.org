+++
title = 'Release Notes: grml-small 2009.10 - codename Hello-Wien'
+++

<p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
border: 0" src="/screenshots/grml_2009.10.jpg" alt="*" /></a></p>

<h3>About</h3>

<p>Grml is a bootable live system (Live-CD) based on Debian. It
includes a collection of GNU/Linux software especially for system
administrators and users of texttools. Grml provides automatic hardware
detection. You can use Grml (for example) as a rescue system, for
analyzing systems/networks or as a working environment. It is not
necessary to install anything to a harddisk; you don't even need a
harddisk to run it. Due to on-the-fly decompression grml includes about
2 GB of software and documentation on the CD.</p>

<p>Whereas Grml provides about 2 GB of software on a 700 MB ISO, <a
href="/faq/#whatissmall">grml-small</a> is a flavor with only ~100 MB
ISO-size (~275 MB uncompressed). It does not provide a lot of software
but the essential stuff for being a rescue system on a business card
CD-ROM or a small USB device. You can use the Debian package management
system to install software on the fly (assuming you have network access
to a Debian mirror). Take a look at the '<a
href="/files/">Debian-Information</a>'-section if you are searching for
the package list.</p>

<h3>New features</h3>

<h4>Special new features:</h4>

<ul>

<li><strong>vesamenu bootsplash</strong>: this graphical bootsplash
version (see screenshot on the right) provides an easy to use boot
selection menu.</li>

<a href="/screenshots/vesamenu.png"><img style="margin-left: 20px;
margin-bottom: 20px; margin-top: 20px; border: 0" align="right"
src="/screenshots/vesamenu.jpg" alt="*" /></a>

<li><strong>dd-able ISO</strong>: the ISO can be installed to a device
directly using dd(1). This means you can run (warning: overwrites any
existing data) 'dd if=grml.iso of=/dev/sdX' on your USB pen and will
get a bootable grml system. This method isn't as flexible as the <a
href="/grml2usb/">grml2usb</a> approach but might be useful if you
don't have a working grml2usb setup.</li>

<li>Added <strong>addons</strong> which where previously shipped only
with the grml and grml-medium flavours.</li>

<li>Integration of <strong>Etherboot/gPXE</strong>. In the Addons
submenu of the bootsplash you can directly invoke Etherboot/gPXE.</li>

<li>Integration of <strong>Grub</strong>. In the Addons submenu of
the bootsplash you can directly invoke Grub1 and Grub2.</li>

<li><strong>bootoption ethdevice</strong>: use specified network
device for network booting (PXE) instead of default (being eth0).
Feature contributed by Helge Wagner.
Usage example: ethdevice=eth1</li>

<li><strong>bootoption netscript</strong>: use this parameter to
download and run a script from a specific location. Supports variables
like $HOSTNAME, $ARCH, $KERNEL to download host specific software.
Usage example: 'netscript=example.org/$HOSTNAME/startup-script'
'netconfig' has been adjusted to also support this variables.</li>

<li><strong>DNS info as hostname</strong>: the hostname of the live
system will be automatically set to the information retrieved via
DHCP/DNS (if present). This feature can be disabled using the
<strong>nodhcphostname</strong> bootoption. Feature contributed by
Andreas Thienemann.</li>

<li>reworked <strong>configuration framework</strong>: the so called
DCS feature (debs, configuration and scripts) provides a more
consistent configuration for bootoptions like scripts, netconfig,
debs,.... The DCS directory defaults to the root directory of the live
image. If a file system labeled GRMLCFG is found, the DCS directory is
the root directory of that file system. Alternatively, the myconfig
boot parameter can be used to directly specify a device which is then
taken as DCS directory (myconfig=/dev/sda1, for example). The <a
href="https://git.grml.org/f/grml-autoconfig/doc/grml-autoconfig.200905.txt">
documentation of the behavior up to Grml 2009.05 is documented</a> as
well as <a href="
https://git.grml.org/f/grml-autoconfig/doc/grml-autoconfig.current.txt">the
behavior in current Grml versions</a>. Special thanks to Marc Haber
for his work.</li>

<li><strong>grml-autconfig configuration</strong>: support for
overwriting values via /etc/grml/autoconfig.local has been added, so
configuration changes are possible without running into file conflicts
on upgrade.</li>

</li>

</ul>

<h4>New features in Grml's Zsh</h4>

<ul>

<li><strong>grml zsh documentation</strong>: <a
href="/zsh/#grmlzshrc">grmlzshrc(5)</a> is a manpage providing
detailled information about grml's zsh configuration. On the grml
system it is available offline via 'man grmlzshrc'. An <a
href="/zsh/#grmlzshrc">online version is available</a>
as well. Special thanks to Joerg Woelke for his work.</li>

<li><strong>Directory specific shell configuration with Zsh</strong>:
based on directories you can set your own profiles. Further details <a
href="http://michael-prokop.at/blog/2009/05/30/directory-specific-shell-configuration-with-zsh/">available
online</a>.</li>

<li>Using <strong>history-incremental-pattern-search-*</strong> for
incremental history searches per default (via ^r and ^s). Press ctrl-r
to search in the history using the specified pattern. For example you
can type 'cd*grml' for searching command lines containing 'cd
~/devel/grml2usb' or 'cd ~/git/grml-live. You can iterate through the
results as usual too retyping ^r or ^s. </li>

</ul>

<h4>New grml-scripts:</h4>

<ul>

<li><strong>grml-exec-wrapper</strong>:  simple but smart program
execution wrapper. This script is for executing commands but check
whether the specified program is available at all. If the command is
not available an error message is displayed either on the command line
(if $DISPLAY is empty) or as graphical version (if $DISPLAY is
set).</li>

<li><strong>grml-sniff</strong>: script for configuring a network
sniffing setup.</li>

</ul>

<h4><a href="/grml2usb/">grml2usb</a> (install grml ISO(s) on usb device for booting):</h4>

<ul>

<li>using syslinux as default bootmanager (grub available only as
option using --grub)</li>

<li>support for new vesamenu bootsplash, including support for
multi-ISO setup</li>

<li>adding additional ISOs to an existing grml2usb installation
is possible (specifying different default boot options is possible as
well)</li>

<li>grml2iso (tool to create a multiboot grml ISO using grml2usb)
supports vesamenu bootsplash, altering of bootoptions and removing
existing boot parameters. grml2iso also supports copying files to the
generated iso (easy remastering for common usecases).</li>

</ul>

<p>Visit <a href="https://github.com/grml/grml/wiki/usb">the usb webpage
in the grml wiki</a> and <a href="/grml2usb/">grml.org/grml2usb</a> for
more details regarding grml2usb.</p>

<h4><a href="/grml-debootstrap/">grml-debootstrap</a> (wrapper around debootstrap for installing plain Debian via grml):</h4>

<ul>

<li>new cmdline option for specifying target architecture
(--arch)</li>

<li>use cdn.debian.net as default mirror</li>

<li>several bugfixes and more updates... check out the <a
href="https://git.grml.org/f/grml-debootstrap/debian/changelog">Debian
changelog</a> for details</li>

</ul>

<p>Visit <a href="/grml-debootstrap/">grml.org/grml-debootstrap/</a> for more
details regarding grml-debootstrap.</p>

<h3>Kernel</h3>

<p>Based on vanilla kernel 2.6.31.5 including <a
href="/kernel/">several patches</a> and the aufs module.</p>

<p>Visit <a href="/kernel/">grml.org/kernel/</a> for more details
regarding the grml-kernel.</p>

<h3>Bugfixes</h3>

<p>Fixed several bugs and issues reported on <a
href="https://github.com/grml/grml/wiki/grml-small_2009.05">grml-small_2009.05 @
grml-wiki</a> and in the <a href="http://bts.grml.org/grml/">bug
tracking system</a>.</p>

<h3>Important Changes</h3>

<ul>

<li><strong>Use of Debian Geo Mirror</strong>: Grml uses
cdn.debian.net as Debian mirror in the sources.list setup nowadays.
This should select a mirror near to the location of the user, so the
default Debian mirror in Grml is no longer a server from Germany
only. Visit <a href="http://wiki.debian.org/DebianGeoMirror">the
Debian Wiki</a> for further information.</li>

<li><strong>Use of sources.list.d</strong>: the Debian mirror
configuration moved from /etc/apt/sources.list to the directory
/etc/apt/sources.list.d/. The Grml mirror configuration can be found
in /etc/apt/sources.list.d/grml.list and the Debian mirror
configuration is located in /etc/apt/sources.list.d/debian.list.</li>

</ul>

<h3>Packages / Software</h3>

<p>Details about shipped packages and their versions on grml are
available at the <a href="/files/#debian">Debian section</a>. Visit <a
href="/files/release-2009.10-small/dpkg_get_selections">dpkg_get_selections</a>
for a main package listing and <a
href="/files/release-2009.10-small/dpkg_list">dpkg_list</a> for a more
detailed list of packages shipped with grml 2009.10.</p>

<h3>Updates</h3>

<p>Updated all packages to Debian Unstable branch by 22nd of october
2009 (plus some further selected updates).</p>

<p>Removed 4 packages (excluding lib* and *2.6.28-grml*) - please
notice that some of them are available under
different names/in different packages:</p>

<pre class="rahmen">
*2.6.28-grml* lib*

diff grml-saveconfig mktemp timeout
</pre>

<p>Added 9 new packages (exluding lib* and *2.6.31-grml*):</p>

<pre class="rahmen">
ca-certificates diffutils gnupg-curl grub-pc install-info iw make openssl parted
</pre>

<h3>Known issues</h3>

<p>Take a look at <a
href="https://github.com/grml/grml/wiki/grml-small_2009.10">grml-small_2009.10 @ grml-wiki</a>.
Please report problems using information on <a
href="/bugs/">grml.org/bugs/</a>.</p>

<h3>Download grml-small 2009.10</h3>

<p>grml-small 2009.10 can be downloaded from the mirrors listed on <a
href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help
fixing bugs and improving future releases. If you find a problem with
the release please check <a
href="https://github.com/grml/grml/wiki/grml-small_2009.10">grml-small_2009.10 @
grml-wiki</a> and report problems using information on <a
href="/bugs/">grml.org/bugs/</a>. Please send your feedback and
feature requests <a href="/contact/">to the grml-team</a>!</p>

<ul>
<li><a href="/contact/">grml.org/contact/</a>
<li><a href="/irc/">#grml on irc.freenode.org</a>
</ul>

<h3>Thanks</h3>

<p>Many thanks (alphabetically) in this release go to
Alexander 'Leo' Bergolth,
Al Sten-Clanton,
Andras Korn,
Andreas Thienemann,
António P. P. Almeida,
Axel Beckert,
Christian Bricart,
Christian Hofstaedtler,
Christian Vogel,
Daniel Tiefnig,
Daniel Weuthen,
Ernesto Domato,
Frank Prochnow,
Helge Wagner,
Joerg Woelke,
Julian Langschädel,
Marcel Meckel,
Marc Haber,
Marc 'HE' Brockschmidt,
Markus Schimpf,
Michael Schierl,
Michael Whapples,
Moritz Wilhelmy,
Peter Palfrader,
Ralf Moll,
Sedat Dilek,
Stefan Traby,
Thomas Koehler,
Thorsten Glaser,
Ulrich Zehl,
Walter Haidinger,
Wernfried Haas and
Zoran Dzelajlija
for their contributions.</p>

<h3>More Information</h3>

<p>You can find out more about grml on <a href="/">our website</a>, <a
href="/irc/">IRC channel</a>, and <a
href="http://wiki.grml.org/">wiki</a>.

<p>To sign up for future grml announcements, please subscribe to <a
href="http://lists.mur.at/mailman/listinfo/grml-announce"> grml's
announcement list</a>.</p>

<p>If you are interested in development releases grab the daily ISOs
from <a href="http://daily.grml.org/">daily.grml.org</a>.</p>

<h3>Further Questions?</h3>

<p>Please feel free to <a href="/contact/">contact us.</a></p>

<h3>Credits</h3>

<p style="text-align: center">
<img src="/img/grml-hellowien.jpg" alt="Credits: Developed by: Michael 'Maniac' Prokop, Ulrich 'Dangerous' Dangel, Frank 'Enstein' Ter-ror-beck, Alexander 'Igor' Wirt,... and many more" />
</p>
