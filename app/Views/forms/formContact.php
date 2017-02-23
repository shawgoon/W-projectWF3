<!-- formulaire de contact -->
<div id="formContact" class="hide">
	<h2>Nous contacter</h2>
	<form action="http://localhost/taxi-dieppe/public/forms/formContact/" method="post">
      <label>Sujet <span class="star">*</span></label><br>
			<select name="choice">
				<option><< Selectionner >></option>
        <option value="Devis">Devis</option>
        <option value="Renseignements">Renseignements</option>
        <option value="Autre">Autre</option>
      </select><br>
      <hr>
      <label>Nom <span class="star">*</span></label><br>
      <input type="text" name="name" value="" placeholder="Nom"><br>
      <label>Prénom <span class="star">*</span></label><br>
      <input type="text" name="firstname" value="" placeholder="Prénom"><br>
      <label>Email <span class="star">*</span></label><br>
      <input type="text" name="email" value="" placeholder="Email"><br>
      <label>Téléphone <span class="star">*</span></label><br>
      <input type="text" step="10" name="phonenumber" value="" placeholder="Téléphone"><br>
      <label>Message <span class="star">*</span></label><br>
      <textarea name="message" placeholder="Votre Message"></textarea><br>
      <input type="submit" name="validInfo" value="Envoyer">
        <p><span class="star">*</span> Champs obligatoires</p>
    </form>
</div>
