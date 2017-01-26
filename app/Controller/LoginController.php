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

  if (isset($_POST['userName']) && isset($_POST['numberphone']) && isset($_POST['password'])) {
    $sql = "SELECT * FROM users WHERE numberphone=".$_POST['numberphone'];
    $user = $instance -> query($sql)->fetchAll();   var_dump($user);
    for ($i = 0; $i < count($user); $i++) {
      $firstname = $user[$i]['firstname'];
      $userId = $user[$i]['id'];
      $mail = $user[$i]['email'];
  }
    $cryptedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $login = new AuthentificationModel();
        $user = $login -> isValidLoginInfo($mail, $cryptedPassword); var_dump($mail, $cryptedPassword);

        $user = array(
        "firstname" => $firstname,
        "numberphone" => $_POST['numberphone'],
        "password" => $cryptedPassword,
        "email" => $mail,
        "id" => $userId,
      );
    var_dump($_SESSION);
        $connected = $login -> logUserIn($user);
        $connected = true;
        // var_dump($connected); die;
        $this->redirectToRoute('mon_compte');
      } else {
        $connected = false;
        $this -> show('w_errors/403');
      }
    }
  } ?>
