<?php
namespace Model;
use W\Model\Model;
use \W\Model\ConnectionModel;

class insertAvisModel extends Model {
    /**
     * @param $newAvis
     */
    public function insertAvis($newAvis){
        $dbhConnect = new ConnectionModel();
        $instance = $dbhConnect -> getDbh();
        // requête d'ajout d'un avis
        $sql = "INSERT INTO avis (message, users_id)
    VALUES ('".$newAvis['message']."',
    '".$_SESSION['user']['id']."')";
        $insertSuccess = $instance->exec($sql);
    }
} ?>
