<?php

namespace SignupModel;

class SignupModel {
  public function signup() {
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
    // requête d'ajout d'utilisateur
    $sql = "INSERT INTO users (name, firstname, password, email, name, grad) VALUES (?, SHA1(?), ?, ?, ?, ?)";
      $createSuccess = $instance->prepare($sql);
      var_dump($createSuccess);
      $createSuccess -> execute(array(
      $this -> name,
      $this -> firstname,
      $this -> numberphone,
      $this -> mail,
      $this -> password,
      $this -> grad
      ));
  }

}
