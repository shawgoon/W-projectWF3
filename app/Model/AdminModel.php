<?php
namespace Model;
use W\Model\Model;
use \W\Model\ConnectionModel;

class AdminModel extends Model {
  // instancié un objet de connection
  $dbhConnect = new ConnectionModel();
  // on appel la méthode d'appel de PDO à notre BDD
  $instance = $dbhConnect -> getDbh();
   //  start session
  session_start();

  public static function is_log() {
      return (isset($_SESSION['user']) && $_SESSION['user']['firstname'] !== null);
    }

  public static function get_current_user_id() {
      if (is_log()) {
        return $_SESSION['user']['userId'];
      } else {
        return false;
      }
    }

  public static function is_admin() {
      if (is_log()) {
        return ($_SESSION['user']['grad_id'] === "'3','4'");
      } else {
        return false;
      }
    }
} ?>
