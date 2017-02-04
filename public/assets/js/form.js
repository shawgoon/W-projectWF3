// animation des formulaires en jQuery !

$(function(){

  var container = $('#wrap');
  var formSign = $('#formSignup');
  var formLog = $('#formLogin');
  var formMsg = $('#formAvis');
  var formContact = $('#formContact');
  var formItinerary = $('#formItinerary');
  var home = $('#home');
  var satisfaction = $('#satisfaction');
  var gps = $('#gps');
  var contact = $('#contact');
  var account = $('#account');

// cacher le wrap et les formulaires --------------
  container.hide();
  formSign.hide();
  formLog.hide();
  formMsg.hide();
  formContact.hide();
  formItinerary.hide();

  // cacher les pages de navigation sauf la home
  satisfaction.hide();
  gps.hide();
  contact.hide();
  account.hide();

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

  // annulation de la TRANSITION formulaire---------------------------
  container.click(function(){
    container.hide();
    formSign.hide();
    formLog.hide();
    formMsg.hide();
    formContact.hide();
    formItinerary.hide();
  });

  // // TRANSITION de navigation
  // var tab = element.getElementByClassName('tab');
  // for (var i = 0; i < tab.length; i++) {
  //   tab[i].addEventListener('click');
  //   if (i === 0) {
  //     tab[i].addClass('selected')
  //   }
  // };

  $('#homePage').click(function onSelect(e) {
    e.preventDefault()
    // classlist.remove('selected');
    $(this).addClass('selected');
    home.show();
    satisfaction.hide();
    gps.hide();
    contact.hide();
    account.hide();
  });

  $('#satisfactionPage').click(function onSelect(e) {
    e.preventDefault()
    $(this).addClass('selected');
    home.hide();
    satisfaction.show();
    gps.hide();
    contact.hide();
    account.hide();
  });

  $('#gpsPage').click(function(e) {
    e.preventDefault()
    $(this).addClass('selected');
    home.hide();
    satisfaction.hide();
    gps.show();
    contact.hide();
    account.hide();
  });

  $('#contactPage').click(function(e) {
    e.preventDefault()
    $(this).addClass('selected');
    home.hide();
    satisfaction.hide();
    gps.hide();
    contact.show();
    account.hide();
  });

  $('#accountPage').click(function(e) {
    e.preventDefault()
    $(this).addClass('selected');
    home.hide();
    satisfaction.hide();
    gps.hide();
    contact.hide();
    account.show();
  });


  // animation de la navbar
//   $('#myTabs a').click(function (e) {
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
         "http://localhost/W-projectWF3/public/assets/images/port_plaisance.jpg",
         "http://localhost/W-projectWF3/public/assets/images/train.jpg",
         "http://localhost/W-projectWF3/public/assets/images/plage.jpg",
         "http://localhost/W-projectWF3/public/assets/images/chateau2.jpg",
         "http://localhost/W-projectWF3/public/assets/images/pont-colbert-dieppe-nuit.jpg"
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
                 window.location = "http://localhost/W-projectWF3/public/";
             }
         }, true);
     }
 });
