<?php if (empty($_SESSION)) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page !!!</h4>');}; ?>
<?php if (!empty($_SESSION['user']['grad_id'] < 3)) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page !!!</h4>');}; ?>
<?php $this->layout('layout', ['title' => 'gestion des commandes']) ?>

<?php $this->start('header_content') ?>
<h1 class="title">compte Administrateur | gestion des réservations</h1>
<?php $this->stop('header_content') ?>

<?php $this->start('main_content') ?>


<h2><a href="../admin/">Retour index administrateur</a></h2>
<h2><a href="../userManager/">gestion d'utilisateurs</a></h2>
<h2><a href="../contactControl/">gestion des messages</a></h2>
<h2><a href="../qualityNotification/">gestion des avis-qualité</a></h2>
<?php $this->stop('main_content') ?>
