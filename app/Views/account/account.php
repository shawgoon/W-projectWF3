<?php $this->layout('layout', ['title' => 'Mon compte']) ?>
<?php $this->start('header_content') ?>

<div class="title">Taxi-Dieppe</div>
<?php
// $logSession = new AccountController();
// if ($logSession -> is_log()) { ?>

<!-- bouton administrateur -->
<div class="buttonAdmin">
  <?php
  // $adminSession = new AccountController();
  // if ($adminSession -> is_admin()) { ?>
    <form class="" action="../admin/" method="post">
      <input  class="admin" type="submit" name="" value="Admin only">
    </form>
    <?php //} ?>
  </div>
  <!-- affichage de session -->
  <div class="minititle">
  <span class="session">Bonjour, <?php echo $_SESSION['user']['firstname']; ?></span><br>
  <a class="logout" href="../logout/">Déconnexion</a>
  <?php var_dump($connected); ?>
<?php	var_dump($_SESSION); ?>
</div>
<?php //} ?>
<?php $this->stop('header_content') ?>


<?php $this->start('nav_content') ?>
	<a href="#">Accueil</a>
	<a id="itinerary" href="#">Commander/Réserver</a>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
	<h2><a href="#">Modifier mon compte</a></h2>

<<<<<<< HEAD
  <p class="geolocalisation_para">Pour suivre la position des taxis cliquez directement sur l'image</p>
  <a href="./localisation/"><img class="geolocalisation_img" src="assets/images/geolocalisation.jpg" alt="Geolocalisation Taxi"></a>
=======

	<h2><a href="#">Modifier mon compte</a></h2>

>>>>>>> ca1a899f8857a5bf1387455481742c0a7f001e20
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>

<?php $this->stop('main_content') ?>

<?php $this->start('footer_content') ?>
<ul>
	<li><a href="https://www.twitter.com"title="vers notre twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	<li><a href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
	<li><a href="../avis/"title="votre avis compte">Votre avis nous intéresse</a></li>
	<li><a href="../contact/"title="nous contacter">Contactez nous </a></li>
</ul>
<?php $this->stop('footer_content') ?>
