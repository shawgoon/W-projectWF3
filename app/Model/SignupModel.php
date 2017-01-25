<?php

namespace Model;
use W\Model\Model;
use \W\Model\ConnectionModel;

class SignupModel extends Model{
  public function signup($newUser) {
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
    // requête d'ajout d'utilisateur
    $sql = "INSERT INTO users (name, firstname, numberphone, email, password) VALUES ('".$newUser['name']."', '".$newUser['firstname']."', '".$newUser['numberphone']."', '".$newUser['email']."', '".$newUser['password']."')";
      $createUser = $instance->exec($sql);
  }
}
