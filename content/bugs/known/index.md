+++
title = 'Known Bugs'
+++

We track issues at [github.com/grml/grml/issues](https://github.com/grml/grml/issues).

Several Grml sub-projects (grml-debootstrap, grml-etc-core, grml2usb,...) have their own repository and issue tracking, see [github.com/grml/](https://github.com/grml/) to get an overview.
If you're unsure where to report an issue though, feel free to use [github.com/grml/grml/issues](https://github.com/grml/grml/issues) though.

If you find additional bugs, please [report them](/bugs/)!

## Known Bugs in Grml 2025.08
{{< require_release_update "2025.08" >}}

None!

## Known Bugs in Grml 2025.05

* Boot option `keyboard=...` has no effect on keyboard layout (see [grml#232](https://github.com/grml/grml/issues/232)). Workaround: run `grml-lang de`, `loadkeys de` or alike after booting.
* Boot option `lang=...` breaks the console character set and doesn't set the keyboard layout (see [grml#232](https://github.com/grml/grml/issues/232)). Workaround: boot *without* lang=... option and invoke `grml-lang de`, `loadkeys de` or alike after booting.
