<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \W\Model\ConnectionModel;

class LogoutController extends Controller {

  public function logout() {
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
    if (unset($_SESSION['user'])) {
      $this->redirectToRoute('default_home');
    } else {
      $this -> show('w_errors/403');
    }
  }
} ?>
