<?php
namespace Model;
use \W\Model\Model;
use \W\Model\ConnectionModel;

class DeleteModel extends Model {

    public function qualityDelete($validItinerary) {
      // instancié un objet de connection
      $dbhConnect = new ConnectionModel();
      // on appel la méthode d'appel de PDO à notre BDD
      $instance = $dbhConnect -> getDbh();
        $sql = "DELETE FROM avis WHERE id = " . $_POST['qualityId'];
        $deleteQuality = $instance -> exec($sql);
    }

    public function inquiryDelete() {
      // instancié un objet de connection
      $dbhConnect = new ConnectionModel();
      // on appel la méthode d'appel de PDO à notre BDD
      $instance = $dbhConnect -> getDbh();
        $sql = "DELETE FROM renseignements WHERE id = ". $_POST['inquiryId'];
        $deleteInquiry = $instance -> exec($sql);
    }

    public function travelDelete () {
      // instancié un objet de connection
      $dbhConnect = new ConnectionModel();
      // on appel la méthode d'appel de PDO à notre BDD
      $instance = $dbhConnect -> getDbh();
        $sql = "DELETE FROM trajet WHERE id = ". $_POST['travelId'];
        $deleteTravel = $instance -> exec($sql);
    }

    public function userDelete() {
      // instancié un objet de connection
      $dbhConnect = new ConnectionModel();
      // on appel la méthode d'appel de PDO à notre BDD
      $instance = $dbhConnect -> getDbh();
        $sql = "DELETE FROM users WHERE id=".$_POST['userId'];
        $deleteUser = $instance -> exec($sql);
    }
}
