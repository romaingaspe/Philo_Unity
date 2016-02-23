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
		$this->show('portfolio/commentaires');
	}
    

}
