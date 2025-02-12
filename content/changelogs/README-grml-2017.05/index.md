+++
title = 'Release Notes: Grml 2017.05 - codename Freedatensuppe'
+++

<p><a href="/screenshots/"><img align="right" style="margin-left: 20px;
border: 0" src="/screenshots/grml_2017.05.jpg" alt="*" /></a></p>

<p><a href="/download/">Download Now</a></p>

<h3>About</h3>

<p>Grml is a Debian based live system focusing on the needs of system administrators.
This Grml release provides fresh software packages from Debian testing (AKA stretch) and is the first Grml release using systemd as its init system.
As usual it also incorporates up to date hardware support and fixes known bugs from the previous Grml release.</p>

<h3>Important Changes</h3>

<ul>

<li>Switch from file-rc to systemd as init system.
grml-live (the build system for creating Grml (based) Linux live systems) still supports non-systemd systems using file-rc, though we don't plan to maintain this in the long run.
For the reasons <em>why</em> we actually switched to systemd please visit the <a href="/faq/#systemd">FAQ</a>.
Due to the change to systemd some boot options in the current release might not work as before and some further issues might have been unnoticed yet.
Please <a href="/bugs/">let us know</a> if you should stumble upon any such issues.</li>

<li>New Grml repository signing key: 4096R/21E0CA38EA2EA4AB.
If you're using the Grml repositories (<a href="https://deb.grml.org/">deb.grml.org</a>) please make sure to use a current version of the grml-debian-keyring package.
The GPG key is also available via <a href="https://deb.grml.org/repo-key.gpg">https://deb.grml.org/repo-key.gpg</a>.</li>

<li>Following <a href="https://www.debian.org/releases/stretch/i386/release-notes/ch-information.en.html#i386-is-now-almost-i686">Debian's switch</a>, the 32-bit PC support (known as the architecture 'i386' and what's provided by '<a href="/faq/#flavours">grml32</a>') now no longer covers a plain i586 processor.
The new baseline is the i686, although some i586 processors (e.g. the 'AMD Geode') will remain supported.
The following shell script may be a useful indicator (assuming only one processor is installed in the machine):

<pre>
  if grep -q '^flags.*\bfpu\b.*\btsc\b.*\bcx8\b.*\bcmov\b' /proc/cpuinfo; then
     echo "OK (assuming all CPUs are of the same type)"
  else
     echo "NOT OK: Missing one or more of the required CPU extensions"
  fi
</pre>
</li>

</ul>

<h3>New features</h3>

<p>Highlighting the most relevant changes only:</p>

<ul>

<li><a href="/grml2usb/">grml2usb</a> (tool to install Grml ISOs to USB devices):

<ul>
<li>Support usage of grml2usb on EFI systems</li>
<li>New option --skip-usb-check to skip check whether target looks like a USB device</li>
<li>New option --rw-blockdev for usage with read-only/forensic like devices</li>
</ul>
</li>

<li><a href="/grml-live/">grml-live</a> (build system for creating Grml (based) Linux live systems):

<ul>
<li>Systemd support, providing backwards compatibility (non-systemd using file-rc) via FILE_RC class</li>
<li>Provide wayback machine via "-w &lt;date&gt;" to install Debian packages from specific date</li>
<li>Add support for netboot.xyz</li>
<li>Add SHA-256 and SHA-512 hashes</li>
<li>Generate /etc/issue with Grml release information</li>
<li>Switch from aptitude to apt usage for software installation</li>
<li>Output to "./grml" in current working directory by default</li>
<li>If locales-all package is installed skip locales generation</li>
<li>GRMLBASE/21-usersetup: add grml user to vboxsf group</li>
<li>New script 94-update-smart-drivedb to update smartmontools' drive database</li>
<li>templates: use net.ifnames=0 by default</li>
</ul>

</li>

<li>grml-hwinfo (tool to collect hardware information):

<ul>
<li>Support options --force + --quiet for usage with cron</li>
<li>Provide `acpi --everything` output in file `acpi.everything`</li>
<li>ip: also store table specific route information</li>
</ul>

</li>

<li><a href="/zsh/">grml-zshrc</a> (Zsh configuration):

