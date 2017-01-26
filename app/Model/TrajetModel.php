<?php
 namespace Model;
 use W\Model\Model;
 use \W\Model\ConnectionModel;

 class TrajetModel extends Model {
   public function validItinerary($itinerary) {
     $createItinerary = false;
    // instancié un objet de connection
      $dbhConnect = new ConnectionModel();
      // on appel la méthode d'appel de PDO à notre BDD
      $instance = $dbhConnect -> getDbh();

      // requête d'ajout de commande
      $sql = "INSERT INTO trajet (choice, users_id, street_start, town_zip_start, date_start, street_end, town_zip_end, date_end)
      VALUES ('".$itinerary['choice']."',
      '".$_SESSION['user']['id']."',
      '".$itinerary['street_start']."',
      '".$itinerary['town_zip_start']."',
      '".$itinerary['date_start']."',
      '".$itinerary['street_end']."',
      '".$itinerary['town_zip_end']."',
      '".$itinerary['date_end']."')";
        $createItinerary = $instance->exec($sql);
        $createItinerary = true;
    }
  }

    //  //On recherche si l'utilisateur en cours à une commande
    //      $sql = "SELECT *
    //          FROM trajet
    //          WHERE users_id = ".get_current_user_id();
    //      $lastItinerary = $instance->query($sql)->fetchAll();

    //  // Si oui
    //      if(!empty($lastItinerary)) {
    //          //on regarde si il y a déjà une commande en cours (CHANGER LES NOM/ID DES INPUT dans le formulaire)
    //          foreach ($lastItinerary as $currentItinerary) {
    //              if($currentItinerary['street_start'] === $_POST['streetS']) {
    //                  $itineraryStreetS = $currentItinerary['street_start'];
    //              }
    //              if($currentItinerary['town&zip_start'] === $_POST['town&zipS']){
    //                  $itineraryTownZipS = $currentItinerary['town&zip_start'];
    //              }
    //              if($currentItinerary['date'] === $_POST['date']) {
    //                  $itineraryDate = $currentItinerary['date'];
    //              }
    //              if($currentItinerary['street_end'] === $_POST['streetE']){
    //                  $itineraryStreetE = $currentItinerary['street_end'];
    //              }
    //              if($currentItinerary['town&zip_end'] === $_POST['town&zipE']){
    //                  $itineraryTownZipE = $currentItinerary['town&zip_end'];
    //              }
     //
    //              $ItineraryId = $currentItinerary['id'];
    //          }
        //  } else {
        //  $sql = "SELECT id FROM trajet ORDER BY id DESC";
        //  $lastId = $instance->query($sql)->fetch();
        //  $ItineraryId = $lastId['id'] +1;
        //  }
         //---------------------------
         //MODIFICATION d'une commande
         //---------------------------
//          if (isset($itineraryStreetS)) {
//              $newStreetStart = $itineraryStreetS + $_POST['streetS'];
//              $sql = "UPDATE trajet SET street_start = ". $newStreetStart . "
//              WHERE id = " .$ItineraryId . "
//              AND street_start = ".$_POST['streetS'];
//          } else {
//              $sql = "INSERT INTO trajet (id, user_id, street_start)
//              VALUES (".$ItineraryId.",".get_current_user_id().", ".$_POST['streetS'].")";
//          }
//
//          if (isset($itineraryTownZipS)) {
//              $newTownStart = $itineraryTownZipS + $_POST['town&zipS'];
//              $sql = "UPDATE trajet SET town&zip_start = ". $newTownStart . "
//              WHERE id = " .$ItineraryId . "
//              AND town&zip_start = ".$_POST['town&zipS'];
//          } else {
//              $sql = "INSERT INTO trajet (id, user_id, town&zip_start)
//              VALUES (".$ItineraryId.",".get_current_user_id().",".$_POST['town&zipS'].")";
//          }
//
//          if (isset($itineraryStreetE)) {
//              $newStreetEnd = $itineraryStreetE + $_POST['streetE'];
//              $sql = "UPDATE trajet SET street_end = ". $newStreetEnd . "
//              WHERE id = " .$ItineraryId . "
//              AND street_end = ".$_POST['streetE'];
//          } else {
//              $sql = "INSERT INTO trajet (id, user_id, street_end)
//              VALUES (".$ItineraryId.",".get_current_user_id().",".$_POST['streetE'].")";
//          }
//
//          if (isset($itineraryTownZipE)) {
//              $newTownEnd = $itineraryTownZipE + $_POST['town&zipE'];
//              $sql = "UPDATE trajet SET town&zip_end = ". $newTownEnd . "
//              WHERE id = " .$ItineraryId . "
//              AND town&zip_end = ".$_POST['town&zipE'];
//          } else {
//              $sql = "INSERT INTO trajet (id, user_id, town&zip_end)
//              VALUES (".$ItineraryId.",".get_current_user_id().",".$_POST['town&zipE'].")";
//          }
//
//          if (isset($itineraryDate)) {
//              $newDate = $itineraryDate + $_POST['date'];
//              $sql = "UPDATE trajet SET date = ". $newDate ."
//              AND date = ".$_POST['date'];
//          } else {
//              $sql = "INSERT INTO trajet (id, user_id, date)
//              VALUES (".$ItineraryId.",".get_current_user_id().",".$_POST['date'].")";
//          }
//          $result = $instance->exec($sql);
//          //-------------------------------------------------
//          //MESSAGE AFFICHER APRES VALIDATION DE LA COMMANDE( à placer)
//          //-------------------------------------------------
//
//         //  if ($result) {
//         //      $message = "Votre commande a été enregistrer.";
//         //  }else{
//         //      $message = "Erreur dans la commande !";
//         //  }
//      }
//    }
// }
