<!-- formulaire d'effacement d'un utilisateur -->
<form class="" action="http://localhost/taxi-dieppe/public/forms/deleteUser/" method="post">
  <button type="submit" name="userDelete">
    <input type="hidden" name="userId" value="<?php echo $users[$i]['id']; ?>">
    <i class="fa fa-trash"></i>
  </button>
</form>
