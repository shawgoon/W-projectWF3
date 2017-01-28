<?php $this->layout('layout', ['title' => 'Avis'])
//  start session
// session_start();
 ?>
 <?php $this->start('header_content') ?>
 <div class="title">Taxi-Dieppe</div>

   <!-- affichage de session -->
   <div class="minititle">
   <span class="session">Bonjour, <?php echo $_SESSION['user']['firstname']; ?></span><br>
   <a class="logout" href="../logout/">Déconnexion</a>
 </div>
 <?php $this->stop('header_content') ?>

 <?php $this->start('nav_content') ?>
 	<a href="../account/">Accueil</a>
 	<a id="itinerary" href="#">Commander/Réserver</a>
 <?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
<?php //if (is_log()) { ?>


  <div class="customReview">
    <?php \Controller\AvisController::avisUtilisateurs(); ?>
  </div>
  <nav>
    <a id="avis" class="avis" href="#">Laisser votre avis</a>
  </nav>

<?php $this->stop('main_content') ?>

<?php $this->start('footer_content') ?>
<ul>
	<li><a href="https://www.twitter.com"title="vers notre twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	<li><a href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
	<li><a href="#"title="votre avis compte">Votre avis nous intéresse</a></li>
	<li><a href="../contact/"title="nous contacter">Contactez nous </a></li>
</ul>
<?php $this->stop('footer_content') ?>
