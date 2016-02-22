<?php

namespace Controller;

use \W\Controller\Controller;
use Manager\FixUserManager;
use Manager\RechercheManager;
class FrontController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$profils = new FixUserManager();
		$profilselect = $profils->findAll('date_update', 'ASC', 6);
		$params['users'] = $profilselect;
		$this->show('front/index', $params);
	}
	public function conditions()
	{
		$this->show('front/conditions');
	}
	public function contactAdmin()
	{
		$this->show('front/contactAdmin');
	}
	public function recherche()
	{
		if(empty($_GET["search"])){
			$params['resultatUser'] = [];
			$params['resultatMetier'] = [];
			$params['error'] = 'Veuillez saisir une recherche';
		}
		if(empty($_GET['valeur'])){
			$params['error'] = 'Veuillez choisir un paramètre de recherche';
			$params['resultatUser'] = [];
			$params['resultatMetier'] = [];
		}
		if(!empty($_GET['search']) && strlen($_GET['search']) < 3){
			$params['error'] = 'Votre recherche doit faire plus de 3 caractères';
			$params['resultatUser'] = [];
			$params['resultatMetier'] = [];
		}
		else{
			$recherche = new RechercheManager();
			if(!empty($_GET["search"])){
				$search = strip_tags($_GET["search"]);
				if($_GET['valeur'] == 'user'){
					$resultatuser = $recherche->rechercheUsers($search);
					$params['resultatUser'] = $resultatuser;
					$params['resultatMetier'] = [];
				}
				if($_GET['valeur'] == 'metier'){
					$resultatmetier = $recherche->rechercheMetier($search);
					$params['resultatMetier'] = $resultatmetier;
					$params['resultatUser'] = [];
				}
			}
			else{
				$params['resultat'] = [];
			}
		}
		$this->show('front/recherche', $params);
	}
}
