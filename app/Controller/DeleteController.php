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
      $this->redirect('http://localhost/W-projectWF3/public/qualityNotification/');
    }
  }

  public function inquiry() {
    if (isset($_POST['inquiryId'])) {
      $del = new DeleteModel();
      $delSuccess = $del->inquiryDelete();
      $this->redirect('http://localhost/W-projectWF3/public/contactControl/');
    }
  }

  public function travel() {
    if (isset($_POST['travelId'])) {
      $del = new DeleteModel();
      $delSuccess = $del->travelDelete();
      $this->redirect('http://localhost/W-projectWF3/public/reservation/');
    }
  }

  public function user() {
    if (isset($_POST['userId'])) {
      $del = new DeleteModel();
      $delSuccess = $del->userDelete();
      $this->redirect('http://localhost/W-projectWF3/public/userManager/');
    }
  }
}
