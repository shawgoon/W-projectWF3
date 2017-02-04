<?php

	$w_routes = array(
		// route d'Accueil
		['GET', '/', 'Default#home', 'default_home'],
		// route de contact
		['GET|POST', '/forms/formContact/', 'Contact#inquiryGuys', 'contactInfo'],
		['GET|POST', '/deleteView/inquiry/', 'Delete#inquiry', 'supprime_inquiry'],
		// route avis satisfaction
		['GET|POST', '/forms/formAvis/', 'Avis#envoiAvis', 'poster_avis'],
		['GET|POST', '/deleteView/avis/', 'Delete#quality', 'supprimer_avis'],
		// route des reservations
		['GET|POST', '/forms/trajet/', 'Trajet#afficheValidTrajet', 'trajet'],
		['GET|POST', '/deleteView/trajet/', 'Delete#travel', 'supprimer_trajet'],
		// route de localisation
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
		['GET|POST', '/forms/signup/', 'Signup#formSignup', 'inscription'],
		['GET|POST', '/forms/login/', 'Login#login', 'connexion'],
		['GET', '/logout/', 'Logout#logout', 'déconnexion'],
		['GET', '/userOnly/', 'UserOnly#connectedOnly', 'rediriger'],
	);
