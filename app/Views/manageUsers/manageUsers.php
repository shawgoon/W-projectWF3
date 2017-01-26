<?php //$adminSession = new AccountController();
//if ($adminSession -> !is_admin()) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page</h4>');}; ?>

<?php $this->layout('layout', ['title' => 'gestion d\'utilisateur']) ?>

<?php $this->start('header_content') ?>
<h1 class="title">compte Administrateur | gestion d'utilisateur</h1>
<?php $this->stop('header_content') ?>

<?php $this->start('main_content') ?>
<?php
// $users = new ManageUsersController();
// $users = $this -> userTable();
?>


    <h2>Liste des utilisateurs</h2>

    <!-- entête du tableau -->
    <table>
      <thead>
        <th>Id</th>
        <th>Nom</th>
        <th>prenom</th>
        <th>Grade</th>
        <th>E-mail</th>
        <th>n° de téléphone</th>
        <th>mot de passe</th>
        <th>Action</th>
      </thead>
      <tbody>

        <!-- contenu du tableau -->
        <?php
        //for ($i=0; $i < count($users); $i++) {

          ?>
        <tr>
          <td><?php //echo $users[$i]['id']; ?></td>
          <td><?php //echo $users[$i]['name']; ?></td>
          <td><?php //echo $users[$i]['firstname']; ?></td>
          <td><?php //echo $users[$i]['grad_id']; ?></td>
          <td><?php //echo $users[$i]['email']; ?></td>
          <td><?php //echo $users[$i]['numbrephone']; ?></td>
          <td><?php //echo $users[$i]['password']; ?></td>

        <!-- bouton de modification  et de suppression-->

          <td>
            <form class="" action="index.php" method="post">
              <button type="submit" name="userUpdate" value="">
                <input type="hidden" name="userId"  value="<?php //echo $users[$i]['id']; ?>">
                <i class="fa fa-pencil"></i>
              </button>
            </form>
            <form class="" action="index.php" method="post">
              <button type="submit" name="userDelete">
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
<h2><a href="../messageControl/">gestion des messages</a></h2>
<h2><a href="../qualityNotification/">gestion des Avis-qualité</a></h2>
<h2><a href="../reservation/">gestion des commandes</a></h2>
<?php $this->stop('main_content') ?>
