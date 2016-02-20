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
      $allusers = $metier->findAllUsers('prenom', 'ASC', 6, null , 'webforce' );
      var_dump($allusers);
        $this->show('profil/profilsAll');
    }

}
