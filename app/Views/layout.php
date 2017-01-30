<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/table.css') ?>">
<!-- Le chargement de Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Le chargement de jQuery -->
	<script
	src="http://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
<!-- Le chargement de l'API Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2VTy4CLUElPDtIUEFmH3c_Yb_XNNsJ5w&callback=initMap"></script>
	<script src="<?= $this->assetUrl('js/master.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/gmap_localisation.js') ?>"></script>

</head>
<body>
	<div class="container">
		<header>
		<?php //$logSession = new AdminModel();
		 //if ($logSession -> is_log()) { ?>
		 <section>
			 <?= $this->section('header_content') ?>
		 </section>

					<!-- affichage de session -->
				  <!-- <div class="minititle">
				  <span class="session">Bonjour, <?php //echo $_SESSION['user']['firstname']; ?></span><br>
				  <a class="logout" href="../logout/">Déconnexion</a>
				  </div> -->
				<?php	//} else { ?>
					<!-- <div class="minititle">
						<a id="signup" href="#">Inscription</a> |
						<a id="login" href="#">Connexion</a>
					</div> -->
				<?php// } ?>
		</header>
		<div class="back"></div>
		<div id="wrap"></div>
		<?php include ('signup/signup.php'); ?>
		<?php include ('login/login.php'); ?>
		<?php include ('trajet/trajet.php'); ?>
		<?php include ('formContact/formContact.php') ?>
		<?php include ('formAvis/formAvis.php') ?>
		<main>
			<nav>
				<section>
					<?= $this->section('nav_content') ?>
				</section>
			</nav>
			<section>
				<?= $this->section('main_content') ?>
			</section>
		</main>
		<aside>
			<div class="likefb">
				 <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FRadio-Taxi-Dieppe-630418987085765%2F%3Ffref%3Dts&width=450&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
				 <a href="https://twitter.com/intent/tweet?screen_name=DieppeTaxi" class="twitter-mention-button" data-show-count="false">Tweet @DieppeTaxi</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	  	</div>
	  </aside>
		<footer>
			<section>
				<?= $this->section('footer_content') ?>
			</section>
		</footer>
	</div>
</body>
</html>
