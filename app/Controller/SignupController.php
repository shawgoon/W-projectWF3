<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model;

class SignupController extends Controller {
  public function afficheFormSignup() {
    $this -> show('signup/signup');
  }
}
?>
