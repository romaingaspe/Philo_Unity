<?php

namespace Controller;

use \W\Controller\Controller;
use Manager\FixUserManager;
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

}
