<?php
namespace Model;
use W\Model\Model;
use PDO;

class LocalisationModel extends Model {

  public function listingTaxi(){
    // Connexion à la BDD
    $instance = new PDO("mysql:host=localhost;dbname=projet_soutenance", "root", "");

    //On récupère la liste de tous les taxis
    $sql = "SELECT * FROM position";
    return $listeTaxi = $instance->query($sql)->fetchAll();
    json_encode($listeTaxi);
  }

  public function sendGPSData(){
    // Connexion à la BDD
    $instance = new PDO("mysql:host=localhost;dbname=projet_soutenance", "root", "");
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
