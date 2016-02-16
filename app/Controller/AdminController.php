<?php

namespace Controller;
use Classes\FormValidator;
use \W\Controller\Controller;

class AdminController extends Controller
{
	public function connect()
	{

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
