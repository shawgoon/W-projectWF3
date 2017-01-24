<?php $this->layout('layout', ['title' => 'Contact'])
//  start session
?>
<?php $this->start('header_content') ?>
<div class="title">Taxi-Dieppe</div>

<div class="minititle">
  <a id="signup" href="#">Inscription</a> |
  <a id="login" href="#">Connexion</a>
</div>
<?php $this->stop('header_content') ?>

<?php $this->start('nav_content') ?>
	<a href="../">Accueil</a>
	<a id="itinerary" href="#">Commander/Réserver</a>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
<?php //if (is_log()) { ?>

<!-- formulaire de contact -->
<div id="formContact" class="hide">
	<form action="#" method="post">
      <label>Sujet :<span class="star">*</span> </label>
			<select name="sujet">
				<option><< Selectionner >></option>
        <option value="Devis">Devis</option>
        <option value="Renseignements">Renseignements</option>
        <option value="Autre">Autre</option>
      </select><br>
      <label>Nom :<span class="star">*</span> </label><input type="text" name="" value="" placeholder="Prénom"><br>
      <label>Prénom :<span class="star">*</span> </label><input type="text" name="" value="" placeholder="Nom"><br>
      <label>Email :<span class="star">*</span> </label><input type="email" name="" value="" placeholder="Email"><br>
      <label>Téléphone : </label><input type="number" name="" value="" placeholder="Téléphone"><br>
      <label>Message :<span class="star">*</span> </label><textarea name="name" placeholder="Message"></textarea><br>
      <input type="submit" name="" value="Envoyer">
        <p>Les champs suivis d'un <span class="star">*</span> sont obligatoires</p>
    </form>
</div>

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
		<p>Pour nous contacter, demander un devis ou tout autre demande c'est <strong><a id="contact" href="#" title="formulaire de contact">ICI</a></strong>.</p>
	</div>

<?php $this->stop('main_content') ?>

<?php $this->start('footer_content') ?>
<ul>
	<li><a href="https://www.twitter.com"title="vers notre twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	<li><a href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
	<li><a href="../userOnly/"title="votre avis compte">Votre avis nous intéresse</a></li>
	<li><a href="#"title="nous contacter">Contactez nous </a></li>
</ul>
<?php $this->stop('footer_content') ?>
