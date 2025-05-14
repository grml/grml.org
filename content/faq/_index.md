+++
title = 'FAQ for Grml'
icon = 'clanbomber'
+++

**Up2date:** applies to Grml version {{< param current_release.version >}}

<a name="toc"></a><strong>Index:</strong>

<p class="toc"><a href="#general">General:</a></p>
<ol>
    <li><a href="#whatis">What is Grml?</a></li>
    <li><a href="#flavours">What architectures are supported by Grml?</a></li>
    <li><a href="#grml32">What were grml32, grml64 and grml96?</a></li>
    <li><a href="#grmlsmall">What is the difference between grml-full and grml-small?</a></li>
    <li><a href="#get">Where do I get Grml?</a></li>
    <li><a href="#whatmeans">What does Grml mean?</a></li>
    <li><a href="#releasename">What about the release name?</a></li>
    <li><a href="#requirements">Requirements for running Grml</a></li>
    <li><a href="#accessibility">What does accessibility at Grml mean?</a></li>
    <li><a href="#bootoptions">Which boot options does Grml support?</a></li>
    <li><a href="#systemd">Why is Grml using systemd?</a></li>
    <li><a href="#known_issues">Are there any known issues with this release? How about reporting bugs?</a></li>
</ol>

<p class="toc"><a href="#features">Features</a>:</p>
<ol>
    <li><a href="#usbboot">How do I boot Grml from a USB stick?</a></li>
    <li><a href="#persistency">Is it possible to store my settings?</a></li>
    <li><a href="#password">What are the passwords of users on Grml?</a></li>
    <li><a href="#version">How do I find out the version of Grml</a></li>
    <li><a href="#language">How do I change the language/keyboard settings?</a></li>
    <li><a href="#wms">Which window managers can I use?</a></li>
    <li><a href="#lvm">Where are my LVM devices?</a></li>
    <li><a href="#swraid">Where are my Software-RAID devices?</a></li>
    <li><a href="#booting">Which ways exist to boot Grml?</a></li>
    <li><a href="#timezone">How do I configure timezone on my Grml system?</a></li>
    <li><a href="#hdinstall">Is it possible to install Grml to harddisk?</a></li>
</ol>

<p class="toc"><a href="#software">Software:</a></p>
<ol>
    <li><a href="#sw_version">Which package(s) and which version is available?</a></li>
    <li><a href="#zsh">Why is Zsh the default shell?</a></li>
</ol>
</ol>

<p class="toc"><a href="#stuff">Support / Unanswered stuff:</a></p>
<ol>
    <li><a href="#questions">Further questions?</a></li>
    <li><a href="#support">Commercial Support</a></li>
</ol>

<h2><a name="general"></a><a href="#toc">General</a></h2>

<h3><a name="whatis"></a><a href="#toc">What is Grml?</a></h3>

<p>Grml is a bootable live system (Live-CD) based
on <a href="https://www.debian.org/">Debian</a>. It is not
necessary to install anything to a harddisk. Grml includes a
collection of GNU/Linux software especially for system
administrators. It specializes on administrative tasks like
installation, deployment and system rescue.</p>

<h3><a name="flavours"></a><a href="#toc">What architectures are supported by Grml?</a></h3>

The currently supported architectures are:

* `amd64`: 64-bit x86 PCs (both AMD and Intel CPUs, despite the name)
* `arm64`: 64-bit ARM

<h3><a name="grml32"></a><a href="#toc">What were grml32, grml64 and grml96?</a></h3>

Up to Grml release 2024.02, these three flavours were offered (for full and small each):

<ul>
    <li>grml32-full: version for 32-bit x86 PCs (kernel and userspace)</li>
    <li>grml64-full: version for 64-bit x86 PCs version (kernel and userspace)</li>
    <li>grml96-full: multi boot version (featuring the grml32-full and grml64-full ISOs combined on one ISO)</li>
</ul>

It was <em>strongly</em> encouraged to use either the grml64 or the grml96 flavours.

Since Grml release 2024.12, the grml32 flavour (for 32-bit x86 PCs) as well as the grml96 flavours no longer exist.

A new naming convention was introduced to include the architecture and version information, being `grml-$FLAVOUR-$VERSION-$ARCH`.

What was formerly known as `grml64` is now known as `grml-*-amd64`.
You will see, for example, `grml-full-2024.12-amd64.iso`, where `amd64` indicates this ISO is for an 64-bit x86 PC.

<h3><a name="grmlsmall"></a><a href="#toc">What is the difference between grml-full and grml-small?</a></h3>

grml-small provides a reduced set of available software compared to grml-full, for example it doesn't provide the X.org window system.
It provides the same Linux kernel image as grml-full and is fully binary compatible.
Choose the grml-small flavour if size - for whatever reason - really matters to you.

<h3><a name="get"></a><a href="#toc">Where do I get Grml?</a></h3>

