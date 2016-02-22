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
		$params= array();
		$recherche = new RechercheManager();
		if(!empty($_GET["search"])){
			$search = strip_tags($_GET["search"]);
			$result = $recherche->rechercheGlobale($search);
			$params['resultat'] = $result;
		}
		else{
			$params['resultat'] = [];
		}
		$this->show('front/recherche', $params);

	}

}
