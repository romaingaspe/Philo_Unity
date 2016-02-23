<?php

	$w_routes = array(
		///////////////////////////FRONT/////////////////////////////////////////////////////////////
		['GET', '/', 'Front#index', 'index'],
		['GET', '/conditions', 'Front#conditions', 'conditions'],
		['GET|POST', '/contactadmin', 'Front#contactAdmin', 'contactAdmin'],
		['GET|POST', '/recherche', 'Front#recherche', 'recherche'],


		////////////////////////////PROFIL////////////////////////////////////////////////////////
		['GET', '/profil/profiluser/[:id]', 'Profil#profilUser', 'profiluser'],
		['GET|POST', '/profil/contact', 'profil#contact', 'contact'],
		['GET|POST', '/profil/update', 'profil#updatesPages', 'update'],
		['GET|POST', '/profil/updatesprofil', 'profil#updatesProfil', 'updatesprofil'],				
		['GET', '/profil/portfolio/projectspage', 'portfolio#projectsPage', 'projectsPage'],
		['GET', '/profil/portfolio/commentaires', 'portfolio#commentaires', 'commentaires'],

		////////////////////////////METIERS////////////////////////////////////////////////////////
		['GET', '/metiers', 'metiers#metiers', 'metiers'],
		['GET', '/metierspage', 'metiers#ajaxmetiers', 'paginationsmetiers'],
		['GET', '/metiers/[a:section]/profilsall', 'profil#profilsAll', 'profilsall'],
		['GET', '/metiers/[a:section]/profilsall/pagination', 'profil#ajaxprofils', 'paginationprofils'],

		/////////////////////////////ADMIN///////////////////////////////////////////////////////////
		['GET|POST', '/admin/connect', 'admin#connect', 'connect'],
		['GET|POST', '/admin/deconnect', 'admin#deconnect', 'deconnect'],
		['GET|POST', '/admin/reinipass', 'admin#reiniPass', 'reiniPass'],
		['GET|POST', '/admin/reinipasstoken', 'admin#reiniPassTok', 'reiniPassTok'],
    ['GET|POST', '/admin/insertprofil', 'admin#insertProfil', 'insertProfil'],
		['GET|POST', '/admin/insertsection', 'admin#insertSection', 'insertSection'],
	);
