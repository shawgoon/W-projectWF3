<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;
use \W\Model\Model;
use \Model\TrajetModel;
use \Model\AdminModel;

class TrajetController extends Controller {
  public function afficheValidTrajet() {
    if(isset($_POST['validItinerary']) /*&& is_log()*/) {
      $itinerary = array(
          "user_id" => $_SESSION['user']['id'],
          "choice" => $_POST['choice'],
          "street_start" => $_POST['street_start'],
          "town_zip_start" => $_POST['town_zip_start'],
          "date_start" => $_POST['date_start'],
          "street_end" => $_POST['street_end'],
          "town_zip_end" => $_POST['town_zip_end'],
          "date_end" => $_POST['date_end'],
        );
        $createItinerary = new TrajetModel();
        $createItinerary -> validItinerary($itinerary);
        $this -> redirect('http://localhost/taxi-dieppe/public/account/');
        if ($createItinerary === true) {
          echo '<div id="alertTrue"><p>Votre demande est bien prise en compte</p></div>';
        }
      } else {
        $this -> show('w-error/403');
    }
  }
}
?>
