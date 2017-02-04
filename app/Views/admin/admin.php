<?php if (empty($_SESSION)) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page !!!</h4>');}; ?>
<?php if (!empty($_SESSION['user']['grad_id'] < 3)) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page !!!</h4>');}; ?>

<?php $this->layout('layout', ['title' => 'Accueil Admin']); ?>
<?php $this->start('header_content') ?>
<h1 class="title">compte Administrateur</h1>
<?php $this->stop('header_content') ?>

<?php $this->start('nav_content') ?>
	<ul class="tabs">
		<li><a class="tab" href="../"><i class="fa fa-home" aria-hidden="true"></i></a></li>
		<li><a class="tab" href="#users">Utilisateurs</a></li>
		<li><a class="tab" href="#resa">Réservations</a></li>
		<li><a class="tab" href="#quality">Satisfactions</a></li>
		<li><a class="tab" href="#request">Messages</a></li>
		<li><a class="tab" href="#picture">Background</a></li>
	</ul>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
<div id="users" class="tab-content">
	<h2>Liste des utilisateurs</h2>
	<table>
		<!-- entête du tableau -->
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
		<!-- contenu du tableau -->
		<tbody>
			<?php \Controller\UserManagerController::userTable(); ?>
		</tbody>
</table>
</div>
<div id="resa" class="tab-content">
	<h2>Liste des réservations</h2>
	<table>
	<!-- entête du tableau -->
		<thead>
			<th>Id</th>
			<th>user_Id</th>
			<th>trajet</th>
			<th>street_start</th>
			<th>town_zip_start</th>
			<th>date_start</th>
			<th>street_end</th>
			<th>town_zip_end</th>
			<th>date_end</th>
			<th>Action</th>
		</thead>
		<!-- contenu du tableau -->
		<tbody>
				<?php \Controller\ReservationController::travelTable(); ?>
		</tbody>
	</table>
</div>
<div id="quality" class="tab-content">
	<h2>Liste des Avis</h2>
	<table>
	<!-- entête du tableau -->
		<thead>
			<th>Id</th>
			<th>Avis-qualité</th>
			<th>user_Id</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Action</th>
		</thead>
		<!-- contenu du tableau -->
		<tbody>
			<?php \Controller\QualityNotificationController::qualityTable(); ?>
		</tbody>
	</table>
</div>
<div id="request" class="tab-content">
	<h2>Liste des messages</h2>
	<table>
	<!-- entête du tableau -->
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
</div>
<?php $this->stop('main_content') ?>
