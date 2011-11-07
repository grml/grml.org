#!/bin/sh
# Filename:      grml_kernel.sh
# Purpose:       build kernel for grml
# Authors:       grml-team (grml.org), (c) Michael Prokop <mika@grml.org>
# Bug-Reports:   see http://grml.org/bugs/
# License:       This file is licensed under the GPL v2.
# Latest change: Mon Dec 20 18:36:06 CET 2004 [mika]
################################################################################

# some variables
#VER=$(uname -r)
VER='2.6.9'
KV='2.6'
MV=$(echo $VER|cut -d- -f1)
EV=$(echo $VER|cut -d- -f2-)
PN="$0"
HERE="$PWD"
LANG=C

# ANSI COLORS
CRE="[K"
NORMAL="[0;39m"
# RED: Failure or error message
RED="[1;31m"
# GREEN: Success message
GREEN="[1;32m"
# YELLOW: Descriptions
YELLOW="[1;33m"
# BLUE: System messages
BLUE="[1;34m"
# MAGENTA: Found devices or drivers
MAGENTA="[1;35m"
# CYAN: Questions
CYAN="[1;36m"
# BOLD WHITE: Hint
WHITE="[1;37m"

if [[ "$1" == "" ]] || [[ "$1" == "-h" ]] || [[ "$1" == '--help' ]] ; then
  echo "Usage of $PN:

    $PN deb      -> install debian packages
    $PN get      -> get kernel + patches
    $PN extr     -> extract kernel + patches
    $PN patch    -> patch kernel
    $PN allpatch -> create all-in-on kernel patch
    $PN build    -> build kernel + modules
  "
  exit 1
fi

if [[ "$1" == deb ]] ; then
  #kernel-image-2.6.9
  sudo apt-get install  \\
    kernel-headers-2.6.9-1 \\
    kernel-package      \\
    kernel-source-2.6.9 \\
    at76c503a           \\
    bcm4400             \\
    bcm5700             \\
    cloop               \\
    hostap-source       \\
    ipw2100-source      \\
    ipw2200-source      \\
    lirc-modules-source \\
    ndiswrapper-source  \\
    qc-usb-modules      \\
    shfs                \\
    sl-modem
fi

