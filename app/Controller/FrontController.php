<?php

namespace Controller;

use \W\Controller\Controller;

class FrontController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function index()
	{
		$this->show('front/index');
	}
	public function profil()
	{
		$this->show('front/profil');
	}
	public function metier()
	{
		$this->show('front/metier');
	}

}
