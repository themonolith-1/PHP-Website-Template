</div>
  <footer>
    <p>
      &copy; <?php echo date('Y'); ?> PHP Web Template &mdash; Powered by 
      <i class="fa-brands fa-php icon"></i> PHP
    </p>
    <div style="margin-top:0.5rem;">
      <a href="#" style="color:#fff;margin:0 0.5rem;"><i class="fa-brands fa-github"></i></a>
      <a href="#" style="color:#fff;margin:0 0.5rem;"><i class="fa-brands fa-twitter"></i></a>
      <a href="#" style="color:#fff;margin:0 0.5rem;"><i class="fa-brands fa-linkedin"></i></a>
    </div>
  </footer>
  <?php include __DIR__ . '/../chatbot.php'; ?>

  <!-- Cookie Consent Popup -->
  <!--
    Preferences (currently only cookie consent) are managed here.
    When the user clicks "Accept", a cookie named 'cookies_accepted' is set for 365 days.
    On subsequent visits, the popup is hidden if the cookie is present.
    To add more preferences, extend this popup and the JS logic.
  -->
  <div id="cookie-consent" class="cookie-consent-popup" style="display:none;">
    <div class="cookie-consent-content">
      <i class="fa-solid fa-cookie-bite" style="font-size:2rem;color:#e67e22;margin-bottom:0.7rem;"></i>
      <h4 style="margin:0 0 0.5rem 0;">We use cookies</h4>
      <p style="margin:0 0 1rem 0;font-size:1.05rem;color:#555;">
        This website uses cookies to ensure you get the best experience. 
        <a href="about.php" style="color:#3498db;text-decoration:underline;">Learn more</a>
      </p>
      <button id="cookie-accept" style="background:linear-gradient(90deg,#2ecc71 60%,#e67e22 100%);color:#fff;border:none;padding:0.7rem 2rem;border-radius:24px;font-weight:600;font-size:1.08rem;box-shadow:0 2px 8px rgba(44,62,80,0.10);cursor:pointer;">
        Accept
      </button>
    </div>
  </div>
  <script>
    // Cookie Consent Logic
    // Preferences are stored using cookies. Currently, only 'cookies_accepted' is used.
    function setCookie(name, value, days) {
      var expires = "";
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "")  + expires + "; path=/";
    }
    function getCookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      }
      return null;
    }
    document.addEventListener('DOMContentLoaded', function() {
      var consent = document.getElementById('cookie-consent');
      var acceptBtn = document.getElementById('cookie-accept');
      if (!getCookie('cookies_accepted')) {
        consent.style.display = 'flex';
      }
      acceptBtn.addEventListener('click', function() {
        setCookie('cookies_accepted', 'yes', 365);
        consent.style.display = 'none';
      });
    });
  </script>
</body>
</html>
