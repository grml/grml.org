+++
title = 'Release Notes: Grml 2024.02 - codename Glumpad'

[params]
release_version = '2024.02'
release_packages_date = 2024-02-26
download_page = 'download'
kernel_version = '6.6'
+++

[Download Now]({{< indirect_ref download_page >}})

### About

Grml is a Debian based live system focusing on the needs of system administrators.
This Grml release provides fresh software packages from Debian trixie.
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.

About [the codename]({{< ref "faq#releasename" >}}).

### New features

Highlighting the most relevant changes only:

#### Misc:

* **grml-hwinfo**: add inxi output and collect information about network devices via ethtool

#### [grml-live](/grml-live/) - build system for creating Grml (based) Linux live systems

* Initial arm64 / aarch64 support
* Add support for Debian/trixie (current Debian/testing)
* Use serial console with a setting of 115200n8 by default
* Update zsh completion + ship it via Debian package
* Unify boot options order between isolinux/syslinux and GRUB
* Improved memtest + chainloader handling
* Remove Grml release name from the boot options
* Misc software related changes in GRMLBASE, GRML_SMALL + GRML_FULL classes

#### [grml-zshrc](/zsh/) - Zsh configuration

* zshrc: fixed outdated url in <em>weather</em> function
* /etc/skel/.zshrc: suggest J as global alias for jq usage

#### [grml-debootstrap](/grml-debootstrap/) - wrapper around debootstrap for installing pure Debian

* Initial arm64 support
* Add EFI support for VMs
* Don't install busybox any longer by default
* Refactored error handling
* Dropped support for installing releases before jessie
* Use persistent device names under /dev/disk/by-id/ for GRUB's install_devices

### Bits & bolts

* Linux kernel **{{< param kernel_version >}}**
* Fixed several [bugs reported in the issue tracker](https://github.com/grml/grml/issues/).

### Packages

Details about shipped packages and their versions in Grml are available in the [Debian section](/files/#debian).
Visit [dpkg.list](/files/grml-full-{{< param release_version >}}/dpkg.list) for a detailed list of shipped packages.

### Updates

Packages are taken from Debian trixie/testing as of {{< format_date_long release_packages_date >}}.

The following 9 relevant packages have been added (excluding e.g. `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* dhcpcd: DHCPv4 and DHCPv6 dual-stack client (replacement for deprecated isc-dhcp-client)
* f3: test real flash memory capacity
* fwupd/fwupd-amd64-signed: Tools to manage UEFI firmware updates
* lolcat: colorful `cat`
* lz4: Fast LZ compression algorithm library - tool
* pixz: (dependency of clonezilla)
* toilet: display large colourful characters in text mode
* udisks2: D-Bus service to access and manipulate storage devices

The following 9 Debian packages have been removed/replaced (excluding `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* dmraid: obsolete (see <a href="https://bugs.debian.org/1056944">#1056944</a>)
* dstat: unmaintained upstream (see <a href="https://bugs.debian.org/1034856">#1034856</a>)
* fai-server: irrelevant, no longer a dependency of grml-live
* fakeroot: irrelevant, no longer a dependency of devscripts
* firmware-ath9k-htc: conflicts with/replaced by firmware-atheros
* iso-codes: irrelevant, no longer a dependency of qemu-system-*
* lsb-base: irrelevant, no longer a dependency of uml-utilities
* lua-lpeg: irrelevant, no longer a dependency of nmap
* thin-provisioning-tools: broken in Debian/testing (see <a href="https://bugs.debian.org/1041089">#1041089</a>)

### Known issues

Please visit the [known bugs](/bugs/known/) web page.

### Download Grml {{< param release_version >}}

Grml {{< param release_version >}} can be downloaded from [the download page]({{< indirect_ref download_page >}}).

### Feedback

Your comments, bug reports, patches, and suggestions will help fixing bugs and improving future releases.
If you find a problem with the (pre-)release, please check [the known bugs list](/bugs/known/) and report problems using information on [grml.org/bugs/](/bugs/).
We also welcome feature requests and any kind of constructive feedback.
If you want to reach out to the Grml team, please visit our [contact webpage](/contact/).

### Thanks
{{< anchor thanks >}}

Many thanks in this release go to (alphabetically)
2f2a,
Alhyene,
anarcat,
András Korn,
Chris Hofstaedtler,
Christopher Bock,
Csillag Tamas,
Daniel Richard G,
Daniel Winzen,
Felix Egli,
flobee,
GavinPacini,
Giovanni Rosa,
János Pásztor,
Keith Irwin,
Marc Haber,
Michael Schierl,
Patrick Schleizer,
Roland Sommer and
willmcginnis
for their contributions.

### More Information

You can find out more about Grml on [our website](/), [IRC channel](/contact/#irc), and the [wiki](https://github.com/grml/grml/wiki).

To sign up for future Grml announcements, please subscribe to [Grml's announcement list](http://ml.grml.org/mailman/listinfo/grml-announce) or follow our [blog](https://blog.grml.org/).
