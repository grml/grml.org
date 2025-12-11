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
* Incorporate previously separate package grml-desktop
* Live-CD glue code was imported from `grml-scripts`
* Minimum host OS for running `grml-live` is now Debian bookworm, minimum build target is also Debian bookworm

#### [grml-scripts](https://github.com/grml/grml-scripts) - console scripts:

* Dropped old scripts: `grepc`, `grepedit`, `iimage`, `logview`, `mailhops`, `notifyd`, `osd_server`, `qma`, `dirvish-setup`, `grml-iptstate`, `make_chroot_jail`, `grml-swapon`

#### [grml-zshrc](/zsh/) - Zsh configuration:

* `zshrc`: sync global aliases from `zshrc.local`
* `zshrc`: remove `asc` function

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

The following 2 relevant packages have been added (excluding e.g. `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* firmware-mediatek
* gosop
* imagemagick

The following 5 Debian packages have been removed/replaced (excluding `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* daemon
* flashrom
* gpgv
* links2
* lynx
* mpv-status
* sopv-gpgv
* w3m
* wakeonlan
* xserver-xorg-video-vmware

### Known issues

Please visit the [known bugs](/bugs/known/) web page.

### Download Grml {{< param release_version >}}

Grml {{< param release_version >}} can be downloaded from [the download page]({{< indirect_ref download_page >}}).

### Feedback

Your comments, bug reports, patches, and suggestions will help fixing bugs and improving future releases.
If you find a problem with the release, please check [the known bugs list](/bugs/known/) and report problems using information on [grml.org/bugs/](/bugs/).
We also welcome feature requests and any kind of constructive feedback.
If you want to reach out to the Grml team, please visit our [contact webpage](/contact/).

The next stable Grml release is scheduled for the end of 2025.

The Grml team is available also for **commercial support and services**.
If you are interested in our consulting services, need a special feature in Grml or a custom branded Grml version with your company logo, please reach out to business (at) grml.org

### Thanks
{{< anchor thanks >}}

Many thanks in this release go to (alphabetically)

[Antoine Beaupré](https://github.com/anarcat),
[Christopher Bock](https://github.com/crpb),
Helmut Grohne,
Jan-Pieter Jacobs,
and
Thiago Perrotta
for their contributions. ❤️

Once again [netcup](https://www.netcup.com/) contributed financially, this time specifically to this release. Thank you, [netcup](https://www.netcup.com/) ❤️

We also want to thank our [individual sponsors](https://github.com/sponsors/grml) donating through GitHub.
If you like what we are doing, please join in!

No new sponsors joined in for this release.

Thanks to everyone who contributed to Grml and this release, stay healthy and happy Grml-ing! ❤️🧡💛💚💙💜

### More Information

You can find out more about Grml on [our website](/), [IRC channel](/contact/#irc), and the [wiki](https://github.com/grml/grml/wiki).

To sign up for future Grml announcements, please subscribe to [Grml's announcement list](http://ml.grml.org/postorius/lists/grml-announce.ml.grml.org) or follow our [blog](https://blog.grml.org/).
