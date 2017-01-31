
<!-- formulaire d'avis client -->
<div id="formAvis" class="hide">
    <h2>Votre avis nous intéresse</h2>
    <form class="" action="http://localhost/W-projectWF3/public/formAvis/" method="post">
      <label class="inf">&#9998;Informations :</label><br><hr>
      <label for="">Nom <span class="star">*</span></label>
      <input type="text" name="name" value="" placeholder="Nom"><br>
      <label for="">Prénom <span class="star">*</span></label>
      <input type="text" name="firstname" value="" placeholder="Prénom"><br>
      <label for="">Téléphone <span class="star">*</span></label>
      <input type="text" required="required" name="numberphone" value="" placeholder="Téléphone*"><br>
      <label for="">Email <span class="star">*</span></label>
      <input type="email" required="required" name="email" value="" placeholder="Email*"><br>
      <label for="">Message <span class="star">*</span></label>
      <textarea required="required" name="message" placeholder="Message*"></textarea><br>
      <input type="hidden" name="userId" value="">
      <input class="" type="submit" name="addMessage" value="Envoyer">
    </form>
    <p><span class="star">*</span> Champs obligatoires</p>
  </div>
