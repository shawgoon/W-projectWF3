<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\LocalisationModel;

class DefaultController extends Controller {

	/**
	 * Page d'accueil par défaut
	 */
	public function home() {

		// On appelle le model pour obtenir la liste des taxis depuis la BDD
		$localisation = new LocalisationModel();
		$listedestaxi = $localisation -> listingTaxi();
		$this->show('default/home', ["listeTaxi" => $listedestaxi]);

	}

}
