<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;

class ReservationController extends Controller {
  public function travelTable() {
    // $this->allowTo(['admin', 'master']);
    // // instancié un objet de connection
    // $dbhConnect = new ConnectionModel();
    // // on appel la méthode d'appel de PDO à notre BDD
    // $instance = $dbhConnect -> getDbh();
    //  // création de la requête
    // $sql = "SELECT * FROM messages";
    // $users = $instance->query($sql)->fetchAll();
    $this -> show('reservation/reservation');
  }
}
?>
