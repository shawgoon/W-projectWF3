<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \Model\AdminModel;

class AccountController extends Controller {

  public function account() {
    $this -> show('account/account');
  }
} ?>
