window.onload = function(){

  // On masque la map dès le départ car pas utile au lancement de page puisque les données GPS n'ont pas été récupérées
  var mapContainer = document.getElementById('map');
  mapContainer.style.display="none";

  // On déclare nos variables pour quels soient accesibles partout dans le code
  var lati;
  var long;

  // Bouton localisation
  var GPSButton = document.getElementById('localisation');

  //initMap();


  // if (GPSButton) {
  //   GPSButton.addEventListener('click', function(e){

      //e.preventDefault();

      // On affiche la map dès que le bouton est pressé
      getLocation();

      // toutes les 3 minutes (180000 ms) - 2 minutes (120000 ms)ça réappelle la geolocalisation
      var actualPosition = window.setInterval(actualisationMap,120000);
      function actualisationMap(){
        getLocation();
      }
  //   });
  // }

  // permet de récupérer la position en long et lat
  function getLocation() {
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
      } else {
          body.innerHTML = "Geolocation is not supported by this browser.";
      }
  }

  function showPosition(position) {
      // On affecte les valeurs GPS aux 2 variables déclarées en début de code
      long = position.coords.longitude;
      lati = position.coords.latitude;

      // puis on lance la fonction d'affichage de la map
      initMap();

      // On appelle la fonction d'envoi des coordonnées GPS
      sendGPSBDD();

  }

  // Cette variable correspond à l'objet google maps
  var map;

  function initMap() {
    //
    // $.ajax({
    //   url: 'localisation.php',
    //   method : 'POST',
    //   data : data,
    //   dataType: 'json',
    //   success: function(result){
    //     console.log(result['latitude']);
    //   }
    // });

    mapContainer.style.display="block";
    // Create a map object and specify the DOM element for display.
    map = new google.maps.Map(document.getElementById('map'), {
      center:{lat: lati,lng: long},
      scrollwheel: true,
      zoom: 10
    });





    for (var i = 0; i < listeTaxi.length; i++) {

      // On convertit les chaines de string en number
      var parsedlong = parseFloat(listeTaxi[i]['longitude']);
      var parsedlat = parseFloat(listeTaxi[i]['latitude']);

      // var localisationGPS = {lat: lati, lng : long};
      var localisationGPS = {lat: parsedlat, lng : parsedlong};

      var positionUser = new google.maps.Marker({
        position: localisationGPS,
        map: map,
        animation: google.maps.Animation.DROP,
        title: 'Vous êtes ici'
      });
    }

  }

  // AVEC JQuery ont fait l'envoi des long et lat en Ajax vers notre script PHP
    function sendGPSBDD(){

      $.ajax({
        url : 'localisation.php', // On fait appel au script PHP
        method : 'POST',
        data : {
          longitude: long,
          latitude: lati
        },
        success : function(){
        }
      });

    }






}
