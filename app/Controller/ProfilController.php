<?php

namespace Controller;

use \W\Controller\Controller;

class ProfilController extends Controller
{
    public function contact()
    {
        $this->show('Profil/contact');
    }
    public function updates_pages()
    {
        $this->show('Profil/updates_pages');
    }
    public function user_profil()
    {
        $this->show('Profil/user_profil');
    }
    public function profilsAll()
    {
        $this->show('Profil/profilsAll');
    }

}
