<?php $pageTitle = 'Home'; include 'includes/header.php'; ?>
<section class="hero">
  <img src="images/hero-campus-study.svg" alt="Illustration of a study desk with a laptop and notes" class="hero-img">
  <div class="hero-text"><h1><?= t('h1') ?></h1><p><?= t('tag') ?></p>
    <p><a class="btn" href="#subjects"><?= t('cta1') ?></a> <a class="btn ghost" href="contact.php"><?= t('cta2') ?></a></p></div>
</section>
<section class="wrap"><h2><?= t('why') ?></h2>
  <ul class="cols">
    <li><h3><?= t('w1') ?></h3><p><?= t('w1d') ?></p></li>
    <li><h3><?= t('w2') ?></h3><p><?= t('w2d') ?></p></li>
    <li><h3><?= t('w3') ?></h3><p><?= t('w3d') ?></p></li>
  </ul></section>
<section class="wrap" id="subjects"><h2><?= t('sub_t') ?></h2>
  <div class="gallery">
    <figure><img src="images/subject-programming.svg" alt="Programming symbol" loading="lazy"><figcaption>Programming</figcaption></figure>
    <figure><img src="images/subject-maths.svg" alt="Pi symbol for mathematics" loading="lazy"><figcaption>Mathematics</figcaption></figure>
    <figure><img src="images/subject-accounting.svg" alt="Rand symbol for accounting" loading="lazy"><figcaption>Accounting</figcaption></figure>
  </div>
  <div class="filters"><input type="search" id="q" placeholder="<?= t('search') ?>" aria-label="<?= t('search') ?>">
    <button data-f="all" class="chip on"><?= t('all') ?></button><button data-f="online" class="chip"><?= t('online') ?></button><button data-f="campus" class="chip"><?= t('campus') ?></button></div>
  <div class="scroll-x"><table id="menu-table"><caption class="sr"><?= t('sub_t') ?></caption>
    <thead><tr><th><?= t('subject') ?></th><th><?= t('mode') ?></th><th><?= t('price') ?></th></tr></thead>
    <tbody>
      <tr data-t="online"><td>Programming 1</td><td><?= t('online') ?></td><td><span class="price">R70</span></td></tr>
      <tr data-t="campus"><td>Programming 2</td><td><?= t('campus') ?></td><td><span class="price">R80</span></td></tr>
      <tr data-t="online"><td>Mathematics 1</td><td><?= t('online') ?></td><td><span class="price">R60</span></td></tr>
      <tr data-t="campus"><td>Accounting 1</td><td><?= t('campus') ?></td><td><span class="price">R65</span></td></tr>
      <tr data-t="online"><td>Web Development</td><td><?= t('online') ?></td><td><span class="price">R80</span></td></tr>
    </tbody></table></div></section>
<section class="wrap alt"><blockquote><p>&ldquo;<?= t('quote') ?>&rdquo;</p><footer>&mdash; <cite><?= t('quote_by') ?></cite></footer></blockquote></section>
<section class="wrap"><h2><?= t('links') ?></h2>
  <ul class="links">
    <li><a href="https://www.vut.ac.za/" target="_blank" rel="noopener">Vaal University of Technology</a></li>
    <li><a href="https://www.khanacademy.org/" target="_blank" rel="noopener">Khan Academy</a></li>
    <li><a href="https://www.w3schools.com/" target="_blank" rel="noopener">W3Schools</a></li>
    <li><a href="https://developer.mozilla.org/" target="_blank" rel="noopener">MDN Web Docs</a></li>
  </ul></section>
<?php include 'includes/footer.php'; ?>
