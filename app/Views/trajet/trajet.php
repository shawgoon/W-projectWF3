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
