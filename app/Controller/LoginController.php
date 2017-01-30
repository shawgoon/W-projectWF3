<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \W\Model\ConnectionModel;
use \W\Secutity\AuthentificationModel;

class LoginController extends Controller {
  // public function afficheFormLog() {
  //   $this -> show('login/login');
  // }
  public function login() {
    $connected = false;
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();

      if (isset($_POST['userName']) && isset($_POST['numberphone']) && isset($_POST['password'])) {
        $this -> logUserIn($_SESSION['user'] = array(
        "numberphone" => $_POST['numberphone'],
        "password" => $_POST['password']
        ));
        $connected = true;
        $this->redirectToRoute('mon_compte');
      } else {
        $connected = false;
        $this -> show('w_errors/403');
      }
    }
  } ?>
