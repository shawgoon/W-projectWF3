<?php $this->layout('layout', ['title' => 'Contact'])
//  start session
?>
<?php $this->start('header_content') ?>
<div class="title">Taxi-Dieppe</div>

<div class="minititle">
  <a id="signup" href="#">Inscription</a> |
  <a id="login" href="#">Connexion</a>
</div>
<?php $this->stop('header_content') ?>

<?php $this->start('nav_content') ?>
	<a href="../">Accueil</a>
	<a id="itinerary" href="../userOnly/">Commander/Réserver</a>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
<?php //if (is_log()) { ?>

	<h1>Nous contacter</h1>
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
	<div class="contact">
		<p>Pour nous contacter, demander un devis ou tout autre demande c'est <strong><a id="contact" href="#" title="formulaire de contact">ICI</a></strong>.</p>
	</div>

<?php $this->stop('main_content') ?>

<?php $this->start('footer_content') ?>
<ul>
	<li><a href="https://www.twitter.com"title="vers notre twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	<li><a href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
	<li><a href="../userOnly/"title="votre avis compte">Votre avis nous intéresse</a></li>
	<li><a href="#"title="nous contacter">Contactez nous </a></li>
</ul>
<?php $this->stop('footer_content') ?>
