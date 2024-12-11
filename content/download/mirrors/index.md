+++
title = 'Download - Mirror List'
+++
<strong>NOTE:</strong> Please visit the <a href="/download/">download webpage</a> if you don't need the full mirror list.

## Download via HTTPS/FTP

<a href="https://en.wikipedia.org/wiki/Geotargeting">GeoIP</a> (automatically try to figure out the best matching mirror):

* <a href="https://download.grml.org/">https://download.grml.org/</a>

{{< mirrorlist.inline >}}

{{ $url := "https://raw.githubusercontent.com/grml/grml-mirrors/refs/heads/master/Mirrors.masterlist" }}
{{ $mirror_types := slice "Grml-http" "Grml-rsync" "Grml-ftp" }}
{{ $s := slice }}
{{ $countries := slice }}
{{ with resources.GetRemote $url }}
  {{ with .Err }}
    {{ errorf "%s" . }}
  {{ else }}
    {{ range split .Content "\n\n" }}
    {{ $lines := split . "\n" }}
    {{ $sitename := index (split (index $lines 0) " ") 1 }}
    {{ $cachekey := (printf "%s.yaml" $sitename) }}
    {{ $site := transform.Unmarshal ( resources.FromString $cachekey . ) }}
    {{ $s = $s | append $site }}
    {{ $countries = $countries | append (index $site "Country") }}
    {{ end }}
  {{ end }}
{{ else }}
  {{ errorf "Unable to fetch %q" $url }}
{{ end }}

{{ $countries = $countries | uniq | sort }}

{{ range $countries }}
  {{ $region := . }}
  {{ $region_long := substr . 3 }}
<h3>Mirrors in {{ $region_long }}</h3>

  {{ range (where $s "Country" $region) }}
    {{ $mirror := . }}
    <p>{{ $mirror.Site }} ({{ $mirror.Location }})</p>
    <ul>
    {{ range $mirror_types }}
      {{ $type := . }}
      {{ $urlfragment := index $mirror $type }}
      {{ if $urlfragment }}
        {{ $proto := substr $type 5 }}
        {{ if eq $proto "http" }}
        {{ $proto = "https" }}
        {{ end }}
        {{ $url := printf "%s://%s/%s" $proto $mirror.Site $urlfragment }}
    <li><a href="{{ $url }}">{{ $url }}</a></li>
      {{ end }}
    {{ end }}
    </ul>
  {{ end }}
{{ end }}

{{< /mirrorlist.inline >}}

<hr />

<p><em>If you are interested in providing a mirror for Grml please visit
<a href="https://github.com/grml/grml-mirrors">our grml-mirrors project</a>
or <a href="/contact/">contact us</a>.</em></p>
