<!-- formulaire de connexion -->
<div id="formLogin" class="hide">
  <h2>Connexion</h2>
  <form class="" action="http://localhost/W-projectWF3/public/login/" method="post">
    <label for="">Votre identifiant</label><br>
      <input required="required" type="text" name="numberphone" placeholder="Votre numéro de téléphone">
    <label for="">Votre mot de passe</label><br>
      <input required="required" type="password" name="password" placeholder="Votre mot de passe">
      <?php if (isset($_POST['numberphone']) && isset($_POST['password'])) { ?>
    <input type="hidden" name="userId" value="<?php echo $user['id'] ?>">
      <?php } ?>
      <input type="submit" name="userName" value="connexion">
  </form>
</div>
