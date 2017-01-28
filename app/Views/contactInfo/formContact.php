<?php //page de redirection ?>
<!-- formulaire de contact -->
<div id="formContact" class="hide">
	<form action="http://localhost/W-projectWF3/public/formContact/" method="post">
      <label>Sujet <span class="star">*</span></label><br><hr>
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
      <input type="text" name="numberphone" value="" placeholder="Téléphone"><br>
      <label>Message <span class="star">*</span></label><br>
      <textarea name="message" placeholder="Votre Message"></textarea><br>
      <input type="submit" name="validInfo" value="Envoyer">
        <p>Les champs suivis d'un <span class="star">*</span> sont obligatoires</p>
    </form>
</div>
