</main>
<footer class="site-footer">
  <div class="foot-grid">
    <div><h2>TutorLink VUT</h2>
      <address>Andries Potgieter Blvd,<br>Vanderbijlpark, Gauteng, 1900<br><a href="tel:+27165550123">016 555 0123</a><br><a href="mailto:hello@tutorlink.example">hello@vaalroast.example</a></address></div>
    <div><h2><?= t('quick') ?></h2><ul><li><a href="index.php"><?= t('home') ?></a></li><li><a href="about.php"><?= t('about') ?></a></li><li><a href="contact.php"><?= t('contact') ?></a></li></ul></div>
    <div><h2><?= t('follow') ?></h2><ul>
      <li><a href="https://www.facebook.com/" target="_blank" rel="noopener">Facebook</a></li>
      <li><a href="https://www.instagram.com/" target="_blank" rel="noopener">Instagram</a></li>
      <li><a href="https://x.com/" target="_blank" rel="noopener">X (Twitter)</a></li></ul></div>
  </div>
  <p class="copy">&copy; <?= date('Y') ?> TutorLink VUT <?= t('rights') ?></p>
</footer>
<button id="top" type="button" hidden><?= t('top') ?></button>
<script src="js/main.js"></script>
</body>
</html>
