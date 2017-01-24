<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model;

class TrajetController extends Controller {
  public function afficheFormTrajet() {
    $this -> show('trajet/trajet');
  }
}
?>
