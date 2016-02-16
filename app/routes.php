<?php
	
	$w_routes = array(
		///////////////////////////FRONT/////////////////////////////////////////////////////////////
		['GET', '/', 'Front#index', 'index'],
		['GET', '/conditions', 'Front#cgu', 'conditions'],
		['GET|POST', '/contact_admin', 'Front#contact_admin', 'contact_admin'],
		
		////////////////////////////PORTFOLIO////////////////////////////////////////////////////////
		['GET', '/portfolio/all_works', 'portfolio#all_works', 'all_works'],
		['GET', '/portfolio/gallery_projects', 'portfolio#gallery_projects', 'gallery_projects'],
		['GET', '/portfolio/projects_page', 'portfolio#projects_page', 'projects_page'],
		['GET', '/portfolio/user_profil', 'portfolio#user_profil', 'user_profil'],
		['GET', '/portfolio/work_category', 'portfolio#work_category', 'work_category'],
		
		/////////////////////////////ADMIN///////////////////////////////////////////////////////////
		['GET|POST', 'admin/connect', 'admin#connect', 'connect'],
		['GET|POST', 'admin/deconnect_totale', 'admin#deconnect_totale', 'deconnect_totale'],
		['GET|POST', 'admin/deconnect_transit', 'admin#deconnect_transit', 'deconnect_transit'],
		['GET|POST', 'admin/reini_pass', 'admin#reini_pass', 'reini_pass'],
		['GET|POST', 'admin/reini_pass_totale', 'admin#reini_pass_totale', 'reini_pass_totale'],
		['GET|POST', 'admin/reini_pass_transit', 'admin#reini_pass_transit', 'reini_pass_transit'],
		['GET|POST', 'admin/updates_pages', 'admin#updates_pages', 'updates_pages'],
	);