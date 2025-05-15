+++
title = 'Release Notes: Grml 2025.05 - codename Nudlaug'

[params]
release_version = '2025.05'
release_packages_date = 2025-05-14
download_page = 'download'
kernel_version = '6.12'
+++

<a href="/screenshots/"><img align="right" style="margin-left: 20px; border: 0" src="/screenshots/grml_2025.05.jpg" alt="*" /></a>

[Download Now]({{< indirect_ref download_page >}})

### About

Grml is a Debian based live system focusing on the needs of system administrators.
The {{< param release_version >}} release provides fresh software packages from Debian trixie.
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.

About [the codename]({{< ref "faq#releasename" >}}).

### Important changes

* This release is based on Debian/trixie as of May 2025
* Uploaded to Debian: grml-hwinfo, grml-keyring + grml-paste are available starting with Debian/trixie
* We use a [new signing key for the deb.grml.org repositories](https://blog.grml.org/archives/422-Repository-signing-key-transition.html)
* The grml-live build system no longer uses FAI underneath and grml-policyrcd is gone
* Booting with boot option `ssh=...` on grml-full automatically announces the SSH service with Avahi (discover it via `avahi-browse -d local _ssh._tcp --resolve -t`)

### New features

Highlighting the most relevant changes only:

#### [grml-autoconfig](https://github.com/grml/grml-autoconfig/) - main bootup process of a Grml (based) system:

* Several performance improvements for faster boot
* Drop support for non-systemd systems
* Stop managing rsyslog
* Rework timezone + localtime handling, TZ defaults to UTC and the RTC defaults to be set to UTC

#### [grml-hwinfo](https://github.com/grml/grml-hwinfo/) - collect hardware information:

* Collect output of smartctl in JSON format in "json/smartctl"
* Uploaded to Debian: grml-hwinfo is available starting with Debian/trixie
* Remove dconf + xresprobe from Recommends
* Remove mcelog invocations, package was removed from Debian

#### [grml-live](https://github.com/grml/grml-live/) - build system for creating Grml (based) Linux live systems:

* Replace FAI with our own implementation known as `minifai`
* Move /etc/grml/fai/config into /usr/share/grml-live/config
* Adopt new layout for files/, class/, hooks/ (e.g. files/<path>/<CLASS> becomes files/<CLASS>/<path>)
* Provide migration script `/usr/share/grml-live/scripts/migrate-to-minifai`
* Divert update-initramfs for performance
* Setup apt sources in deb822 format
* Announce SSH service with Avahi
* GRMLBASE/15-initsetup: init journald catalog cache at build time
* GRMLBASE/26-console-setup: console-setup: create setupcon cache
* GRMLBASE/95-package-information: get non-free info without aptitude
* /etc/cruft/filters/grml-live: add cruft-ng filter
* /etc/fstab: drop examples handled by systemd
* Fix missing isolinux files
* Fix timezone and RTC setup
* Follow rename of grml-debian-keyring to grml-keyring
* Use isohybrid MBR from chroot
* GRUB: hide ipxe + nonfunctional boot entries if files are absent
* GRUB: remove nonfunctional memtest86 bios-mode selection
* isolinux: deduplicate {chain,mboot,hdt,menu}.c32
* isolinux: drop deprecated bootoption "gmt"
* Install /etc/sudoers.d/user-nopasswd instead of /etc/sudoers
* Introduce config/bootstrap-keyring to set keyring for mmdebstrap
* Reduce size of nonfree-licenses.txt by gzip-compressing it
* Remove chainloading of grub from isolinux
* Remove deprecated workarounds (for bug in udev + nfs-utils, version detection of old resolvconf,...)
* Remove vestigal apt-list{bugs,changes} support
* Require package repositories to be signed by default
* Support Debian/trixie (adapt ssh.service, support ipxe >= 1.21.1+git20220113.fbbdc3926+dfsg-3,...)
* Stop installing memdisk
* Stop providing /dev/MAKEDEV
* Switch from ftp.debian.org to deb.debian.org
* grml-cheatcodes.txt: document kernel parameter `dis_ucode_ldr`
* Improve grml-live zsh completion
* ZFS: derive linux package names from primary Debian architecture + mount /proc for minifai and other /proc-less environments
* Misc updates to software selection for GRMLBASE, GRML_SMALL + GRML_FULL
* Misc cleanups (Debian packaging, docs, deprecated configuration files, file-rc + FAI leftovers,...)

#### [grml-zshrc](/zsh/) - Zsh configuration:

* `etc/skel/.`zshrc`: add global alias `TZ` for timestamp/ts(1)
* `tmux: status-right`: show IP addresses (similar to our GNU/screen configuration)
* `zsh`: drop `hg` completion
* `zsh`: drop Solaris support
* `zshenv`: drop live-cd only hacks
* `zshenv`: stop setting HOSTNAME
* `zshrc`: add alias `llblk` for lsblk with useful columns
* `zshrc`: add alias `afl` for `apt-file list`
* `zshrc`: add aliases afs for `apt-file search`
* `zshrc`: deprecate xunfunction
* `zshrc`: drop several deprecated workarounds for aterm, centericq, mrxvt
* `zshrc`: drop sv support from init.d functions (Start/Restart/Stop/Reload/Force-Reload/Status)
* `zshrc`: remove 855resolution, cdrecord, zurl functions
* `zshrc`: remove copy of add-zsh-hook which is included in zsh since v4.3.7
* `zshrc`: remove fink init on macOS
* `zshrc`: remove `hbp` alias
* `zshrc`: require zsh version 5.1 or newer
* `zshrc`: stop setting `CLICOLOR`
* `zshrc`: use $HOST instead of forking to uname -n
* `zshrc`: use path_helper on macOS

#### [grml-debootstrap](https://github.com/grml/grml-debootstrap/) - wrapper around debootstrap for installing pure Debian:

* Set default release to Debian/trixie (v13)
* Drop support for Debian's "i386" port
* Drop support for Debian releases `jessie` + `stretch`
* Improve hybrid bootloader and arm64 UEFI support
* Mark packages as automatically installed
* Update /etc/timezone only if it exists
* Align interfaces(5) defaults with ifupdown
* Drop support for `--iso` option
* Use `LC_ALL=C` instead of `LANG=C`
* Use mmdebstrap as our only debootstrap implementation
* Stop installing separate packages file for arm64
* Stop installing acpi-support-base by default
* Packages: replace dbus with libpam-systemd and bzip2 with zstd
* Support https mirrors
* Fix skipping initrd creation using INITRD=no
* Set root partition type UUIDs for VM images according to the [Discoverable Partition Specification](https://uapi-group.org/specifications/specs/discoverable_partitions_specification/)
* Verify that GRUB configuration points to valid block device

<!-- misc -->

#### Unsorted:

* `grml2usb`: Fix updating bootid for isolinux installs
* `grml-tips`: Add some tips for a Lenovo X1 notebook

### Bits & bolts

* Linux kernel **{{< param kernel_version >}}**
* Fixed several [bugs reported in the issue tracker](https://github.com/grml/grml/issues/).

### Packages

Details about shipped packages and their versions in Grml are available in the [Debian section](/files/#debian).

### Updates

Packages are taken from Debian trixie/testing as of {{< format_date_long release_packages_date >}}.

The following 6 relevant packages have been added (excluding e.g. `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* ipxe
* iwd
* links
* lrzsz
* sopv-gpgv
* sqv

The following 16 Debian packages have been removed/replaced (excluding `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* acpi-support
* acpi-support-base
* acpid
* apt-utils
* cdebootstrap
* cron
* cron-daemon-common
* crosshurd
* debconf-i18n
* debconf-utils
* dnsutils (replaced by bind9-dnsutils)
* fai-client
* init
* nftables
* rsyslog
* vim-tiny

### Known issues

Please visit the [known bugs](/bugs/known/) web page.

### Download Grml {{< param release_version >}}

Grml {{< param release_version >}} can be downloaded from [the download page]({{< indirect_ref download_page >}}).

### Feedback

Your comments, bug reports, patches, and suggestions will help fixing bugs and improving future releases.
If you find a problem with the release, please check [the known bugs list](/bugs/known/) and report problems using information on [grml.org/bugs/](/bugs/).
We also welcome feature requests and any kind of constructive feedback.
If you want to reach out to the Grml team, please visit our [contact webpage](/contact/).

The next stable Grml release is scheduled for summer 2025.

The Grml team is available also for **commercial support and services**.
If you are interested in our consulting services, need a special feature in Grml or a custom branded Grml version with your company logo, please reach out to business (at) grml.org

### Thanks
{{< anchor thanks >}}

Many thanks in this release go to (alphabetically)
Aaron Rainbolt,
Antoine Beaupré,
Christopher Bock,
Evgeni Golov,
Guillem Jover,
lars18th
and
Patrick Schleizer
for their contributions. ❤️

Once again [netcup](https://www.netcup.com/) contributed financially, this time specifically to this release. Thank you, [netcup](https://www.netcup.com/) ❤️

We also want to thank our [individual sponsors](https://github.com/sponsors/grml) donating through GitHub.
If you like what we are doing, please join in!

New sponsors for this release are: [pyratebeard](https://github.com/pyratebeard) and [wise0tamas](https://github.com/wise0tamas) ❤️

Thanks to everyone who contributed to Grml and this release, stay healthy and happy Grml-ing! ❤️🧡💛💚💙💜

### More Information

You can find out more about Grml on [our website](/), [IRC channel](/contact/#irc), and the [wiki](https://github.com/grml/grml/wiki).

To sign up for future Grml announcements, please subscribe to [Grml's announcement list](http://ml.grml.org/mailman/listinfo/grml-announce) or follow our [blog](https://blog.grml.org/).