Grml is open source, you can download it from the mirrors listed at [grml.org/download/](/download/).

<h3><a name="whatmeans"></a><a href="#toc">What does Grml mean?</a></h3>

Grml comes close to "argl" or "grrr" in English.
People use this when they want to express their dissatisfaction with software (amongst other things).

<h3><a name="releasename"></a><a href="#toc">What about the release name?</a></h3>
{{< require_release_update "2024.12" >}}

Codename of Grml 2024.12 is "Adventgrenze".

In Austria, <a href="https://en.wikipedia.org/wiki/Advent_wreath">Advent wreaths</a> are called `Adventkränze`, and `Adventgrenze` is pronounced similarly; however, `Grenze` is the German word for `border`.

Wir mögen Wortspiele(tm).

<h3><a name="requirements"></a><a href="#toc">Requirements for running Grml</a></h3>

* 64-bit x86 CPU (Intel Prescott or later, or AMD K8 or later, in 64-bit mode)
* or 64-bit ARM CPUs (v8)
* at least 1GB RAM. Preferably more
* either a [USB-boot capable system](#usbboot), a bootable CD-/DVD-ROM drive, or a network card for booting via network/PXE (check out [grml-terminalserver](#terminalserver))

<h3><a name="accessibility"></a><a href="#toc">What does accessibility at Grml mean?</a></h3>

The Grml kernel includes support for speakup.
For software, brltty and espeakup are included.

<h3><a name="bootoptions"></a><a href="#toc">Which boot options does Grml support?</a></h3>

Check out the [grml-cheatcodes file](https://git.grml.org/f/grml-live/templates/GRML/grml-cheatcodes.txt) (also available via [grml.org/cheatcodes/](/cheatcodes/)).

Of course [the command-line parameters](https://www.kernel.org/doc/html/latest/admin-guide/kernel-parameters.html) of the Linux kernel applies to Grml as well.

<h3><a name="systemd"></a><a href="#toc">Why is Grml using systemd?</a></h3>

We're a modern Linux distribution.

<a name="release"></a> <!-- old anchor -->
<a name="bugreport"></a> <!-- old anchor -->
<h3><a name="known_issues"></a><a href="#toc">Are there any known issues? How about reporting bugs?</a></h3>

<p>Please visit the <a href="/bugs/">bug webpage</a>.</p>

<h2><a name="features"></a><a href="#toc">Features</a></h2>

<!-- TODO: needs to be improved! -->
<h3><a name="usbboot"></a><a href="#toc">How do I boot Grml from a USB stick?</a></h3>

You can directly "dd" our ISOs to an empty USB stick/key, like this:

<pre class="rahmen">
dd bs=4M status=progress if=grml-full-{{< param current_release.version >}}-amd64.iso of=/dev/sdX           # OVERWRITES /dev/sdX!
</pre>

where /dev/sdX is your USB device. **Warning:** all previously stored data on the USB device will be lost.

For more flexibility, please check out our [grml2usb tool](/grml2usb/) and its manual.

On our wiki, you will find additional background information on [booting from USB](https://github.com/grml/grml/wiki/usb).
On modern PCs, both `dd` and `grml2usb` just work.

<h3><a name="store"></a><a name="persistency"></a><a href="#toc">Is it possible to store my settings?</a></h3>

<p>Yes, using the
<a href="https://github.com/grml/grml/wiki/persistency">persistency
feature</a>.</p>

<h3><a name="password"></a><a href="#toc">What are the passwords of users on Grml?</a></h3>

There are no default passwords - all accounts are locked by default for security reasons.
Even local logins are not possible (unless you set a password or create new user accounts as root).
You can create valid passwords using `sudo passwd [username]` from the shell individually.

With the [boot option](#bootoptions) `ssh` a password for the users `root` and `grml` is generated and SSH login is enabled.

<h3><a name="version"></a><a href="#toc">How do I find out the version of Grml</a></h3>

Run `grml-version` or use the following command:

<pre class="rahmen">
$ cat /etc/grml_version
</pre>

<h3><a name="language"></a><a href="#toc">How do I change the language/keyboard layout?</a></h3>

The default language of the Grml system is English (`en_US.UTF-8`).
All other locales are removed by default.

But it is possible to change the keyboard layout via either using `grml-quickconfig`, the [boot option(s)](#bootoptions) `lang`, `keyboard` and `xkeyboard` or via executing grml-lang when Grml is already running.

Boot option examples:

<pre class="rahmen">
grml lang=de      # enter this at the bootprompt and you will get
                  # german keyboard layout and german $LANG, $LC_ALL,
                  # $LANGUAGE...
grml keyboard=de xkeyboard=de lang=at # enter this at the bootprompt
                  # and you will get german keyboard and austrian
                  # language variables
</pre>

`grml-lang` example:

<pre class="rahmen">
% grml-lang de    # enter this in the shell to switch keyboard layout
</pre>

Note: Run `grml-setlang` to get a dialog based frontend for `/etc/default/locale`.

<h3><a name="wms"></a><a href="#toc">Which window managers can I use?</a></h3>

Grml provides [Fluxbox](http://www.fluxbox.org/) as window manager on grml-full.

<h3><a name="lvm"></a><a href="#toc">Where are my LVM devices?</a></h3>

LVM (Logical Volume Manager) is **not** started by default to avoid any possible damage to your data.

To activate present LVM devices execute (replace "$name" with the name of the PV):

<pre class="rahmen">
# Start lvm2-pvscan@$name
</pre>

or if you don't know its name and to enable all present ones, use:

<pre class="rahmen">
# vgchange -ay
</pre>

If you want to enable LVM by default just boot using the `lvm` [boot option](#bootoptions) which automatically enables LVM.

<h3><a name="swraid"></a><a href="#toc">Where are my Software-RAID devices?</a></h3>

Software-RAID (usually known as the mdadm stuff) is **not** started by default to avoid any possible damage to your data.

To get access to present SW-RAID devices execute:

<pre class="rahmen">
# mdadm --asssemble --scan
</pre>

If you want to enable SW-RAID by default just boot using the `swraid` [boot option](#bootoptions) which enables automatic assembling of software raid arrays.

<a name="terminalserver"></a>
<h3><a name="booting"></a><a href="#toc">Which ways exist to boot Grml?</a></h3>

Of course booting from CD/DVD is still supported.
But Grml provides more ways to boot:

The most common option to boot Grml is from a USB stick.
It works out of the box; you don't need to modify anything.
Check out [the entry on USB boot](#usbboot) for more details.

grml-terminalserver makes it possible to boot your system via network
using [PXE](https://en.wikipedia.org/wiki/Preboot_Execution_Environment)
(Preboot Execution Environment).
If your network card does not provide support for booting via PXE you can
still boot it either using the provided grub image by grml-terminalserver
or using [iPXE](https://ipxe.org/).

For more information, refer to the [grml-terminalserver webpage](/terminalserver/).

<h3><a name="timezone"></a><a href="#toc">How do I configure timezone on my Grml system?</a></h3>

Availabe boot options:

<pre class="rahmen">
grml utc          # set UTC, if your system/hardware clock is set to UTC (Coordinated Universal Time)
grml localtime    # Hardware Clock is set to local time (LOCAL), this is the default
grml tz=$option   # set timezone to corresponding $option, usage example: tz=Europe/Vienna, defaults to UTC if unset
</pre>

Further information: manpages hwclock(8), tzselect(1) and tzconfig(8);
[Debian Debian Administrator's Handbook - Time](https://www.debian.org/doc/manuals/debian-handbook/sect.config-misc.en.html)
and
[TimeZoneChanges in the Debian-Wiki](https://wiki.debian.org/TimeZoneChanges).

<h3><a name="hdinstall"></a><a href="#toc">Is it possible to install Grml to harddisk?</a></h3>

No.
If you want to install a Debian system take a look at [grml-debootstrap](/grml-debootstrap/)
(or use the [Debian Installer](https://www.debian.org/) instead).

<h2><a name="software"></a><a href="#toc">Software</a></h2>

<h3><a name="sw_version"></a><a href="#toc">Which package(s) and which
version is available?</a></h3>

If you want to get details about the provided packages and the
package versions without booting the Grml ISO check out the `dpkg_...`
files in the [Debian-Information section on grml.org/files/](/files/#debian).

<h3><a name="zsh"></a><a href="#toc">Why is Zsh the default shell?</a></h3>

Short answer: because [Zsh rocks](/zsh/), really!

Long(er) answer: If you don't know Zsh take a look the [Grml Zsh reference card](/zsh/).

If you are a Bash user and don't know Zsh yet, don't be afraid.
Bash is largely a subset of Zsh and you don't have to throw away your knowledge about shell stuff.

<h2><a name="stuff"></a><a href="#toc">Support / Unanswered stuff</a></h2>

<h3><a name="questions"></a><a href="#toc">Further questions</a></h3>

Do you have a question which is not answered in the FAQ or in the provided
[documentation](/docs/) (execute `grml-info` on your Grml system for offline
documentation)?  Also check out `grml-tips $KEYWORD` on your Grml system.

Take a look at both our website and the [wiki](https://github.com/grml/grml/wiki).
A good place to become part of the community is the [Grml mailinglist](/mailinglist/).

<h3><a name="support"></a><a href="#toc">Commercial Support</a></h3>

You want to deploy Grml in your data center, use it as part of your business or have an emergency case?
You're happy with Grml but would like to get your very own live system (providing your favourite software selection, special configuration, setup and a custom bootsplash)?

Please get in [touch with us](/contact/).
