<!-- formulaire d'inscription -->
<div id="formSignup" class="hide">
  <h2>Inscription</h2>
  <form class="" action="http://localhost/W-projectWF3/public/signup/" method="post">
    <label for="">Nom</label><br>
    <input required="required" type="text" name="name" value="">
    <label for="">Prénom</label><br>
    <input required="required" type="text" name="firstname" value="">
    <label for="">N° de téléphone</label><br>
    <input required="required" step="10" type="text" name="numberphone" value="">
    <label for="">Email</label><br>
    <input required="required" type="text" name="email" value="">
    <label for="">Mot de passe</label>
    <input required="required" type="password" name="password" value="">
    <input type="submit" name="createUser" value="Valider">
  </form>
</div>
