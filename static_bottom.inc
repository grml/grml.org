[% IF ! sponsors %]
<div class="sponsors">
      <h3>Sponsors</h3>
      <p>
        Grml is sponsored by several companies. For more information about our sponsors check out the <a href="/sponsors/">Sponsors webpage</a>. Our main sponsors are:
      </p>
      <div>
        <a href="http://synpro.solutions/" target="_blank">
        <img src="/sponsors/synpro.png" width="300" height="99" alt="SynPro Solutions logo"/>
        </a>
      </div>
      <div>
        <a href="http://www.hostway.de/" target="_blank">
        <img src="/sponsors/hostway.jpg" width="300" height="100" alt="hostway logo"/>
        </a>
      </div>
      <div>
        <a href="https://www.snelserver.com/" target="_blank">
        <img src="/sponsors/snel.png" width="300" height="70" alt="snel logo"/>
        </a>
      </div>
      <div style="margin-top: 30px;">
        <a href="https://www.serverhunter.com/?utm_source=grml&utm_medium=logo&utm_content=website" target="_blank">
        <img src="/sponsors/serverhunter.svg" width="300" alt="Server Hunter logo"/>
        </a>
      </div>
</div>
[% END %]
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://stats.grml.org/piwik/" : "http://stats.grml.org/piwik/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
      var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
      piwikTracker.trackPageView();
      piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="//stats.grml.org/piwik/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
</div>
</body>
</html>
