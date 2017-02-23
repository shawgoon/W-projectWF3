// animation de pages
$(function() {
  // partie accueil
  var home = $('#home');
  var satisfaction = $('#satisfaction');
  var gps = $('#gps');
  var contact = $('#contact');
  var account = $('#account');
  // partie Admin
  var users = $('#users');
  var resa = $('#resa');
  var quality = $('#quality');
  var request = $('#request');
  var pict = $('#pict');

    // cacher les pages de navigation sauf les 1ere page
    // partie accueil
    satisfaction.hide();
    gps.hide();
    contact.hide();
    account.hide();
    // partie admin
    resa.hide();
    quality.hide();
    request.hide();
    pict.hide();

// affichage dynammique des pages de l'Accueil
    $('#homePage').click(function(e) {
      e.preventDefault()
      // $(this).removeClass('selected');
      $(this).addClass('selected');
      home.show();
      satisfaction.hide();
      gps.hide();
      contact.hide();
      account.hide();
    });

    $('#gpsPage').click(function(e) {
      e.preventDefault()
      $(this).removeClass('selected');
      // $(this).addClass('selected');
      home.hide();
      satisfaction.hide();
      gps.show();
      contact.hide();
      account.hide();
    });

    $('#contactPage').click(function(e) {
      e.preventDefault()
      $(this).removeClass('selected');
      // $(this).addClass('selected');
      home.hide();
      satisfaction.hide();
      gps.hide();
      contact.show();
      account.hide();
    });

    $('#satisfactionPage').click(function(e) {
      e.preventDefault()
      $(this).removeClass('selected');
      // $(this).addClass('selected');
      home.hide();
      satisfaction.show();
      gps.hide();
      contact.hide();
      account.hide();
    });

    $('#accountPage').click(function(e) {
      e.preventDefault()
      $(this).removeClass('selected');
      // $(this).addClass('selected');
      home.hide();
      satisfaction.hide();
      gps.hide();
      contact.hide();
      account.show();
    });

// affichage dynammique des pages de l'Administreur
    $('#usersTable').click(function(e) {
      e.preventDefault()
      // $(this).removeClass('selected');
      $(this).addClass('selected');
      users.show();
      resa.hide();
      quality.hide();
      request.hide();
      pict.hide();
    });

    $('#resaTable').click(function(e) {
      e.preventDefault()
      $(this).removeClass('selected');
      // $(this).addClass('selected');
      users.hide();
      resa.show();
      quality.hide();
      request.hide();
      pict.hide();
    });

    $('#qualityTable').click(function(e) {
      e.preventDefault()
      $(this).removeClass('selected');
      // $(this).addClass('selected');
      users.hide();
      resa.hide();
      quality.show();
      request.hide();
      pict.hide();
    });

    $('#requestTable').click(function(e) {
      e.preventDefault()
      $(this).removeClass('selected');
      // $(this).addClass('selected');
      users.hide();
      resa.hide();
      quality.hide();
      request.show();
      pict.hide();
    });

    $('#pictTable').click(function(e) {
      e.preventDefault()
      $(this).removeClass('selected');
      // $(this).addClass('selected');
      users.hide();
      resa.hide();
      quality.hide();
      request.hide();
      pict.show();
    });
  });


// window.onload = function () {
//
//   var tabs = document.querySelectorAll('.tab')
// // $(function() {
// //   var tabs = $('tab');
//
//   for (var i = 0; i < tabs.length; i++) {
//     tabs[i].addEventListener('click', onSelect)
//
//     // Simulé un click sur le premier élement de la liste.
//     if (i === 0) {
//       tabs[i].click()
//     }
//   }
// }
//
// hideAll();
//
// function onSelect (e) {
//   e.preventDefault()
//   // on cache tout
//   this.classList.add('selected')
//
//   // We grab the href attribute.
//   var targetId = this.getAttribute('href')
//   // Then, we use the href as it is with query selector:
//   // Reminder: the # is a valid selector in CSS so no need
//   // to remove it.
//   var targetContent = document.querySelector(targetId)
//
//   targetContent.style.display = 'block'
// }
//
// function hideAll () {
//   var tabs = document.querySelectorAll('.tab')
//   var sections = document.querySelectorAll('.tab-content')
//   // caché les blocks.
//   for (var i = 0; i < sections.length; i++) {
//     sections[i].style.display = 'none'
//   }
//   // Remove le classe 'select'
//   for (var i = 0; i < tabs.length; i++) {
//     tabs[i].classList.remove('selected')
//   }
// }
