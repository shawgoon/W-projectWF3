<?php $this->layout('layout', ['title' => 'userOnly']) ?>

<?php $this->start('header_content') ?>
	<div class="title">Taxi-Dieppe</div>
	<div class="minititle">
		<a id="signup" href="#">Inscription</a> |
		<a id="login" href="#">Connexion</a>
	</div>
<?php $this->stop('header_content') ?>

<?php $this->start('main_content') ?>

<h2>Vous devez vous connectez pour accéder à cette fonctionnalité</h2>

<?php $this->stop('main_content') ?>
