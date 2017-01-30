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
