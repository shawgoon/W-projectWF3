// animation des formulaires en jQuery !
$(function() {

  var container = $('#wrap');
  var formSign = $('#formSignup');
  var formLog = $('#formLogin');
  var formMsg = $('#formAvis');
  var formContact = $('#formContact');
  var formItinerary = $('#formItinerary');
  var formGrad = $('#formGrad');

// cacher le wrap et les formulaires --------------
  container.hide();
  formSign.hide();
  formLog.hide();
  formMsg.hide();
  formContact.hide();
  formItinerary.hide();
  formGrad.hide();

  // TRANSITION du formulaire d'inscription-----------------------
  $("#signup").click(function() {
    container.show();
    formSign.show();
  });

  // TRANSITION du formulaire de connexion -----------------------
  $("#login").click(function() {
    container.show();
    formLog.show();
  });

  // TRANSITION du formulaire d'avis
  $("#avis").click(function() {
    container.show();
    formMsg.show();
  });

  // TRANSITION du formulaire de contact
  $("#info").click(function() {
    container.show();
    formContact.show();
  });

  // TRANSITION du formulaire de trajet
  $("#itinerary").click(function() {
    container.show();
    formItinerary.show();
  });

  // TRANSITION du formulaire de grade
  $("#gradUpdate").click(function() {
    container.show();
    formGrad.show();
  });
  // annulation de la TRANSITION formulaire---------------------------
  container.click(function(){
    container.hide();
    formSign.hide();
    formLog.hide();
    formMsg.hide();
    formContact.hide();
    formItinerary.hide();
    formGrad.hide();
  });

  // // Simulé un click sur le home
  //  var tab = $('tab');
  // for (i = 0; i < tab.length; i++) {
  //   tab[i].addEventListener('click');
  //   if (i === 0) {
  //     tab[i].addClass('selected');
  //   }
  // }

//   e.preventDefault()
//   $(this).tab('show')
// })
//
// $('#myTab a[href="#home"]').tab('show') // Select tab by name
// $('#myTab a:first').tab('show') // Select first tab
// $('#myTab a:last').tab('show') // Select last tab
// $('#myTab li:eq(2) a').tab('show') // Select third tab (0-indexed)

  // Faire défiler des images en background -----------------
     var images = [
         "http://localhost/taxi-dieppe/public/assets/images/port_plaisance.jpg",
         "http://localhost/taxi-dieppe/public/assets/images/train.jpg",
         "http://localhost/taxi-dieppe/public/assets/images/plage.jpg",
         "http://localhost/taxi-dieppe/public/assets/images/chateau2.jpg",
         "http://localhost/taxi-dieppe/public/assets/images/pont-colbert-dieppe-nuit.jpg"
     ];
     var $main = $("main"),
         $bg = $(".back"),
         n = images.length,
         c = 0;

   // un array des images
     for(var i=0; i<n; i++){
         var tImg = new Image();
         tImg.src = images[i];
     }

     $main.css({backgroundImage : "url("+images[c]+")"});
     $main.css({backgroundSize : "cover"});
     (function loopBg(){
         $bg.hide().css({backgroundImage : "url("+images[++c%n]+")"}).delay(3000).fadeTo(2000, 1, function(){
             $main.css({backgroundImage : "url("+images[c%n]+")"});
             loopBg();
         });
     }());

   // Konami Code
     if ( window.addEventListener ) {
         var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65";
         window.addEventListener("keydown", function(e){
             kkeys.push( e.keyCode );
             if ( kkeys.toString().indexOf( konami ) >= 0 ) {
                 alert("Bien joué ! Le Konami Code n'est plus un secret pour vous !");
                 window.location = "http://localhost/taxi-dieppe/public/";
             }
         }, true);
     }

// *********** Animation du système de natation des Avis
/* effet de jauge à la souris */
   // On ajoute la classe "js" à la liste pour mettre en place par la suite du code CSS uniquement dans le cas où le Javascript est activé
   $("ul.notes-echelle").addClass("js");
   // On passe chaque note à l'état grisé par défaut
   $("ul.notes-echelle li").addClass("note-off");
   // Au survol de chaque note à la souris
   $("ul.notes-echelle li").mouseover(function() {
     // On passe les notes supérieures à l'état inactif (par défaut)
     $(this).nextAll("li").addClass("note-off");
     // On passe les notes inférieures à l'état actif
     $(this).prevAll("li").removeClass("note-off");
     // On passe la note survolée à l'état actif (par défaut)
     $(this).removeClass("note-off");
   });
   // Lorsque l'on sort du sytème de notation à la souris
   $("ul.notes-echelle").mouseout(function() {
     // On passe toutes les notes à l'état inactif
     $(this).children("li").addClass("note-off");
     // On simule (trigger) un mouseover sur la note cochée s'il y a lieu
     $(this).find("li input:checked").parent("li").trigger("mouseover");
   });

/* effet de jauge au clavier */
   $("ul.notes-echelle input")
	// Lorsque le focus est sur un bouton radio
	.focus(function() {
		// On passe les notes supérieures à l'état inactif (par défaut)
		$(this).parent("li").nextAll("li").addClass("note-off");
		// On passe les notes inférieures à l'état actif
		$(this).parent("li").prevAll("li").removeClass("note-off");
		// On passe la note du focus à l'état actif (par défaut)
		$(this).parent("li").removeClass("note-off");
	})
	// Lorsque l'on sort du sytème de notation au clavier
	.blur(function() {
		// Si il n'y a pas de case cochée
		if($(this).parents("ul.notes-echelle").find("li input:checked").length === 0) {
			// On passe toutes les notes à l'état inactif
			$(this).parents("ul.notes-echelle").find("li").addClass("note-off");
		}
	});

/* affichage d'effet dynamique */
  $("ul.notes-echelle input")
	// Lorsque le focus est sur un bouton radio
	.focus(function() {
		// On supprime les classes de focus
		$(this).parents("ul.notes-echelle").find("li").removeClass("note-focus");
		// On applique la classe de focus sur l'item tabulé
		$(this).parent("li").addClass("note-focus");
		// [...] cf. code précédent
	})
	// Lorsque l'on sort du sytème de notation au clavier
	.blur(function() {
		// On supprime les classes de focus
		$(this).parents("ul.notes-echelle").find("li").removeClass("note-focus");
		// [...] cf. code précédent
	})
	// Lorsque la note est cochée
	.click(function() {
		// On supprime les classes de note cochée
		$(this).parents("ul.notes-echelle").find("li").removeClass("note-checked");
		// On applique la classe de note cochée sur l'item choisi
		$(this).parent("li").addClass("note-checked");
	});

  // On simule un survol souris des boutons cochés par défaut
    $("ul.notes-echelle input:checked").parent("li").trigger("mouseover");
    // On simule un click souris des boutons cochés
    $("ul.notes-echelle input:checked").trigger("click");
});
