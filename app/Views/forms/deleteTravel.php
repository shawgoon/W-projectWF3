<!-- formulaire d'effacement de réservation -->
<form class="" action="http://localhost/taxi-dieppe/public/forms/deleteTravel/" method="post">
  <button type="submit" name="travelDelete">
    <input type="hidden" name="travelId" value="'<?php echo $users[$i]['id']; ?>">
  <i class="fa fa-trash"></i>
  </button>
</form>
