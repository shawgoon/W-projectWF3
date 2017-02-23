<?php
namespace Controller;

use \W\Controller\Controller;
use \W\Model\ConnectionModel;

class GradUpdateController extends Controller {
  public function grad() {
    // instancié un objet de connection
    $dbhConnect = new ConnectionModel();
    // on appel la méthode d'appel de PDO à notre BDD
    $instance = $dbhConnect -> getDbh();
  // requête d'appel de données d'un utilisateur
    $sql = "SELECT * FROM users WHERE id =" .$_POST['userId'];
    $user = $instance->query($sql)->fetchAll();
    $this->show('forms/gradUpdate', ['user' => $user]);
  }

  public function gradUpdate() { var_dump($_POST);
        if (isset($_POST['updateGrad'])) {
            $userUpdate = array(
              "name" => $_POST['name'],
              "firstname" => $_POST['firstname'],
              // "phonenumber" => $_POST['phonenumber'],
              // "email" => $_POST['email'],
              "grad_id" => $_POST['grad_id'],
            );
            $updateSuccess = new UserUpdateModel();
            $update = $updateSuccess->update($userUpdate);
            $this->redirect('http://localhost/taxi-dieppe/public/admin/');
            //  echo "<h1>Votre modification est bien prise en compte !</h1><br><a href='http://localhost/taxi-dieppe/public/admin/'>Retour</a>";
           } else {
              $this->show('w_errors/403');
           }
      }
}  ?>
