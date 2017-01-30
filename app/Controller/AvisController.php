<?php

namespace Controller;

use \W\Controller\Controller;

class AvisController extends Controller {

	public function afficheAvis() {
		$this->show('avis/avis');
	}

}
