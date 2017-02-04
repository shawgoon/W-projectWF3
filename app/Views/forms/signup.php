<!-- formulaire d'inscription -->
<div id="formSignup" class="hide">
  <h2>Inscription</h2>
  <form class="" action="http://localhost/W-projectWF3/public/forms/signup/" method="post">
    <label for="">Nom <span class="star">*</span></label><br>
    <input required="required" type="text" name="name" value="">
    <label for="">Prénom <span class="star">*</span></label><br>
    <input required="required" type="text" name="firstname" value="">
    <label for="">N° de téléphone <span class="star">*</span></label><br>
    <input required="required" step="10" type="text" name="phonenumber" value="">
    <label for="">Email <span class="star">*</span></label><br>
    <input required="required" type="text" name="email" value="">
    <label for="">Mot de passe <span class="star">*</span></label>
    <input required="required" type="password" name="password" value="">
    <label for="">Confimation Mot de passe <span class="star">*</span></label>
    <input required="required" type="password" name="confirmPassword" value="">
    <?php //if (isset($_POST['password']) === ($_POST['confirmPassword'])) { ?>
      <!-- <input type="hidden" name="ValidPassword" value=""> -->
    <?php //} ?>
    <input type="submit" name="createUser" value="Valider">
  </form>
  <p>Tous les champs <span class="star">* </span>sont requis</p>
</div>
