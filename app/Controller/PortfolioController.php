<?php

namespace Controller;

use \W\Controller\Controller;

class PortfolioController extends Controller
{
    public function allWorks()
	{
		$this->show('Portfolio/allWorks');
	}
    public function commentaires()
	{
		$this->show('Portfolio/commentaires');
	}
    public function projectsPage()
    {
        $this->show('Portfolio/projectsPage');
    }

}
