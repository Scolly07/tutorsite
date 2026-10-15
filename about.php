<?php $pageTitle = 'About'; include 'includes/header.php'; ?>
<section class="wrap"><h1><?= t('about_h1') ?></h1><p class="lead"><?= t('about_p') ?></p>
  <h2><?= t('mission') ?></h2><ol><li><?= t('m1') ?></li><li><?= t('m2') ?></li><li><?= t('m3') ?></li></ol>
  <h2><?= t('team') ?></h2>
  <div class="scroll-x"><table><thead><tr><th><?= t('name') ?></th><th><?= t('spec') ?></th></tr></thead>
    <tbody><tr><td>Thabo M.</td><td>Programming, Databases</td></tr><tr><td>Zanele K.</td><td>Mathematics</td></tr><tr><td>Pieter V.</td><td>Accounting</td></tr></tbody></table></div>
  <h2><?= t('faq') ?></h2>
  <details><summary><?= t('faq1') ?></summary><p><?= t('faq1a') ?></p></details>
  <details><summary><?= t('faq2') ?></summary><p><?= t('faq2a') ?></p></details>
  <p>Since <time datetime="2025-02-01">February 2025</time>.</p></section>
<?php include 'includes/footer.php'; ?>
