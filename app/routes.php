<?php

	$w_routes = array(
		///////////////////////////FRONT/////////////////////////////////////////////////////////////
		['GET', '/', 'Front#index', 'index'],
		['GET', '/conditions', 'Front#conditions', 'conditions'],
		['GET|POST', '/contactadmin', 'Front#contactAdmin', 'contactAdmin'],

		////////////////////////////PORTFOLIO////////////////////////////////////////////////////////
		['GET', '/profil/portfolio/galleryprojects', 'portfolio#galleryProjects', 'galleryProjects'],
		['GET', '/profil/portfolio/projectspage', 'portfolio#projectsPage', 'projectsPage'],
		['GET', '/profil/portfolio/commentaires', 'portfolio#commentaires', 'commentaires'],

		////////////////////////////PROFIL////////////////////////////////////////////////////////
		['GET', '/profil/profiluser/[:id]', 'profil#profiluser', 'profiluser'],
		['GET', '/profils', 'profil#profilsAll', 'profilsall'],
		['GET|POST', '/profil/contact', 'profil#contact', 'contact'],
		['GET|POST', '/profil/update', 'profil#updatesPages', 'update'],

		////////////////////////////METIERS////////////////////////////////////////////////////////
		['GET', '/metiers', 'metiers#metiers', 'metiers'],

		/////////////////////////////ADMIN///////////////////////////////////////////////////////////
		['GET|POST', '/admin/connect', 'admin#connect', 'connect'],
		['GET|POST', '/admin/deconnect', 'admin#deconnect', 'deconnect'],
		['GET|POST', '/admin/reinipass', 'admin#reiniPass', 'reiniPass'],
		['GET|POST', '/admin/reinipasstoken', 'admin#reiniPassTok', 'reiniPassTok'],

	);
