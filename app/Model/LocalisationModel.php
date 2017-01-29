<?php
 namespace Model;
 use W\Model\Model;
 use \W\Model\ConnectionModel;

 class LocalisationModel extends Model {
   public function listingTaxi() {
     // instancié un objet de connection
     $dbhConnect = new ConnectionModel();
     // on appel la méthode d'appel de PDO à notre BDD
     $instance = $dbhConnect -> getDbh();

     //On récupère la liste de tous les taxis
     $sql = "SELECT * FROM position";
     return $listeTaxi = $instance->query($sql)->fetchAll();
     json_encode($listeTaxi);
   }
 }
