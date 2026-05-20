<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alexis Orange — Portfolio MMI</title>
  <meta name="description" content="Portfolio d'Alexis Orange, étudiant MMI à l'IUT de Troyes.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600&family=Syne:wght@400;500;600;700;800&family=Syne+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>

<!-- Curseur personnalisé -->
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<?php $page = basename($_SERVER['PHP_SELF']); ?>

<!-- Navigation -->
<nav class="site-nav">
  <a href="index.php" class="nav-logo">
    <span class="logo-mark">AO</span>
    <span class="logo-text">Alexis Orange</span>
  </a>
  <ul class="nav-links">
    <li><a href="index.php"   class="<?= $page === 'index.php'   ? 'active' : '' ?>">Accueil</a></li>
    <li><a href="apropos.php" class="<?= $page === 'apropos.php' ? 'active' : '' ?>">À propos</a></li>
  </ul>
</nav>

<main>
