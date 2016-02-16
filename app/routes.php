<?php

	$w_routes = array(
		///////////////////////////FRONT/////////////////////////////////////////////////////////////
		['GET', '/', 'Front#index', 'index'],
		['GET', '/conditions', 'Front#cgu', 'conditions'],
		['GET|POST', '/contact_admin', 'Front#contact_admin', 'contact_admin'],

		////////////////////////////PORTFOLIO////////////////////////////////////////////////////////
		['GET', '/profil/portfolio/all_works', 'portfolio#all_works', 'all_works'],
		['GET', '/profil/portfolio/gallery_projects', 'portfolio#gallery_projects', 'gallery_projects'],
		['GET', '/profil/portfolio/projects_page', 'portfolio#projects_page', 'projects_page'],
		['GET', '/profil/portfolio/commentaires', 'portfolio#commentaires', 'commentaires'],

		////////////////////////////PROFIL////////////////////////////////////////////////////////
		['GET', '/profil/user_profil', 'profil#user_profil', 'user_profil'],
		['GET', '/profil_all', 'profil#profilsAll', 'profilsall'],
		['GET|POST', '/profil/contact', 'profil#contact', 'contact'],
		['GET|POST', '/profil/updates_pages', 'profil#updates_pages', 'updates_pages'],

		////////////////////////////METIERS////////////////////////////////////////////////////////
		['GET', '/metiers', 'metiers#metiers', 'metiers'],

		/////////////////////////////ADMIN///////////////////////////////////////////////////////////
		['GET|POST', '/admin/connect', 'admin#connect', 'connect'],
		['GET|POST', '/admin/deconnect_totale', 'admin#deconnect_totale', 'deconnect_totale'],
		['GET|POST', '/admin/reini_pass', 'admin#reini_pass', 'reini_pass'],
		['GET|POST', '/admin/reini_pass_totale', 'admin#reini_pass_tok', 'reini_pass_tok'],

	);
