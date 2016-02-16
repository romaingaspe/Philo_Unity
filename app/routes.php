<?php

	$w_routes = array(
		['GET', '/', 'Front#index', 'index'],
		['GET', '/profil', 'Front#profil', 'profil'],
		['GET', '/metier', 'Front#metier', 'metier'],
		['GET|POSt', '/login', 'Back#login', 'login'],
	);
