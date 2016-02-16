<?php

namespace Controller;

use \W\Controller\Controller;

class BackController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function login()
	{
		$this->show('back/login');
	}

}
