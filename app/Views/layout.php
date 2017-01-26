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
			<section>
				<?= $this->section('header_content') ?>
			</section>
		</header>
		<div id="wrap"></div>
		<?php include('signup/signup.php'); ?>
		<?php include('login/login.php'); ?>
		<?php include('trajet/trajet.php'); ?>
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
		<footer>
			<section>
				<?= $this->section('footer_content') ?>
			</section>
		</footer>
	</div>
</body>
</html>
