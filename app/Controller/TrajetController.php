<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;
use \W\Model\Model;
use \Model\TrajetModel;
use \Controller\AccountController;

class TrajetController extends Controller {
  public function afficheValidTrajet() {
    if(isset($_POST['validItinerary']) /*&& is_log()*/) {
      $itinerary = array(
          "choice" => $_POST['choice'],
          "street_start" => $_POST['street_start'],
          "town_zip_start" => $_POST['town_zip_start'],
          "date_start" => $_POST['date_start'],
          "street_end" => $_POST['street_end'],
          "town_zip_end" => $_POST['town_zip_end'],
          "date_end" => $_POST['date_end'],
        );
        $trajet = new TrajetModel();
        $trajet -> validItinerary($itinerary);
        $this -> redirect('http://localhost/W-projectWF3/public/account/');
      } else {
        $this -> show('w-error/403');
    }
  }
}
?>
