<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact/', 'Contact#afficheContact', 'contact'],
		['GET', '/avis/', 'Avis#afficheAvis', 'avis'],
		['POST', '/', 'Login#login', 'connexion'],
		['GET', '/', 'Logout#logout', 'déconnexion'],

	);
