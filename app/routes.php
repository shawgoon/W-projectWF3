<?php

	$w_routes = array(
		// route d'Accueil
		['GET', '/', 'Default#home', 'default_home'],
		// route de contact
		['GET|POST', '/forms/formContact/', 'Contact#inquiryGuys', 'contactInfo'],
		['GET|POST', '/forms/deleteInquiry/', 'Delete#inquiry', 'supprimer_renseignements'],
		// route avis satisfaction
		['GET|POST', '/forms/formAvis/', 'Avis#envoiAvis', 'poster_avis'],
		['GET|POST', '/forms/deleteQuality/', 'Delete#quality', 'supprimer_avis'],
		// route des reservations
		['GET|POST', '/forms/trajet/', 'Trajet#afficheValidTrajet', 'trajet'],
		['GET|POST', '/forms/deleteTravel/', 'Delete#travel', 'supprimer_trajet'],
		// route de localisation
		['GET|POST', '/forms/localisation/', 'Localisation#afficher','localisation'],
		// route d'administrateur
		['GET|POST', '/admin/', 'Admin#admin', 'indexAdmin'],
		['GET|POST', '/forms/gradUpdate/', 'GradUpdate#grad', 'update_grad'],
		['GET|POST', '/forms/gradUpdate/', 'GradUpdate#gradUpdate', 'valid_grad_update'],
		['GET|POST', '/forms/userUpdate/', 'Signup#formSignup', 'update_utilisateurs'],
		['GET|POST', '/deleteView/user/', 'Delete#user', 'delete_utilisateurs'],
		// routes de connexion et comptes
		['GET|POST', '/forms/signup/', 'Signup#formSignup', 'utilisateur'],
		['GET|POST', '/forms/login/', 'Login#login', 'connexion'],
		['GET', '/logout/', 'Logout#logout', 'déconnexion'],
	);
