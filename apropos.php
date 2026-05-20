<?php include 'header.php'; ?>

<h1>À propos de moi</h1>

<p>Je suis passionné par le développement web et j'aime créer des sites modernes et interactifs.</p>

<div class="info-card">
  <p><span>Nom :</span> Orange Alexis</p>
  <p><span>Identifiant :</span> mmi25g08</p>
  <p><span>Groupe :</span> TPG</p>
  <p><span>Formation :</span> MMI — IUT de Troyes</p>
</div>

<h2>Compétences</h2>
<ul class="skills">
  <li>HTML</li>
  <li>CSS</li>
  <li>JavaScript</li>
  <li>PHP</li>
  <li>Design web</li>
  <li>Git</li>
</ul>

<h2>Mise en lignes</h2>
<ul class="skills">
  <!-- affichage de l'heure de mise en ligne -->
  <li>Dernière mise à jour : <?= date('d/m/Y H:i:s') ?></li>
  <li>20/05/2026 date de la mise en fonction de cette fonction à 11H18</li>
</ul>

<?php include 'footer.php'; ?>
