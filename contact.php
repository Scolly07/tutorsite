<?php
$pageTitle = 'Contact'; include 'includes/header.php';
$errors = []; $sent = false; $v = ['name'=>'','email'=>'','message'=>''];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  foreach ($v as $k => $_) { $v[$k] = trim(strip_tags($_POST[$k] ?? '')); }
  if (strlen($v['name']) < 2) $errors['name'] = true;
  if (!filter_var($v['email'], FILTER_VALIDATE_EMAIL)) $errors['email'] = true;
  if (strlen($v['message']) < 10) $errors['message'] = true;
  if (!$errors) {
    $line = date('c') . " | {$v['name']} | {$v['email']} | " . str_replace(["\r","\n"], ' ', $v['message']) . PHP_EOL;
    file_put_contents(__DIR__ . '/messages.log', $line, FILE_APPEND | LOCK_EX); // use mail() on a live server
    $sent = true; $v = ['name'=>'','email'=>'','message'=>''];
  }
}
?>
<section class="wrap"><h1><?= t('contact_h1') ?></h1>
  <?php if ($sent): ?><p class="notice ok" role="status"><?= t('ok') ?></p><?php elseif ($errors): ?><p class="notice bad" role="alert"><?= t('err') ?></p><?php endif; ?>
  <form method="post" action="contact.php" id="contact-form" novalidate>
    <label for="name"><?= t('fname') ?></label><input id="name" name="name" required value="<?= htmlspecialchars($v['name']) ?>" class="<?= isset($errors['name'])?'invalid':'' ?>">
    <label for="email"><?= t('email') ?></label><input id="email" name="email" type="email" required value="<?= htmlspecialchars($v['email']) ?>" class="<?= isset($errors['email'])?'invalid':'' ?>">
    <label for="message"><?= t('msg') ?></label><textarea id="message" name="message" rows="5" required class="<?= isset($errors['message'])?'invalid':'' ?>"><?= htmlspecialchars($v['message']) ?></textarea>
    <button class="btn" type="submit"><?= t('send') ?></button>
  </form>
  <h2 id="hours"><?= t("hours") ?></h2>
  <div class="scroll-x"><table><tbody><tr><th>Mon&ndash;Thu</th><td>16:00 &ndash; 20:00</td></tr><tr><th>Sat</th><td>09:00 &ndash; 14:00</td></tr><tr><th>Fri/Sun</th><td>Online only</td></tr></tbody></table></div>
  <h2><?= t('find') ?></h2>
  <iframe title="Map of Vanderbijlpark campus area" loading="lazy" class="map" src="https://www.openstreetmap.org/export/embed.html?bbox=27.76%2C-26.72%2C27.86%2C-26.67&amp;layer=mapnik"></iframe></section>
<?php include 'includes/footer.php'; ?>
