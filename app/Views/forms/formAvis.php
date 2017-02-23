<!-- formulaire d'avis client -->
<div id="formAvis" class="hide">
    <h2>Votre avis nous intéresse</h2>
    <form class="" action="http://localhost/taxi-dieppe/public/forms/formAvis/" method="post">
      <label class="inf">&#9998;Informations :</label><br><hr>
      <label for="">Nom <span class="star">*</span></label>
      <input type="text" name="name" value="" placeholder="Nom"><br>
      <label for="">Prénom <span class="star">*</span></label>
      <input type="text" name="firstname" value="" placeholder="Prénom"><br>
      <label for="">Téléphone <span class="star">*</span></label>
      <input type="text" required="required" name="phonenumber" value="" placeholder="Téléphone*"><br>
      <label for="">Email <span class="star">*</span></label>
      <input type="email" required="required" name="email" value="" placeholder="Email*"><br>
      <label for="">Message <span class="star">*</span></label>
      <textarea required="required" name="message" placeholder="Message*"></textarea><br>
    <!-- note de satisfaction -->
      <div class="notes">
        <ul class="notes-echelle">
        	<li>
        		<label for="note01" title="Note&nbsp;: 1 sur 5">1</label>
        		<input type="radio" name="notesA" id="note01" value="1" />
        	</li>
        	<li>
        		<label for="note02" title="Note&nbsp;: 2 sur 5">2</label>
        		<input type="radio" name="notesA" id="note02" value="2" />
        	</li>
        	<li>
        		<label for="note03" title="Note&nbsp;: 3 sur 5">3</label>
        		<input type="radio" name="notesA" id="note03" value="3" />
        	</li>
        	<li>
        		<label for="note04" title="Note&nbsp;: 4 sur 5">4</label>
        		<input type="radio" name="notesA" id="note04" value="4" />
        	</li>
        	<li>
        		<label for="note05" title="Note&nbsp;: 5 sur 5">5</label>
        		<input type="radio" name="notesA" id="note05" value="5" />
        	</li>
        </ul>
      </div>
      <input type="hidden" name="userId" value="">
      <input class="" type="submit" name="addMessage" value="Envoyer">
    </form>
    <p><span class="star">*</span> Champs obligatoires</p>
  </div>
