<?php //if (!is_admin()) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page</h4>');}; ?>

<?php $this->layout('layout', ['title' => 'Accueil Admin']); ?>
<?php $this->start('header_content') ?>
<h1 class="title">compte Administrateur</h1>
<?php $this->stop('header_content') ?>

<?php $this->start('main_content') ?>
	<h2><a href="../account/">Accueil</a></h2>
	<h2><a href="../manageUsers/">gestion des utilisateurs</a></h2>
  <h2><a href="../messageControl/">gestion des messages</a></h2>
  <h2><a href="../qualityNotification/">gestion des Avis-qualité</a></h2>
  <h2><a href="../reservation/">gestion des commandes</a></h2>


<?php $this->stop('main_content') ?>
