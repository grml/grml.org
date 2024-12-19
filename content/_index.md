+++
title = 'Debian Live system / CD for sysadmins and texttool-users'
+++

<div class="leader-box">
<a href="/download/"><div class="leader-title">
    Grml {{< param current_release.version >}}<br>
        {{< param current_release.codename >}}
</div></a>
</div>
<div class="wrap-key">
<div class="item-box item-box-a">
<h2>What is Grml?</h2>

<p>Grml is a bootable live system (Live-CD) based on <a href="https://www.debian.org/">Debian</a>. Grml includes a
collection of GNU/Linux software especially for system
administrators. Users don't have to install anything on fixed
storage. Grml is especially well suited for administrative tasks like installation,
deployment and system rescue. <a href="/features/">Read
more...</a></p>

</div>
<div class="item-box item-box-b">

<p style="text-align: center;">
<b>The <a href="/changelogs/README-grml-{{< param current_release.version >}}/">current release</a>:</b><br/><br/>
<a href="/download/" class="button" style="padding: 12px; font-weight: bold;"><span>Download Grml {{< param current_release.version >}}</span></a>
</p>
<br />

{{< if_have_prerelease >}}
<p style="text-align: center;">
<b>The <a href="/changelogs/README-grml-{{< param_opt current_prerelease.version >}}/">current pre-release</a>:</b><br/><br/>
<a href="/download/prerelease/" class="button" style="padding: 12px; font-weight: bold;"><span>Download Grml {{< param_opt current_prerelease.version >}}</span></a>
</p>
<br />
{{</ if_have_prerelease >}}

<img style="float: right; margin-left: 20px" src="/img/grmltux_small.jpg" alt="*" />
<br />

</div>
</div>

<div class="wrap-key">

<div class="item-box item-box-a">

<h2>News</h2>
<div class="news">
{{< require_release_update "2024.02" >}}
<p>28 Feb 2024: New <a href="/changelogs/README-grml-2024.02/">stable release 2024.02</a></p>
<p>06 Feb 2024: New <a href="/changelogs/README-grml-2024.02-rc1/">release candidate version 2024.02-rc1</a></p>
<p>16 Sep 2023: We're celebrating <a href="https://blog.grml.org/archives/411-20-years-of-grml.org.html">20 years of grml.org</a></p>
</div>

</div>
</div>
