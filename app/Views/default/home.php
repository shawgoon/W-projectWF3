<?php $this->layout('layout', ['title' => 'Accueil']) ?>
<?php $this->start('header_content') ?>
  <div class="title">Taxi-Dieppe</div>
<?php $this->stop('header_content') ?>

<?php $this->start('nav_content') ?>
	<a href="#">Accueil</a>
	<a id="itinerary" href="./userOnly/">Commander/Réserver</a>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
	<p class="geolocalisation_para">suivre la position de nos taxis, cliquez ci-dessous !</p>
	<a class="geolocalisation_lien" href="./userOnly/"><img class="geolocalisation_img" src="http://localhost/W-projectWF3/public/assets/images/geolocalisation.jpg" alt="Geolocalisation Taxi"></a>
<?php $this->stop('main_content') ?>

<?php $this->start('footer_content') ?>
<ul>
  <div class="socialmedia">
  	<li><a href="https://www.twitter.com"title="vers notre twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  	<li><a href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
  </div>
	<li><a href="./userOnly/"title="votre avis compte">Votre avis nous intéresse</a></li>
	<li><a href="./contact/"title="nous contacter">Contactez nous </a></li>
</ul>
<?php $this->stop('footer_content') ?>
