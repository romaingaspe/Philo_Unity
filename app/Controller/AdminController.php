<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\BlogManager;
use \W\Security\AuthentificationManager;
use \Manager\FixUserManager as UserManager;
use \PHPMailer;
use \config;

class AdminController extends Controller
{
	public function connect()
	{

		$login = new AuthentificationManager();
		$errors = array();
		$params = array(); // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		if(!empty($_POST)){
			// Faire vérification des champs ICI
			if(empty($_POST['login'])){
				$errors[] = 'Le Login est vide';
			}
			elseif(!filter_var($_POST['login'], FILTER_VALIDATE_EMAIL) !== false){
				$errors[] = 'Le Login est invalide';
			}
			if(empty($_POST['pass'])){
				$errors[] = 'Le pass est vide';
			}
			if(count($errors) == 0){
				// il n'y a pas d'erreurs, l'utilisateur a bien rentré un login correct et un pass
				// si ces infos sont valides en BD
				$userId = $login->isValidLoginInfo($_POST['login'], $_POST['pass']);
				if(is_int($userId) && $userId != 0){
					$userManager = new UserManager();
					$userDatas = $userManager->find($id);
					// alors démarrer la session (logUserIn)
					$login->logUserIn($userDatas);
					// et rediriger vers l'accueil
					$params['success'] = 'Bienvenue vous êtes connecté(e) !';
					$this->redirectToRoute('index');
				}
				else {
					$errors[] ='dommage !!!';
				}
			}
		}
		$params['errors'] = $errors;
		$this->show('admin/connect', $params);
	}
	public function deconnect()
	{
		$login = new AuthentificationManager();

		$params = array();
		if (empty($_POST)){
			$vue = true;
		}
		 // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		if (!empty($_POST)){
			$vue = false;
			$userId = $login->logUserOut();
		}

		$params['vue'] = $vue;
		$this->show('admin/deconnect',$params);
	}
	public function reiniPass()
	{
		$login = new AuthentificationManager();
		$userManager = new UserManager;
		$errors = array();
		$mail = new PHPMailer;
		$params = array(); // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
		if(!empty($_POST)){
			// Faire vérification des champs ICI
			if(empty($_POST['email'])){
				$errors[] = 'l\'email est vide';
			}
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false){
				$errors[] = 'L\'email est invalide';
			}
			// si pas d'erreurs,
			if(count($errors) == 0){
				// on va vérifier qu'il existe un utilisateur avec cet email dans la base
				if($idUser = $userManager->emailExists($_POST['email'])){
					$token = md5(uniqid());// on génère un 'token', identifiant unique
					$idUser = $userManager->getUserByUsernameOrEmail($_POST['email'])['id']; //chercher id
					$userManager->update(["confirmedToken" => $token, "dateConfirmedToken" =>date('Y-m-d',strtotime('+1 week'))], $idUser);	// on stocke le token dans la bdd pour cet utilisateur
					$successUrl = $this->generateUrl('reiniPassTok').'?email='.$_POST['email'].'&token='.$token;// on crée le lien permettant à l'utilisateur de resaisir un
					$successLink = "http://localhost".$successUrl;
					// nouveau mot de passe
					// on envoie le mail avec le lien:
					$app = getApp();



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
					$mail->addReplyTo('offres@vincentmartinat.com', 'Information');
					/*$mail->addCC('cc@example.com');
					$mail->addBCC('bcc@example.com');

					$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
					$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
						*/
					$mail->isHTML(true);
					$mail->Body = '<a href="'.$successLink.'">Reinitialisez votre mot de passe</a>';                  	// Set email format to HTML




				} else {
				// si non:
					// message d'erreur: cette adresse mail ne correspond pas à un membre du site
					$errors[] = 'L\'email n\'existe pas';
				}
				// si oui:
					// on génère un 'token', identifiant unique

					// on stocke le token dans la bdd pour cet utilisateur

					// on crée le lien permettant à l'utilisateur de resaisir un nouveau mot de passe
					// ce lien doit contenir le token, c'est ce qui nous permettra de vérifier que l'utilisateur qui saisit le nouveau mot de passe est bien le propriétaire de l'adresse email (qui a cliqué sur le lien)


				if(!$mail->send()) {
						$errors[] = 'L\'email n\'a pas pu être envoyé';
						echo 'Mailer Error: ' . $mail->ErrorInfo;
					} else {
						$params['success'] = 'Youhou, c\'est envoyé!';
					}
			}
		}
		if(count($errors) > 0){
			$params['errors'] = $errors;
		}

		$this->show('admin/reiniPass', $params);
}
	public function reiniPassTok()
	{

		$this->show('admin/reiniPassTok');
	}
}
