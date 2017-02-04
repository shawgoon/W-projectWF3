<?php if (empty($_SESSION)) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page !!!</h4>');}; ?>
<?php $this->layout('layout', ['title' => 'Geolocalisation des taxis']) ?>

<?php $this->start('header_content') ?>
	<div class="title">Taxi-Dieppe</div>
	<!-- bouton d'activation localisation d'utilisateur -->
	<?php if ($_SESSION['user']['grad_id'] >= 2) { ?>
	<div class="buttonLoc">
	    <form name="ajax" method="post">
	      <input id="localisation" class="activLoc" type="submit" name="" value="Activation">
	    </form>
	</div>
	<?php } ?>
<?php $this->stop('header_content') ?>

<?php $this->start('nav_content') ?>
	<a href="../account/">Accueil</a>
	<a id="itinerary" href="#">Commander/Réserver</a>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>

<h2 class="h2geo">Geolocalisation des Taxis</h2>

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
