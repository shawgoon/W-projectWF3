<?php if (empty($_SESSION)) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page !!!</h4>');}; ?>
<?php $this->layout('layout', ['title' => 'userOnly']) ?>

<?php $this->start('header_content') ?>
  <div class="title">Taxi-Dieppe</div>
<?php $this->stop('header_content') ?>

<?php $this->start('main_content') ?>

<h2 class="white">Vous devez vous connectez pour accéder à cette fonctionnalité</h2>

<?php $this->stop('main_content') ?>
