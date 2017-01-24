<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationModel;

class LocalisationController extends Controller
{

	public function afficher()
	{
		$this->show('localisation/localisation');
	}
