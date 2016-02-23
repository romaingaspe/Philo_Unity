<?php

namespace Controller;

use \W\Controller\Controller;
use Manager\FixUserManager;
use Manager\MetierManager;
use Manager\ProjetManager;

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

      $userManager = new FixUserManager();
    	$params = [
    	  'profil' => $userManager->find($id),
        // récupérer la liste de projets de cet utilisateur
        // pour les afficher dans la vue profilUser
        'projets' => $userManager->getUserProjects($id)
    	];
      $this->show('profil/profilUser', $params);

    }

    public function projectsPage($id)
    {
      $projetManager = new ProjetManager(); // methode manager qui va chercher le projet d'id $id
      $params = [
        'projet' => $projetManager->find($id),
        // récupérer la liste de photos de ce projet
        // pour les afficher dans la vue projectsPage
        'photos'=> $projetManager->getProjectPhotos($id)
      ];

      $this->show('profil/projectsPage', $params);
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
      $params['section'] = $section;
      $params['sectionchoix'] = $sectionchoix[0];
      $this->show('profil/profilsAll', $params);
    }
    public function ajaxprofils($section){

        $profilsdb = new MetierManager;
        $num = 6;
        $page = $_GET['page'];
        $start = ($page-1) * $num;
        $profils = $profilsdb->findMetier($section, 'nom' , $num, $start);
        $this->showJson($profils);
    }


    public function insertProjects(){
      $this->allowTo(['user','Admin']);
        $login = new AuthentificationManager();
        $ProjectManager = new ProjectManager;
        $errors = array();
        $params = array();

        $maxSize = 3024 * 3000;
        $dirUpload = 'photo';
        $mimeTypeAllowed = array('image/jpg', 'image/jpeg', 'image/png');

        if(!empty($_POST)){

          if(empty($_POST['project_title'])){
            $errors[] = 'le titre est vide';
}
        if(empty($_POST['description'])){
          $errors[] = 'la description du projet est vide';
}
        if(empty($_POST['photo'])){
          $errors[] = 'veuiller entrer une photo de votre projet';
}


        if(count($errors) == 0){
          $ProjectManager->update([
            'project_title' 	  => $_POST['project_title'],
            'description' 			=> $_POST['description'],
            'photo' 	    			=> $_POST['photo'],
      ]);
}

    else{
      $params['errors'] = $errors;
    }
    $params['success'] = 'votre nouveaux projet à bien été rajouté !';


  $this->show('userId/insertProject', $params);
}
}