if [[ "$1" == get ]] ; then

  echo -e "${BLUE}Downloading vanilla kernel: ${NORMAL}"
  wget -Nc ftp://ftp.at.kernel.org/pub/linux/kernel/v$KV/linux-$MV.tar.bz2 && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  [[ -d patches ]] || echo "Creating directory patches" && mkdir patches && cd patches

  #echo -e "${BLUE}Downloading MPPE patch: ${NORMAL}"
  #wget -Nc http://www.polbox.com/h/hs001/linux-2.6.9-mppe-mppc-1.1.patch.gz && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"
  #wget -Nc http://pptpclient.sourceforge.net/mppe/ppp-2.4.2_cvs20040216-linux-mppe.tar.gz

  echo -e "${BLUE}Downloading ACX100 patch: ${NORMAL}"
  #wget -Nc http://rhlx01.fht-esslingen.de/~andi/acx100/acx100-0.2.0pre8_plus_fixes_40.tar.bz2
  wget -Nc http://rhlx01.fht-esslingen.de/~andi/acx100/acx100-0.2.0pre8_plus_fixes_43.tar.gz && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading ACPI-DSDT patch: ${NORMAL}"
  wget -Nc http://gaugusch.at/acpi-dsdt-initrd-patches/acpi-dsdt-initrd-patch-v0.7d-2.6.9.patch && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading LOOP-AES patch: ${NORMAL}"
  #wget -Nc http://loop-aes.sourceforge.net/loop-AES/loop-AES-v2.2d.tar.bz2
  wget -Nc http://loop-aes.sourceforge.net/loop-AES/loop-AES-v3.0a.tar.bz2 && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading squashfs patch: ${NORMAL}"
  #wget -Nc http://heanet.dl.sourceforge.net/sourceforge/squashfs/squashfs2.0-r2.tar.gz
  wget -Nc http://umn.dl.sourceforge.net/sourceforge/squashfs/squashfs2.1-r2.tar.gz && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading Con Kolivas patch: ${NORMAL}"
  #wget -Nc http://ck.kolivas.org/patches/2.6/2.6.9/2.6.9-ck3/patches/2.6.9-aic7xxx-fix.patch
  #wget -Nc http://ck.kolivas.org/patches/2.6/2.6.9/2.6.9-ck3/patches/2.6.9-cpia-deadlock-fix.patch
  #wget -Nc http://ck.kolivas.org/patches/2.6/2.6.9/2.6.9-ck3/patches/2.6.9-hpt366-fix.patch
  #wget -Nc http://ck.kolivas.org/patches/2.6/2.6.9/2.6.9-ck3/patches/2.6.9-smbfs-leak-fix.patch
  #wget -Nc http://ck.kolivas.org/patches/2.6/2.6.9/2.6.9-ck3/patches/2.6.9-usb-visor-fix.patch
  #wget -Nc http://ck.kolivas.org/patches/2.6/2.6.9/2.6.9-ck3/patches/vm-pages_scanned-active_list.patch
  #wget -Nc http://ck.kolivas.org/patches/2.6/2.6.9/2.6.9-ck1/patches/nvidia_compat.diff
  wget -Nc http://ck.kolivas.org/patches/2.6/2.6.9/2.6.9-ck3/patch-2.6.9-ck3.bz2 && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  #echo -e "${BLUE}Downloading supermount patch: ${NORMAL}"
  #wget -Nc http://kanotix.com/files/patches/supermount-ng207.diff
  #wget -Nc http://ck.kolivas.org/patches/2.6/2.6.9/2.6.9-ck3/patches/supermount-ng207.diff

  # http://kem.p.lodz.pl/~peter/cko/
  # http://kem.p.lodz.pl/~peter/cko/patch-2.6.9-cko3.bz2

