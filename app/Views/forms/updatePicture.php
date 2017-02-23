<!-- formulaire de modification d'image de font d'écran déroulant -->
<form class="" action="http://localhost/taxi-dieppe/public/forms/updatePicture/" method="post">
  <input type="files" name="" value="choisir un fichier">
  <button type="submit" name="pictureUpdate">
    <input type="hidden" name="pictureId" value="<?php //echo $$picture[$i]['id']; ?>">
    <i class="fa fa-trash"></i>
  </button>
</form>
