<?php

$w_config = [
   	//information de connexion à la bdd
	'db_host' => 'localhost',												//hôte (ip, domaine) de la bdd
    'db_user' => 'root',														//nom d'utilisateur pour la bdd
    'db_pass' => '',																//mot de passe de la bdd
    'db_name' => 'philomatiqueunity',								//nom de la bdd
  	'db_table_prefix' => '',												//préfixe ajouté aux noms de table

	//authentification, autorisation
	'security_user_table' => 'users',				//nom de la table contenant les infos des utilisateurs
	'security_id_property' => 'id',					//nom de la colonne pour la clef primaire
	'security_username_property' => 'prenom',		//nom de la colonne pour le "pseudo"
	'security_email_property' => 'email',			//nom de la colonne pour l'"email"
	'security_password_property' => 'pass',		//nom de la colonne pour le "mot de passe"
	'security_role_property' => 'role',				//nom de la colonne pour le "role"

	'security_login_route_name' => 'connect',			//nom de la route affichant le formulaire de connexion

		// phpmailer
		'phpmailer_server' => 'smtp.mailgun.org', 		//Adresse du smtp
		'phpmailer_port' => '587',						//Port
		'phpmailer_user' => 'phpmailer@wf3.axw.ovh',	//utilisateur
		'phpmailer_pass' => '123456789',				//mot de passe smtp

];

require('routes.php');
