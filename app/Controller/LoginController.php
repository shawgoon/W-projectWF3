<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \W\Security\AuthentificationModel;
use \W\Model\ConnectionModel;

class LoginController extends Controller {

  public function login() {
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();

  if (isset($_POST['userName']) && isset($_POST['phonenumber']) && isset($_POST['password'])) {
    $sql = "SELECT * FROM users WHERE phonenumber=".$_POST['phonenumber'];
    $user = $instance -> query($sql)->fetchAll();
    for ($i = 0; $i < count($user); $i++) {
      $userId = $user[$i]['id'];
      $name = $user[$i]['name'];
      $firstname = $user[$i]['firstname'];
      $mail = $user[$i]['email'];
      $gradId = $user[$i]['grad_id'];
      $address = $user[$i]['my_address'];
      $zip = $user[$i]['my_zip'];
      $town = $user[$i]['my_town'];
      $best_address = $user[$i]['my_best_address'];
      $best_zip = $user[$i]['my_best_zip'];
      $best_town = $user[$i]['my_best_town'];
  }
      $login = new AuthentificationModel();
      $user = $login -> isValidLoginInfo($mail, ($_POST['password']));

      if ($user !== 0) {
        $userTrue = array(
        "id" => $userId,
        "name" => $name,
        "firstname" => $firstname,
        "phonenumber" => $_POST['phonenumber'],
        "password" => $_POST['password'],
        "email" => $mail,
        "grad_id" => $gradId,
        "my_address" => $address,
        "my_zip" => $zip,
        "my_town" => $town,
        "my_best_address" => $best_address,
        "my_best_zip" => $best_zip,
        "my_best_town" => $best_town,
      );
        $connected = $login -> logUserIn($userTrue);
        $this->redirectToRoute('default_home');
      } else {
        $this -> show('w_errors/403');
      }
    }
  }
} ?>
