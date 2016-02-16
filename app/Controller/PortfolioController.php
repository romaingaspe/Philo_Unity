<?php

namespace Controller;

use \W\Controller\Controller;

class PortfolioController extends Controller
{
    public function all_works()
	{
		$this->show('Portfolio/all_works');
	}
    public function commentaires()
	{
		$this->show('Portfolio/commentaires');
	}
    public function gallery_projects()
	{
		$this->show('Portfolio/gallery_projects');
	}
    public function projects_page()
    {
        $this->show('Portfolio/projects_page');
    }

}
