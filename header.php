<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio — Alexis Orange</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>

<?php $page = basename($_SERVER['PHP_SELF']); ?>

<nav>
  <a href="index.php" class="logo">Alexis Orange</a>
  <ul>
    <li><a href="index.php"   class="<?= $page === 'index.php'   ? 'active' : '' ?>">Accueil</a></li>
    <li><a href="apropos.php" class="<?= $page === 'apropos.php' ? 'active' : '' ?>">À propos</a></li>
    <li><a href="seance09.php" class="<?= $page === 'seance09.php' ? 'active' : '' ?>">La séance 09 : GIT</a></li>
  </ul>
</nav>

<main>
