<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;

class DefaultController extends Controller {

	/**
	 * Page d'accueil par défaut
	 */
	public function home() {
		// instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
	// création de la requête des affichage des avis utilisateurs
    $sql = "SELECT * FROM `avis` ORDER BY id DESC LIMIT 4";
    $listeAvis = $instance->query($sql)->fetchAll();
	// création de la requête des utilisateurs
		if (!empty($_SESSION)) {
			$sqlUsers = "SELECT * FROM users WHERE id =" .$_SESSION['user']['id'];
			$userSession = $instance->query($sqlUsers)->fetchAll();
		} else {
			$userSession = null;
		}
		$this -> show('default/home', ['listeAvis' => $listeAvis,
	"userSession" => $userSession]);

	}
}
