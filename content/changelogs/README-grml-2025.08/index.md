+++
title = 'Release Notes: Grml 2025.08 - codename Oneinonein'

[params]
release_version = '2025.08'
release_packages_date = 2025-08-15
download_page = 'download'
kernel_version = '6.12.41'
+++

<a href="/screenshots/"><img align="right" style="margin-left: 20px; border: 0" src="/screenshots/grml_2025.08.jpg" alt="*" /></a>

[Download Now]({{< indirect_ref download_page >}})

### About

Grml is a Debian based live system focusing on the needs of system administrators.
The {{< param release_version >}} release provides fresh software packages from Debian trixie.
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.

About [the codename]({{< ref "faq#releasename" >}}).

### Important changes

* This release is based on the Debian 13 Release named "trixie".
* We use a [new signing key for the deb.grml.org repositories](https://blog.grml.org/archives/422-Repository-signing-key-transition.html)
* The grml-live build system incorporated the previously separate packages grml-autoconfig, grml-etc, grml-scripts, grml-udev-config.
* boot options `lang=` and the `grml-lang` tool have been fixed.

### New and removed features

The highlight of this release is it being based on the Debian 13 trixie release. We spent most of our time on cleaning the house. Still some noteworthy changes were implemented:

#### [grml-debootstrap](https://github.com/grml/grml-debootstrap/) - wrapper around debootstrap for installing pure Debian:

* Drop support for Debian 10 codename `buster`
* Skip udevadm execution on unsupported network interfaces like bonding_masters

#### [grml-live](https://github.com/grml/grml-live/) - build system for creating Grml (based) Linux live systems:

* Support building Debian forky based images
* Incorporate previously separate packages grml-autoconfig, grml-etc, grml-scripts, grml-udev-config
* Add Hungarian keyboard support, with `keyboard=hu`
* Add German "neo" keyboard variant, with `keyboard=de-neo`
* New `PACKAGE skip` feature for `package_config` lists
* Fix `lang=`/`keyboard=` boot options
* Built ISOs are now reproducible
* Split out clamav packages into pre-existing `FRESHCLAM` class
* Install Device Tree files ("DTBs") if installed by packages into `/boot/dtbs`
* Support classes for addon templates
* Fix file accessibility issue for bootstrap keyring
* Remove duplicated El Torito boot data on amd64
* Remove non-UTF-8 locales, remove outdated locales

#### [grml-scripts](https://github.com/grml/grml-scripts) - console scripts:

* `grml-info`: use links2 without framebuffer driver (dropped upstream)
* `grml-info`: in X11 always use `x-www-browser`
* Dropped old scripts: `grml-config-root`, `grml-exec-wrapper`, `grml-setservices`, `isoterm`, `run-multitail`, `noprompt`, `noeject`
* Moved `run-welcome`, `grml-lang`, `grml-setlang` into grml-live repository

#### [grml-zshrc](/zsh/) - Zsh configuration:

* `zshrc`: increase scrollback to 10000 lines
* `zshrc`: allow disabling macOS path\_helper
* `zshrc`: new `cdt` function: cd into a temporary directory
* `zshrc`: export all known LC\_* variables
* `zshrc`: removed checkhome hack, only relevant for Live ISOs
* `zshrc`: removed functions `j`, `iso2utf`, `utf2iso`, `term2iso`, `term2utf`
* `zshrc`: removed long deprecated xunfunction

### Bits & bolts

* Linux kernel **{{< param kernel_version >}}**
<!-- misc -->
* `grml2usb`: new option `--format` replaces `--fat16`, uses FAT32
* `grml-hwinfo`: collect ZFS information in JSON format
* `tmux.conf`: increase maximum status-right length to 64
* Fixed several [bugs reported in the issue tracker](https://github.com/grml/grml/issues/)

### Packages

Details about shipped packages and their versions in Grml are available in the [Debian section](/files/#debian).

### Updates

Packages are taken from Debian 13 "trixie", as of {{< format_date_long release_packages_date >}}.

The following 2 relevant packages have been added (excluding e.g. `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* initramfs-tools-bin
* tio

The following 5 Debian packages have been removed/replaced (excluding `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* clamav
* clamav-base
* clamav-freshclam
* lockfile-progs
* logrotate

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

[Christopher Bock](https://github.com/crpb),
[Komeil Parseh](https://github.com/mmdbalkhi),
[Martin Schürrer](https://github.com/MSch),
[Moviuro](https://github.com/moviuro),
[Roman Volosatovs](https://github.com/rvolosatovs),
[Sebastian Boehm](https://github.com/sometimesfood)
and
[Volodymyr Fedorov](https://github.com/lexxua)
for their contributions. ❤️

Once again [netcup](https://www.netcup.com/) contributed financially, this time specifically to this release. Thank you, [netcup](https://www.netcup.com/) ❤️

We also want to thank our [individual sponsors](https://github.com/sponsors/grml) donating through GitHub.
If you like what we are doing, please join in!

No new sponsors joined in for this release.

Thanks to everyone who contributed to Grml and this release, stay healthy and happy Grml-ing! ❤️🧡💛💚💙💜

### More Information

You can find out more about Grml on [our website](/), [IRC channel](/contact/#irc), and the [wiki](https://github.com/grml/grml/wiki).

To sign up for future Grml announcements, please subscribe to [Grml's announcement list](http://ml.grml.org/mailman/listinfo/grml-announce) or follow our [blog](https://blog.grml.org/).
