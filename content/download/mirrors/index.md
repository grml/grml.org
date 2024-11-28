+++
title = 'Download - Mirror List'
+++
<p><strong>NOTE:</strong> Please visit the <a href="/download/">download webpage</a> if you don't need the full mirror list.</p>

<h2>Download via HTTPS/FTP</h2>

<p><a href="http://en.wikipedia.org/wiki/Geo_targeting">GeoIP</a>
(automatically try to figure out the best matching mirror):</p>

<ul>
    <li><a href="https://download.grml.org/">https://download.grml.org/</a></li>
</ul>

TODO: use .Site.Data.mirrors

[% FOREACH region IN mirrors.keys.sort %]
    <h3>Mirrors in [% region.substr(3) %] </h3>

    [% FOREACH mirror IN mirrors.$region.keys.sort %]
    <p>[% mirror %] ([% mirrors.$region.$mirror.location %])</p>
    [% FOREACH type IN [ 'grml-http' 'grml-rsync' 'grml-ftp' ] %]
    [% NEXT UNLESS mirrors.$region.$mirror.$type %]
    <ul>
        [% IF type.substr(5) == 'http' %]
    <li><a href="https://[% mirror %]/[% mirrors.$region.$mirror.$type %]">https://[% mirror %]/[% mirrors.$region.$mirror.$type %]</a></li>
        [% ELSE %]
    <li><a href="[% type.substr(5) %]://[% mirror %]/[% mirrors.$region.$mirror.$type %]">[% type.substr(5) %]://[% mirror %]/[% mirrors.$region.$mirror.$type %]</a></li>
        [% END %]
    </ul>

    [% END %]
    [% END %]
[% END %]

<hr />

<p><em>If you are interested in providing a mirror for Grml please visit
<a href="https://github.com/grml/grml-mirrors">our grml-mirrors project</a>
or <a href="/contact/">contact us</a>.</em>/</p>
