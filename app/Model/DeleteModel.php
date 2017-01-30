<?php

namespace Model;

use \W\Model\Model;

class DeleteModel extends Model
{
    public function deleteMsg($validItinerary)
    {

        $sql = "DELETE FROM avis WHERE id = " . $_POST['msgId']; //ajouter un input hidden

        $deleteSuccess = $instance->exec($sql);

        if ($deleteSuccess) {
            $message = "Message effacé";
        } else {
            $message = "Erreur";
        }
    }

    public function deleteInformation()
    {
        $sql = "DELETE FROM renseignement WHERE id = ". $_POST['infoId'];

        $deleteSuccess = $instance->exec($sql);

        if ($deleteSuccess) {
            $message = "Effacement confirmé !";
        } else {
            $message = "Erreur";        }
    }

    public function deleteItinerary (){
        $sql = "DELETE FROM trajet WHERE id = ". $_POST['ItinId'];

        $deleteSuccess = $instance->exec($sql);

        if ($deleteSuccess) {
            $message = "Effacement confirmé !";
        } else {
            $message = "Erreur";        }
    }
}

