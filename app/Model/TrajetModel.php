<?php
 namespace Model;
 use W\Model\Model;
 use \W\Model\ConnectionModel;

 class TrajetModel extends Model {
   public function validItinerary($itinerary) {
    // instancié un objet de connection5
      $dbhConnect = new ConnectionModel();
      // on appel la méthode d'appel de PDO à notre BDD
      $instance = $dbhConnect -> getDbh();
      // requête d'ajout de commande
      $sql = "INSERT INTO trajet (user_id, choice, street_start, town_zip_start, date_start, street_end, town_zip_end, date_end)
      VALUES ('".$_SESSION['user']['id']."',
      '".$itinerary['choice']."',
      '".$itinerary['street_start']."',
      '".$itinerary['town_zip_start']."',
      '".$itinerary['date_start']."',
      '".$itinerary['street_end']."',
      '".$itinerary['town_zip_end']."',
      '".$itinerary['date_end']."')";
        $createItinerary = $instance->exec($sql);
    }
  }
