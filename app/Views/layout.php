<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script
	src="http://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
	<script src="<?= $this->assetUrl('js/master.js') ?>"></script>
</head>
<body>
	<div class="container">
		<header>
			<div class="title">Taxi-Dieppe</div>
			<?php
		if (isset($_POST['userName']) /* && is_log()*/) { ?>
        <div class="minititle">
        <span class="session">Bonjour, <?php echo $_SESSION['user']['userName']; ?></span><br>
        <a class="logout" href="#">Déconnexion</a>
      </div>
      <?php } else { ?>
        <div class="minititle">
          <a id="signup" href="#">Inscription</a> |
          <a id="login" href="#">Connexion</a>
        </div>
      <?php  }?>
		</header>
		<div id="wrap"></div>
		<main>

			<!-- formulaire d'inscrition -->
			<div id="formSignup" class="hide">
			  <h2>Inscription</h2>
			  <form class="" action="/signup.php" method="post">
			    <label for="">Nom</label><br>
			    <input required="required" type="text" name="userName" value="">
			    <label for="">Prénom</label><br>
			    <input required="required" type="text" name="firstName" value="">
			    <label for="">N° de portable</label><br>
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
			  <form class="" action="#" method="post">
			    <label for="">Votre identifiant</label><br>
			      <input required="required" type="text" name="numberphone" placeholder="Votre numéro de portable">
			    <label for="">Votre mot de passe</label><br>
			      <input required="required" type="password" name="password" placeholder="Votre nom de passe">
			    <input type="hidden" name="userId" value="">
			      <input type="submit" name="userName" value="connexion">
			  </form>
			</div>


			<!-- formulaire de commamnde de trajet -->
			<div id="formItinerary" class="hide">
        <form action="#" method="post">
            <select>
                <option><< Selectionner >></option>
                <option value="Commander">Commander</option>
                <option value="Reserver">Réserver</option>
            </select>
          <h3>Lieu de départ</h3>
            <label for="street">Rue :</label>
            <input type="text" name="street" id="street" value=""><br>
            <label for="town">Ville/Code Postal :</label>
            <input type="text" name="town" id="town" value="">
            <input type="text" name="zip" id="zip" value="">
          <h3>Lieu d'arrivée</h3>
            <label for="street">Rue :</label>
            <input type="text" name="street" id="street" value=""><br>
            <label for="town">Ville/Code Postal :</label>
            <input type="text" name="town" id="town" value="">
            <input type="text" name="zip" id="zip" value="">
          <h3>Date et heure</h3>
            <input type="datetime-local" name="date" value="">
            <input type="submit" name="validItinerary"  value="Valider">
        </form>
			</div>

				<nav>
					<a href="../">Accueil</a>
					<a id="itinerary" href="#">Commander/Réserver</a>
					<!-- <a id="itinerary" href="#">Réserver</a> -->
				</nav>

			<section>
				<?= $this->section('main_content') ?>
			</section>
		</main>
		<footer>
			<ul>
				<li><a href="https://www.twitter.com"title="vers notre twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
				<li><a href="./avis/"title="votre avis compte">Votre avis nous intéresse</a></li>
				<li><a href="./contact/"title="nous contacter">Contactez nous </a></li>
			</ul>
		</footer>
	</div>
</body>
</html>
