<!-- formulaire d'effacement des avis de satistaction clients -->
<form class="" action="http://localhost/taxi-dieppe/public/forms/deleteQuality/" method="post">
  <button type="submit" name="qualityDelete">
    <input type="hidden" name="qualityId" value="<?php echo $users[$i]['id']; ?>">
  <i class="fa fa-trash"></i>
    </button>
</form>
