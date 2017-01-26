<?php

	$w_routes = array(
		// route d'Accueil
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/contact/', 'Contact#afficheContact', 'contact'],

		// route avis satisfaction
		['GET|POST', '/avis/', 'Avis#afficheAvis', 'avis'],
		['GET', '/avis/', 'AvisController#avisUtilisateurs', 'avisUsers'],
		['GET|POST', '/avis/poster/', 'AvisController#envoiAvis', 'poster_avis'],

		// route de commande
		['GET|POST', '/trajet/', 'Trajet#afficheValidTrajet', 'trajet'],

		// route de géolocalisation
		['GET|POST', '/localisation/', 'Localisation#afficher','localisation'],


		// route d'administrateur
		['GET|POST', '/admin/', 'Admin#admin', 'indexAdmin'],
		['GET', '/manageUsers/', 'ManageUsers#userTable', 'gestion_utilisateurs'],
		['GET', '/messageControl/', 'MessageControl#messageTable', 'gestion_messages'],
		['GET', '/qualityNotification/', 'QualityNotification#qualityTable', 'gestion_avis-qualité'],
		['GET|POST', '/reservation/', 'Reservation#travelTable', 'gestion_commande'],

		// routes de connexion et comptes
		['GET|POST', '/signup/', 'Signup#formSignup', 'inscription'],
		['GET|POST', '/login/', 'Login#login', 'connexion'],
		['GET', '/logout/', 'Logout#logout', 'déconnexion'],
		['GET|POST', '/account/', 'Account#account', 'mon_compte'],
		['GET', '/userOnly/', 'UserOnly#connectedOnly', 'rediriger'],

	);
