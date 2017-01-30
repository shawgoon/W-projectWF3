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
});
