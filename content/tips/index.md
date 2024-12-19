+++
title = 'Tips'
layout = 'tips'
+++
{{< tips.inline >}}

{{ $url := "https://raw.githubusercontent.com/grml/grml-tips/refs/heads/master/grml_tips" }}
{{ $s := slice }}
{{ $number := 0 }}
{{ with resources.GetRemote $url }}
  {{ with .Err }}
    {{ errorf "%s" . }}
  {{ else }}
    {{- range (split (strings.TrimSuffix "-- \n" .Content) "\n-- \n") -}}
<a name="{{ $number }}"></a>
Grml Tip Number {{ $number }}<br>
{{ $tip := . -}}
<pre>{{ htmlEscape $tip -}}</pre>
<hr>
{{ $number = add $number 1 }}

    {{- end -}}
  {{ end -}}
{{ else }}
  {{ errorf "Unable to fetch %q" $url }}
{{ end -}}

{{< /tips.inline >}}
