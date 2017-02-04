<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;

class UserManagerController extends Controller {
  public static function userTable() {
    // $this->allowTo(['3', '4']);
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
    // requête de récupération de tous les utilisateurs
    $sql = "SELECT * FROM users";
    $users = $instance->query($sql)->fetchAll();
    // $newList = new UserManagerModel();
    // $newList -> recoveryUserTable($users);
     // boucle du tableau de tous les utilisateurs
     for ($i=0; $i < count($users); $i++) {
       $id = $users[$i]['id'];
       $name = $users[$i]['name'];
       $firstname = $users[$i]['firstname'];
       $gradId = $users[$i]['grad_id'];
       $mail = $users[$i]['email'];
       $phonenumber = $users[$i]['phonenumber'];
       $password = $users[$i]['password'];
       echo
       '<tr>
         <td>'.$id.'</td>',
          '<td>'.$name.'</td>',
          '<td>'.$firstname.'</td>',
          '<td>'.$gradId.'</td>',
          '<td>'.$mail.'</td>',
          '<td>'.$phonenumber.'</td>',
          '<td>'.$password.'</td>',
            /* bouton de modification  et de suppression */
          '<td>
            <form  action="http://localhost/W-projectWF3/public/userUpdate/" method="post">
              <button type="submit" name="userUpdate" value="">
                <input type="hidden" name="userId"  value="'.$id.'">
                <i class="fa fa-pencil"></i>
              </button>
            </form>','
            <form class="" action="http://localhost/W-projectWF3/public/deleteView/user/" method="post">
              <button type="submit" name="userDelete">
                <input type="hidden" name="userId" value="'.$id.'">
                <i class="fa fa-trash"></i>
              </button>
            </form>
          </td><br>
        </tr>';
      }
  }

  public function afficheUserTable() {
    $this -> show('userManager/userManager');
  }
}
