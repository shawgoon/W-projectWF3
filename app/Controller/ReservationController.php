<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;

class ReservationController extends Controller {
  public static function travelTable() {
    // $this->allowTo(['admin', 'master']);
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
     // création de la requête
    $sql = "SELECT * FROM trajet";
    $travel = $instance->query($sql)->fetchAll();
    for ($i=0; $i < count($travel); $i++) {
      $id = $travel[$i]['id'];
      $userId = $travel[$i]['user_id'];
      $choice = $travel[$i]['choice'];
      $street_start = $travel[$i]['street_start'];
      $town_zip_start = $travel[$i]['town_zip_start'];
      $date_start = $travel[$i]['date_start'];
      $street_end = $travel[$i]['street_end'];
      $town_zip_end = $travel[$i]['town_zip_end'];
      $date_end = $travel[$i]['date_end'];
      echo
      '<tr>
        <td>'.$id.'</td>',
        '<td>'.$userId.'</td>',
        '<td>'.$choice.'</td>',
         '<td>'.$street_start.'</td>',
         '<td>'.$town_zip_start.'</td>',
         '<td>'.$date_start.'</td>',
         '<td>'.$street_end.'</td>',
         '<td>'.$town_zip_end.'</td>',
         '<td>'.$date_end.'</td>',
           /* bouton de suppression */
         '<td>
            <form class="" action="http://localhost/W-projectWF3/public/deleteView/trajet/" method="post">
              <button type="submit" name="travelDelete">
                <input type="hidden" name="travelId" value="'.$id.'">
                <i class="fa fa-trash"></i>
              </button>
            </form>
         </td><br>
       </tr>';
     }
  }
  public function afficheTravelTable() {
    $this -> show('reservation/reservation');
  }
}
?>
