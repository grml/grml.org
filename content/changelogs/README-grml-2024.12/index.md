+++
title = 'Release Notes: Grml 2024.12 - codename Adventgrenze'

[params]
release_version = '2024.12'
release_packages_date = 2024-12-19
download_page = 'download'
kernel_version = '6.11'
+++

<a href="/screenshots/"><img align="right" style="margin-left: 20px; border: 0" src="/screenshots/grml_2024.12.jpg" alt="*" /></a>

[Download Now]({{< indirect_ref download_page >}})

### About

Grml is a Debian based live system focusing on the needs of system administrators.
The {{< param release_version >}} release provides fresh software packages from Debian trixie.
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.

About [the codename]({{< ref "faq#releasename" >}}).

**NOTE:** [20 Years of Grml Releases](https://blog.grml.org/archives/417-20-years-grml-releases.html), please join us in celebrating!

### Important changes

* We are proud to announce our first release supporting 64-bit ARM CPUs (Architecture **arm64**).
* Please be aware that we [cannot support 32-bit x86 PCs](https://blog.grml.org/archives/416-grml32-sunset.html) anymore, and **no i386** ISO images have been produced.
* New **Grml flavour naming schema**: now that the i386 flavour grml32 is gone, also grml96 no longer exists as such (grml96 was known as combination of grml64 + grml32 in one single ISO).
  Instead we gained the new architecture known as `arm64`.
  Due to this our new naming convention now is _grml-$FLAVOUR-$VERSION-$ARCH_.
  Example: _grml-full-2024.12-amd64_ is the _grml-full_ flavour in version _2024.12_ for architecture _amd64_.
* The Grml amd64 flavour now supports **UEFI 32-bit boot**
* Refreshed our **Grml theme** within the GRUB bootloader (UEFI boot)

### New features

Highlighting the most relevant changes only:

<!-- misc -->

* `grml-lang`: support language settings for `UK/GB`
* `grml-vnet`: replace `tunctl` + `brctl` with `ip(8)`
* `grml-paste`: the [Grml paste service is gone](https://blog.grml.org/archives/415-Infrastructure-overhaul-web-paste-blog.html), the script uses [paste.debian.net](https://paste.debian.net/) now
* `cpu-screen`: replace C source implementation with implementation in  Perl (to get arch all packages) + hide `[ cpufreq n/a ]`
* `grml2usb`: introduce automatic bootloader selection, use `nasm` to assemble `mbr`, add smoke test, loosen dependency on `grub2`, copy `bootaa64.efi` if available and make `blockdev --rereadpt` optional
* [Moved Git repositories and Grml wiki to GitHub.com](https://blog.grml.org/archives/414-Migrated-Git-and-Wiki-services.html)
* Refreshed all Debian packages to follow current best practices
* Reworked our services and build release infrastructure

#### [grml-hwinfo](/grml-hwinfo/) - collect hardware information:

* Collect output in JSON format of several tools like `losetup`, `findmnt`, `lscpu` + `lsblk` in the `json` sub directory
* Retrieve generic information about `NVMe` disks
* `lsblk`: improve output, also for it JSON output
* Retrieve ZFS related data
* Update `inxi` output
* Reduce execution time by ~60% by dropping `dpkg` call to get kernel information
* Misc improvements to stderr handling

#### [grml-live](/grml-live/) - build system for creating Grml (based) Linux live systems:

* Always print requested configuration during grml-live runs
* docs: update usage instructions for setting up Grml repository
* Do not add /dev to squashfs
* Drop deborphan from GRMLBASE, no longer present since Debian/trixie
* Drop several boot addons
* Drop support for all boot methods other than isolinux + GRUB
* Ensure files are copied with fcopy into chroot with expected permissions
* etc/fstab/GRMLBASE: use reserved IP following RFC5737
* Generate source package tarball when using SOURCES class
* get-sources: run apt-get source parallelized
* GRMLBASE/15-initsetup: mask ldconfig.service
* grml-live: introduce hasclass helper function
* GRUB templates: move non-addon entries out of addons.cfg
* GRUB templates: replaced GRUB boot theme
* Improved support for usage inside containers
* Initialize zsh caches so first startup on Live CD is faster
* Introduce architecture specific boot addon templates
* Misc software related changes in `GRMLBASE`, `GRML_SMALL` + `GRML_FULL` classes
* netboot package: use `ISO_NAME-netboot.tar` as output name (without .iso)
* New build-driver for CI integration in release pipeline
* Removed several deprecated workarounds for old Debian releases
* Remove grml-live-db and support for writing into it
* Rework wallpaper handling
* Strip xattrs in squashfs
* Support UEFI 32-bit boot on amd64
* The `grml_sources` directory is no longer bind-mounted into the chroot (to support unprivileged container usage)
* Update codebase to make it shellcheck clean

#### [grml-zshrc](/zsh/) - Zsh configuration:

* `zshrc`: set `HISTSIZE` + `SAVEHIST` only if not yet set or being set to Zsh upstream default
* `zshenv`: add `~/.local/bin` to default `PATH`
* `zlogout` is gone with the grml-etc-core package (to remove the feature clearing the terminal screen)

#### [grml-debootstrap](/grml-debootstrap/) - wrapper around debootstrap for installing pure Debian:

* Switch default debootstrap tool to mmdebstrap
* Drop support for cdebootstrap
* Disable ext4 feature orphan_file for older releases
* interactive mode: ignore failures when identifying file system fails
* mkfs: avoid blockdev failing to re-read partition table
* Implement `clean_chroot` to avoid host environment variables like `TMP` to leak into the chroot
* Implemented GitHub workflow + actions for automated test runs

### Bits & bolts

* Linux kernel **{{< param kernel_version >}}**
* Fixed several [bugs reported in the issue tracker](https://github.com/grml/grml/issues/).

### Packages

Details about shipped packages and their versions in Grml are available in the [Debian section](/files/#debian).

### Updates

Packages are taken from Debian trixie/testing as of {{< format_date_long release_packages_date >}}.

The following 8 relevant packages have been added (excluding e.g. `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* dracut-install
* grub-efi-amd64-unsigned + grub-efi-ia32-unsigned
* linux-sysctl-defaults
* login.defs
* openssh-client-ssh1
* openssl-provider-legacy
* scdaemon

The following 17 Debian packages have been removed/replaced (excluding `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* deborphan
* genisoimage
* gnupg-utils
* gpg-wks-client + gpg-wks-server
* haveged
* hfsutils
* isc-dhcp-client
* lrzsz
* mksh
* policykit-1
* reiser4progs
* reiserfsprogs
* systemd-dev
* tdb-tools
* uml-utilities
* usr-is-merged

### Known issues

Please visit the [known bugs](/bugs/known/) web page.

### Download Grml {{< param release_version >}}

Grml {{< param release_version >}} can be downloaded from [the download page]({{< indirect_ref download_page >}}).

### Feedback

Your comments, bug reports, patches, and suggestions will help fixing bugs and improving future releases.
If you find a problem with the release, please check [the known bugs list](/bugs/known/) and report problems using information on [grml.org/bugs/](/bugs/).
We also welcome feature requests and any kind of constructive feedback.
If you want to reach out to the Grml team, please visit our [contact webpage](/contact/).

The next stable Grml release is scheduled for early 2025.

The Grml team is available also for **commercial support and services**.
If you are interested in our consulting services, need a special feature in Grml or a custom branded Grml version with your company logo, please reach out to business (at) grml.org

### Thanks
{{< anchor thanks >}}

Many thanks in this release go to (alphabetically)
András Korn,
Antoine Beaupré,
Christopher Bock,
pasja,
Patrick Schleizer
and
unknowndevQwQ
for their contributions.

We would like to thank [netcup](https://www.netcup.com/) for their financial contribution for implementing arm64 support.

### More Information

You can find out more about Grml on [our website](/), [IRC channel](/contact/#irc), and the [wiki](https://github.com/grml/grml/wiki).

To sign up for future Grml announcements, please subscribe to [Grml's announcement list](http://ml.grml.org/mailman/listinfo/grml-announce) or follow our [blog](https://blog.grml.org/).
