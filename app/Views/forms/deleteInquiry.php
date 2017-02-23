<!-- formulaire d'effacement de renseignements -->
<form class="" action="http://localhost/taxi-dieppe/public/forms/deleteInquiry/" method="post">
  <button type="submit" name="inquiryDelete">
    <input type="hidden" name="inquiryId" value="<?php echo $users[$i]['id']; ?>">
    <i class="fa fa-trash"></i>
  </button>
</form>
