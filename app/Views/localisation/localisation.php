<?php $this->layout('layout', ['title' => 'Geolocalisation des taxis']) ?>

<?php $this->start('header_content') ?>
	<div class="title">Taxi-Dieppe</div>
  <!-- affichage de session -->
  <div class="minititle">
  <span class="session">Bonjour, <?php echo $_SESSION['user']['firstname']; ?></span><br>
  <a class="logout" href="./logout/">Déconnexion</a>
<?php	var_dump($_SESSION); ?>
</div>
<?php $this->stop('header_content') ?>

<?php $this->start('nav_content') ?>
	<a href="../">Accueil</a>
	<a id="itinerary" href="./userOnly/">Commander/Réserver</a>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>

<h2 class="h2geo">Geolocalisation des Taxis</h2>

<!-- La Google map -->
<div id="map"></div>

<p class="geolocalisation_para">La map s'actualise automatiquement toutes les 2 minutes</p>

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
	<li><a href="https://www.twitter.com"title="vers notre twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	<li><a href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
	<li><a href="./userOnly/"title="votre avis compte">Votre avis nous intéresse</a></li>
	<li><a href="./contact/"title="nous contacter">Contactez nous </a></li>
</ul>
<?php $this->stop('footer_content') ?>
