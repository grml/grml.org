+++
title = 'Release Notes: Grml 2026.04 - codename CashFloh'

[params]
release_version = '2026.04'
release_packages_date = 2026-04-29
download_page = 'download'
kernel_version = '6.19.13'
+++

<a href="/screenshots/"><img align="right" style="margin-left: 20px; border: 0" src="/screenshots/grml_2026.04.jpg" alt="*" /></a>

[Download Now]({{< indirect_ref download_page >}})

### About

Grml is a Debian-based live system focusing on the needs of system administrators.
The {{< param release_version >}} release provides fresh software packages from Debian testing/forky.
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.

About [the codename]({{< ref "faq#releasename" >}}).

### Important changes

* This release is based on Debian testing/forky as of April 2026.

### New and removed features

New software since the Grml 2025.12 release is included, and we continued to clean up the house. Noteworthy changes are:

#### [grml-live](https://github.com/grml/grml-live/) - build system for creating Grml (based) Linux live systems:

* Uses GRUB 2 for BIOS boot instead of ISOLINUX ([grml/grml-live#459](https://github.com/grml/grml-live/pull/459))
* grml-terminalserver was added on arm64 ([grml/grml-live#480](https://github.com/grml/grml-live/pull/480))
* Uses en_DK.UTF-8 as new default for LC_TIME ([grml/grml-live#265](https://github.com/grml/grml-live/issue/265), [grml/grml-live#276](https://github.com/grml/grml-live/issue/276), [grml/grml-live#482](https://github.com/grml/grml-live/pull/482))
* Incorporate previously separate package grml-hostname ([grml/grml#225](https://github.com/grml/grml/issues/225), [grml/grml-live#425](https://github.com/grml/grml-live/pull/415))

Detailed changes: [grml-live v0.55.1 to v0.56.0](https://github.com/grml/grml-live/compare/v0.55.1...v0.56.0) [[^1]]

[^1]: [1]: Note, that when comparing the changes between [grml-live v0.55.1 to v0.56.0](https://github.com/grml/grml-live/compare/v0.55.1...v0.56.0) it includes all commits from grml-hostname.
    To only list the changes from grml-live v0.55.1 to v0.56.0 use the following git command to exclude all commits from grml-hostname which were created before grml-live v0.55.1 was released.

    `git log --oneline --no-merges --after "2025-12-11 18:41:18 +0100"`

#### [grml-debootstrap](https://github.com/grml/grml-debootstrap) - Debian system install tool

* Dropped support for Debian v11 / bullseye and replaced isc-dhcp-client with dhcpcd-base ([grml/grml-debootstrap#366](https://github.com/grml/grml-debootstrap/pull/366))
* Added Raspberry Pi image generation support [grml/grml-debootstrap#335](https://github.com/grml/grml-debootstrap/pull/335))

Detailed changes: [grml-debootstrap v0.123 to v0.127](https://github.com/grml/grml-debootstrap/compare/v0.123...v0.127)

#### [grml-terminalserver](https://github.com/grml/grml-terminalserver) - terminalserver for Grml

* Add support for dnsmasq as DHCP server alternative ([grml/grml-terminalserver#20](https://github.com/grml/grml-terminalserver/pull/20))

#### [grml2usb](https://github.com/grml/grml2usb) - install Grml ISOs to USB keys

* Uses GRUB for BIOS boot ([grml/grml2usb#104](https://github.com/grml/grml2usb/pull/104))
* Droppd mkisofs/genisoimage support, requires xorriso ([ff92ca9](https://github.com/grml/grml2usb/commit/ff92ca9))
* Replaced mbrldr/mbrmgr with syslinux MBR ([c695dda](https://github.com/grml/grml2usb/commit/c695dda))

Detailed changes: [grml2usb v0.20.10..v0.20.13](https://github.com/grml/grml2usb/compare/v0.20.10...v0.20.13)

### Bits & bolts

* Linux kernel **{{< param kernel_version >}}**
<!-- misc -->
* `grml-hwinfo`: collect output from cpupower
* Fixed [33 issues](https://github.com/search?q=org%3Agrml+closed%3A2025-12-12..2026-04-28+reason%3Acompleted&type=issues&ref=advsearch) and [127 PRs](https://github.com/search?q=org%3Agrml+closed%3A2025-12-12..2026-04-28&type=pullrequests&ref=advsearch)

### Packages

Details about shipped packages and their versions in Grml are available in the [Debian section](/files/#debian).

Packages for individual Grml software is now also available directly from their GitHub release pages, for example [grml2usb](https://github.com/grml/grml2usb/releases).

### Updates

Packages are taken from Debian testing/forky, as of {{< format_date_long release_packages_date >}}.

The following relevant package has been added (excluding e.g. `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* bubblewrap (a dependcy of vim-gtk3)

The following 11 Debian packages have been removed/replaced (excluding `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* isc-dhcp-server (Removed from Debian/testing, see [isc-dhcp REMOVED from testing](https://tracker.debian.org/news/1714828/isc-dhcp-removed-from-testing/))
* isolinux (see: [grml/grml-live#459](https://github.com/grml/grml-live/pull/459))

### Known issues

Please visit the [known bugs](/bugs/known/) web page.

### Download Grml {{< param release_version >}}

Grml {{< param release_version >}} can be downloaded from [the download page]({{< indirect_ref download_page >}}).

### Feedback

Your comments, bug reports, patches, and suggestions will help fixing bugs and improving future releases.
If you find a problem with the release, please check [the known bugs list](/bugs/known/) and report problems using information on [grml.org/bugs/](/bugs/).
We also welcome feature requests and any kind of constructive feedback.
If you want to reach out to the Grml team, please visit our [contact webpage](/contact/).

The next stable Grml release is scheduled for 2026.07 at the Debian Conference [Debconf26](https://debconf26.debconf.org/). See you there. :)

The Grml team is available also for **commercial support and services**.
If you are interested in our consulting services, need a special feature in Grml or a custom branded Grml version with your company logo, please reach out to business (at) grml.org

### Thanks
{{< anchor thanks >}}

Many thanks in this release go to (alphabetically)

[Antoine Beaupré](https://github.com/anarcat),
[Aaron Rainbolt](https://github.com/ArrayBolt3),
[damianoognissanti](https://github.com/damianoognissanti),
[Christopher Bock](https://github.com/crpb),
[Evgeni Golov](https://github.com/evgeni),
and
[Glenn Washburn](https://github.com/crass)
for their contributions. ❤️

Once again [netcup](https://www.netcup.com/) contributed financially, this time specifically to this release. Thank you, [netcup](https://www.netcup.com/) ❤️

We also want to thank our [individual sponsors](https://github.com/sponsors/grml) donating through GitHub.
If you like what we are doing, please join in!

No new sponsors joined in for this release.

Thanks to everyone who contributed to Grml and this release, stay healthy and happy Grml-ing! ❤️🧡💛💚💙💜

### More Information

You can find out more about Grml on [our website](/), [IRC channel](/contact/#irc), and the [wiki](https://github.com/grml/grml/wiki).

To sign up for future Grml announcements, please subscribe to [Grml's announcement list](http://ml.grml.org/postorius/lists/grml-announce.ml.grml.org) or follow our [blog](https://blog.grml.org/).
