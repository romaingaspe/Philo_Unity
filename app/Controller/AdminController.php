<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{
	public function connect()
	{
		$this->show('admin/connect');
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
