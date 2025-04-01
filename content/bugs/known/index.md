+++
title = 'Known Bugs'
+++

We track issues at [github.com/grml/grml/issues](https://github.com/grml/grml/issues).

Several Grml sub-projects (grml-debootstrap, grml-etc-core, grml2usb,...) have their own repository and issue tracking, see [github.com/grml/](https://github.com/grml/) to get an overview.
If you're unsure where to report an issue though, feel free to use [github.com/grml/grml/issues](https://github.com/grml/grml/issues) though.

If you find additional bugs, please [report them](/bugs/)!

## Known Bugs in Grml 2024.12
{{< require_release_update "2024.12" >}}

* SSH with random password is broken (see [grml-autoconfig#22](https://github.com/grml/grml-autoconfig/issues/22)) [workaround: set parameter in ssh boot option, like use `ssh=yoursecret`]
* When installing with grml2usb, isolinux/BIOS boot fails: bootid does not match (see [grml2usb@68](https://github.com/grml/grml2usb/issues/68)) [workaround: run `apt update; apt install grml2usb` to get grml2usb &gt; v0.20.5]
* Dell iDRAC (versions 8 and 9) virtual console stops working during boot process (see [grml#227](https://github.com/grml/grml/issues/227)) [workaround: use a current [Daily Grml ISO](/daily/)]

## Known Bugs in Grml 2024.02

* No known issues
