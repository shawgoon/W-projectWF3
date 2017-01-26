<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \W\Security\AuthentificationModel;
use \W\Model\ConnectionModel;

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

    if (isset($_POST['userName'])){
			// On instancie un nouvel objet car les méthodes de la classe ne sont pas static
		  $authUser = new AuthentificationModel();
			// $userID nous renvoie l'ID de l'utilisateur si les infos sont correctes sinon il renvoie 0
			$userID = $authUser -> isValidLoginInfo($_POST['numberphone'], $_POST['password']);
			$user = array(
				'numberphone' => $_POST['numberphone'],
				'password' => $_POST['password']
		 );
			$connectUser = $authUser -> logUserIn($user);
		}
		$this->redirectToRoute('mon_compte');
	}

    //   if (isset($_POST['userName'])) {
    //   var_dump($_POST);
    //     $login = new AuthentificationModel();
    //     $userId = $login -> isValidLoginInfo($_POST['password']);
    //     $user = array(
    //     "numberphone" => $_POST['numberphone'],
    //     "password" => $_POST['password']
    //   );var_dump($login);
    //     $connected = $login -> logUserIn($user);
    //     $connected = true;
    //     $this->redirectToRoute('mon_compte');
    //   } else {
    //     $connected = false;
    //     $this -> show('w_errors/403');
    //   }
    // }
  } ?>