#  echo -e "${BLUE}Downloading Philips USB Webcam Driver for Linux patch: ${NORMAL}"
#  wget -Nc http://www.saillard.org/linux/pwc/patches/linux-2.6.9_pwc-10.0.6.patch.bz2 && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading Synaptics TouchPad driver for XOrg/XFree86 patch: ${NORMAL}"
  wget -Nc http://web.telia.com/~u89404340/touchpad/files/synaptics-0.13.6.tar.bz2 && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading Linux event device protocol support for GPM patch: ${NORMAL}"
  wget -Nc http://www.geocities.com/dt_or/input/2_6_9/i8042-tasklet-v3.patch.gz && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading ACPI patch: ${NORMAL}"
  #ftp://ftp.uk.kernel.org/pub/linux/kernel/people/lenb/acpi/patches/release/26-stable-release/acpi-20041105-26-stable-release.diff.bz2
  wget -Nc ftp://ftp.at.kernel.org/pub/linux/kernel/people/lenb/acpi/patches/release/2.6.9/acpi-20041203-26-stable-release.diff.gz && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading Orinoco patch: ${NORMAL}"
  wget -Nc http://www.kismetwireless.net/code/orinoco-2.6.9-rfmon-dragorn-1.diff && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading Swsusp patch: ${NORMAL}"
  #wget -Nc http://kanotix.com/files/patches/software-suspend-2.1.5-for-2.6.9-kanotix-7.tar.bz2
  wget -Nc http://download.berlios.de/softwaresuspend/software-suspend-2.1.5-for-2.6.9.tar.bz2 && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading VIA VT6410 patch: ${NORMAL}"
  wget -Nc http://kanotix.com/files/patches/VIA610.267.patch && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading cloop patch: ${NORMAL}"
  # wget -Nc http://kanotix.com/files/patches/2.6.8-cloop.patch
  # http://www.knoppix.net/forum/viewtopic.php?t=13226
  # http://cvs.sourceforge.net/viewcvs.py/morphix/cloop/
  wget -Nc http://grml.org/kernel/patches/2.6.8-cloop.patch && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading reiser4 patch: ${NORMAL}"
  #http://kanotix.com/files/patches/reiser4-269mm1-linux-2.6.9.diff.bz2
  #http://linuxberg.vc-graz.ac.at/mirror/reiserfs/tmp/reiser4-for-2.6.9-3.gz
  wget -Nc ftp://ftp.namesys.com/pub/reiser4-for-2.6/2.6.9/reiser4-for-2.6.9-3.gz && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading bluetooth patch: ${NORMAL}"
  wget -Nc http://www.holtmann.org/linux/kernel/patch-2.6.9-mh5.gz && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading iteraid patch: ${NORMAL}"
  wget -Nc http://kem.p.lodz.pl/~peter/iteraid.patch.bz2 && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  echo -e "${BLUE}Downloading 2.6.9-ac patch: ${NORMAL}"
  # http://kem.p.lodz.pl/~peter/2.6.9-ac/
  # http://www.kernel.org/pub/linux/kernel/people/alan/linux-2.6/2.6.9/
  wget -Nc http://www.kernel.org/pub/linux/kernel/people/alan/linux-2.6/2.6.9/patch-2.6.9-ac16.bz2 && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  #echo -e "${BLUE}Downloading vesafb-tng patch: ${NORMAL}"
  # http://dev.gentoo.org/~spock/projects/vesafb-tng/
  #wget -Nc http://dev.gentoo.org/~spock/projects/vesafb-tng/archive/vesafb-tng-0.9-rc4-r3-2.6.9.patch && echo -e "${GREEN}done${NORMAL}\n" || echo -e "${RED}error${NORMAL}\n"

  ################################################################################
  # wget -Nc http://kanotix.com/files/patches/lirc-linux-2.6.9-rc4-bk1-slh.diff.bz2
  # apt-get ... lirc-modules-source

  # wget -Nc http://kanotix.com/files/patches/eagle-usb-2.6.8.patch.bz2
  # http://download.gna.org/eagleusb/eagle-usb-2.0.0/

  # http://kanotix.com/files/patches/translucency.kernel.patch
  # wget -Nc http://kanotix.com/files/patches/suse-extmod-legacy.patch

  # wget -Nc http://eciadsl.flashtux.org/download/beta/2.6.x-usb.patch
  # apt-get ... eciadsl
  ################################################################################

  ################################################################################
  #wget -Nc http://kanotix.com/files/patches/2.6.9-kanotix-7-security.diff.bz2
  #wget -Nc http://m6n.ath.cx/aml_method_exec_hack.patch
  #wget -Nc ftp://ftp.isdn4linux.de/pub/isdn4linux/CVS-Snapshots/mISDN-CVS-2004-08-02.tar.bz2
  #wget -Nc http://kanotix.com/files/patches/bootsplash-3.1.4-sp3-2.6.9-rc4.diff
  #wget -Nc http://www.netraverse.com/member/downloads/files/mki-adapter26_1_3_7.patch
  #wget -Nc http://www.netraverse.com/member/downloads/files/Kernel-Win4Lin3-2.6.8.1.patch
  #wget -Nc ftp://ftp.uk.kernel.org/pub/linux/kernel/people/akpm/patches/2.6/2.6.9-rc4/2.6.9-rc4-mm1/broken-out/bk-acpi.patch
  #wget -Nc http://kanotix.com/files/patches/dvb-269rc4mm1-linux-2.6.9-rc4-bk1-slh.diff.bz2
