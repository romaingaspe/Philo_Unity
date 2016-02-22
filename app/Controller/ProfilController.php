<?php

namespace Controller;

use \W\Controller\Controller;
use Manager\FixUserManager;
use Manager\MetierManager;

class ProfilController extends Controller
{
    public function contact()
    {
        $this->show('profil/contact');
    }
    public function updatesPages()
    {
        $this->show('profil/updatesPages');
    }
    public function profilUser($id)
    {

      $prof = new FixUserManager();
    	$profil = [
    	  'profil' => $prof->find($id),
    		/*'username' => $user->find($art->find($id)['id_user'])['username'];*/
    	];
        $this->show('profil/profilUser', $profil);
    }
    public function profilsAll($section)
    {
      $metier = new MetierManager;
      /*Tableau es profils par section*/
      $num = 6;
      $page = 1;
      $start = ($page-1) * $num;
      $params['page']  = $page;
      $allusers = $metier->findMetier($section, 'nom' , $num, $start);
      $params['users'] = $allusers;
      $getusers = $metier->findMetier($section, 'nom');
      $countusers = count($getusers);
      $totalpages = ceil($countusers/$num);
      $params['totalpages'] = $totalpages;
      /*Affichage du nom de la section*/
      $sectionchoix = $metier->findSection($section);
      $params['sectionchoix'] = $sectionchoix[0];
      $this->show('profil/profilsAll', $params);
    }
    public function ajaxprofils(){

        $profilsdb = new MetierManager;
        $num = 6;
        $page = $_GET['page'];
        $start = ($page-1) * $num;
        $profils = $profilsdb->findAll('section', "ASC", $num, $start);
        $this->showJson($profils);
    }
}
