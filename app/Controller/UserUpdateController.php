<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;
use \W\Model\Model;
use \Model\UserUpdateModel;

class UserUpdateController extends Controller {
  public static function userUpdate() {
    // $this->allowTo(['admin', 'master']);
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();

    $sql = "SELECT * FROM users WHERE id =" .$_POST['userId'];
    $users = $instance->query($sql)->fetchAll();
    // boucle du tableau de tous les utilisateurs
    for ($i=0; $i < count($users); $i++) {
      $id = $users[$i]['id'];
      $name = $users[$i]['name'];
      $firstname = $users[$i]['firstname'];
      $gradId = $users[$i]['grad_id'];
      $mail = $users[$i]['email'];
      $numberphone = $users[$i]['numberphone'];
      $password = $users[$i]['password'];
    }
var_dump($users);
      if (isset($_POST['userUpdate'])) { ?>

        <!-- // formulaire de modification -->
        <h2>Modification</h2>
        <form class="" action="http://localhost/W-projectWF3/public/userUpdate/" method="post">
          <label for="">Nom</label><br>
          <input required="required" type="text" name="name" value="<?php echo $name ?>"><br>
          <label for="">Prénom</label><br>
          <input required="required" type="text" name="firstname" value="<?php echo $firstname ?>"><br>
          <label for="">N° de téléphone</label><br>
          <input required="required" step="10" type="text" name="numberphone" value="<?php echo $numberphone ?>"><br>
          <label for="">Email</label><br>
          <input required="required" type="text" name="email" value="<?php echo $mail ?>"><br>
          <label for="">Droits de l'utilisateur</label><br>
            <select name="grad_id" value=""><br>
              <option value=""><<-- Selectionnez -->></option>
              <option value="1">Client</option>
              <option value="2">Chauffeur</option>
              <option value="3">Administrateur</option>
              <option value="4">Master</option>
            </select>
          <input type="hidden" name="userId"  value="<?php echo $id ?>"><br><hr>
          <input type="submit" name="userUpdateByAdmin" value="Valider">
        </form>
    <?php  } ?>
    <?php
        if (isset($_POST['userUpdateByAdmin'])) {
            $userUpdate = array(
              "name" => $_POST['name'],
              "firstname" => $_POST['firstname'],
              "numberphone" => $_POST['numberphone'],
              "email" => $_POST['email'],
              "grad_id" => $_POST['grad_id'],
            );
            var_dump($userUpdate);
            $updateSuccess = new UserUpdateModel();
            $update = $updateSuccess->update($userUpdate);var_dump($update);
            if ($update === true) {
            //  $this->redirect('http://localhost/W-projectWF3/public/userManager/');
             echo "<h1>Votre modification est bien prise en compte !</h1><br><a href='http://localhost/W-projectWF3/public/userManager/'>Retour</a>";
           } else {
              // $this->show('w_errors/403');
           }
          }
      }
}  ?>
