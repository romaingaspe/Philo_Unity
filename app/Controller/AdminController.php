<?php

namespace Controller;

use \W\Controller\Controller;

class AdminController extends Controller
{
	public function connect()
	{
		$this->show('admin/connect');
	}

}
