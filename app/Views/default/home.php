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
    <li><a id="gpsPage" href="#" class="tab"><i class="fa fa-map-marker" aria-hidden="true" title="carte de localisation"></i></a></li>
    <li><a id="contactPage" href="#" class="tab" title="nous contacter">Contact</a></li>
    <li><a id="satisfactionPage" href="#" class="tab" title="votre avis compte">Satisfaction clients</a></li>
    <?php if (($_SESSION) && ($_SESSION['user']['grad_id'] > 0)) { ?>
      <li><a id="accountPage" href="#" class="tab" title="mon compte">Mon compte</a></li>
    <?php } ?>
    <?php if (($_SESSION) && ($_SESSION['user']['grad_id'] >= 3)) { ?>
      <li><a href="./admin/" class="tab" title="compte administrateur">Admin</a></li>
    <?php } ?>
    <li><a class="tab" href="https://www.twitter.com"title="vers notre twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a class="tab" href="https://www.facebook.com"title="vers notre facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
    <li><a class="tab" href="https://www.google.com"title="vers notre google +"> <i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
  </ul>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
<a href="../docs/tuto/">doc-tuto</a>
<!-- ******************** ACCUEIL ******************** -->
  <div id="home" class="tab-content">
    <h1 class="section">Accueil</h1>

    <div class="accueil"><p class="one">Bienvenue sur le site des Taxis Dieppois !</p>
    <p class="two">Suivre la position de nos taxis <strong>en direct</strong>, <br>
      connectez-vous et
       cliquez sur <!-- i class="fa fa-map-marker" aria-hidden="true" --> dans la bar de navigation !</p>
     </div>
     <div class="pub">
       <p class="three">Ici votre pub du moment</p>
     </div>
  </div>

<!-- ******************** LOCALISATION ******************** -->
  <div id="gps" class="tab-content">
    <h1 class="section">Localisation des Taxis</h1>
  	<?php if (($_SESSION) && $_SESSION['user']['grad_id'] >= 2) {
  	include ('http://localhost/taxi-dieppe/public/forms/localisation/');
  	 } ?>

    <!-- La Google map -->
    <div id="map"></div>

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
    <h1 class="section">Nous contacter</h1>
    <div class="contact">
      <h2 class="one">Taxi Dieppe</h2>
      <p class="two">15 rue machin</p>
      <p class="two">76 200 - Dieppe</p>
      <p class="two">Service commercial : <br>
            Tel : 02 16 85 79 10 <br>
            Fax : 02 16 85 79 15</p>
      <p class="two">Du lundi au vendredi <br>
            8h-12h/14h-18h</p>
    </div>

  	<div class="form-contact">
  		<p class="two">Pour tous renseignements, <br>
        un devis ou tout autre demande<br>
        c'est <a id="info" href="#" title="formulaire de contact"><strong>ICI</strong></a>.</p>
    </div>
  </div>

