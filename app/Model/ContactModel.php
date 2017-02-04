<?php
 namespace Model;
 use W\Model\Model;
 use \W\Model\ConnectionModel;

 class ContactModel extends Model {
   public function validInquiry($inquiry) {
    // instancié un objet de connection5
      $dbhConnect = new ConnectionModel();
      // on appel la méthode d'appel de PDO à notre BDD
      $instance = $dbhConnect -> getDbh();
      // requête d'ajout de commande
      $sql = 'INSERT INTO renseignements (choice, name, firstname, email, phonenumber, message)
      VALUES ("'.$inquiry['choice'].'",
      "'.$inquiry['name'].'",
      "'.$inquiry['firstname'].'",
      "'.$inquiry['email'].'",
      "'.$inquiry['phonenumber'].'",
      "'.$inquiry['message'].'")';
        $createInquiry = $instance->exec($sql);
    }
  }
