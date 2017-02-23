<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;

class AdminController extends Controller {

	public function admin() {
		// instancié un objet de connection
		$dbhConnect = new ConnectionModel();
		// on appel la méthode d'appel de PDO à notre BDD
		$instance = $dbhConnect -> getDbh();

	// création de la requête des utilisateurs
		$sqlUsers = "SELECT * FROM users";
		$users = $instance->query($sqlUsers)->fetchAll();

	// création de la requête des réservations
		$sqlTravel = "SELECT * FROM trajet";
		$travel = $instance->query($sqlTravel)->fetchAll();

	// création de la requête des avis
		$sqlQuality = "SELECT * FROM avis";
		$quality = $instance->query($sqlQuality)->fetchAll();

	// création de la requête de renseignements
		$sqlInquiry = "SELECT * FROM renseignements";
		$inquiry = $instance->query($sqlInquiry)->fetchAll();

	// création de la requête de renseignements
		$sqlPicture = "SELECT * FROM pictures";
		$picture = $instance->query($sqlPicture)->fetchAll();

	// affichage sur la page, et transfert des variables
		$this -> show('admin/admin', ["users" => $users,
		"travel" => $travel,
		"quality" => $quality,
		"inquiry" => $inquiry,
		"picture" => $picture]);
	}

	// public function adminUpdateGrad() {
	// 	// instancié un objet de connection
	// 	$dbhConnect = new ConnectionModel();
	// 	// on appel la méthode d'appel de PDO à notre BDD
	// 	$instance = $dbhConnect -> getDbh();
	// 	// création de la requête des utilisateurs, et transfert des variables
	// 	$sqlUpdateGrad = "SELECT * FROM users WHEREid =" .$_POST['userId'];
	// 	$userGrad = $instance->query($sqlUpdateGrad)->fetchAll();
	// 	$this -> show('forms/gradUpdate', ["userGrad" => $userGrad]);
	// }
} ?>
