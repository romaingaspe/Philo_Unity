<?php

namespace Controller;
use Manager\VerifManager;
use \W\Controller\Controller;

class AdminController extends Controller
{
	public function connect()
	{


		$verif = new VerifManager($_POST['login']);

		$params['erreurs'] = $verif->getErrors();
		$this->show('admin/connect', $params);
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
