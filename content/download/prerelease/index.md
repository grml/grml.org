+++
title = 'Download Grml 2024.02-rc1'
+++

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

<p><strong>NOTE: This is a PRE-RELEASE, not a stable release yet.<br />
You have been warned.</strong><br />

<a href="../">Looking for the stable release version instead?</a></p>

<p>Download the Grml flavour you need, then write it to a CD-ROM/DVD or an empty USB stick.</p>

<div class="download_group" id="download_group1_noscript">
<div class="download_panel" id="download_panel1_noscript">
<div>
  <a href="/download/mirrors/">Download from a specific mirror</a><br/>
  <br/>
  Direct download links:<br/>
  <a href="https://download.grml.org/devel/grml64-full_2024.02-rc1.iso">Grml64 full ISO</a> [<a href="https://download.grml.org/devel/grml64-full_2024.02-rc1.iso.asc">GPG Signature</a>]<br/>
  <a href="https://download.grml.org/devel/grml32-full_2024.02-rc1.iso">Grml32 full ISO</a> [<a href="https://download.grml.org/devel/grml32-full_2024.02-rc1.iso.asc">GPG Signature</a>]<br/>
  <a href="https://download.grml.org/devel/grml64-small_2024.02-rc1.iso">Grml64 small ISO</a> [<a href="https://download.grml.org/devel/grml64-small_2024.02-rc1.iso.asc">GPG Signature</a>]<br/>
  <a href="https://download.grml.org/devel/grml32-small_2024.02-rc1.iso">Grml32 small ISO</a> [<a href="https://download.grml.org/devel/grml32-small_2024.02-rc1.iso.asc">GPG Signature</a>]<br/>
  <br/>
</div>
</div>
</div>

<div class="download_group" id="download_group1" style="display:none;">
<form method="get" action="/download/bounce/" id="download_form">
<input type="hidden" name="version" value="2024.02-rc1"/>
<div class="download_panel" id="download_panel1">
<div>

  <h2>Options</h2>

  <input type="radio" id="flavour_full" name="flavour" value="full" checked />
  <label for="flavour_full">full (~900MB)</label>

  <input type="radio" id="flavour_small" name="flavour" value="small" />
  <label for="flavour_small">small (~495MB)</label>

  <br /><br />

  <input type="radio" id="arch_amd64" name="arch" value="amd64" checked />
  <label for="arch_amd64">64-bit PC (amd64)</label>

  <input type="radio" id="arch_i386" name="arch" value="i386" />
  <label for="arch_i386">32-bit PC (i686+)</label>

  <br />
  <br />
  <br />
  <br />
  <br />

  <div style="font-size: 14pt;">
    <p><a href="/changelogs/README-grml-2024.02-rc1/">Release Notes</a></p>
  </div>

</div>
</div>

<div class="download_panel" id="download_panel2">
<div>
  <!-- fallback cgi buttons -->
  <div id="formbuttons">
    <button name="filetype" value="iso" id="download_button_mirror" class="largebutton" style="width:100%;" type="submit">Download Now </button><br />
    <button name="filetype" value="signature" id="download_button_signature" type="submit">Get Checksum/Signature</button><br />
    <a href="/download/mirrors/">Download from a specific mirror</a><br/>
  </div>
  <!-- JS links -->
  <div id="linkbuttons" style="display:none;">
    <a id="download_link_mirror" class="largebutton">Download Now</a><br />
    <a id="download_link_signature">Get GPG Signature</a><br />
    <a href="/download/mirrors/">Download from a specific mirror</a><br/>
  </div>
</div>
</div>
</form>

<script>
function update_links() {
    var formData = new FormData(document.getElementById('download_form'));
    var current_version = formData.get('version');
    var arch = formData.get('arch');
    var flavour = formData.get('flavour');
    var product = 'grml';
    if (arch == 'amd64') product = 'grml64';
    if (arch == 'i386') product = 'grml32';
    var iso = product + '-' + flavour + '_' + current_version + '.iso';
    var mirror_url = "https://download.grml.org/devel/";
    document.getElementById('download_link_mirror').href = mirror_url + iso;
    document.getElementById('download_link_mirror').innerHTML = '<br />Download Now<div class="download_relinfo">' + product + '-' + flavour + ' ' + current_version + '</div>';
    document.getElementById('download_link_signature').href = mirror_url + iso + '.asc';
}

// hook update function
document.querySelectorAll('#download_form input').forEach(function (elem) {
  elem.onchange = update_links;
});
// force initial link href set
update_links();
// only show our link "buttons"
document.getElementById('formbuttons').style.display = 'none';
document.getElementById('linkbuttons').style.display = '';
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
  <a href="https://download.grml.org/devel/grml_sources-2024.02-rc1.tar.gz">Source code</a> (one tgz for both architectures)<br />
  <br/>
  Netboot packages:<br/>
  <a href="https://download.grml.org/devel/grml_netboot_package_grml64-full_2024.02-rc1.tar">64-bit</a>
  <a href="https://download.grml.org/devel/grml_netboot_package_grml32-full_2024.02-rc1.tar">32-bit</a>
</div>
</div>

<div class="download_panel" id="download_panel4">
<div>
  <b>Boot from USB key</b><br />
  <br />
  Just <kbd>dd(1)</kbd> the downloaded ISO to an <abbr title="Any existing data will be overwritten by the dd command!">empty</abbr> USB key!<br /><br />
  <code class="keyboard">dd bs=4M status=progress conv=fdatasync if=grml64-full_2024.02-rc1.iso of=/dev/USB_KEY</code>
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
The <em><a href="https://download.grml.org/devel/SHA256SUMS">SHA256SUMS</a></em> file contains checksums for all available release files.<br />
The <em><a href="https://download.grml.org/devel/SHA256SUMS.gpg">SHA256SUMS.gpg</a></em> file provides the GnuPG signature for that file.<br />
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

<div style="clear: both;"></div>