<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;

class ManageUsersController extends Controller {
  public function userTable() {
    // $this->allowTo(['admin', 'master']);
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
     // création de la requête
    $sql = "SELECT * FROM users";
    $users = $instance->query($sql)->fetchAll();
    $this -> show('manageUsers/manageUsers');
  }
}
