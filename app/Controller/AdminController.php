<?php

namespace Controller; 

use \W\Controller\Controller;
use \Manager\BlogManager;
use \W\Security\AuthentificationManager;
use \W\Manager\UserManager;

class AdminController extends Controller
{
	public function connect()
	{
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
					$params['success'] = 'Benvenue vous êtes connecté(e) !';
				}
				$params['id'] = $userDatas;
			}
			if(count($errors) > 0){
				$params['errors'] = $errors;

			}

		$this->show('admin/connect', $params);
	}

		
	
	public function deconnectTotale()
	{
		$this->show('admin/deconnectTotale');
	}
	public function reiniPass()
	{
		$errors = array();
		$params = []; // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		if(!empty($_POST)){
			// Faire vérification des champs ICI
			if(empty($_POST['email'])){
				$errors[] = 'l\'email est vide';
			}
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false){
				$errors[] = 'L\'email est invalide';
			}
			if(count($errors) == 0){
				$app = getApp();

				$mail = new PHPMailer;

				//$mail->SMTPDebug = 3;                               // Enable verbose debug output
				$mail->setLanguage('fr', '../../vendor/phpmailer/phpmailer/language/');
				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = $app->getConfig("phpmailer_server");  // Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = $app->getConfig("phpmailer_user");                 // SMTP username
				$mail->Password = $app->getConfig("phpmailer_pass");                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = $app->getConfig('phpmailer_port');                                    // TCP port to connect to

				$mail->setFrom($_POST['email']);
				$mail->addAddress('offres@vincentmartinat.com', 'vincent');     // Add a recipient
				//$mail->addAddress($_POST['email']);               // Name is optional
				$mail->addReplyTo('info@example.com', 'Information');
				/*$mail->addCC('cc@example.com');
				$mail->addBCC('bcc@example.com');

				$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
				$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML
				*/

				if(!$mail->send()) {
					$errors[] = 'L\'email n\'a pas pu être envoyé';
					echo 'Mailer Error: ' . $mail->ErrorInfo;
				} else {
					$params['success'] = 'Youhou, c\'est envoyé!';
				}
			}
			if(count($errors) > 0){
				$params['errors'] = $errors;
			}
		}		
		$this->show('admin/reiniPass');
	}
	public function reiniPassTok()
	{
		$this->show('admin/reiniPassTok');
	}

}
