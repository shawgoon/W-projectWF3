<?php

namespace Controller;

use \W\Controller\Controller;

class UserOnlyController extends Controller {

	public function connexionOnly() {
		$this->show('userOnly/userOnly');
	}
} ?>
