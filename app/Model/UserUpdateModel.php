<?php
namespace Model;
use W\Model\Model;
use \W\Model\ConnectionModel;

class UserUpdateModel extends Model {

  public function updateUser() {
    if (isset($_POST['userUpdate'])) {
      $sql = "UPDATE users
      SET name = '".$_POST['name']."',
          firstname = '".$_POST['firstname']."',
          numberphone = '".$_POST['numberphone']."',
          email = '".$_POST['email']."',
          password = '".$_POST['password']."',
          grad_id = '".$_POST['grad_id']."'
      WHERE id=" .$_POST['userId'];
      $updateUser = $instance->exec($sql);
        if ($updateUser === true) {
        echo '<div id="alertTrue"><p>Votre compte a été mis à modifié</p></div>';
      }
    }
  }
} ?>
