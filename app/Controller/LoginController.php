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
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();

  if (isset($_POST['userName']) && isset($_POST['numberphone']) && isset($_POST['password'])) {
    $sql = "SELECT * FROM users WHERE numberphone=".$_POST['numberphone'];
    $user = $instance -> query($sql)->fetchAll();
    for ($i = 0; $i < count($user); $i++) {
      $userId = $user[$i]['id'];
      $gradId = $user[$i]['grad_id'];
      $firstname = $user[$i]['firstname'];
      $mail = $user[$i]['email'];
  }
      $login = new AuthentificationModel();
      $user = $login -> isValidLoginInfo($mail, ($_POST['password']));

      if ($user !== 0) {
        $userTrue = array(
        "name" => $name,
        "firstname" => $firstname,
        "numberphone" => $_POST['numberphone'],
        "password" => $_POST['password'],
        "email" => $mail,
        "id" => $userId,
        "grad_Id" => $gradId,
      );
        $connected = $login -> logUserIn($userTrue);
        $this->redirectToRoute('mon_compte');
      } else {
        $this -> show('w_errors/403');
      }
    }
  }
} ?>
