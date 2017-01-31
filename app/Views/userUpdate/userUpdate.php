<?php if (empty($_SESSION)) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page !!!</h4>');}; ?>
<?php if (!empty($_SESSION['user']['grad_Id'] !== 3) || ($_SESSION['user']['grad_Id'] !== 4)) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page !!!</h4>');}; ?>
<?php var_dump($_SESSION); ?>
<?php $this->layout('layout', ['title' => 'Modification d\'un utilisateur']) ?>

<?php $this->start('header_content') ?>
  <h1 class="title">compte Administrateur | modification d'un utilisateur</h1>
<?php $this->stop('header_content') ?>

<?php $this->start('main_content') ?>
<div class="hide">
  <?php \Controller\UserUpdateController::userUpdate(); ?>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('footer_content') ?>
<?php $this->stop('footer_content') ?>
