<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ContactModel;

class ContactController extends Controller {

	public function inquiryGuys() {
		if (isset($_POST['validInfo'])) {
			$inquiry = array(
				'choice' => $_POST['choice'],
				'name' => $_POST['name'],
				'firstname' => $_POST['firstname'],
				'email' => $_POST['email'],
				'phonenumber' => $_POST['phonenumber'],
				'message' => $_POST['message'],
			);
			$newInfo = new ContactModel();
			$newInfo -> validInquiry($inquiry);
			$this -> redirectToRoute('default_home');
		} else {
			$this -> show('w_errors/403');
	}
}
