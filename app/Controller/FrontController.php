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
	public function conditions()
	{
		$this->show('front/conditions');
	}
	public function contact_admin()
	{
		$this->show('front/contact_admin');
	}

}
