<?php

namespace Controller;

use \W\Controller\Controller;

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
    public function profilUser()
    {
        $this->show('profil/profilUser');
    }
    public function profilsAll()
    {
        $this->show('profil/profilsAll');
    }

}
