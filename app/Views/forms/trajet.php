<!-- formulaire de commamnde de trajet -->
<div id="formItinerary" class="hide">
  <form class="" action="http://localhost/taxi-dieppe/public/trajet/" method="post">
      <select name="choice">
          <option><< Selectionner >></option>
          <option value="Immediat">Immédiat</option>
          <option value="Reserver">Réserver</option>
      </select>
      <hr>
    <h3>Lieu de départ</h3>
      <label for="street">Rue </label>
      <input type="text" name="street_start" required="required" value=""><br>
      <label for="town">Ville/Code Postal </label>
      <input type="text" name="town_zip_start" required="required" value="">
      <label>Date et heure</label>
      <input type="datetime-local" name="date_start" required="required" value="">
    <h3>Lieu d'arrivée</h3>
      <label for="street">Rue </label>
      <input type="text" name="street_end" required="required" value=""><br>
      <label for="town">Ville/Code Postal </label>
      <input type="text" name="town_zip_end" required="required" value="">
      <label>Date et heure</label>
      <input type="datetime-local" name="date_end" required="required" value="">

      <input type="submit" name="validItinerary"  value="Valider">
  </form>
</div>
