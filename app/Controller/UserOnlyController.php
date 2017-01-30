<?php

namespace Controller;

use \W\Controller\Controller;

class UserOnlyController extends Controller {

	public function connectedOnly() {
		$this->show('userOnly/userOnly');
	}
} ?>
