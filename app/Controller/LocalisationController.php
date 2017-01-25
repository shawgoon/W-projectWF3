<?php
namespace Controller;

use \W\Controller\Controller;
use \Model\LocalisationModel;

class LocalisationController extends Controller {

  public function afficher() {
 		// On appelle le model pour obtenir la liste des taxis depuis la BDD
    $localisation = new LocalisationModel();
 		$listedestaxi = $localisation -> listingTaxi();
 		$this->show('localisation/localisation', ["listeTaxi" => $listedestaxi]);
  }
 } ?>