<!-- ******************** SATISFACTION ******************** -->
  <div id="satisfaction" class="tab-content">
    <h1 class="section">Satisfaction clientèle</h1>
    <div class="customReview">
    <?php for ($i=0; $i<count($listeAvis); $i++){
            $id = $listeAvis[$i]['id'];
            $userId = $listeAvis[$i]['user_id'];
    				$firstname = $listeAvis[$i]['firstname'];
            $name = $listeAvis[$i]['name'];
            $message = $listeAvis[$i]['message'];
            $note = $listeAvis[$i]['notation']; ?>

            <p class="two"><?php echo $firstname ?>
            <span class="one"><?php echo $name ?></span></p>
            <p class="three"><?php echo $message ?></p>
            <p><?php echo $note ?></p>
            <div class="notes">
              <ul class="notes-echelle">
                <li>
                  <label for="note01" title="Note&nbsp;: 1 sur 5">1</label>
                  <input type="radio" name="" id="note01" value="1" />
                </li>
                <li>
                  <label for="note02" title="Note&nbsp;: 2 sur 5">2</label>
                  <input type="radio" name="" id="note02" value="2" />
                </li>
                <li>
                  <label for="note03" title="Note&nbsp;: 3 sur 5">3</label>
                  <input type="radio" name="" id="note03" value="3" />
                </li>
                <li>
                  <label for="note04" title="Note&nbsp;: 4 sur 5">4</label>
                  <input type="radio" name="" id="note04" value="4" />
                </li>
                <li>
                  <label for="note05" title="Note&nbsp;: 5 sur 5">5</label>
                  <input type="radio" name="" id="note05" value="5" />
                </li>
              </ul>
            </div>
          <?php } ?>
    </div>
    <div class="formavis">
        <?php if (($_SESSION) && ($_SESSION['user']['grad_id'] >= 1)) { ?>
      <a id="avis" class="avis" href="#">Laisser votre avis</a>
      <?php } else { ?>
        <a class="avis">Laisser votre avis</a>
    <?php } ?>
    </div>
  </div>

<!-- ******************** ACCOUNT ******************** -->
  <div id="account" class="tab-content">
    <h1 class="section">Mon compte</h1>
    <?php for ($i=0; $i < count($userSession); $i++) { ?>
    <div class="range">
      <div class="my_info">
        <h2>Mes informations</h2>
        <p><?php echo($userSession[$i]['name']); ?></p>
        <p><?php echo($userSession[$i]['firstname']); ?></p>
        <p><?php echo($userSession[$i]['phonenumber']); ?></p>
        <p><?php echo($userSession[$i]['email']); ?></p>
        <input id="signup" href="#" type="submit" value="Modifier mes infos">
      </div>
      <div class="my_info">
        <h2>Modifier mon mdp</h2>
        <form class="" action="" method="post">
          <label for="">Ancien mot de passe <span class="star">*</span></label>
          <input required="required" type="password" name="password" value="">
          <label for="">Nouveau mot de passe <span class="star">*</span></label>
          <input required="required" type="password" name="password" value="">
          <label for="">Confirmer mot de passe <span class="star">*</span></label>
          <input required="required" type="password" name="confirmPassword" value="">
          <input type="submit" name="changePass" value="Modifier">
        </form>
      </div>
    </div>
    <div class="range">
      <div class="my_info">
        <h2>Mon domicile</h2>
          <label for="">N° et Rue :</label><br>
          <p><?php echo ($userSession[$i]['my_address']); ?></p>
          <label for="">Code Postal :</label><br>
          <p><?php echo ($userSession[$i]['my_zip']); ?></p>
          <label for="">Ville :</label><br>
          <p><?php echo ($userSession[$i]['my_town']); ?></p>
      </div>
      <div class="my_info">
        <h2>Ma destination préférée</h2>
        <label for="">N° et Rue :</label><br>
        <p><?php echo ($userSession[$i]['my_best_address']); ?></p>
        <label for="">Code Postal :</label><br>
        <p><?php echo ($userSession[$i]['my_best_zip']); ?></p>
        <label for="">Ville :</label><br>
        <p><?php echo ($userSession[$i]['my_best_town']); ?></p>
      </div>
      <?php } ?>
    </div>
  </div>
<?php $this->stop('main_content') ?>

<?php $this->start('footer_content') ?>
  <div class="socialmedia">
    <div class="likefb">
      <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FRadio-Taxi-Dieppe-630418987085765%2F%3Ffref%3Dts&width=450&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
      <a href="https://twitter.com/intent/tweet?screen_name=DieppeTaxi" class="twitter-mention-button" data-show-count="false">Tweet @DieppeTaxi</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
  <ul>
  	<li><a href="./contact/"title="nous contacter">Mentions légales</a></li>
  	<li><a href="./contact/"title="nous contacter">Confidencialité</a></li>
  </ul>
<?php $this->stop('footer_content') ?>
