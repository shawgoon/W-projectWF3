<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;

class QualityNotificationController extends Controller {
  public static function qualityTable() {
    // $this->allowTo(['admin', 'master']);
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
     // création de la requête
    $sql = "SELECT * FROM avis";
    $quality = $instance->query($sql)->fetchAll();
    // for ($i=0; $i < count($quality); $i++) {
    //   $id = $quality[$i]['id'];
    //   $message = $quality[$i]['message'];
    //   $userId = $quality[$i]['user_id'];
    //   $name = $quality[$i]['name'];
    //   $firstname = $quality[$i]['firstname'];
    //   $note = $quality[$i]['notation'];
    //   echo
    //   '<tr>
    //     <td>'.$id.'</td>',
    //     '<td>'.$message.'</td>',
    //     '<td>'.$userId.'</td>',
    //     '<td>'.$name.'</td>',
    //     '<td>'.$firstname.'</td>',
    //     '<td>'.$note.'</td>',
    //        /* bouton de suppression */
    //      '<td>
    //         <form class="" action="http://localhost/taxi-dieppe/public/deleteView/avis/" method="post">
    //           <button type="submit" name="qualityDelete">
    //             <input type="hidden" name="qualityId" value="'.$id.'">
    //             <i class="fa fa-trash"></i>
    //           </button>
    //         </form>
    //      </td><br>
    //    </tr>';
    //  }
  }

  public function afficheQualityTable() {
    $this -> show('admin/admin', ['avis' => $quality]);
  }
}
