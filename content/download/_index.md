+++
title = 'Download Grml 2025.08'
+++
<!-- at least: update page title -->
{{< require_release_update "2025.08" >}}

<style>
#contentbox {
    padding-left: 20px;
    padding-right: 20px;
}
.download_panel {
    float: left;
    width: 288px;
    margin-bottom: 2em;
    margin-top: 1em;
    font-size: 10pt;
}
.download_panel>div {
    margin-right: 20px;
}
#download_panel4 {
    width: auto;
}
.largebutton {
    width: 100%;
    background: #FFDA62;
    height: 90px;
    border: 1px solid gray;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    -o-border-radius:3px;
    border-radius:3px;
    margin-bottom: 0.5em;
    font-size: 15pt;
    font-weight: bold;
    display: block;
    text-align: center;
    color: black;
    text-decoration: none;
}
.largebutton:hover {
    background: #FFA862;
}
.download_relinfo {
    font-size: 10pt;
    margin-top: 0.8em;
}
.download_group {
    border-bottom: 1px dotted gray;
    overflow: auto;
}
.hide {
    display: none;
}
.keyboard {
    background-color: lightgrey;
    color: #111;
    font-family: "Ubuntu Mono", Consolas, Monaco, Courier, monospace;
    font-size: 8pt;
    line-height: 1.5rem;
    padding: .5rem 1rem;
    text-align: left;
    text-shadow: none;
}

</style>

<p>Get the current stable release here.<br />

{{< if_have_prerelease >}}
<a href="prerelease/">Looking for the current pre-release version {{< param_opt current_prerelease.version >}} instead?</a></p>
{{</ if_have_prerelease >}}

<p>Download the Grml flavour you need, then write it to a CD-ROM/DVD or an empty USB stick.</p>

<div class="download_group" id="download_group1_noscript">
<div id="download_panel1_noscript">
<p>
  <a href="/download/mirrors/">Download from a specific mirror</a><br/>
  <br/>
  Direct download links:<br/>
  <a href="https://download.grml.org/grml-full-{{< param current_release.version >}}-amd64.iso">Grml full ISO for 64bit PCs (amd64)</a> [<a href="https://download.grml.org/grml-full-{{< param_opt current_release.version >}}-amd64.iso.asc">GPG Signature</a>]<br/>
  <a href="https://download.grml.org/grml-full-{{< param current_release.version >}}-arm64.iso">Grml full ISO for 64bit ARM (arm64)</a> [<a href="https://download.grml.org/grml-full-{{< param_opt current_release.version >}}-arm64.iso.asc">GPG Signature</a>]<br/>
  <a href="https://download.grml.org/grml-small-{{< param current_release.version >}}-amd64.iso">Grml small ISO for 64bit PCs (amd64)</a> [<a href="https://download.grml.org/grml-small-{{< param_opt current_release.version >}}-amd64.iso.asc">GPG Signature</a>]<br/>
  <a href="https://download.grml.org/grml-small-{{< param current_release.version >}}-arm64.iso">Grml small ISO for 64bit ARM (arm64)</a> [<a href="https://download.grml.org/grml-small-{{< param_opt current_release.version >}}-arm64.iso.asc">GPG Signature</a>]<br/>
  <br/>
</p>
</div>
</div>

<div class="download_group" id="download_group1" style="display:none;">
<form id="download_form" onsubmit="return false;">
<input type="hidden" name="version" value="{{< param current_release.version >}}"/>
<div class="download_panel" id="download_panel1">
<div>

  <h2>Size</h2>

  <input type="radio" id="flavour_full" name="flavour" value="full" checked />
  <label for="flavour_full">full (~1GB)</label>
  &nbsp;
  <input type="radio" id="flavour_small" name="flavour" value="small" />
  <label for="flavour_small">small (~540MB)</label>

  <br />

  <h2>Architecture</h2>
  <input type="radio" id="arch_amd64" name="arch" value="amd64" checked />
  <label for="arch_amd64">64-bit PC (amd64)</label>
  &nbsp;
  <input type="radio" id="arch_arm64" name="arch" value="arm64" />
  <label for="arch_arm64">ARM (arm64)</label>

  <br />
  <br />
  <br />
  <br />
  <br />

  <div style="font-size: 14pt;">
    <p><a href="/changelogs/README-grml-{{< param current_release.version >}}/">Release Notes</a></p>
  </div>

</div>
</form>
</div>

<div class="download_panel" id="download_panel2">
<div>
    <a id="download_link_mirror" class="largebutton">Download Now</a><br />
    <a id="download_link_signature">Get GPG Signature</a><br />
    <a href="/download/mirrors/">Download from a specific mirror</a><br/>
