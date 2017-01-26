<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;
use \Model\insertAvisModel;

class AvisController extends Controller {

	public function afficheAvis() {
		$this->show('avis/avis');
	}

	public static function avisUtilisateurs() {
		// instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
    $sql = "SELECT * FROM `avis` WHERE id IN (1,2,3,4)";
    $listeAvis = $instance->query($sql)->fetchAll();
    for ($i=0; $i<count($listeAvis); $i++){
        $id = $listeAvis[$i]['id'];
        $name = $listeAvis[$i]['name'];
        $firstname = $listeAvis[$i]['firstname'];
        $message = $listeAvis[$i]['message'];
        echo '<h2>'.$name.'</h2>', '<h2>'.$firstname.'</h2>'.'<br>', '<p>'.$message.'</p>';
    }
  }

	public function envoiAvis() {
 		if (isset($_POST['addMessage'])) {
			$newAvis = array(
				 "users_id" => $_SESSION['user']['id'],
				 "message" => $_POST['message'],
		 );
			 $insertAvis = new insertAvisModel();
			 $insertAvis -> insertAvis($newAvis);
			 $this->show('avis/avis');
		 } else {
			 $this -> show('w-error/403');
		 }
	 }
}