#  wget -Nc http://www.saillard.org/pwc/linux-2.6.9_pwc-10.0.6.patch.bz2
  #wget -Nc http://www.clarkson.edu/~evanchsa/software/kernel/patches/trackpoint-2.6.9.patch
  #wget -Nc ftp://ftp.uk.kernel.org/pub/linux/kernel/people/lenb/acpi/patches/release/26-stable-release/acpi-20041105-26-stable-release.diff.bz2
  ################################################################################
fi

if [[ "$1" == extr ]] ; then

#  [[ -d patches.extracted ]] || echo "Creating directory patches.extracted" && mkdir patches.extracted
#  cd patches.extracted

  [[ -d linux-"$MV" ]] || echo "Extracting linux-"$MV".tar.bz2" && tar jxf linux-"$MV".tar.bz2 && echo "done"

  cd patches
  for i in `ls *.gz` ; do
    gzip -d "$i" && echo -e "${GREEN}extracted ${i}${NORMAL}"
  done

  for i in `ls *.bz2` ; do
    bzip2 -d "$i" && echo -e "${GREEN}extracted ${i}${NORMAL}"
  done

  for i in `ls *.tar` ; do
    tar xf "$i" && echo -e "${GREEN}extracted ${i}${NORMAL}"
  done

fi

if [[ "$1" == patch ]] ; then
  [[ -d patches_info ]] && rm -rf patches_info
  mkdir patches_info
  cd patches/acx100-0.2.0pre8_plus_fixes_43 && make inject KSRC=$HERE/linux-$VER 1>>../../patches_info/patches_information && echo "acx100-0.2.0pre8_plus_fixes_43 applied" >> ../../patches_info/patches_applied || exit 10

  cd ../../linux-$MV
  for patch in 2.6.8-cloop.patch \
    acpi-20041203-26-stable-release.diff \
    acpi-dsdt-initrd-patch-v0.7d-2.6.9.patch \
    i8042-tasklet-v3.patch \
    iteraid.patch \
    patch-2.6.9-ac16 \
    orinoco-2.6.9-rfmon-dragorn-1.diff \
    reiser4-for-2.6.9-3 \
    VIA610.267.patch \
    squashfs2.1-r2/linux-2.6.9/squashfs2.1-patch \
    synaptics-0.13.6/alps.patch
  do patch -p1 < ../patches/"$patch" 1>> ../patches_info/patches_information && echo "$patch applied" >> ../patches_info/patches_applied && echo "${GREEN}patch $patch applied.${NORMAL}"
  done