</div>
</div>

<script>
function update_links() {
    var formData = new FormData(document.getElementById('download_form'));
    var current_version = formData.get('version');
    var arch = formData.get('arch');
    var flavour = formData.get('flavour');
    var product = 'grml';
    var iso = product + '-' + flavour + '-' + current_version + '-' + arch + '.iso';
    var mirror_url = "https://download.grml.org/";
    document.getElementById('download_link_mirror').href = mirror_url + iso;
    document.getElementById('download_link_mirror').innerHTML = '<br />Download Now<div class="download_relinfo">' + product + '-' + flavour + ' ' + current_version + ' ' + arch + '</div>';
    document.getElementById('download_link_signature').href = mirror_url + iso + '.asc';
}

// hook update function
document.querySelectorAll('#download_form input').forEach(function (elem) {
  elem.onchange = update_links;
});
// force initial link href set
update_links();
document.getElementById('download_group1').style.display = '';
document.getElementById('download_group1_noscript').style.display = 'none';
</script>
</div>

<div class="download_group" id="download_group2">

<div class="download_panel" id="download_panel3">
<div>
  <b>Alternate downloads</b><br /><br />
  <a href="https://daily.grml.org/">Daily images</a><br />
  <a href="https://download.grml.org/">Older releases</a><br />
  <a href="https://download.grml.org/grml-{{< param current_release.version >}}-sources.tar">Source code</a> (one tar for both architectures)<br />
  <br/>
  Netboot packages:<br/>
  <a href="https://download.grml.org/grml-full-{{< param current_release.version >}}-amd64-netboot.tar">64-bit PC</a>
  <a href="https://download.grml.org/grml-full-{{< param current_release.version >}}-arm64-netboot.tar">64-bit ARM</a>
</div>
</div>

<div class="download_panel" id="download_panel4">
<div>
  <b>Boot from USB key</b><br />
  <br />
  Just <kbd>dd(1)</kbd> the downloaded ISO to an <abbr title="Any existing data will be overwritten by the dd command!">empty</abbr> USB key!<br /><br />
  <code class="keyboard">dd bs=4M status=progress conv=fdatasync if=grml-full-{{< param current_release.version >}}-amd64.iso of=/dev/USB_KEY</code>
  <br /><br />
  <b>Troubleshooting</b><br /><br />
  <a href="https://git.grml.org/f/grml-live/config/media-files/GRMLBASE/GRML/GRML_NAME/grml-cheatcodes.txt">Boot option guide</a>
  <br />
  <br />
  <br />
  <br />

</div>
</div>

</div>

<h2>Verify your download</h2>

<p>Please verify all downloads!</p>

<p>Alongside the actual download files (ISO, netboot, sources), the Grml mirrors publish the extra files <em>SHA256SUMS-{{< param current_release.version >}}</em> and <em>SHA256SUMS-{{< param current_release.version >}}.gpg</em>.<br />
The <em><a href="https://download.grml.org/SHA256SUMS-{{< param current_release.version >}}">SHA256SUMS-{{< param current_release.version >}}</a></em> file contains checksums for all available release files.<br />
The <em><a href="https://download.grml.org/SHA256SUMS-{{< param current_release.version >}}.gpg">SHA256SUMS-{{< param current_release.version >}}.gpg</a></em> file provides the GnuPG signature for that file.<br />
Once you have <em>SHA256SUMS-{{< param current_release.version >}}</em> and <em>SHA256SUMS-{{< param current_release.version >}}.gpg</em> in the same directory as your Grml downloads, verify the checksum file via:</p>

<code class="keyboard">
gpg --keyid-format long --verify SHA256SUMS-{{< param current_release.version >}}.gpg SHA256SUMS-{{< param current_release.version >}}
</code>

<p>If you don't have <a href="/download/gnupg-michael-prokop.txt">our GnuPG signing key</a>
(key ID <em>0x96A87872B7EA3737</em>, fingerprint <em>33CC B136 401A FEC8 43A3  8763 96A8 7872 B7EA 3737</em>), run:</p>

<code class="keyboard">
gpg --keyid-format long --keyserver hkps://keys.openpgp.org --recv-keys 0x96A87872B7EA3737
</code>

<p>Finally verify the checksum of your Grml downloads, via:</p>

<code class="keyboard">
sha256sum --ignore-missing -c SHA256SUMS-{{< param current_release.version >}}
</code>

<h2>Source code</h2>

<p>The Grml team uses <a href="https://git-scm.com/">Git</a> for managing software and packages.
The repositories are available online at <a href="https://github.com/grml/">GitHub</a>.</p>
