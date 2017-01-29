<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;

class ContactControlController extends Controller {
  public static function messageTable() {
    // $this->allowTo(['admin', 'master']);
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
     // création de la requête
    $sql = "SELECT * FROM renseignements";
    $inquiry = $instance->query($sql)->fetchAll();
    for ($i=0; $i < count($inquiry); $i++) {
      $id = $inquiry[$i]['id'];
      $choice = $inquiry[$i]['choice'];
      $name = $inquiry[$i]['name'];
      $firstname = $inquiry[$i]['firstname'];
      $mail = $inquiry[$i]['email'];
      $numberphone = $inquiry[$i]['numberphone'];
      $message = $inquiry[$i]['message'];
      echo
      '<tr>
        <td>'.$id.'</td>',
        '<td>'.$choice.'</td>',
         '<td>'.$name.'</td>',
         '<td>'.$firstname.'</td>',
         '<td>'.$mail.'</td>',
         '<td>'.$numberphone.'</td>',
         '<td>'.$message.'</td>',
           /* bouton de suppression */
         '<td>
            <form class="" action="#" method="post">
              <button type="submit" name="inquiryDelete">
                <input type="hidden" name="inquiryId" value="'.$id.'">
                <i class="fa fa-trash"></i>
              </button>
            </form>
         </td><br>
       </tr>';
     }
  }

  public function afficheMessageTable() {
    $this -> show('contactControl/contactControl');
  }
}
