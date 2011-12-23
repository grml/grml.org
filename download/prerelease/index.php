<?php
// while there is no prerelease, redirect to stable page
header("Location: /download/");
exit;
?>
<!DOCTYPE html>
<html>
<head>
<title>grml.org - Download</title>
<meta name="Title" content="grml.org - Download" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="Download of grml.org" />
<meta name="Abstract" content="grml, just another linux-distribution" />
<meta name="fdse-index-as" content="http://www.grml.org/download/" />
<meta name="Robots" content="index,follow" />
<meta name="Language" content="english" />
<meta name="identifier-url" content="http://www.grml.org/" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="home" href="/" title="grml.org" />
<link rel="help" href="/features/" title="About" />
<link rel="author" href="/team/" title="Team" />
<link rel="icon" href="/favicon.png" type="image/png" />
<link rel="stylesheet" href="/style.css" type="text/css" />
<style type="text/css">
#contentbox {
    padding-left: 20px;
    padding-right: 20px;
}
.download_panel {
    float: left;
    width: 288px;
    margin-bottom: 2em;
    margin-top: 1em;
    font-size: 11px;
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
    padding: auto;
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
</style>

</head>

<body>
<?php include '../../static.inc'; ?>

<div class="content">

    <h1>Download Grml 2011.12-rc1</h1>

    <p><strong>NOTE: This is a PRE-RELEASE, not a stable release yet.<br />
    You have been warned.</strong><br />

    <a href="../">Looking for the stable release version instead?</a></p>

    <p>Download the Grml flavour you need, then write it to a CD-R or an empty USB stick.</p>

    <div class="download_group" id="download_group1">
    <form method="get" action="/download/bounce/">
    <input type="hidden" name="version" value="2011.12-rc1"/>
    <div class="download_panel" id="download_panel1"><div>

    <h2>Options</h2>

    <select name="flavour" id="download_flavour" style="width:100%;">
    <option value="full" selected="selected">grml (350MB)</option>
    </select>
    <br /><br />
    <select name="arch" id="download_arch" style="width:100%;">
    <option value="amd64" selected="selected">64-bit PC</option>
    <option value="i386">32-bit PC</option>
    </select>
    <br />
    <br />
    <br />
    <br />
    <br />
    <a href="/changelogs/README-grml-2011.12-rc1/">Release Notes</a>
    </div></div>

    <div class="download_panel" id="download_panel2"><div>
    <!-- fallback cgi buttons -->
    <div id="formbuttons">
    <button name="filetype" value="iso" id="download_button_mirror" class="largebutton" style="width:100%;" type="submit">Download Now </button><br />
    <button name="filetype" value="bt" id="download_button_bt" type="submit">Download using BitTorrent</button><br />
    <button name="filetype" value="signature" id="download_button_signature" type="submit">Get Checksum/Signature</button><br />
    </div>
    <!-- JS links -->
    <div id="linkbuttons" style="display:none;">
    <a id="download_link_mirror" class="largebutton">Download Now</a><br />
    <a id="download_link_bt">BitTorrent Download</a><br />
    <a id="download_link_signature">Get Checksum/Signature</a><br />
    </div>
    </div></div>

    </form>
    <script type="text/javascript">
    function update_links() {
        var current_version = "2011.12-rc1";
        var product = 'grml';
        var arch = document.getElementById('download_arch').value;
        var flavour = document.getElementById('download_flavour').value;
        if (arch == 'amd64') product = 'grml64';
        if (flavour != 'full') product += '-' + flavour;
        var iso = product + '_' + current_version + '.iso';
        var mirror_url = "http://download.grml.org/devel/";
        document.getElementById('download_link_mirror').href = mirror_url + iso;
        document.getElementById('download_link_mirror').innerHTML = '<br />Download Now<div class="download_relinfo">' + product + ' ' + current_version + '</div>';
        document.getElementById('download_link_bt').href = mirror_url + iso + '.torrent';
        document.getElementById('download_link_signature').href = mirror_url + iso + '.sha1.asc';
    }
    // hook update function
    document.getElementById('download_flavour').onchange = update_links;
    document.getElementById('download_arch').onchange = update_links;
    // force initial link href set
    update_links();
    // only show our link "buttons"
    document.getElementById('formbuttons').style.display = 'none';
    document.getElementById('linkbuttons').style.display = '';
    </script>
    </div>

    <div class="download_group" id="download_group2">

    <div class="download_panel" id="download_panel3"><div>
    <b>Alternate downloads</b><br /><br />
    <a href="http://daily.grml.org/">Daily images</a><br />
    <a href="http://download.grml.org/">Older releases</a><br />
    <a href="http://download.grml.org/devel/">chroots for remastering</a> (prerelease)<br />
    <a href="http://download.grml.org/devel/grml_sources-2011.12-rc1.tgz">Source code</a> (one tgz for both architectures)<br />
    <br />
    <a href="http://debian.netcologne.de/grml/gnupg-michael-prokop.txt">Signing Key</a><br />
    <br />
    Please verify all downloads using GnuPG!
    </div></div>

    <div class="download_panel" id="download_panel4"><div>
    <b>Boot from USB stick</b><br />
    <br />
    Just <tt>dd(1)</tt> the downloaded ISO to an <abbr title="Any existing data will be overriden by the dd command!">empty</abbr> USB stick!<br /><br />
    <code>dd if=grml_2011.12-rc1.iso of=/dev/USB_STICK</code>
    <br /><br />

    <b>Troubleshooting</b><br /><br />
    <a href="http://git.grml.org/?p=grml-live.git;a=blob_plain;f=templates/GRML/grml-cheatcodes.txt;hb=HEAD">Boot option guide</a>
    <br /><br />

    </div></div>

    </div>

    <div style="clear: both;"></div>

</div>

<?php include '../../static_bottom.inc'; ?>
