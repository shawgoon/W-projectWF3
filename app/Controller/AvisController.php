<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;
use \Model\InsertAvisModel;

class AvisController extends Controller {

	public function envoiAvis() {
 		if (isset($_POST['addMessage'])) {
			$newAvis = array(
				 "user_id" => $_SESSION['user']['id'],
				 "firstname" => $_POST['firstname'],
				 "name" => $_POST['name'],
				 "message" => $_POST['message'],
				 "notation" => $_POST['notesA'],
		 );
			 $insertAvis = new InsertAvisModel();
			 $insertAvis -> insertAvis($newAvis);
			 $this->redirectToRoute('default_home');
		 } else {
			 $this -> show('w-error/403');
		 }
	 }
}
