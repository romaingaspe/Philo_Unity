<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Security\AuthentificationManager;

class AdminController extends Controller
{
	public function connect(){ 
	$app = getApp();
		$login = new AuthentificationManager;
		$errors = array();
		$params = []; // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		if(!empty($_POST)){
			// Faire vérification des champs ICI
			if(empty($_POST['login'])){
				$errors[] = 'Le Login est vide';
			}
			if(!filter_var($_POST['login'], FILTER_VALIDATE_EMAIL) !== false){
				$errors[] = 'Le Login est invalide';
			}
			if(empty($_POST['pass'])){
				$errors[] = 'Le pass est vide';
			}
		}
			if(count($errors) == 0){
				$userId = $login->isValidLoginInfo($_POST['login'], $_POST['pass']);
				if(is_int($userId) && $userId != 0){
					$userManager = new UserManager();
					$userManager->setTable($app->getConfig('security_user_table'));
					$userDatas = $userManager->find($userId);
					$login->logUserIn($userDatas);
					$params['success'] = 'Youhou !';
				}
				$params['id'] = $userDatas;
			}
			if(count($errors) > 0){
				$params['errors'] = $errors;
			}
		$this->show('admin/connect',['errors' => $errors]);
	}
}

	public function deconnectTotale()
	{
		
		$this->show('admin/deconnectTotale');
	}
	public function reiniPass()
	{
		$this->show('admin/reiniPass');
	}
	public function reiniPassTok()
	{
		$this->show('admin/reiniPassTok');
	}

}
