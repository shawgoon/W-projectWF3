<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model;

class LoginController extends Controller {
  public function login() {
    if (isset ($_POST['userName']) && isset($_POST['nickname']) && isset($_POST['password'])) {
      $nickname = $_POST['nickname'];
      $password = $_POST['password'];


      $this -> show('default/home');
    }

    else {
      $this -> show('w_errors/403');
      return false;
    }
    /*if (isset($_POST['nickname']) && isset($_POST['password'])) {
      $this -> logUserIn();

    }*/
  }
}?>
