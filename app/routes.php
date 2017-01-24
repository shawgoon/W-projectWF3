<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/contact/', 'Contact#afficheContact', 'contact'],
		['GET|POST', '/avis/', 'Avis#afficheAvis', 'avis'],
		//['GET|POST', '/trajet/', 'Trajet#afficheFormTrajet', 'trajet'],

		['GET|POST', '/account/', 'Account#account', 'mon_compte'],
		['GET', '/userOnly/', 'UserOnly#connexionOnly', 'rediriger'],
		['GET|POST', '/admin/', 'Admin#admin', 'indexAdmin'],
		['GET', '/manageUsers/', 'ManageUsers#userTable', 'gestion_utilisateurs'],
		['GET', '/messageControl/', 'MessageControl#messageTable', 'gestion_messages'],
		['GET', '/qualityNotification/', 'QualityNotification#qualityTable', 'gestion_avis-qualité'],
		['GET|POST', '/reservation/', 'Reservation#travelTable', 'gestion_commande'],

		['GET|POST', '/signup/', 'Signup#afficheFormSignup', 'inscription'],
		['GET|POST', '/login/', 'Login#login', 'connexion'],
		['GET', '/logout/', 'Logout#logout', 'déconnexion'],

	);
