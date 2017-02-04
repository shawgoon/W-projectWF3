<?php
namespace Model;
use W\Model\Model;
use \W\Model\ConnectionModel;

class UserUpdateModel {

  public function update($userUpdate) {
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
    // requête de mise à jour d'utilisateur
    if (isset($_POST['userUpdateByAdmin'])) {
      $sql = "UPDATE users
      SET name = '".$_POST['name']."',
          firstname = '".$_POST['firstname']."',
          phonenumber = '".$_POST['phonenumber']."',
          email = '".$_POST['email']."',
          grad_id = '".$_POST['grad_id']."'
      WHERE id=" .$_POST['userId'];
      $updateSuccess = $instance->exec($sql); var_dump($sql);
        if ($updateSuccess) {
        echo '<div id="alertTrue"><p>Votre compte a été modifié</p></div>';
        return true;
      }
    }
  }
} ?>
