<?php

namespace Controller;

use \W\Controller\Controller;

class ContactController extends Controller {

	public function afficheContact() {
		$this->show('contact/contact');
	}

}
