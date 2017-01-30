<?php //Model\AdminModel::is_admin();
//if (!is_admin()) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page</h4>');}; ?>

<?php $this->layout('layout', ['title' => 'gestion d\'utilisateur']) ?>

<?php $this->start('header_content') ?>
<h1 class="title">compte Administrateur | gestion d'utilisateur</h1>
<?php $this->stop('header_content') ?>

<?php $this->start('main_content') ?>

    <h2>Liste des utilisateurs</h2>

    <!-- entête du tableau -->
    <table>
      <thead>
        <th>Id</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Grade</th>
        <th>E-mail</th>
        <th>n° de téléphone</th>
        <th>mot de passe</th>
        <th>Action</th>
      </thead>
      <tbody>
        <!-- contenu du tableau -->
        <?php \Controller\UserManagerController::userTable(); ?>    
      </tbody>
    </table>

<h2><a href="../admin/">Retour index administrateur</a></h2>
<h2><a href="../contactControl/">gestion des messages</a></h2>
<h2><a href="../qualityNotification/">gestion des Avis-qualité</a></h2>
<h2><a href="../reservation/">gestion des commandes</a></h2>
<?php $this->stop('main_content') ?>
