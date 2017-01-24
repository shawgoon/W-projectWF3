<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel;
use \W\Model\ConnectionModel;
use \W\Secutity\AuthentificationModel;

class LoginController extends Controller {
  // public function afficheFormLog() {
  //   $this -> show('login/login');
  public function login() {
  // }
    $connected = false;
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();

      if (isset($_POST['userName']) && isset($_POST['numberphone']) && isset($_POST['password'])) {

        // on récupère les données envoyé par le front en AJAX
        $credentials = array(
          "numberphone" => ($_POST['numberphone']),
          "password" => ($_POST['password'])
        );
        $userQuery = $instance->prepare(
        "SELECT *
        FROM users
        WHERE users.numberphone = :numberphone");      /*SHA1(?)*/
        $userQuery->execute(array("numberphone" => $credentials['numberphone']));var_dump($userQuery);
        $user = $userQuery -> fetch();

          if ($user) {
            if($user['password'] === $credentials['password']) {
              // si le mdp est bon je connecte l'utilisateur
              $connected = true;
              $this->redirectToRoute('mon_compte');
            } else {
              $connected = false;
              $this -> show('w_errors/403');
            }
          }
      }
    }
  }
 ?>
