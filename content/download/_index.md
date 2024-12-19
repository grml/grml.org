+++
title = 'Download Grml 2024.02'
[params]
section = 'download'

+++
{{< require_release_update "2024.02" >}}
<!-- Note: for 2024.12, the entire page should be updated from the prerelease page -->

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
    font-size: 70%;
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
      <a href="https://download.grml.org/grml96-full_2024.02.iso">Grml96 full ISO</a> [<a href="https://download.grml.org/grml96-full_2024.02.iso.asc">GPG Signature</a>]<br/>
      <a href="https://download.grml.org/grml64-full_2024.02.iso">Grml64 full ISO</a> [<a href="https://download.grml.org/grml64-full_2024.02.iso.asc">GPG Signature</a>]<br/>
      <a href="https://download.grml.org/grml32-full_2024.02.iso">Grml32 full ISO</a> [<a href="https://download.grml.org/grml32-full_2024.02.iso.asc">GPG Signature</a>]<br/>
      <a href="https://download.grml.org/grml96-small_2024.02.iso">Grml96 small ISO</a> [<a href="https://download.grml.org/grml96-small_2024.02.iso.asc">GPG Signature</a>]<br/>
      <a href="https://download.grml.org/grml64-small_2024.02.iso">Grml64 small ISO</a> [<a href="https://download.grml.org/grml64-small_2024.02.iso.asc">GGP Signature</a>]<br/>
      <a href="https://download.grml.org/grml32-small_2024.02.iso">Grml32 small ISO</a> [<a href="https://download.grml.org/grml32-small_2024.02.iso.asc">GPG Signature</a>]<br/>
      <br/>
    </p>
  </div>
</div>

<div class="download_group" id="download_group1" style="display:none;">
<form id="download_form" onsubmit="return false;">
<input type="hidden" name="version" value="2024.02"/>
<div class="download_panel" id="download_panel1">
<div>

<h2>Options</h2>

<select name="flavour" id="download_flavour" style="width:100%;">
<option value="full" selected="selected">grml-full (~900MB)</option>
<option value="small">grml-small (~500MB)</option>
</select>
<br /><br />
<select name="arch" id="download_arch" style="width:100%;">
<option value="amd64" selected="selected">64-bit PC (amd64)</option>
<option value="i386">32-bit PC (i686+)</option>
<option value="96">One for both (~1.8GB)</option>
</select>
<br />
<br />
<br />
<br />
<br />

<div style="font-size: 14pt;">
  <p><a href="/changelogs/README-grml-2024.02/">Release Notes</a></p>
</div>

</div>
</form>
</div>

<div class="download_panel" id="download_panel2">
<div>
  <div>
    <a id="download_link_mirror" class="largebutton">Download Now</a><br />
    <a id="download_link_signature">Get GPG Signature</a><br />
    <a href="/download/mirrors/">Download from a specific mirror</a><br/>
  </div>
</div>
</div>

<script>
function update_arch() {
    var flavour = document.getElementById('download_flavour').value;
    if (flavour == 'small') document.getElementById('download_arch').innerHTML = '<option value="amd64">64-bit PC (amd64)</option><option value="i386">32-bit PC (i686+)</option><option value="96">One for both (~940MB)</option>';
    if (flavour == 'full') document.getElementById('download_arch').innerHTML = '<option value="amd64">64-bit PC (amd64)</option><option value="i386">32-bit PC (i686+)</option><option value="96">One for both (~1.8GB)</option>';
    update_links();
}

function update_links() {
    var current_version = "2024.02";
    var product = 'grml';
    var arch = document.getElementById('download_arch').value;
    var flavour = document.getElementById('download_flavour').value;
    if (arch == 'amd64') product = 'grml64';
    if (arch == 'i386') product = 'grml32';
    if (arch == '96') product = 'grml96';
    var iso = product + '-' + flavour + '_' + current_version + '.iso';
    var mirror_url = "https://download.grml.org/";
    document.getElementById('download_link_mirror').href = mirror_url + iso;
    document.getElementById('download_link_mirror').innerHTML = '<br />Download Now<div class="download_relinfo">' + product + '-' + flavour + ' ' + current_version + '</div>';
    document.getElementById('download_link_signature').href = mirror_url + iso + '.asc';
}

// hook update function
document.getElementById('download_flavour').onchange = update_arch;
document.getElementById('download_arch').onchange = update_links;
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
  <a href="https://download.grml.org/grml_sources-2024.02.tar.gz">Source code</a> (one tgz for both architectures)<br />
  <br/>
  Netboot packages:<br/>
  <a href="https://download.grml.org/grml_netboot_package_grml64-full_2024.02.tar">64-bit</a>
  <a href="https://download.grml.org/grml_netboot_package_grml32-full_2024.02.tar">32-bit</a>
</div>
</div>

<div class="download_panel" id="download_panel4">
<div>
  <b>Boot from USB key</b><br />
  <br />
  Just <kbd>dd(1)</kbd> the downloaded ISO to an <abbr title="Any existing data will be overwritten by the dd command!">empty</abbr> USB key!<br /><br />
  <code class="keyboard">dd bs=4M status=progress conv=fdatasync if=grml64-full_2024.02.iso of=/dev/USB_KEY</code>
  <br /><br />
  <b>Troubleshooting</b><br /><br />
  <a href="https://git.grml.org/f/grml-live/templates/GRML/grml-cheatcodes.txt">Boot option guide</a>
  <br />
  <br />
  <br />
  <br />
</div>
</div>

</div>

<h2>Verify your download</h2>

<p>Please verify all downloads!</p>

<p>Alongside the actual download files (ISO, netboot, sources), the Grml mirrors publish the extra files <em>SHA256SUMS</em> and <em>SHA256SUMS.gpg</em>.<br />
The <em><a href="https://download.grml.org/SHA256SUMS">SHA256SUMS</a></em> file contains checksums for all available release files.<br />
The <em><a href="https://download.grml.org/SHA256SUMS.gpg">SHA256SUMS.gpg</a></em> file provides the GnuPG signature for that file.<br />
Once you have <em>SHA256SUMS</em> and <em>SHA256SUMS.gpg</em> in the same directory as your Grml downloads, verify the checksum file via:</p>

<code class="keyboard">
gpg --keyid-format long --verify SHA256SUMS.gpg SHA256SUMS
</code>

<p>If you don't have <a href="/download/gnupg-michael-prokop.txt">our GnuPG signing key</a>
(key ID <em>0x96A87872B7EA3737</em>, fingerprint <em>33CC B136 401A FEC8 43A3  8763 96A8 7872 B7EA 3737</em>), run:</p>

<code class="keyboard">
gpg --keyid-format long --keyserver hkps://keys.openpgp.org --recv-keys 0x96A87872B7EA3737
</code>

<p>Finally verify the checksum of your Grml downloads, via:</p>

<code class="keyboard">
sha256sum --ignore-missing -c SHA256SUMS
</code>

<h2>Source code</h2>

<p>The Grml team uses <a href="https://git-scm.com/">Git</a> for managing software and packages.
The repositories are available online at <a href="https://github.com/grml/">GitHub</a>.</p>
