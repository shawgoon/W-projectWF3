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

<!-- formulaire d'avis client -->
<div id="formAvis" class="hide">
    <h2>Votre avis nous intéresse</h2>
    <form class="" action="http://localhost/W-projectWF3/public/customer/" method="post">
      <label class="inf">&#9998;Informations :</label><br>
      <input type="text" name="" value="" placeholder="Nom*"><br>
      <input type="text" name="" value="" placeholder="Prénom*"><br>
      <input type="text" required="required" name="" value="" placeholder="Téléphone*"><br>
      <input type="email" required="required" name="" value="" placeholder="Email*"><br>
      <textarea required="required" name="message" placeholder="Message*"></textarea><br>
      <input class="" type="submit" name="addMessage" value="Envoyer">
    </form>
    <p>*Champs devant obligatoirement être renseignés</p>
  </div>
  <div class="customReview">
    <?php  ?>
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
