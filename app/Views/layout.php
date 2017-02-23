<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $this->e($title) ?></title>
<!-- les Assets CSS -->
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/table.css') ?>">
<!-- Le chargement de bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
<!-- Le chargement de jQuery -->
	<script
	src="http://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
<!-- Le chargement de Bootstrap JS -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
<!-- Le chargement de l'API Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2VTy4CLUElPDtIUEFmH3c_Yb_XNNsJ5w&callback=initMap"></script>
<!-- Les Assets JS -->
	<script src="<?= $this->assetUrl('js/gmap_localisation.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/form.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/master.js') ?>"></script>

</head>
<body>
	<div class="container">
		<header>
			<section>
				<?= $this->section('header_content') ?>
					<!-- affichage de session -->
			<?php if (!empty($_SESSION)) { ?>
				<!-- affichage privé -->
				<div class="minititle">
					<span class="session">Bonjour, <?php echo $_SESSION['user']['firstname']; ?></span><br>
					<a class="logout" href="http://localhost/taxi-dieppe/public/logout/"><i class="fa fa-power-off" aria-hidden="true"></i> Déconnexion</a>
				</div>
			<?php } else { ?>
				<!-- affichage public	 -->
				<div class="minititle">
					<a id="signup" href="#">Inscription</a>
					|
					<a id="login" href="#">Connexion</a>
				</div>
				<?php } ?>
			</section>
		</header>
		<div id="wrap"></div>
		<?php include ('forms/signup.php'); ?>
		<?php include ('forms/login.php'); ?>
		<?php include ('forms/trajet.php'); ?>
		<?php include ('forms/formContact.php') ?>
		<?php include ('forms/formAvis.php') ?>
		<?php include ('forms/gradUpdate.php') ?>
		<!-- bouton d'activation localisation d'utilisateur -->
  	<?php if (($_SESSION) && $_SESSION['user']['grad_id'] >= 2) {
  	//include ('forms/localisation.php');
  	 } ?>
		<nav>
			<section>
				<?= $this->section('nav_content') ?>
			</section>
		</nav>
		<main>
			<div class="back"></div>
			<section>
				<?= $this->section('main_content') ?>
			</section>
		</main>
		<aside>

		</aside>
		<footer>
			<section>
				<?= $this->section('footer_content') ?>
			</section>
		</footer>
	</div>
</body>
</html>
