<?php
namespace Model;
use W\Model\Model;
use \W\Model\ConnectionModel;

class AdminModel extends Model {
  
  public function is_log() {
      return (isset($_SESSION['user']) && $_SESSION['user']['firstname'] !== null);
    }

  public function get_current_user_id() {
      if (is_log()) {
        return $_SESSION['user']['userId'];
      } else {
        return false;
      }
    }

  public function is_admin() {
      if (is_log()) {
        return ($_SESSION['user']['grad_id'] === "'3','4'");
      } else {
        return false;
      }
    }
} ?>

<?php //  start session
//session_start(); ?>
