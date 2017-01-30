<?php

namespace Model;

use \W\Model\Model;
use \W\Model\ConnexionModel;

class DeleteModel extends Model
{
    public function deleteMsg($validItinerary)
    {
        $sql = "DELETE FROM avis WHERE id = " . $_POST['msgId']; //ajouter un input hidden
    }

    public function deleteInformation()
    {
        $sql = "DELETE FROM renseignement WHERE id = ". $_POST['infoId'];
    }

    public function deleteItinerary ()
    {
        $sql = "DELETE FROM trajet WHERE id = ". $_POST['ItinId'];
    }
}

