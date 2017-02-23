<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;
use \W\Model\Model;
use \Model\DeleteModel;

class DeleteController extends Controller {
  public function quality() {
    if (isset($_POST['qualityId'])) {
      $del = new DeleteModel();
      $delSuccess = $del->qualityDelete();
      $this->redirect('http://localhost/taxi-dieppe/public/admin/#quality/');
    }
  }

  public function inquiry() {
    if (isset($_POST['inquiryId'])) {
      $del = new DeleteModel();
      $delSuccess = $del->inquiryDelete();
      $this->redirect('http://localhost/taxi-dieppe/public/admin/#contactControl/');
    }
  }

  public function travel() {
    if (isset($_POST['travelId'])) {
      $del = new DeleteModel();
      $delSuccess = $del->travelDelete();
      $this->redirect('http://localhost/taxi-dieppe/public/admin/#reservation/');
    }
  }

  public function user() {
    if (isset($_POST['userId'])) {
      $del = new DeleteModel();
      $delSuccess = $del->userDelete();
      $this->redirect('http://localhost/taxi-dieppe/public/admin/#userManager/');
    }
  }
}
