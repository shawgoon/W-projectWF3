<?php
namespace Controller;

use \W\Controller\Controller;
use \Model\LocalisationModel;

class LocalisationController extends Controller {

	public function afficher() {

		// On appelle le model pour obtenir la liste des taxis depuis la BDD
		$localisation = new LocalisationModel();
		// On appelle la méthode directement vu que l'envoi et l'affichage sont sur la même page
		self::insertGPSData();
		$listedestaxi = $localisation -> listingTaxi();
		$this->show('localisation/localisation', ["listeTaxi" => $listedestaxi]);
	}

	public function insertGPSData() {
		$localisation = new LocalisationModel();
		$sendPos = $localisation -> sendGPSData();
	}

}
