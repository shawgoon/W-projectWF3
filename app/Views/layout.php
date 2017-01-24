<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/table.css') ?>">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script
	src="http://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
	<script src="<?= $this->assetUrl('js/master.js') ?>"></script>
</head>
<body>
		<header>
			<section>
				<?= $this->section('header_content') ?>
			</section>
		</header>
		<div class="container">
		<div id="wrap"></div>

		<!-- formulaire d'inscription -->
		<div id="formSignup" class="hide">
		  <h2>Inscription</h2>
		  <form class="" action="#" method="post">
		    <label for="">Nom</label><br>
		    <input required="required" type="text" name="userName" value="">
		    <label for="">Prénom</label><br>
		    <input required="required" type="text" name="firstName" value="">
		    <label for="">N° de téléphone</label><br>
		    <input required="required" step="10" type="text" name="numberphone" value="">
		    <label for="">Email</label><br>
		    <input required="required" type="text" name="email" value="">
		    <label for="">Mot de passe</label>
		    <input required="required" type="password" name="password" value="">
		    <input type="submit" name="createUser" value="Valider">
		  </form>
		</div>

		<!-- formulaire de connexion -->
		<div id="formLogin" class="hide">
		  <h2>Connexion</h2>
		  <form class="" action="./login/" method="post">
		    <label for="">Votre identifiant</label><br>
		      <input required="required" type="text" name="numberphone" placeholder="Votre numéro de téléphone">
		    <label for="">Votre mot de passe</label><br>
		      <input required="required" type="password" name="password" placeholder="Votre mot de passe">
		    <input type="hidden" name="userId" value="">
		      <input type="submit" name="userName" value="connexion">
		  </form>
		</div>

		<?php //if (is_log()) { ?>
		<!-- formulaire de commamnde de trajet -->
		<div id="formItinerary" class="hide">
		  <form class="" action="#" method="post">
		      <select>
		          <option><< Selectionner >></option>
		          <option value="Commander">Immédiat</option>
		          <option value="Reserver">Réserver</option>
		      </select>
		    <h3>Lieu de départ</h3>
		      <label for="street">Rue :</label>
		      <input type="text" name="street" id="street" value=""><br>
		      <label for="town">Ville/Code Postal :</label>
		      <input type="text" name="town" id="town" value="">
		      <label>Date et heure</label>
		      <input type="datetime-local" name="date" value="">
		    <h3>Lieu d'arrivée</h3>
		      <label for="street">Rue :</label>
		      <input type="text" name="street" id="street" value=""><br>
		      <label for="town">Ville/Code Postal :</label>
		      <input type="text" name="town" id="town" value="">
		      <label>Date et heure</label>
		      <input type="datetime-local" name="date" value="">

		      <input type="submit" name="validItinerary"  value="Valider">
		  </form>
		</div>
		<?php //} else {
		  //echo '<h1>Vous devez vous connectez pour accéder à cette fonctionnalité !</h1>';
		 //} ?>
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
