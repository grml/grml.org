+++
title = 'Daily Grml snapshots'

[params]
iso_flavors = ['full', 'small']
iso_suites = ['testing', 'unstable']
iso_archs = ['amd64=64bit x86 PC', 'arm64=64bit ARM']
+++

This page provides <strong>automatically generated snapshots</strong> of the <a href="/">Grml Linux Live system</a> which were built using <a href="/grml-live/">grml-live</a>.
If you don't know what Grml is, please see <a href="/faq/">the Grml FAQ</a>.

WARNING: Feel free to use the ISOs but please note that they are not official <a href="/download/">stable releases</a>.
They contain the latest code, but bugs are also likely.
In fact, these snapshots may not work at all.
So: <strong>PLEASE USE THEM WITH CAUTION!</strong>

Please <a href="/bugs/">report any bugs you notice</a>.

## Downloads

Note: the first link on each line points to the most recent available snapshot of the corresponding Grml flavour.
The linked .sha256 files contain the sha256 checksum of the corresponding snapshot.
The link named 'Older Versions' points to a directory that contains older available snapshots of the respective Grml flavour (as well as the latest snapshot).

{{< mirrorlist.inline >}}
{{ range $.Page.Params.iso_suites }}
  {{ $iso_suite := . }}
<h3>Debian {{ $iso_suite }} based Grml images</h3>

{{ range $.Page.Params.iso_flavors }}
  {{ $iso_flavor := . }}
<h4>grml-{{ $iso_flavor }}</h4>

<ul>
    {{ range $.Page.Params.iso_archs }}
      {{ $s := split . "=" }}
      {{ $iso_arch := index $s 0 }}
      {{ $iso_arch_desc := index $s 1 }}

      {{ $isoname := printf "grml-%s-%s-%s" $iso_flavor $iso_arch $iso_suite }}
      {{ $isourlbase := printf "https://daily.grml.org/%s/" $isoname }}
      {{ $isourl := printf "%slatest/%s_latest.iso" $isourlbase $isoname }}
      <li>grml-{{ $iso_flavor }}-{{ $iso_arch }}-{{ $iso_suite }} ({{ $iso_arch_desc }}):
        <a href="{{ $isourl }}">latest ISO</a>
        <a href="{{ $isourl }}.sha256">sha256</a>
        --
        <a href="{{ $isourlbase }}">Older Versions</a>
      </li>

    {{ end }}
</ul>

{{ end }}

{{ end }}

{{< /mirrorlist.inline >}}


## Contact

Problems? Questions? <a href="/contact/">Contact us</a>.
But please do not forget to provide all the relevant information (especially which Grml flavour and version you are referring to).
