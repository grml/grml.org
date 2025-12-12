+++
title = 'Release Notes: Grml 2025.12 - codename Postwurfsendung'

[params]
release_version = '2025.12'
release_packages_date = 2025-12-11
download_page = 'download'
kernel_version = '6.17.9'
+++

<a href="/screenshots/"><img align="right" style="margin-left: 20px; border: 0" src="/screenshots/grml_2025.12.jpg" alt="*" /></a>

[Download Now]({{< indirect_ref download_page >}})

### About

Grml is a Debian based live system focusing on the needs of system administrators.
The {{< param release_version >}} release provides fresh software packages from Debian testing/forky.
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.

About [the codename]({{< ref "faq#releasename" >}}).

### Important changes

* This release is based on Debian testing/forky as of December 2025.
* We use a [new signing key for the deb.grml.org repositories](https://blog.grml.org/archives/422-Repository-signing-key-transition.html)

### New and removed features

New software since the Debian 13 release is included, and we continued to clean up the house. Noteworthy changes are:

#### [grml-live](https://github.com/grml/grml-live/) - build system for creating Grml (based) Linux live systems:

* New TOR class, contributed by anarcat
* Incorporate previously separate package grml-desktop ([grml/grml#225](https://github.com/grml/grml/issues/225), [grml/grml-live#425](https://github.com/grml/grml-live/pull/415))
* Live-CD glue code was imported from `grml-scripts`
* Minimum host OS for running `grml-live` is now Debian bookworm, minimum build target is also Debian bookworm

Detailed changes: [grml-live v0.55.1 to v0.54.1](https://github.com/grml/grml-live/compare/v0.54.1...v0.55.1) [[^1]]

[^1]: [1]: Note, that when comparing the changes between [grml-live v0.55.1 to v0.54.1](https://github.com/grml/grml-live/compare/v0.54.1...v0.55.1) it includes all commits from grml-desktop.
    To only list the changes from grml-live v0.55.1 to v0.54.1 use the following git command to exclude all commits which are pulled in from grml-desktop:

    `git log --oneline --no-merges v0.54.1..v0.55.1 ^83c27dcf`

#### [grml-scripts](https://github.com/grml/grml-scripts) - console scripts:

* Dropped old scripts: `grepc`, `grepedit`, `iimage`, `logview`, `mailhops`, `notifyd`, `osd_server`, `qma`, `dirvish-setup`, `grml-iptstate`, `make_chroot_jail`, `grml-swapon`

Detailed changes: [grml-scripts v2.14.8 to v2.14.10](https://github.com/grml/grml-scripts/compare/v2.14.8...v2.14.10)

#### [grml-zshrc](/zsh/) - Zsh configuration:

* `zshrc`: sync global aliases from `zshrc.local`
* `zshrc`: remove `asc` function

Detailed changes: [grml-etc-core v0.19.24 to v0.19.25](https://github.com/grml/grml-etc-core/compare/v0.19.24...v0.19.25)

### Bits & bolts

* Linux kernel **{{< param kernel_version >}}**
<!-- misc -->
* `grml2usb`: removed GRUB 0.x, syslinux < 4.0 support
* `grml-hwinfo`: collect upower information
* Inlined functions from `grml-shlib` into software requiring it
* Fixed several [bugs reported in the issue tracker](https://github.com/grml/grml/issues/)

### Packages

Details about shipped packages and their versions in Grml are available in the [Debian section](/files/#debian).

Packages for individual Grml software is now also available directly from their GitHub release pages, for example [grml2usb](https://github.com/grml/grml2usb/releases).

### Updates

Packages are taken from Debian testing/forky, as of {{< format_date_long release_packages_date >}}.

The following 3 relevant packages have been added (excluding e.g. `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* firmware-mediatek (see: [grml/grml#446](https://github.com/grml/grml-live/pull/446))
* gosop (a dependency of devscripts, replaces sopv-gpgv)
* imagemagick (replaces graphicsmagick, see below)

The following 11 Debian packages have been removed/replaced (excluding `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* daemon (dependency of mpt-status, see below)
* flashrom (see: [grml/grml-live#450](https://github.com/grml/grml-live/pull/450))
* gpgv (was a dependency of devscripts, automatically replaced by gosop)
* graphicsmagick (was replaced by imagemagick, see above)
* links2 (see: [grml/grml-scripts#22](https://github.com/grml/grml-scripts/issues/22), [grml/grml#37](https://github.com/grml/grml-scripts/issues/37), [grml/grml-live#119](https://github.com/grml/grml-live/issues/119), [grml/grml-live#413](https://github.com/grml/grml-live/pull/413))
* lynx (see: [grml/grml-scripts#22](https://github.com/grml/grml-scripts/issues/22), [grml/grml#37](https://github.com/grml/grml-scripts/issues/37), [grml/grml-live#119](https://github.com/grml/grml-live/issues/119), [grml/grml-live#413](https://github.com/grml/grml-live/pull/413))
* mpt-status (Removed from Debian, see: [Debian Bug #1039272](https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1039272) and [grml/grml#443](https://github.com/grml/grml-live/pull/443)
* sopv-gpgv (was a dependency of devscripts, automatically replaced by gosop)
* w3m (see: [grml/grml-scripts#22](https://github.com/grml/grml-scripts/issues/22), [grml/grml#37](https://github.com/grml/grml-scripts/issues/37), [grml/grml-live#119](https://github.com/grml/grml-live/issues/119), [grml/grml-live#413](https://github.com/grml/grml-live/pull/413))
* wakeonlan ([drbl has its own embedded version of wakeonlan](https://salsa.debian.org/georgesk/drbl/-/commit/3770609ebe84db874b84808c1c5d8f8d4698c5ff) and does not depend on wakeonlan anymore)
* xserver-xorg-video-vmware (xserver-xorg-video-vmware is obsolete as it caused Debian guests to fail to boot in VMWare and VirtualBox, see: [Debian bug #1117840](https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1117840) via [xorg changelog](https://sources.debian.org/src/xorg/1:7.7+26/debian/changelog?hl=1551#L3))

### Known issues

Please visit the [known bugs](/bugs/known/) web page.

### Download Grml {{< param release_version >}}

Grml {{< param release_version >}} can be downloaded from [the download page]({{< indirect_ref download_page >}}).

### Feedback

Your comments, bug reports, patches, and suggestions will help fixing bugs and improving future releases.
If you find a problem with the release, please check [the known bugs list](/bugs/known/) and report problems using information on [grml.org/bugs/](/bugs/).
We also welcome feature requests and any kind of constructive feedback.
If you want to reach out to the Grml team, please visit our [contact webpage](/contact/).

The next stable Grml release is scheduled for the first half of 2026.

The Grml team is available also for **commercial support and services**.
If you are interested in our consulting services, need a special feature in Grml or a custom branded Grml version with your company logo, please reach out to business (at) grml.org

### Thanks
{{< anchor thanks >}}

Many thanks in this release go to (alphabetically)

[Antoine Beaupré](https://github.com/anarcat),
[Christopher Bock](https://github.com/crpb),
and
Helmut Grohne
for their contributions. ❤️

Once again [netcup](https://www.netcup.com/) contributed financially, this time specifically to this release. Thank you, [netcup](https://www.netcup.com/) ❤️

We also want to thank our [individual sponsors](https://github.com/sponsors/grml) donating through GitHub.
If you like what we are doing, please join in!

No new sponsors joined in for this release.

Thanks to everyone who contributed to Grml and this release, stay healthy and happy Grml-ing! ❤️🧡💛💚💙💜

### More Information

You can find out more about Grml on [our website](/), [IRC channel](/contact/#irc), and the [wiki](https://github.com/grml/grml/wiki).

To sign up for future Grml announcements, please subscribe to [Grml's announcement list](http://ml.grml.org/postorius/lists/grml-announce.ml.grml.org) or follow our [blog](https://blog.grml.org/).
