<?php
namespace Model;
use W\Model\Model;
use \W\Model\ConnectionModel;

class InsertAvisModel extends Model {
    /**
     * @param $newAvis
     */
    public function insertAvis($newAvis){
        $dbhConnect = new ConnectionModel();
        $instance = $dbhConnect -> getDbh();
        // requête d'ajout d'un avis
        $sql = 'INSERT INTO avis (message, firstname, name, user_id, notation)
    VALUES ("'.$newAvis['message'].'",
    "'.$newAvis['firstname'].'",
    "'.$newAvis['name'].'",
    "'.$_SESSION['user']['id'].'",
    "'.$newAvis['notation'].'")';
        $insertAvis = $instance->exec($sql);
    }
} ?>
