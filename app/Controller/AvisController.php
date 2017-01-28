<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;
use \Model\InsertAvisModel;
use \Model\AdminModel;

class AvisController extends Controller {

	public function afficheAvis() {
		$this->show('avis/avis');
	}

	public static function avisUtilisateurs() {
		// instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
    $sql = "SELECT * FROM `avis` ORDER BY id DESC LIMIT 4";
    $listeAvis = $instance->query($sql)->fetchAll();var_dump($listeAvis);
    for ($i=0; $i<count($listeAvis); $i++){
        $id = $listeAvis[$i]['id'];
        $userId = $listeAvis[$i]['user_id'];
				// $firstname = $listeAvis[$i]['firstname'];
        // $name = $listeAvis[$i]['name'];
        $message = $listeAvis[$i]['message'];
        echo /*'<h2>'.$firstname.'</h2>',*/ '<h2>'.$userId.'</h2>'.'<br>', '<h4>'.$message.'</h4>';
    }
  }

	public function envoiAvis() {
 		if (isset($_POST['addMessage'])) {
			$newAvis = array(
				 "user_id" => $_SESSION['user']['id'],
				 "message" => $_POST['message'],
		 );
			 $insertAvis = new InsertAvisModel();
			 $insertAvis -> insertAvis($newAvis);
			 $this->show('avis/avis');
				 if ($insertAvis === true) {
				 echo '<div id="alertTrue"><p>Votre demande est bien prise en compte</p></div>';
			 }
		 } else {
			 $this -> show('w-error/403');
		 }
	 }
}
