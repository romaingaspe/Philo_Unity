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
    public function index()
    {
        $this->show('Profil/user_profil');
    }

}
