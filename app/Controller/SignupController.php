<?php
namespace Controller;
use \W\Controller\Controller;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;
use \Model\SignupModel;
use \Model\UserUpdateModel;

class SignupController extends Controller {

    public function formSignup() {
        if (isset($_POST['createUser'])) {
            $cryptedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $newUser = array(
                "name" => $_POST['name'],
                "firstname" => $_POST['firstname'],
                "phonenumber" => $_POST['phonenumber'],
                "email" => $_POST['email'],
                "password" => $cryptedPassword
            );

            $insertUser = new SignupModel();
            $createSuccess = $insertUser->signup($newUser);
            $this->redirect('http://localhost/taxi-dieppe/public/');
            // echo "<h1>Votre inscription est bien prise en compte !</h1>";
          } else if (isset($_POST['userUpdate'])) {
              $update = new UserUpdateModel();
            $updateSuccess = $update -> update(/*$userUpdate*/);
              $this -> redirect('http://localhost/taxi-dieppe/public/');
            } else {
            $this->show('w_errors/403');
          }
    }
  } ?>
