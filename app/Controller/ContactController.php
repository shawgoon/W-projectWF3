<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ContactModel;

class ContactController extends Controller {

	public function afficheContact() {
		$this->show('contact/contact');
	}

	public function inquiryGuys() {
		if (isset($_POST['validInfo'])) {
			$inquiry = array(
				'choice' => $_POST['choice'],
				'name' => $_POST['name'],
				'firstname' => $_POST['firstname'],
				'email' => $_POST['email'],
				'numberphone' => $_POST['numberphone'],
				'message' => $_POST['message'],
			);
			$newInfo = new ContactModel();
			$newInfo -> validInquiry($inquiry);
			$this -> afficheContact();
		}
	}
}
