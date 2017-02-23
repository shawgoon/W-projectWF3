<?php if (empty($_SESSION)) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page !!!</h4>');}; ?>
<?php if (!empty($_SESSION['user']['grad_id'] < 3)) {die('<h4>Vous n\'avez pas les droits pour accéder à cette page !!!</h4>');}; ?>

<?php $this->layout('layout', ['title' => 'Accueil Admin']); ?>
<?php $this->start('header_content') ?>
<h1 class="title">compte Administrateur</h1>
<?php $this->stop('header_content') ?>

<?php $this->start('nav_content') ?>
	<ul class="tabs">
		<li><a class="tab" href="../"><i class="fa fa-home" aria-hidden="true"></i></a></li>
		<li><a id="usersTable" class="tab" href="#">Utilisateurs</a></li>
		<li><a id="resaTable" class="tab" href="#">Réservations</a></li>
		<li><a id="qualityTable" class="tab" href="#quality">Satisfactions</a></li>
		<li><a id="requestTable" class="tab" href="#">Messages</a></li>
		<li><a id="pictTable" class="tab" href="#">Background</a></li>
	</ul>
<?php $this->stop('nav_content') ?>

<?php $this->start('main_content') ?>
<div id="users" class="tab-content">
		<h2 class="table-title">Liste des utilisateurs</h2>
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
			<?php for ($i=0; $i < count($users); $i++) { ?>
			<tr>
				<td><?php echo $users[$i]['id']; ?></td>
				<td><?php echo $users[$i]['name']; ?></td>
				<td><?php echo $users[$i]['firstname']; ?></td>
				<td><?php echo $users[$i]['grad_id']; ?></td>
				<td><?php echo $users[$i]['email']; ?></td>
				<td><?php echo $users[$i]['phonenumber']; ?></td>
				<td><?php echo $users[$i]['password']; ?></td>
				<td>
				  <button id="signup" href="#" type="submit" value="<?php echo $users[$i]['id']; ?>">
						<input type="hidden" name="userId"  value="">
						<i class="fa fa-pencil"></i>
					</button>
					<form class="" action="http://localhost/taxi-dieppe/public/forms/deleteUser/" method="post">
						<button type="submit" name="userDelete">
							<input type="hidden" name="userId" value="<?php echo $users[$i]['id']; ?>">
							<i class="fa fa-trash"></i>
						</button>
					</form>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<div id="resa" class="tab-content">
		<h2 class="table-title">Liste des réservations</h2>
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
			<?php for ($i=0; $i < count($travel); $i++) { ?>
      <tr>
        <td><?php echo $travel[$i]['id']; ?></td>
        <td><?php echo $travel[$i]['user_id']; ?></td>
        <td><?php echo $travel[$i]['choice']; ?></td>
        <td><?php echo $travel[$i]['street_start']; ?></td>
        <td><?php echo $travel[$i]['town_zip_start']; ?></td>
        <td><?php echo $travel[$i]['date_start']; ?></td>
        <td><?php echo $travel[$i]['street_end']; ?></td>
        <td><?php echo $travel[$i]['town_zip_end']; ?></td>
        <td><?php echo $travel[$i]['date_end']; ?></td>
   <!-- /* bouton de suppression */ -->
        <td>
					<?php //include ('http://localhost/taxi-dieppe/public/forms/deleteTravel.php'); ?>
        	<form class="" action="http://localhost/taxi-dieppe/public/forms/deletetravel/" method="post">
            <button type="submit" name="travelDelete">
              <input type="hidden" name="travelId" value="'<?php //echo $id ?>">
            <i class="fa fa-trash"></i>
            </button>
          </form>
        </td>
      </tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<div id="quality" class="tab-content">
		<h2 class="table-title">Liste des Avis</h2>
	<table>
	<!-- entête du tableau -->
		<thead>
			<th>Id</th>
			<th>Avis-qualité</th>
			<th>user_Id</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Note</th>
			<th>Action</th>
		</thead>
		<!-- contenu du tableau -->
		<tbody>
			<?php for ($i=0; $i < count($quality); $i++) { ?>
	    <tr>
	    	<td><?php echo $quality[$i]['id']; ?></td>
	    	<td><?php echo $quality[$i]['message']; ?></td>
	    	<td><?php echo $quality[$i]['user_id']; ?></td>
	    	<td><?php echo $quality[$i]['name']; ?></td>
	    	<td><?php echo $quality[$i]['firstname']; ?></td>
	    	<td><?php echo $quality[$i]['notation']; ?></td>
   <!-- /* bouton de suppression */ -->
	    	<td>
					<?php //include ('http://localhost/taxi-dieppe/public/forms/deleteQuality/.php'); ?>
	    		<form class="" action="http://localhost/taxi-dieppe/public/forms/deleteQuality/" method="post">
	     			<button type="submit" name="qualityDelete">
	        		<input type="hidden" name="qualityId" value="<?php// echo $quality[$i]['id']; ?>">
	        	<i class="fa fa-trash"></i>
	    				</button>
	  			</form>
	    	</td>
	  	</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<!-- tableau des messages hors utilisateurs -->
<div id="request" class="tab-content">
	<h2 class="table-title">Liste des messages</h2>
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
			<?php for ($i=0; $i < count($inquiry); $i++) { ?>
			<tr>
	      <td><?php echo $inquiry[$i]['id']; ?></td>
	      <td><?php echo $inquiry[$i]['choice']; ?></td>
	      <td><?php echo $inquiry[$i]['name']; ?></td>
	      <td><?php echo $inquiry[$i]['firstname']; ?></td>
	      <td><?php echo $inquiry[$i]['email']; ?></td>
	      <td><?php echo $inquiry[$i]['phonenumber']; ?></td>
	      <td><?php echo $inquiry[$i]['message']; ?></td>
	   <!-- /* bouton de suppression */ -->
	      <td>
					<?php //include ('http://localhost/taxi-dieppe/public/forms/deleteInquiry.php'); ?>
	        <form class="" action="http://localhost/taxi-dieppe/public/forms/deleteInquiry/" method="post">
	          <button type="submit" name="inquiryDelete">
	            <input type="hidden" name="inquiryId" value="<?php //echo $inquiry[$i]['id']; ?>">
	            <i class="fa fa-trash"></i>
	          </button>
	        </form>
	      </td>
	    </tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<!-- tableau des images de fond d'écran -->
<div id="pict" class="tab-content">
	<h2 class="table-title">Liste des images</h2>
	<table>
	<!-- entête du tableau -->
		<thead>
			<th>Id</th>
			<th>description de l'image</th>
			<th>Data Image</th>
			<th>Action</th>
		</thead>
		<!-- contenu du tableau -->
		<tbody>
			<?php for ($i=0; $i < count($picture); $i++) { ?>
			<tr>
				<td><?php echo $picture[$i]['id']; ?></td>
				<td><?php echo $picture[$i]['description']; ?></td>
				<td><?php echo $picture[$i]['picture']; ?></td>
				<td>
					<?php //include ('http://localhost/taxi-dieppe/public/forms/updatePicture/'); ?>
					<form class="" action="http://localhost/taxi-dieppe/public/forms/updatePicture/" method="post">
						<input type="file" name="" value="choisir un fichier">
						<button type="submit" name="pictureUpdate">
	            <input type="hidden" name="pictureId" value="<?php //echo $picture[$i]['id']; ?>">
	            <i class="fa fa-pencil"></i>
	          </button>
	        </form>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<?php $this->stop('main_content') ?>
