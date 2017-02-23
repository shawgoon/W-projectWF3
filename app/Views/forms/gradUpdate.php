<!-- formulaire de modification du grade utilisateur -->
  <div id="formGrad" class="hide">
    <?php var_dump($user); ?>
    <h2>Modification du grade</h2>
    <form class="" action="http://localhost/taxi-dieppe/public/forms/gradUpdate/" method="post">    
      <?php for ($i=0; $i < count($user); $i++) { ?>
      <label for="">Nom <span class="star">*</span></label><br>
      <input required="required" type="text" name="name" value="<?php echo $user[$i]['name']; ?>">
      <label for="">Prénom <span class="star">*</span></label><br>
      <input required="required" type="text" name="firstname" value="<?php echo $user[$i]['firstname']; ?>">
      <label for="">Droits de l'utilisateur</label><br>
        <select name="grad_id" value=""><br>
          <option value=""><<-- Selectionnez -->></option>
          <option value="0">Bannis</option>
          <option value="1">Client</option>
          <option value="2">Chauffeur</option>
          <option value="3">Administrateur</option>
          <option value="4">Master</option>
        </select>
      <input type="hidden" name="userId"  value="<?php echo $user[$i]['id']; ?>"><br><hr>
      <input type="submit" name="updateGrad" value="Modifier">
      <?php } ?>
    </form>
  </div>
