<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;
use \Model\InsertAvisModel;
use \Model\AdminModel;

class AvisController extends Controller {

	public static function avisUtilisateurs() {
		// instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
    $sql = "SELECT * FROM `avis` ORDER BY id DESC LIMIT 4";
    $listeAvis = $instance->query($sql)->fetchAll();
    for ($i=0; $i<count($listeAvis); $i++){
        $id = $listeAvis[$i]['id'];
        $userId = $listeAvis[$i]['user_id'];
				$firstname = $listeAvis[$i]['firstname'];
        $name = $listeAvis[$i]['name'];
        $message = $listeAvis[$i]['message'];
        echo '<h2>'.$firstname.'</h2>', '<h2>'.$name.'</h2><br>', '<h4>'.$message.'</h4>';
    }
  }

	public function envoiAvis() {
 		if (isset($_POST['addMessage'])) {
			$newAvis = array(
				 "user_id" => $_SESSION['user']['id'],
				 "firstname" => $_POST['firstname'],
				 "name" => $_POST['name'],
				 "message" => $_POST['message'],
		 );
			 $insertAvis = new InsertAvisModel();
			 $insertAvis -> insertAvis($newAvis);
			 $this->redirectToRoute('default_home');
		 } else {
			 $this -> show('w-error/403');
		 }
	 }
}
