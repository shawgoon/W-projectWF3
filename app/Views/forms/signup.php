<!-- formulaire d'inscription -->
<div id="formSignup" class="hide">
  <?php if (!empty($_SESSION['user'])) { ?>
    <h2>Modification</h2>
  <?php } else { ?>
    <h2>Inscription</h2>
  <?php } ?>
  <?php //for ($i=0; $i < count($users); $i++) { ?>
  <form class="" action="http://localhost/taxi-dieppe/public/forms/signup/" method="post">
    <label for="">Nom <span class="star">*</span></label><br>
    <input required="required" type="text" name="name" value="<?php if (!empty($_SESSION)) {echo $_SESSION['user']['name'];} ?>">
    <label for="">Prénom <span class="star">*</span></label><br>
    <input required="required" type="text" name="firstname" value="<?php if (!empty($_SESSION)) {echo $_SESSION['user']['firstname'];} ?>">
    <label for="">N° de téléphone <span class="star">*</span></label><br>
    <input required="required" step="10" type="text" name="phonenumber" value="<?php if (!empty($_SESSION)) {echo $_SESSION['user']['phonenumber'];} ?>">
    <label for="">Email <span class="star">*</span></label><br>
    <input required="required" type="text" name="email" value="<?php if (!empty($_SESSION)) {echo $_SESSION['user']['email'];} ?>">
    <input  type="hidden" name="grad_id" value="<?php if (!empty($_SESSION)) {echo $_SESSION['user']['grad_id'];} ?>">
  <?php if (empty($_SESSION['user']) || isset($_POST['changePass'])) {?>
    <label for="">Mot de passe <span class="star">*</span></label>
    <input required="required" type="password" name="password" value="">
    <label for="">Confirmation Mot de passe <span class="star">*</span></label>
    <input required="required" type="password" name="confirmPassword" value="">
  <?php } else { ?>
  <?php } ?>
    <?php //if (isset($_POST['password']) === ($_POST['confirmPassword'])) { ?>
      <!-- <input type="hidden" name="ValidPassword" value=""> -->
    <?php //} ?>
    <?php if (!empty($_SESSION['user'])) { ?>
      <hr>
        <label for="">N° et Rue</label><br>
        <input type="text" name="my_address" value="<?php echo $_SESSION['user']['my_address']; ?>">
        <label for="">Code Postal</label><br>
        <input type="text" name="my_zip" value="<?php echo $_SESSION['user']['my_zip']; ?>">
        <label for="">Ville</label><br>
        <input type="text" name="my_town" value="<?php echo $_SESSION['user']['my_town']; ?>">
      <hr>
        <label for="">N° et Rue</label><br>
        <input type="text" name="my_best_address" value="<?php echo $_SESSION['user']['my_best_address']; ?>">
        <label for="">Code Postal</label><br>
        <input type="text" name="my_best_zip" value="<?php echo $_SESSION['user']['my_best_zip']; ?>">
        <label for="">Ville</label><br>
        <input type="text" name="my_best_town" value="<?php echo $_SESSION['user']['my_best_town']; ?>">
      <hr>
        <?php if (!empty($_SESSION['user']['id'] < 3)) { ?>
          <label for="">Droits de l'utilisateur</label><br>
            <select name="grad_id" value=""><br>
              <option value=""><<-- Selectionnez -->></option>
              <option value="0">Bannis</option>
              <option value="1">Client</option>
              <option value="2">Chauffeur</option>
              <option value="3">Administrateur</option>
              <option value="4">Master</option>
            </select>
      <hr>
      <?php  } ?>
      <input type="hidden" name="userId"  value="<?php echo $_SESSION['user']['id']; ?>"><br>
      <input type="submit" name="userUpdate" value="Modifier">

    <?php } else { ?>
      <input type="submit" name="createUser" value="Valider">
    <?php } ?>
  </form>
  <?php //} ?>
  <p>Tous les champs <span class="star">* </span>sont requis</p>
</div>
