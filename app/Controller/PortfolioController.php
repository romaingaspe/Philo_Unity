<?php

namespace Controller;

use \W\Controller\Controller;
use Manager\FixUserManager;

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
    public function projectsPage($id)
    {
    	$userManager = new FixUserManager();
    	$params = [
    	 'profil' => $userManager->find($id),
        'projets' => $userManager->getUserProjects($id)
    	];

        $this->show('Portfolio/projectsPage', $params);
    }

}
