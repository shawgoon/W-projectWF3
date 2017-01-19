<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}
	// public function facebook() {
	// 	$this->redirect('https://www.facebook.com');
	// }
	// public function twitter() {
	// 	$this->redirect('https://www.twitter.com');
	// }

}
