<?php //if (is_log()) { ?>

<!-- formulaire de commamnde de trajet -->
<div id="formItinerary" class="hide">
  <form class="" action="http://localhost/W-projectWF3/public/trajet/" method="post">
      <select>
          <option><< Selectionner >></option>
          <option value="Commander">Immédiat</option>
          <option value="Reserver">Réserver</option>
          <input type="hidden" name="choice" value="">
      </select>
      <hr>
    <h3>Lieu de départ</h3>
      <label for="street">Rue </label>
      <input type="text" name="street_start" required="required" value=""><br>
      <label for="town">Ville/Code Postal </label>
      <input type="text" name="town&zip_start" required="required" value="">
      <label>Date et heure</label>
      <input type="datetime-local" name="date_start" required="required" value="">
    <h3>Lieu d'arrivée</h3>
      <label for="street">Rue </label>
      <input type="text" name="street_end" required="required" value=""><br>
      <label for="town">Ville/Code Postal </label>
      <input type="text" name="town&zip_end" required="required" value="">
      <label>Date et heure</label>
      <input type="datetime-local" name="date_end" required="required" value="">

      <input type="submit" name="validItinerary"  value="Valider">
  </form>
</div>
<?php //} else {
  //echo '<h1>Vous devez vous connectez pour accéder à cette fonctionnalité !</h1>';
 //} ?>
