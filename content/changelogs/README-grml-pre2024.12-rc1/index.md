+++
title = 'Release Notes: Grml 2024.12-rc1 - codename XXX'

[params]
release_version = 'pre2024.12-rc1'
release_packages_date = 2024-12-11
download_page = 'download/prerelease'
kernel_version = '6.12'
+++

[Download Now]({{< indirect_ref download_page >}})

### About

Grml is a Debian based live system focusing on the needs of system administrators.
This Grml release provides fresh software packages from Debian trixie.
As usual it also incorporates up to date hardware support and fixes known bugs from previous Grml releases.

We are also proud to announce our first release supporting 64-bit ARM CPUs (Architecture `arm64`), which are up and coming everywhere.
At the same time we [cannot support 32-bit x86 PCs](https://blog.grml.org/archives/416-grml32-sunset.html) anymore, and no ISO images have been produced.

About [the codename]({{< ref "faq#releasename" >}}).

### New features

Highlighting the most relevant changes only:

<!-- misc -->

* **grml-...**: ...

#### [grml-live](/grml-live/) - build system for creating Grml (based) Linux live systems

* ...

#### [grml-zshrc](/zsh/) - Zsh configuration

* ...

#### [grml-debootstrap](/grml-debootstrap/) - wrapper around debootstrap for installing pure Debian

* ...

### Bits & bolts

* Linux kernel **{{< param kernel_version >}}**
* Fixed several [bugs reported in the issue tracker](https://github.com/grml/grml/issues/).

### Packages

Details about shipped packages and their versions in Grml are available in the [Debian section](/files/#debian).
Visit [dpkg.list](/files/grml-full-{{< param release_version >}}/dpkg.list) for a detailed list of shipped packages.

### Updates

Packages are taken from Debian trixie/testing as of {{< format_date_long release_packages_date >}}.

The following XXX relevant packages have been added (excluding e.g. `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* ...

The following XXX Debian packages have been removed/replaced (excluding `lib*`, `fonts*`, `*-{base,bin,common,core,data}`, `{gcc,cpp}-*`, `perl*`, `python*`, `ruby*` and kernel image):

* ...

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
...
...
and
...
for their contributions.

### More Information

You can find out more about Grml on [our website](/), [IRC channel](/contact/#irc), and the [wiki](https://github.com/grml/grml/wiki).

To sign up for future Grml announcements, please subscribe to [Grml's announcement list](http://ml.grml.org/mailman/listinfo/grml-announce) or follow our [blog](https://blog.grml.org/).
