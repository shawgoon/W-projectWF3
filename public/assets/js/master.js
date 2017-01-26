$(function(){

  var container = $('#wrap');
  var formSign = $('#formSignup');
  var formLog = $('#formLogin');
  var formMsg = $('#formAvis');
  var formContact = $('#formContact');
  var formItinerary = $('#formItinerary');

// cacher le background et les formulaires --------------
   container.hide();
   formSign.hide();
  formLog.hide();
  formMsg.hide();
  formContact.hide();
  formItinerary.hide();

  // TRANSITION du formulaire d'inscription-----------------------
  $("#signup").click(function (){
    container.show();
    formSign.show();
    formLog.hide();
    formMsg.hide();
    formContact.hide();
    formItinerary.hide();
  });

  // TRANSITION du formulaire de connexion -----------------------
  $("#login").click(function (){
    container.show();
    formSign.hide();
    formLog.show();
    formMsg.hide();
    formContact.hide();
    formItinerary.hide();
  });

  // TRANSITION du formulaire d'avis
  $("#avis").click(function (){
    container.show();
    formSign.hide();
    formLog.hide();
    formMsg.show();
    formContact.hide();
    formItinerary.hide();
  });

  // TRANSITION du formulaire de contact
  $("#contact").click(function (){
    container.show();
    formSign.hide();
    formLog.hide();
    formMsg.hide();
    formContact.show();
    formItinerary.hide();
  });

  // TRANSITION du formulaire de trajet
  $("#itinerary").click(function (){
    container.show();
    formSign.hide();
    formLog.hide();
    formMsg.hide();
    formContact.hide();
    formItinerary.show();
  });

  // annulation de la TRANSITION ---------------------------
  container.click(function(){
    container.hide();
    formSign.hide();
    formLog.hide();
    formMsg.hide();
    formContact.hide();
    formItinerary.hide();
  });

  // Faire défiler des images en background -----------------

     var images = [
         "assets/images/taxi1.jpg",
         "assets/images/taxi4.jpg",
         "assets/images/taxi3.jpg",
         "assets/images/taxi5.jpg",
         "assets/images/taxi6.jpg"
     ];
     var $body = $("body"),
         $bg = $(".back"),
         n = images.length,
         c = 0;

   // un array des images
     for(var i=0; i<n; i++){
         var tImg = new Image();
         tImg.src = images[i];
     }

     $body.css({backgroundImage : "url("+images[c]+")"});

     (function loopBg(){
         $bg.hide().css({backgroundImage : "url("+images[++c%n]+")"}).delay(3000).fadeTo(2000, 1, function(){
             $body.css({backgroundImage : "url("+images[c%n]+")"});
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
                 window.location = "http://localhost/W-projectWF3-Sailor/public/";
             }
         }, true);
     }
 });
