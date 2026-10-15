<?php require_once __DIR__ . '/lang.php'; $page = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $pageTitle ?? 'TutorLink VUT' ?> | TutorLink VUT</title>
<meta name="description" content="Peer tutoring for Vaal University of Technology students.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@600;700&family=Source+Sans+3:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/logo-tutorlink.svg" type="image/svg+xml">
</head>
<body>
<a class="skip" href="#main"><?= t('skip') ?></a>
<header class="site-header">
  <a class="logo" href="index.php" aria-label="TutorLink home"><img src="images/logo-tutorlink.svg" alt="" width="40" height="40"><span>Tutor<span class="accent">Link</span></span></a>
  <button class="nav-toggle" aria-label="Menu" aria-expanded="false" aria-controls="nav">&#9776;</button>
  <nav id="nav" class="nav">
    <ul>
      <li><a href="index.php" class="<?= $page=='index.php'?'active':'' ?>"><?= t('home') ?></a></li>
      <li class="has-drop"><a href="index.php#subjects"><?= t('subjects') ?> &#9662;</a>
        <ul class="drop"><li><a href="index.php#subjects"><?= t('subjects') ?></a></li><li><a href="contact.php"><?= t('book') ?></a></li><li><a href="contact.php#hours"><?= t('hours') ?></a></li></ul></li>
      <li><a href="about.php" class="<?= $page=='about.php'?'active':'' ?>"><?= t('about') ?></a></li>
      <li><a href="contact.php" class="<?= $page=='contact.php'?'active':'' ?>"><?= t('contact') ?></a></li>
      <li class="tools"><a href="?lang=en" class="<?= $lang=='en'?'on':'' ?>">EN</a><a href="?lang=af" class="<?= $lang=='af'?'on':'' ?>">AF</a>
        <button id="theme" type="button"><?= t('dark') ?></button></li>
    </ul>
  </nav>
</header>
<main id="main">
