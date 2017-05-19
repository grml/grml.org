REM Start qemu on windows.
@ECHO OFF

START qemu.exe -L . -m 256 -hdc harddisk -cdrom grml_0.4.iso

CLS
EXIT
