<?php
namespace Model;
use W\Model\Model;
use PDO;

class LocalisationModel extends Model
{
  public function listingTaxi(){
    // Connexion à la BDD
    $instance = new PDO("mysql:host=localhost;dbname=projet_soutenance", "root", "");

    //On récupère la liste de tous les taxis
    $sql = "SELECT * FROM position";
    return $listeTaxi = $instance->query($sql)->fetchAll();
    json_encode($listeTaxi);
  }
}
