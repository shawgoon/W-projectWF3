<?php //$adminSession = new AccountController();
//if ($adminSession -> !is_admin()) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page</h4>');}; ?>

<?php $this->layout('layout', ['title' => 'gestion des messages']) ?>

<?php $this->start('header_content') ?>
<h1 class="title">compte Administrateur | gestion des messages</h1>
<?php $this->stop('header_content') ?>

<?php $this->start('main_content') ?>
<?php
// $users = new ManageUsersController();
// $users = $this -> userTable();
?>


    <h2>Liste des messages</h2>

    <!-- entête du tableau -->
    <table>
      <thead>
        <th>Id</th>
        <th>Choix</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>E-mail</th>
        <th>N° téléphone</th>
        <th>message</th>
        <th>Action</th>
      </thead>
      <!-- contenu du tableau -->
      <tbody>
        <?php \Controller\ContactControlController::messageTable(); ?>
      </tbody>
    </table>

<h2><a href="../admin/">Retour index administrateur</a></h2>
<h2><a href="../userManager/">gestion d'utilisateurs</a></h2>
<h2><a href="../qualityNotification/">gestion des Avis-qualité</a></h2>
<h2><a href="../reservation/">gestion des commandes</a></h2>
<?php $this->stop('main_content') ?>
