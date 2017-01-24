<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller {

	public function admin() {
		// $this->allowTo(['admin', 'master']);
		$this->show('admin/admin');
	}
} ?>