# --dry-run
#    vesafb-tng-0.9-rc4-r3-2.6.9.patch -> eventuell probleme bei grml->booten
#    patch-2.6.9-ck3 -> nur teile daraus verwenden
#    linux-2.6.9-mppe-mppc-1.1.patch  -> probleme
#    linux-2.6.9_pwc-10.0.6.patch  -> scheint bereits in ac vorhanden zu sein

  #sed -i 's#-EXTRAVERSION =.*#-EXTRAVERSION = -ac16#' ../patches/patch-2.6.9-mh5
  #sed -i 's#+EXTRAVERSION =.*#+EXTRAVERSION = -ac16#' ../patches/patch-2.6.9-mh5
  patch -p1 < ../patches/patch-2.6.9-mh5 \
  1>> ../patches_info/patches_information 2>> ../patches_info/patches_error ; \
  echo "patch-2.6.9-mh5 applied" >> ../patches_info/patches_applied && \
  echo "${GREEN}patch patch-2.6.9-mh5 applied.${NORMAL}"

  rm -f drivers/block/loop.c include/linux/loop.h && \
  patch -p1 < ../patches/loop-AES-v3.0a/kernel-2.6.9.diff \
  1>> ../patches_info/patches_information 2>> ../patches_info/patches_error && \
  echo "loop-AES-v3.0a applied" >> ../patches_info/patches_applied && \
  echo "${GREEN}patch loop-aes applied.${NORMAL}"

  rm ../patches/software-suspend-2.1.5-for-2.6.9/900-dm-low-memory-fix
  ../patches/software-suspend-2.1.5-for-2.6.9/apply 1>> ../patches_info/patches_information && \
  echo "software-suspend-2.1.5 applied" >> ../patches_info/patches_applied && \
  echo "${GREEN}patch software-suspend-2.1.5 applied.${NORMAL}"|| exit 20

  #for patch in `ls ~/2.6.9-ck3/*` ; do
  cd ~/linux-$MV
  for patch in 1g_lowmem1_i386.diff \
    2.6.9-oom-kill-fix.patch \
    269rc4-mingo_ll.diff \
    back-sched-net-fix-scheduling-latencies-in-__release_sock.patch \
    block_fix.diff \
    cddvd-cmdfilter-drop.patch \
    cfq2-20041019.patch \
    defaultcfq.diff \
    fix-bad-segment-coalescing-in-blk_recalc_rq_segments.patch \
    mwII.diff \
    mwII-oc.diff \
    nvidia_compat.diff \
    schedrange.diff \
    supermount-ng207.diff \
    vm-pages_scanned-active_list.patch ; do patch -p1 < "../2.6.9-ck3/$patch" 1>> ../patches_info/patches_information 2>> ../patches_info/patches_error && echo "$patch applied" >> ../patches_info/patches_applied_ck3 && echo "${GREEN}patch $patch applied.${NORMAL}" ; done

    # ll-config1.diff \
    # server_tune.diff \

   find . -name \*.rej | xargs cat >> ../patches_info/patches_reject_collected && echo "${RED}rejected patches collected in patches_info/patches_reject_collected${NORMAL}"
fi

if [[ "$1" == allpatch ]] ; then
   echo "${BLUE}Creating all_in_one_patch_$MV: ${NORMAL}"
   [[ -d linux-2.6.9.plain ]] && diff -urN linux-$MV.plain \
   linux-$MV > patches_info/all_in_one_patch_$MV && echo -e "${GREEN}done${NORMAL}"
fi

#if [[ "$1" == rev ]] ; then
#
#  cd linux-$MV
#  for patch in 2.6.8-cloop.patch \
#  ####
#    synaptics-0.13.6/alps.patch ; do patch -p1 -R < ../patches/"$patch" ; echo "${GREEN}patch $patch --reversed.${NORMAL}" ; done
#fi

