+++
title = 'QEMU'
icon = 'clanbomber'
+++

<a href="https://www.qemu.org/">QEMU</a> is an emulator for
various CPUs. It works on Linux, Windows, FreeBSD and Mac OS X. It's possible
to run grml with QEMU. Notice that it's much slower than running it native
due to the emulation mode.

## Using QEMU with acceleration

grml >=0.5 provides the <a href="https://www.qemu.org/">accelerator module</a> for QEMU namend 'kqemu'. Just run the following commands to use it:

<pre class="rahmen">
apt-get update ; apt-get install qemu # install qemu
modprobe kqemu                        # load the kernel module
mknod /dev/kqemu c 250 0              # create the device
chmod 666 /dev/kqemu /dev/net/tun     # adjust permissions
</pre>

To see if kqemu is enabled and working correctly, use the QEMU monitor command (press ctrl-alt-2): 'info kqemu'

## Problems with Qemu

### Black / blank screen

You get a black/blank screen when booting grml in qemu? Try booting with &quot;grml vga=normal&quot;.

## Running QEMU with grml on Linux

Install qemu (apt-get install qemu) and start it e.g. via:

<pre class="rahmen">
qemu -m 256 -cdrom /dev/hdc          # if running from CD-ROM
qemu -m 256 -cdrom /path/to/grml.iso # if running from harddisk
</pre>

## Running QEMU with grml on Windows

<a href="qemu-1.png"><img style="border: 0" src="qemu-1.jpg" alt="screenshot 1" /></a>

First of all download <a href="https://www.qemu.org/download/#windows">QEMU for Windows</a>.
<a href="/download/">Download the grml-iso</a> and put the QEMU files in the same directory as the grml-iso.

Now create a startup file, call it for example <a href="grml-qemu.bat">grml-qemu.bat</a>:

<pre class="rahmen">
REM Start qemu on windows.
@ECHO OFF
START qemu.exe -L . -m 256 -hdc harddisk -cdrom grml_0.6.iso
CLS
EXIT
</pre>

Adjust the values if necessary and now run the grml-qemu.bat-file. Have fun :-)

<a href="/screenshots/qemu.jpg"><img style="border: 0" src="/screenshots/qemu_small.jpg" alt="screenshot 3" /></a>
