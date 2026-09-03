+++
title = 'Release Notes: Grml 2026.09 - codename Hättiwaritätti'

[params]
release_version = '2026.09'
release_packages_date = 2026-09-03
download_page = 'download'
kernel_version = '7.1.8'
+++

<a href="/screenshots/"><img align="right" style="margin-left: 20px; border: 0" src="/screenshots/grml_2026.09.jpg" alt="*" /></a>

[Download Now]({{< indirect_ref download_page >}})

### About

Grml is a Debian-based live system focusing on the needs of system administrators.
The {{< param release_version >}} release provides fresh software packages from Debian testing/forky.
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.

About [the codename]({{< ref "faq#releasename" >}}).

### Important changes

* This release is based on Debian testing/forky as of September 2026.
* [GNU Screen 5.0.1](https://lwn.net/Articles/987700/) landed. The required configuration changes are not backwards compatible. Users of our grml screenrc must either upgrade or use the [screenrc_v4](https://grml.org/console/screenrc_v4) file with GNU Screen 4.9.

### New and removed features

New software since the Grml 2026.04 release is included, and we continued to clean up the house. Noteworthy changes are:

#### [grml-live](https://github.com/grml/grml-live/) - build system for creating Grml (based) Linux live systems:

* grml-live now requires Linux user namespaces in the build environment. Unfortunately docker and other containerization tools do not provide Linux user namespaces inside containers. This was prompted by systemd changes, and took a substantial effort. Daily images were not built between 2026-06-10 and 2026-09-02.
* Reading configuration from `grml-live.conf` was removed.
* New command line syntax. chroot-based workflows are temporarily unsupported and will be restored at a later time.
* Not shipped on grml-full anymore. Please use grml-live directly from git.
* Remaining 32-bit i386 architecture support was removed.

Detailed changes: [grml-live v0.56.0 to d37c392](https://github.com/grml/grml-live/compare/v0.56.0...d37c392310b4760fe848a9739089ee4949598298)

#### [grml-debootstrap](https://github.com/grml/grml-debootstrap) - Debian system install tool:

* Debian "forky" can now be selected in the dialog frontend
* `/etc/kernel-img.conf` is no longer created in the target system, rely on Debian defaults instead.
* `FIXED_DISK_IDENTIFIERS=yes` was implemented for GPT and Raspberry Pi images, and the identifiers are derived from  [SOURCE_DATE_EPOCH](https://reproducible-builds.org/docs/source-date-epoch/).

Detailed changes: [grml-debootstrap v0.127 to v0.130](https://github.com/grml/grml-debootstrap/compare/v0.127...v0.130)

### Bits & bolts

* Linux kernel **{{< param kernel_version >}}**
* `exfat` support is now available in the initramfs, for booting from exfat-formatted USB devices.
* `grml2usb`: when `grub-install` fails, add hint for required GNU GRUB packages.
* GRUB now [sources hook files](https://github.com/grml/grml-live/commit/be75e4ba94971122e472e3c64705e9524a0aea2f) and respects [${extraopts}](https://github.com/grml/grml-live/commit/3f4b93ffb516271321ea0714856008f15a9b4c03).
* GRUB `boot_hybrid.img` is bundled in the ISO9660 filesystem for easier remastering.
* The very old `save-config` and `restore-config` scripts have been removed.
* Fixed [19 issues](https://github.com/search?q=org%3Agrml+closed%3A2026-04-29..2026-09-03+reason%3Acompleted&type=issues&ref=advsearch) and [144 PRs](https://github.com/search?q=org%3Agrml+closed%3A2026-04-29..2026-09-03&type=pullrequests&ref=advsearch).

### Packages

Details about shipped packages and their versions in Grml are available in the [Debian section](/files/#debian).

Packages for individual Grml software is now also available directly from their GitHub release pages, for example [grml2usb](https://github.com/grml/grml2usb/releases).

### Updates

Packages are taken from Debian testing/forky, as of {{< format_date_long release_packages_date >}}.

The following packages have been added (excluding e.g. `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* `3cpio`: a dependency of initramfs-tools
* `ovmf` (amd64) and `qemu-efi-aarch64`: EFI Firmware for QEMU, useful to verify EFI bootloader setup. Thanks to [Sebastian Pipping](https://github.com/hartwork) for the [suggestions](https://github.com/grml/grml-live/issues/557).
* `pydf`

The following packages have been removed/replaced (excluding `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* `speedtest-cli`: [removed from Debian](https://bugs.debian.org/1136353)
* `squashfs-tools`: dependency of grml-live
* `tpm-udev`: [removed from Debian testing](https://tracker.debian.org/news/1727150/tpm-udev-removed-from-testing/)

### Known issues

Please visit the [known bugs](/bugs/known/) web page.

### Download Grml {{< param release_version >}}

Grml {{< param release_version >}} can be downloaded from [the download page]({{< indirect_ref download_page >}}).

In 2026.04 ISOLINUX was replaced with GRUB 2 for BIOS boot.
When using `grml2usb` to install Grml to USB media, make sure to use at least version 0.20.14.

### Feedback

Your comments, bug reports, patches, and suggestions will help fixing bugs and improving future releases.
If you find a problem with the release, please check [the known bugs list](/bugs/known/) and report problems using information on [grml.org/bugs/](/bugs/).
We also welcome feature requests and any kind of constructive feedback.
If you want to reach out to the Grml team, please visit our [contact webpage](/contact/).

The next stable Grml release is scheduled for the end of 2026.

The Grml team is available also for **commercial support and services**.
If you are interested in our consulting services, need a special feature in Grml or a custom branded Grml version with your company logo, please reach out to business (at) grml.org

### Thanks
{{< anchor thanks >}}

Many thanks in this release go to (alphabetically)

[Aaron Rainbolt](https://github.com/ArrayBolt3),
cacin,
[Christopher Bock](https://github.com/crpb),
[Dr. András Korn](https://github.com/akorn),
[Marc Haber](https://github.com/Zugschlus),
[Paul Buonopane](https://github.com/Zenexer),
and
[Sebastian Pipping](https://github.com/hartwork),
for their contributions. ❤️

Once again [netcup](https://www.netcup.com/) contributed financially, this time specifically to this release. Thank you, [netcup](https://www.netcup.com/) ❤️

We also want to thank our [individual sponsors](https://github.com/sponsors/grml) donating through GitHub.
If you like what we are doing, please join in!

No new sponsors joined in for this release.

Thanks to everyone who contributed to Grml and this release, stay healthy and happy Grml-ing! ❤️🧡💛💚💙💜

### More Information

You can find out more about Grml on [our website](/), [IRC channel](/contact/#irc), and the [wiki](https://github.com/grml/grml/wiki).

To sign up for future Grml announcements, please subscribe to [Grml's announcement list](http://ml.grml.org/postorius/lists/grml-announce.ml.grml.org) or follow our [blog](https://blog.grml.org/).