<ul>
<li>Fall back to journalctl with llog + tlog aliases if /var/log/syslog doesn't exist</li>
<li>Make some ambiguous aliases optional via GRML_NO_APT_ALIASES + GRML_NO_SMALL_ALIASES</li>
<li>Sync zsh-lookup with its upstream repository</li>
<li>Add more robustness to completion caching setup</li>
<li>Drop 'setopt nonomatch' configuration</li>
<li>Rewrite large parts of persistent dirstack handling</li>
<li>No longer explicitly set SHELL</li>
<li>Add support for `fetch' in simple-extract()</li>
<li>Several updates to the bk function, e.g. new option '-ra' to remove all (even hidden) backups</li>
<li>Drop j alias (used for 'jobs -l')</li>
</ul>

</li>

<li><a href="/grml-debootstrap/">grml-debootstrap</a> (wrapper around debootstrap for installing pure Debian):

<ul>
<li>Support Debian stretch and use Debian stretch as the new default release</li>
<li>Provide EFI support via --efi &lt;device&gt; option</li>
<li>Drop sysfsutils from default software package list</li>
<li>Don't generate rootfs entry in /etc/fstab if we don't know its UUID</li>
<li>Don't fiddle around with /etc/hosts</li>
<li>Honor GRUB_DISABLE_LINUX_UUID=true and don't set root=UUID then</li>
<li>Export TARGET_HOSTNAME before running post-scripts</li>
<li>Disable '^metadata_csum' feature when creating ext filesystem for jessie and older Debian releases</li>
<li>Ensure that grub-pc/install_devices is pointing to the requested device</li>
<li>Use parted to create partition table</li>
<li>Rename --scripts to --post-scripts for consistency, accordingly disable SCRIPTS by default, replaced by POST_SCRIPTS</li>
<li>Provide new option --remove-configs to delete grml-debootstrap configuration files from installed system</li>
<li>Ensure that grub-pc is installed in VMs even when using --nopackages</li>
<li>Provide hostname to pre-scripts by setting up /etc/hostname</li>
<li>Make it more friendly to install on non-Debian distributions</li>
<li>Drop contrib + non-free from default COMPONENTS, support --contrib + --non-free cmdline options</li>
<li>Install firmware-linux only when non-free is among the COMPONENTS</li>
<li>Use full fingerprint instead of short GPG key ids for Grml repository</li>
</ul>

</li>

</ul>

<h3>Bits &amp; bolts</h3>

<ul>
<li>Linux kernel is based on <b>4.9.29</b>.</li>
<li>Fixed several bugs from the <a href="https://github.com/grml/grml/issues">bug tracking system</a>.</li>
</ul>

<h3><a name="changes-between-rc-and-stable"></a>Changes between release candidate version 2017.05-rc1 and stable release</h3>

<ul>
  <li>Update kernel to 4.9.29</li>
  <li>Update Debian packages to most recent Debian/stretch versions as of 2017-05-30</li>
  <li>Avoid automatic LVM scanning</li>
  <li>Avoid automatic mdadm scanning</li>
  <li>Enable autologin for user root on serial console ttyS0</li>
  <li>Enable systemd specific debug boot options in debugging mode</li>
  <li>Fix GRUB error message ('error: null src bitmap in grub_video_bitmap_create_scaled') when choosing boot sub-menu in EFI mode</li>
  <li>Fix console-setup related error message</li>
  <li>Fix grml-x startup issues</li>
  <li>Fix several aoe-tools related issues</li>
  <li>Software changes: added console-setup, haveged, rng-tools and added cpufrequtils + lsscsi to grml-small</li>
  <li>Switched from grml-runtty to agetty</li>
  <li>Warn in initramfs if there is &lt;256MB memory</li>
  <li>grml-autoconfig: don't warn but just inform if SecureBoot isn't enabled</li>
  <li>grml-autoconfig: drop some deprecated/non-working config_* settings</li>
  <li>grml-autoconfig: ensure that grml-autoconfig service is finished before tty1 is enabled</li>
  <li>grml-autoconfig: no longer warn about missing amixer binary on grml-small</li>
  <li>grml-autoconfig: updated, improved and fixed LVM + mdadm related startup code</li>
  <li>grml2usb: don't fail hard if installing on partition number &gt;4, instead warn user</li>
  <li>grml2usb: support netboot.xyz.lkrn addon (to fix missing binary on grml96)</li>
  <li>screenrc: drop keybindings G (google) + H (heise.de)</li>
  <li>sshd: ensure that login as root via password works again</li>
  <li>systemd: no longer mask systemd-machine-id-commit.service to fix login issues</li>
  <li>tmux: drop deprecated status-utf8 option</li>
  <li>vimrc: disable mouse usage in all modes, being the default in Vim &gt;=8</li>
</ul>

<h3>Packages</h3>

<p>Details about shipped packages and their versions in Grml are
available in the <a href="/files/#debian">Debian section</a>. Visit
<a href="/files/grml64-full_2017.05/dpkg.list">dpkg_list</a> for a
detailed list of packages shipped with Grml 2017.05.</p>

<h3>Updates</h3>

<p>Packages are taken from Debian stretch/testing as of 30th of May 2017.
63 packages have been removed, and these 67 new packages
have been added (excluding lib* and kernel image):</p>

<pre class="rahmen">
apt-transport-https bats binwalk btrfs-progs console-setup
cpp-6 distro-info-data espeak-ng-data exif firefox-esr
firmware-amd-graphics firmware-cavium firmware-intel-sound
firmware-misc-nonfree firmware-ti-connectivity freeipmi-common
gcc-6-base gnome-icon-theme gnupg-agent graphicsmagick
graphicsmagick-imagemagick-compat gtk-update-icon-cache haveged
initramfs-tools-core iptraf-ng keyutils linux-cpupower lynx
lynx-common nethogs nilfs-tools nvme-cli partclone
perl-modules-5.24 perl-openssl-defaults physlock
pinentry-curses policykit-1 python3-binwalk python3.5
python3.5-minimal rake rng-tools ruby-deep-merge
ruby-did-you-mean ruby-minitest ruby-net-telnet ruby-nokogiri
ruby-pkg-config ruby-power-assert ruby-rgen ruby-test-unit
ruby2.3 sg3-utils-udev stress syslinux-utils systemd
systemd-container systemd-sysv uml-utilities vim-gtk
vim-gui-common wireshark-qt xorriso xserver-xorg-input-libinput
xserver-xorg-video-amdgpu xxd
</pre>

<p>These Debian packages have been removed/replaced (excluding lib* and kernel image):</p>

<pre class="rahmen">
alsa-base aufs-tools cpp-4.9 file-rc firmware-ralink
gcc-4.8-base gcc-4.9-base genext2fs iceweasel initscripts
insserv iptraf manpages mcollective mcollective-common multitail
netcat-traditional nfacct perl-modules puppet-common
python-configobj python-configshell python-epydoc python-ipaddr
python-netifaces python-ntdb python-prettytable python-pyparsing
python-rtslib python-simpleparse python-simpleparse-mxtexttools
python-six python-support python3.4 python3.4-minimal ruby-hiera
ruby-stomp ruby-systemu ruby2.1 samba-dsdb-modules startpar
sysvinit sysvinit-core targetcli traceroute vlock
xserver-xorg-input-evdev xserver-xorg-input-mouse
xserver-xorg-input-synaptics xserver-xorg-input-vmmouse
xserver-xorg-video-cirrus xserver-xorg-video-intel
xserver-xorg-video-mach64 xserver-xorg-video-mga
xserver-xorg-video-modesetting xserver-xorg-video-neomagic
xserver-xorg-video-openchrome xserver-xorg-video-r128
xserver-xorg-video-savage xserver-xorg-video-siliconmotion
xserver-xorg-video-sisusb xserver-xorg-video-tdfx
xserver-xorg-video-trident
</pre>

<h3>Known issues</h3>

<p>Please visit the <a href="/bugs/known/">known bugs</a> web page.</p>

<h3>Download Grml 2017.05</h3>

<p>Grml 2017.05 can be downloaded from
<a href="/download/">grml.org/download/</a>.</p>

<h3>Feedback</h3>

<p>Your comments, bug reports, patches, and suggestions will help
fixing bugs and improving future releases. If you find a problem with
the release please check <a
  href="/bugs/known/">the known bugs list</a> and report problems using information on <a
  href="/bugs/">grml.org/bugs/</a>. Please send your feedback and
feature requests <a href="/contact/">to the Grml team</a>!</p>

<a name="thanks"></a>
<h3>Thanks</h3>

<p>Many thanks in this release go to (alphabetically)
Andras Korn,
Andreas &quot;Jimmy&quot; Gredler,
Andrey Borzenkov,
Antoine Beaupré,
Axel Beckert,
Ben Finney,
Bernd Zeimetz,
Bernhard Tittelbach,
Brian M. Carlson,
Carsten Hey,
Christian Hesse,
Christian Hofstaedtler,
Christian Sturm,
Christoph Berg,
Daniel Hahler,
Darshaka Pathirana,
Dmitri Vereshchagin,
Eric Keller,
Felipe Sateler,
Gregor Zattler,
Guillem Jover,
Haudegen,
Karl Voit,
Laurent Bigonville,
Michael Vetter,
Nicolas Braud-Santoni,
Patrick Schleizer,
Paul Menzel,
Philip Hands,
Sebastian Boehm,
Sebastian Pipping,
Stefan Schlesinger,
Tamas Csillag,
Thiago Perrotta,
Thilo Six,
Thomas Berger,
Thomas Stewart and
Yves-Alexis Perez
for their contributions.</p>

<h3>More Information</h3>

<p>You can find out more about Grml on <a href="/">our website</a>, <a
href="/contact/#irc">IRC channel</a>, and <a
href="https://github.com/grml/grml/wiki">wiki</a>.

<p>To sign up for future Grml announcements, please subscribe to <a
href="http://ml.grml.org/mailman/listinfo/grml-announce">Grml's
announcement list</a>.</p>
