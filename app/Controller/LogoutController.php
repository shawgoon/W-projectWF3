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
    $auth = new AuthentificationModel();
		$decoUser = $auth -> logUserOut();
    $this -> redirectToRoute('default_home');
  } 
} ?>
