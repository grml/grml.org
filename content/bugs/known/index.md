+++
title = 'Known Bugs'
+++

We track issues at [github.com/grml/grml/issues](https://github.com/grml/grml/issues).

Several Grml sub-projects (grml-debootstrap, grml-etc-core, grml2usb,...) have their own repository and issue tracking, see [github.com/grml/](https://github.com/grml/) to get an overview.
If you're unsure where to report an issue though, feel free to use [github.com/grml/grml/issues](https://github.com/grml/grml/issues) though.

If you find additional bugs, please [report them](/bugs/)!

## Known Bugs in Grml 2026.09
{{< require_release_update "2026.09" >}}
* grml-rescueboot: booting 2026.09 Grml ISO doesn't work within grml-rescueboot. (see [grml-live#648](https://github.com/grml/grml-live/pull/648); workaround: retrieve [42_grml](https://bugs.debian.org/cgi-bin/bugreport.cgi?att=1;bug=1152061;filename=42_grml;msg=32) from [#1152061](https://bugs.debian.org/cgi-bin/bugreport.cgi?bug=1152061&pow_referer=#32) and install the file with executable permissions as `/etc/grub.d/42_grml` + execute `update-grub` afterwards)

## Known Bugs in Grml 2026.04

* grml-terminalserver Clients must use EFI boot with PXE. BIOS mode is currently broken. (see: [grml-terminalserver#26](https://github.com/grml/grml-terminalserver/issues/26))
