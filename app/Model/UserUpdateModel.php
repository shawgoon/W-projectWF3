<?php
namespace Model;
use W\Model\Model;
use \W\Model\ConnectionModel;

class UserUpdateModel {
public function update(/*$userUpdate*/) {
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
    // requête de mise à jour d'utilisateur
      $sql = "UPDATE users
      SET name = '".$_POST['name']."',
          firstname = '".$_POST['firstname']."',
          phonenumber = '".$_POST['phonenumber']."',
          email = '".$_POST['email']."',
          grad_id = '".$_POST['grad_id']."',
          my_address = '".$_POST['my_address']."',
          my_zip = '".$_POST['my_zip']."',
          my_town = '".$_POST['my_town']."',
          my_best_address = '".$_POST['my_best_address']."',
          my_best_zip = '".$_POST['my_best_zip']."',
          my_best_town = '".$_POST['my_best_town']."'
      WHERE id=" .$_POST['userId'];
      $update = $instance->exec($sql);
        if ($update) {
          return true;
      } 
  }
} ?>
