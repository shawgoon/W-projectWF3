<?php
namespace Controller;

use \W\Controller\Controller;

class LogoutController extends Controller {
  public function logout() {
    unset($_SESSION['user']) {
      $this -> show('default/home');
    } else {
      $this -> show('w_errors/403');
      return false;
    }

  }
} ?>
