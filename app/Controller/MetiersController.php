<?php

namespace Controller;

use \W\Controller\Controller;
use Manager\MetierManager;

class MetiersController extends Controller
{
    public function metiers()
	{

        $metiersdb = new MetierManager;
        $metiers = $metiersdb->findAll('section', "ASC", 6);
        $params['metiers'] = $metiers;

		$this->show('metiers/metiers', $params);
	}

}