#if [[ "$1" == patch2 ]] ; then
#  rm -rf acx100-0.2.0pre8_plus_fixes_34
#  tar jxf acx100-0.2.0pre8_plus_fixes_40.tar.bz2 || exit 4
#  #rm -rf ppp-2.4.2_cvs20040216-linux-mppe
#  #tar zxf ppp-2.4.2_cvs20040216-linux-mppe.tar.gz || exit 3
#  #rm -rf mISDN-CVS-2004-08-02
#  #tar jxf mISDN-CVS-2004-08-02.tar.bz2 || exit 19
#  rm -rf loop-AES-v2.2d
#  tar jxf loop-AES-v2.2d.tar.bz2 || exit 23
#  rm -rf squashfs2.0r2/
#  tar zxf squashfs2.0-r2.tar.gz || exit 24
#  rm -rf software-suspend-2.1.5-for-2.6.9/
#  tar jxf software-suspend-2.1.5-for-2.6.9-kanotix-7.tar.bz2 || exit 25
#  rm -rf synaptics-0.13.6
#  tar jxf synaptics-0.13.6.tar.bz2 || exit 26
#  rm -rf linux-$VER
#  rm -rf linux-$MV
#  tar jxf linux-$MV.tar.bz2 2>/dev/null || exit 1
#  mv linux-$MV linux-$VER
#  cd linux-$VER
#  #cd ../ppp-2.4.2_cvs20040216-linux-mppe/
#  #echo|./mppeinstall.sh /usr/src/linux-$VER || exit 6
#  #cd -
#  zcat ../linux-2.6.9-mppe-mppc-1.1.patch.gz | patch -p1 || exit 6
#  cd ../acx100-0.2.0pre8_plus_fixes_40
#  make inject KSRC=$HERE/linux-$VER || exit 7
#  cd - 
#  #cd ../mISDN-CVS-2004-06-01
#  #./std2kern -k /usr/src/linux-$VER || exit 8
#  #cd -
#  ../software-suspend-2.1.5-for-2.6.9/apply || exit 10
#  patch -p1 <../synaptics-0.13.6/alps.patch || exit 11
#  zcat ../i8042-tasklet-v3.patch.gz|patch -p1 || exit 12
#  patch -p1 <../2.6.x-usb.patch || exit 9
#  #patch -p1 <../bootsplash-3.1.4-sp3-2.6.9-rc4.diff || exit 10
#  #patch -p1 <../mki-adapter26_1_3_7.patch || exit 12
#  #patch -p1 <../Kernel-Win4Lin3-2.6.8.1.patch || exit 13
#  #patch -p1 <../bk-acpi.patch || exit 16
#  #bzcat ../acpi-20041105-26-stable-release.diff.bz2 |patch -p1 || exit 17
#  patch -p1 <../acpi-dsdt-initrd-patch-v0.7d-2.6.9.patch || exit 18
#  patch -p1 <../VIA610.267.patch || exit 14
#  bzcat ../eagle-usb-2.6.8.patch.bz2 |patch -p1 || exit 15
#  patch -p1 <../suse-extmod-legacy.patch || exit 21
#  patch -p1 <../2.6.8-cloop.patch || exit 33
#  rm -f drivers/block/loop.c include/linux/loop.h
#  patch -p1 <../loop-AES-v2.2d/kernel-2.6.9.diff || exit 22
#  patch -p1 <../squashfs2.0r2/linux-2.6.8.1/squashfs2.0-patch || exit 25
#  bzcat ../reiser4-269mm1-linux-2.6.9.diff.bz2|patch -p1 || exit 26
#  patch -p1 <../translucency.kernel.patch || exit 27
#  patch -p1 <../2.6.9-aic7xxx-fix.patch || exit 28
#  patch -p1 <../2.6.9-cpia-deadlock-fix.patch || exit 29
#  patch -p1 <../2.6.9-hpt366-fix.patch || exit 30
#  patch -p1 <../2.6.9-smbfs-leak-fix.patch || exit 31
#  patch -p1 <../2.6.9-usb-visor-fix.patch || exit 32
#  patch -p1 <../vm-pages_scanned-active_list.patch || exit 33
#  patch -p1 <../supermount-ng207.diff || exit 34
#  #bzcat ../dvb-269rc4mm1-linux-2.6.9-rc4-bk1-slh.diff.bz2 | patch -p1 || exit 35
#  bzcat ../linux-2.6.9_pwc-10.0.6.patch.bz2 | patch -p1 || exit 36
#  patch -p1 <../nvidia_compat.diff || exit 37
#  bzcat ../lirc-linux-2.6.9-rc4-bk1-slh.diff.bz2 | patch -p1 || exit 38
#  bzcat ../2.6.9-kanotix-7-security.diff.bz2 | patch -p1 || exit 39
#  patch -p1 <../aml_method_exec_hack.patch|| exit 40
#  patch -p1 <../orinoco-2.6.9-rfmon-dragorn-1.diff|| exit 41
#  perl -pi -e 's#(\s)(ATA_FLAG_SATA_RESET \|)#\1/\*\2\*/#' drivers/scsi/sata_nv.c
#  perl -pi -e "s/^(EXTRAVERSION).*/\1 = -$EV/" Makefile
#fi

if [[ "$1" == build ]] ; then
  fakeroot make-kpkg --us --uc --rootcmd fakeroot buildpackage modules
  fakeroot make-kpkg --us --uc --rootcmd fakeroot kernel_image kernel_headers kernel_doc modules
fi
