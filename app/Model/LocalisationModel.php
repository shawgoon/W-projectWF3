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

   public function sendGPSData(){
     // instancié un objet de connection
     $dbhConnect = new ConnectionModel();
     // on appel la méthode d'appel de PDO à notre BDD
     $instance = $dbhConnect -> getDbh();
      if($_POST){
        $date =  date("Y-m-d h:i:s");
        $query = $instance->prepare("INSERT INTO position (longitude, latitude, date)
        VALUES (:longitude,:latitude,:date)");
        $insertSuccess = $query->execute(array(
          "longitude" => $_POST['longitude'],
          "latitude" => $_POST['latitude'],
          "date" => $date
        ));
      }
    }
 }
