<?php $this->layout('layout', ['title' => 'Accueil']) ?>
<?php $this->start('header_content') ?>
  <div class="title">Taxi-Dieppe</div>
<?php $this->stop('header_content') ?>

<!-- ******************** NAVBAR ******************** -->
<?php $this->start('nav_content') ?>
  <ul class="tabs">
    <li><a id="homePage" href="#" class="tab" title="accueil"><i class="fa fa-home" aria-hidden="true"></i></a></li>
    <?php if (($_SESSION) && ($_SESSION['user']['grad_id'] >= 1)) { ?>
      <li><a id="itinerary" href="#" class="tab">Réserver</a></li>
    <?php } ?>
    <li><a id="gpsPage" href="#" class="tab"><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
    <li><a id="contactPage" href="#" class="tab" title="nous contacter">Contact</a></li>
    <li><a id="satisfactionPage" href="#" class="tab" title="votre avis compte">Satisfaction clients</a></li>
    <?php if (($_SESSION) && ($_SESSION['user']['grad_id'] >= 1)) { ?>
      <li><a id="accountPage" href="#" class="tab" title="mon compte">Mon compte</a></li>
    <?php } ?>
    <?php if (($_SESSION) && ($_SESSION['user']['grad_id'] >= 3)) { ?>
      <li><a href="./admin/" class="tab" title="compte administrateur">Admin</a></li>
    <?php } ?>
    <li><a class="tab" href="https://www.twitter.com"title="vers notre twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a class="tab" href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
    <li><a class="tab" href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-google-plus" aria-hidden="true"></i></i></a></li>
  </ul>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>

<!-- ******************** ACCUEIL ******************** -->
  <div id="home" class="tab-content">
    <h1>Accueil</h1>
    <h3>Bienvenue sur le site des Taxis Dieppois</h3>
    <p class="geolocalisation_para">suivre la position de nos taxis,<br>
       cliquez ci-dessous !</p>
  </div>

  <!-- ******************** LOCALISATION ******************** -->
  <div id="gps" class="tab-content">
    <h1>Geolocalisation des Taxis</h1>
    <!-- bouton d'activation localisation d'utilisateur -->
  	<?php if (($_SESSION) && $_SESSION['user']['grad_id'] >= 2) { ?>
  	<div class="buttonLoc">
  	    <form name="ajax" method="post">
  	      <input id="localisation" class="activLoc" type="submit" name="" value="Activation">
  	    </form>
  	</div>
  	<?php } ?>
    <!-- La Google map -->
    <div id="map"></div>

    <p class="geolocalisation_para">Toutes les 2 minutes,</p>
    <p class="geolocalisation_para"> la carte s'actualise automatiquement </p>

    <!-- Le script essentiel au  bon fonctionnement NE PAS DEPLACER OU SUPPRIMER -->
    <script type="text/javascript">
    	setInterval(function () { window.location.reload(); }, 120000);
    	// Toutes les 2 minutes ont envoie la liste en json au script js
    	var listeTaxi = <?php echo json_encode($listeTaxi); ?>;
    	var actualisation = window.setInterval(jsonPost,120000);
    	function jsonPost(){
    		listeTaxi = <?php echo json_encode($listeTaxi); ?>;
    	}
    </script>
  </div>

  <!-- ******************** CONTACT ******************** -->
  <div id="contact" class="tab-content">
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
  		<p>Pour nous contacter, demander un devis ou tout autre demande <br>
        c'est <strong><a id="info" href="#" title="formulaire de contact">ICI</a></strong>.</p>
  	</div>
  </div>

  <!-- ******************** SATISFACTION ******************** -->
  <div id="satisfaction" class="tab-content">
    <h1>Satisfaction clientèle</h1>
    <div class="customReview">
      <?php \Controller\AvisController::avisUtilisateurs(); ?>
    </div>
    <a id="avis" class="avis" href="#">Laisser votre avis</a>
  </div>

  <!-- ******************** ACCOUNT ******************** -->
  <div id="account" class="tab-content">
    <h1>Mon compte</h1>
    <h2>Mes informations</h2>
    <h2>Modifier mes info</h2>
    <h2>modifier mon mdp</h2>
    <h2>mon domicile</h2>
    <h2>ma destination préférée</h2>
  </div>
<?php $this->stop('main_content') ?>

<?php $this->start('footer_content') ?>
  <ul>
    <div class="socialmedia">
      <div class="likefb">
				 <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FRadio-Taxi-Dieppe-630418987085765%2F%3Ffref%3Dts&width=450&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				 <a href="https://twitter.com/intent/tweet?screen_name=DieppeTaxi" class="twitter-mention-button" data-show-count="false">Tweet @DieppeTaxi</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	  	</div>
    </div>

  	<li><a href="./contact/"title="nous contacter">Mentions légales</a></li>
  	<li><a href="./contact/"title="nous contacter">Confidencialité</a></li>
  </ul>
<?php $this->stop('footer_content') ?>
