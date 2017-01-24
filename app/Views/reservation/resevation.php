<?php //if (!is_admin()) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page</h4>');}; ?>

<?php $this->layout('layout', ['title' => 'gestion des commandes']) ?>

<?php $this->start('header_content') ?>
<h1 class="title">compte Administrateur | gestion des réservations</h1>
<?php $this->stop('header_content') ?>

<?php $this->start('main_content') ?>
<?php
// $users = new ManageUsersController();
// $users = $this -> userTable();
?>


    <h2>Liste des commmandes</h2>

    <!-- entête du tableau -->
    <table>
      <thead>
        <th>Id</th>
        <th>trajet</th>
        <th>user_Id</th>
        <th>Action</th>
      </thead>
      <tbody>

        <!-- contenu du tableau -->
        <?php
        //for ($i=0; $i < count($users); $i++) {

          ?>
        <tr>
          <td><?php //echo $users[$i]['id']; ?></td>
          <td><?php //echo $users[$i]['trajet']; ?></td>
          <td><?php //echo $users[$i]['user_id']; ?></td>


        <!-- bouton de modification  et de suppression-->

          <td>
            <!-- <form class="" action="index.php" method="post">
              <button type="submit" name="userUpdate" value="">
                <input type="hidden" name="userId"  value="<?php //echo $users[$i]['id']; ?>">
                <i class="fa fa-pencil"></i>
              </button>
            </form> -->
            <form class="" action="#" method="post">
              <button type="submit" name="travelDelete">
                <input type="hidden" name="userId" value="<?php //echo $users[$i]['id']; ?>">
                <i class="fa fa-trash"></i>
              </button>
            </form>
          </td>
        </tr>
  <?php //} ?>
      </tbody>
    </table>

<h2><a href="../admin/">Retour index administrateur</a></h2>
<h2><a href="../manageUsers/">gestion d'utilisateurs</a></h2>
<h2><a href="../messageControl/">gestion des messages</a></h2>
<h2><a href="../qualityNotification/">gestion des avis-qualité</a></h2>
<?php $this->stop('main_content') ?>
