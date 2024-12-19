+++
title = 'Files'
icon = 'clanbomber'

[params]
iso_flavors = ['full', 'small']
iso_archs = ['amd64=64bit x86 PC', 'arm64=64bit ARM']
+++

<!-- HACK: required to trigger generation of .htaccess file -->
{{< htaccess.inline >}}
{{ $htaccess := resources.Get "htaccess/files/.htaccess" | resources.ExecuteAsTemplate "files/.htaccess" . }}
<!-- {{$htaccess.Permalink}} -->
{{</ htaccess.inline >}}

## <a name="grmlrepos"></a>Package Repository

Packages provided by the Grml team are available from the <a href="https://deb.grml.org/">Grml repository</a>.

<p>Note that using the Grml repository on standard Debian systems is <b>not recommended</b>. If you just want our console configuration, read <a href="/console/">"Make console work comfortable"</a>.</p>

<pre class="rahmen">
# Signing key is available in grml-debian-keyring
#  deb     [signed-by=/usr/share/keyrings/grml-archive-keyring.gpg] http://deb.grml.org/ grml-stable main
#  deb-src [signed-by=/usr/share/keyrings/grml-archive-keyring.gpg] http://deb.grml.org/ grml-stable main
#  deb     [signed-by=/usr/share/keyrings/grml-archive-keyring.gpg] http://deb.grml.org/ grml-testing main
#  deb-src [signed-by=/usr/share/keyrings/grml-archive-keyring.gpg] http://deb.grml.org/ grml-testing main</pre>

If you are running Debian stretch or later, you may want to use the following <code>.sources</code> file, which will enforce the suite name and signing keys:

<pre class="rahmen">
Types: deb deb-src
URIs: http://deb.grml.org/
Suites: grml-stable grml-testing
Architectures: i386 amd64
Components: main
Signed-By: /usr/share/keyrings/grml-archive-keyring.gpg</pre>

Then the following <a href="https://manpages.debian.org/apt_preferences">preferences file</a> will keep packages from Grml to replace normal Debian packages, in <code>/etc/apt/preferences.d/grml.pref</code>:

<pre class="rahmen">
Package: *
Pin: release a=grml-stable
Pin-Priority: 100

Package: *
Pin: release a=grml-testing
Pin-Priority: 100</pre>

Also note that you may have trouble installing the <code>grml-debian-keyring</code> package as APT will complain about the missing key. A workaround is to download it directly:

<pre class="rahmen">
sudo wget -O /usr/share/keyrings/grml-archive-keyring.gpg https://deb.grml.org/repo-key.gpg
sudo apt-get update
sudo apt-get install grml-debian-keyring
</pre>

## <a name="wallpapers"></a>Wallpapers and other media files provided by Grml

<p>Wallpapers, CD covers and similar media files are available in the
<a href="https://github.com/grml/mediakit/">mediakit repository</a>.</p>

## <a name="changelog"></a>Changelogs

<p>The changelogs moved to <a href="/changelogs/">their own webpage</a>.</p>

## <a name="debian"></a>Package lists for the current release

Boot options for all flavours: <a href="https://git.grml.org/f/grml-live/templates/GRML/grml-cheatcodes.txt">grml-cheatcodes.txt</a>

{{< filelist.inline >}}
{{ $current_version := $.Site.Params.current_release.version }}
{{ range $.Page.Params.iso_flavors }}
  {{ $iso_flavor := . }}

    {{ range $.Page.Params.iso_archs }}
      {{ $s := split . "=" }}
      {{ $iso_arch := index $s 0 }}
      {{ $iso_arch_desc := index $s 1 }}
      {{ $isoname := printf "grml-%s-%s-%s" $iso_flavor $current_version $iso_arch }}
      {{ $urlbase := printf "https://download.grml.org/grml-%s-metadata/%s" $current_version $isoname }}

<h3>grml-{{ $iso_flavor }} {{ $current_version }} {{ $iso_arch }}</h3>
<ul>
    <li>
    <a href="{{ $urlbase }}/dpkg.list">dpkg.list</a> - package list including version information
    </li>
    <li>
    <a href="{{ $urlbase }}/nonfree-licenses.txt.gz">nonfree-licenses.txt</a> - a list of used non-free software and their licenses
    </li>
</ul>
    {{ end }}

{{ end }}
{{< /filelist.inline >}}
