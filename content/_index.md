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

<div class="frontpage_releaseinfo">
<h2>Current Release: {{< param current_release.version >}}</h2>
<div class="frontpage_actions">
<a href="/changelogs/README-grml-{{< param current_release.version >}}/" class="frontpage_button outline"><span>Release Notes</span><span>Grml {{< param current_release.version >}}</span></a>
<a href="/download/" class="frontpage_button"><span>Download</span><span>Grml {{< param current_release.version >}}</span></a>
</div>
</div>

{{< if_have_prerelease >}}
<div class="frontpage_releaseinfo">
<h2>Current Pre-release: {{< param_opt current_prerelease.version >}}</h2>
<div class="frontpage_actions">
<a href="/changelogs/README-grml-{{< param_opt current_prerelease.version >}}/" class="frontpage_button outline"><span>Release Notes</span><span>Grml {{< param_opt current_prerelease.version >}}</span></a>
<a href="/download/prerelease/" class="frontpage_button"><span>Download</span><span>Grml {{< param_opt current_prerelease.version >}}</span></a>
</div>
</div>
{{</ if_have_prerelease >}}

<img style="float: right; margin-left: 20px" src="/img/grmltux_small.jpg" alt="*" />
<br />

<h2>News</h2>
<div class="news">
{{< require_release_update "2026.04" >}}
<p>30 April 2026: New <a href="/changelogs/README-grml-2026.04/">stable release 2026.04</a></p>
<p>12 December 2025: New <a href="/changelogs/README-grml-2025.12/">stable release 2025.12</a></p>
<p>16 August 2025: New <a href="/changelogs/README-grml-2025.08/">stable release 2025.08</a></p>
</div>
