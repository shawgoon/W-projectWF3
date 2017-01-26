<?php
namespace Controller;
use \W\Controller\Controller;
use \Model\SignupModel;
use \Model\LoginModel;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;

class SignupController extends Controller {
    public function formSignup() {
        if (isset($_POST['createUser'])) {
            $cryptedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $newUser = array(
                "name" => $_POST['name'],
                "firstname" => $_POST['firstname'],
                "numberphone" => $_POST['numberphone'],
                "email" => $_POST['email'],
                "password" => $cryptedPassword
            ); var_dump($_POST);

            $insertUser = new SignupModel();
            $createSuccess = $insertUser->signup($newUser);
            $this->redirect('http://localhost/W-projectWF3/public/');
            // echo "<h1>Votre inscription est bien prise en compte !</h1>";
          } else {
            $this->show('w_errors/403');
        }
    }
  } ?>
