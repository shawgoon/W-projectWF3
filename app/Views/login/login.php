<?php
// // instancié un objet de connection
// $dbhConnect = new ConnectionModel();
// // on appel la méthode d'appel de PDO à notre BDD
// $instance = $dbhConnect -> getDbh();
// var_dump($instance);
// $user =
//     $_SESSION['user'] = array(
//       "numberphone" => $_POST['numberphone'],
//       "password" => $_POST['password'],
//       "firstname" => $_POST['prenom'],
//       "userId" => $_POST['id'],
//       "groupe" => $_POST['groupe_id']
//     );

//$successLog = $this -> login();
// $connected = new AuthentificationModel();
logUserIn(  $_SESSION['user'] = array(
    "numberphone" => $_POST['numberphone'],
    "password" => $_POST['password'],
    "firstname" => $_POST['prenom'],
    "userId" => $_POST['id'],
    "groupe" => $_POST['groupe_id']
  ));


 ?>
