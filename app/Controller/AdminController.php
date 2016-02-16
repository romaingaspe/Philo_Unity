<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{
	public function connect()
	{
		$this->show('admin/connect');
	}
	public function deconnect_totale()
	{
		$this->show('admin/deconnect_totale');
	}
	public function reini_pass()
	{
		$this->show('admin/reini_pass');
	}
	public function reini_pass_tok()
	{
		$this->show('admin/reini_pass_tok');
	}

}
