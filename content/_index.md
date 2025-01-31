+++
title = 'Debian Live system / CD for sysadmins and texttool-users'
+++

<div class="banner">
<h1>Grml Live Linux</h1>
<h2>Debian based Linux Live system</h2>
</div>

<h2>What is Grml?</h2>

<p>Grml is a bootable live system (Live-CD) based on <a
href="https://www.debian.org/">Debian</a>. Grml includes a
collection of GNU/Linux software especially for system
administrators. Users don't have to install anything on fixed
storage. Grml is especially well suited for administrative tasks like installation,
deployment and system rescue. <a href="/features/">Read
more...</a></p>

<br />

<p style="text-align: center;">
<b>The <a href="/changelogs/README-grml-{{< param current_release.version >}}/">current release</a>:</b><br/><br/>
<a href="/download/" class="frontpage_button"><span>Download<br><br>Grml {{< param current_release.version >}}</span></a>
</p>
<br />

{{< if_have_prerelease >}}
<p style="text-align: center;">
<b>The <a href="/changelogs/README-grml-{{< param_opt current_prerelease.version >}}/">current pre-release</a>:</b><br/><br/>
<a href="/download/prerelease/" class="frontpage_button"><span>Download<br><br>Grml {{< param_opt current_prerelease.version >}}</span></a>
</p>
<br />
{{</ if_have_prerelease >}}

<img style="float: right; margin-left: 20px" src="/img/grmltux_small.jpg" alt="*" />
<br />

<h2>News</h2>
<div class="news">
{{< require_release_update "2024.12" >}}
<p>20 Dec 2024: New <a href="/changelogs/README-grml-2024.12/">stable release 2024.12</a></p>
<p>22 Oct 2024: <a href="https://blog.grml.org/archives/417-20-years-grml-releases.html">20 Years of Grml Releases</a></p>
</div>
