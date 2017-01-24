<?php $this->layout('layout', ['title' => 'Trajet']) ?>

<?php $this->start('header_content') ?>
<div class="title">Taxi-Dieppe</div>

<!-- bouton administrateur -->
<div class="admin">
  <?php //if (is_admin()) { ?>
    <form class="" action="../admin/" method="post">
      <input  class="admin" type="submit" name="" value="Admin only">
    </form>
    <?php //} ?>
  </div>
  <!-- affichage de session -->
  <div class="minititle">
  <span class="session">Bonjour, <?php echo $_SESSION['user']['firstname']; ?></span><br>
  <a class="logout" href="./logout/">Déconnexion</a>
<?php	var_dump($_SESSION); ?>
</div>
<?php $this->stop('header_content') ?>

<?php $this->start('nav_content') ?>
	<a href="../account/">Accueil</a>
	<a id="itinerary" href="#">Commander/Réserver</a>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
<div id="wrap"></div>

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

<?php $this->stop('main_content') ?>
