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
		$recherche = new RechercheManager();
		if(!empty($_GET["search"])){
			$search = strip_tags($_GET["search"]);
			$resultuser = $recherche->rechercheUsers($search);
			$params['resultatUser'] = $resultuser;
			$resultatmetier = $recherche->rechercheMetier($search);
			$params['resultatMetier'] = $resultatmetier;

			if(empty($resultuser) && empty($resultatmetier)){
				$params['error'] = 'La recherche n\'a donné aucun résultat';
			}
		}
		else{
			$params['resultat'] = [];
		}

		$this->show('front/recherche', $params);

	}

}
