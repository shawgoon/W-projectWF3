<?php $this->layout('layout', ['title' => 'Contact']) ?>
<?php $this->start('header_content') ?>
  <div class="title">Taxi-Dieppe</div>
<?php $this->stop('header_content') ?>

<?php $this->start('nav_content') ?>
<?php if (!empty($_SESSION)) { ?>
	<a href="../account/" title="retour à la page d'accueil">Accueil</a>
<?php } else { ?>
	<a href="../" title="retour à la page d'accueil">Accueil</a>
<?php } ?>
  <?php if (!empty($_SESSION)) { ?>
    <a id="itinerary" href="#" title="formulaire de commande">Commander/Réserver</a>
  <?php } else { ?>
    <a id="itinerary" href="../userOnly/" title="formulaire de commande">Commander/Réserver</a>
	<?php } ?>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>

<h1 class="white">Nous contacter</h1>
  <div class="contact">
    <h2>Taxi Dieppe</h2>
    <p>15 rue machin</p>
    <p>76 200 - Dieppe</p>
    <p>Service commercial : <br>
          Tel : 02 16 85 79 10 <br>
          Fax : 02 16 85 79 15</p>
    <p>Du lundi au vendredi <br>
          8h-12h/14h-18h</p>
  </div>
  <div class="customReviewContact">
    <?php \Controller\AvisController::avisUtilisateurs(); ?>
  </div>
	<div class="contact">
		<p>Pour nous contacter, demander un devis ou tout autre demande <br>
      c'est <strong><a id="contact" href="#" title="formulaire de contact">ICI</a></strong>.</p>
	</div>

<?php $this->stop('main_content') ?>

<?php $this->start('footer_content') ?>
<ul>
  <div class="socialmedia">
  	<li><a href="https://www.twitter.com"title="vers notre twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  	<li><a href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
  </div>
<?php if (!empty($_SESSION)) { ?>
	<li><a href="../avis/"title="votre avis compte">Votre avis nous intéresse</a></li>
<?php } else { ?>
	<li><a href="../userOnly/"title="votre avis compte">Votre avis nous intéresse</a></li>
<?php } ?>
	<li><a href="#"title="nous contacter">Contactez nous </a></li>
</ul>
<?php $this->stop('footer_content') ?>
