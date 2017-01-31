<?php if (empty($_SESSION)) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page !!!</h4>');}; ?>
<?php $this->layout('layout', ['title' => 'Mon compte']) ?>

<?php $this->start('header_content') ?>
  <div class="title">Taxi-Dieppe</div>
  <!-- bouton administrateur -->
  <?php
  if ($_SESSION['user']['grad_Id'] >= 3) { ?>
<div class="buttonAdmin">
    <form class="formAdmin" action="../admin/" method="post">
      <input  class="admin" type="submit" name="" value="Admin only">
    </form>
  </div>
  <?php } ?>

<?php $this->stop('header_content') ?>


<?php $this->start('nav_content') ?>
	<a href="#">Accueil</a>
	<a id="itinerary" href="#">Commander/Réserver</a>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
	<h2><a href="#">Modifier mon compte</a></h2>

  <p class="geolocalisation_para">suivre la position de nos taxis,<br>
     cliquez ci-dessous !</p>
  <a class="geolocalisation_lien" href="../localisation/"><img class="geolocalisation_img" src="http://localhost/W-projectWF3/public/assets/images/geolocalisation.jpg" alt="Geolocalisation Taxi"></a>
<?php $this->stop('main_content') ?>

<?php $this->start('footer_content') ?>
<ul>
  <div class="socialmedia">
  	<li><a href="https://www.twitter.com"title="vers notre twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  	<li><a href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
  </div>
	<li><a href="../avis/"title="votre avis compte">Votre avis nous intéresse</a></li>
	<li><a href="../contact/"title="nous contacter">Contactez nous </a></li>
</ul>
<?php $this->stop('footer_content') ?>
