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
      $allusers = $metier->findMetier($section);
      $params['users'] = $allusers;
      $sectionchoix = $metier->findSection($section);
      $params['sectionchoix'] = $sectionchoix[0];
      $this->show('profil/profilsAll', $params);
    }

}
