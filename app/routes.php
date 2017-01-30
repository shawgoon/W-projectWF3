<?php

	$w_routes = array(
		// route d'Accueil
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/contact/', 'Contact#afficheContact', 'contact'],
		['GET|POST', '/formContact/', 'Contact#inquiryGuys', 'contactInfo'],
		['GET|POST', '/deleteView/inquiry/', 'Delete#inquiry', 'supprime_inquiry'],

		// route avis satisfaction
		['GET|POST', '/avis/', 'Avis#afficheAvis', 'avis'],
		['GET|POST', '/formAvis/', 'Avis#envoiAvis', 'poster_avis'],
		['GET|POST', '/deleteView/avis/', 'Delete#quality', 'supprimer_avis'],

		// route de commande
		['GET|POST', '/trajet/', 'Trajet#afficheValidTrajet', 'trajet'],
		['GET|POST', '/deleteView/trajet/', 'Delete#travel', 'supprimer_trajet'],

		// route de géolocalisation
		['GET|POST', '/localisation/', 'Localisation#afficher','localisation'],


		// route d'administrateur
		['GET|POST', '/admin/', 'Admin#admin', 'indexAdmin'],
		['GET', '/userManager/', 'UserManager#afficheUserTable', 'gestion_utilisateurs'],
		['GET|POST', '/userUpdate/', 'UserUpdate#userUpdate', 'update_utilisateurs'],
		['GET|POST', '/deleteView/user/', 'Delete#user', 'delete_utilisateurs'],
		['GET', '/contactControl/', 'ContactControl#afficheMessageTable', 'gestion_messages'],
		['GET', '/qualityNotification/', 'QualityNotification#afficheQualityTable', 'gestion_avis-qualité'],
		['GET', '/reservation/', 'Reservation#afficheTravelTable', 'gestion_commande'],

		// routes de connexion et comptes
		['GET|POST', '/signup/', 'Signup#formSignup', 'inscription'],
		['GET|POST', '/login/', 'Login#login', 'connexion'],
		['GET', '/logout/', 'Logout#logout', 'déconnexion'],
		['GET|POST', '/account/', 'Account#account', 'mon_compte'],
		['GET', '/userOnly/', 'UserOnly#connectedOnly', 'rediriger'],

	);
