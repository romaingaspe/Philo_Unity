<?php

namespace Controller;

use \W\Controller\Controller;
use Manager\MetierManager;
use Manager\FixUserManager;
use \W\Security\AuthentificationManager;
use Manager\ProjetManager;

class ProfilController extends Controller
{
    public function contact()
    {
        $this->show('profil/contact');
    }
    public function updatesProfil()
    {
        $this->allowTo(['user','Admin']);
        $maxSize = 3024 * 3000; // 1Ko * 1000 = 1Mo
        $dirUpload = 'photo/profiluser';
        $mimeTypeAllowed = array('image/jpg', 'image/jpeg', 'image/png');
        $login = new AuthentificationManager();
        $userManager = new FixUserManager;
        $infosUser = $this->getUser();

        $errors = array();
        $params = array(); // Les paramètres qu'on envoi a la vue, on utilisera les clés du tableau précédé par un $ pour les utiliser dans la vue
        // Faire vérification des champs ICI
        if(!empty($_POST)){
          // Faire vérification des champs ICI
          if(empty($_POST['nom'])){
            $errors[] = 'le nom est vide';
          }
          if(empty($_POST['prenom'])){
            $errors[] = 'le prenom est vide';
          }
          if(empty($_POST['email'])){
            $errors[] = 'l\'email est vide';
          }
          if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) !== false){
            $errors[] = 'L\'email est invalide';
          }
          if (empty($_POST['description'])) {
            $errors[]='Votre description ne doit pas est vide';
          }
          if (empty($_POST['description'])) {
            $errors[]='Votre description ne doit pas est vide';
          }
          if (empty($_POST['linkedin'])) {
            $errors[]='Votre linkedin ne doit pas est vide';
          }

          // il n'y a pas d'erreurs,  inserer l'utilisateur a bien rentré en bdd :
          if(count($errors) == 0){

            $userManager->update([
              'nom'               => $_POST['nom'],
              'prenom'            => $_POST['prenom'],
              'email'             => $_POST['email'],
              'description'       =>$_POST['description'],
              'date_update'       => 'NOW()',
            ],$infosUser['id']);
            $login->refreshUser();

            $params['success'] = 'votre nouveau profil à bien été enregistré !';
          }
          // sinon on affiche les erreurs:
          else{

            $params['errors'] = $errors;
          }
        }
        $params['user'] = $infosUser;
        $this->show('profil/updatesprofil', $params);
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

    public function projectsPage($id){
      $projetManager = new ProjetManager(); // methode manager qui va chercher le projet d'id $id



      $params = [
        'projet' => $projetManager->find($id),
        // récupérer la liste de photos de ce projet
        // pour les afficher dans la vue projectsPage
        'photos'=> $projetManager->getProjectPhotos($id),

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
        $projectmanager = new ProjectManager();
        $errors = array();
        $params = array();

        $maxSize = 3024 * 3000;
        $dirUpload = 'photo';
        $mimeTypeAllowed = array('image/jpg', 'image/jpeg', 'image/png');

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


        $this->show('profil/insertProject', $params);
    }
    public function allprofiles(){

        $num = 6;
        $page = $_GET['page'];
        $start = ($page-1) * $num;
        $allprofiles = new FixUserManager();
        $allcount = $allprofiles->findAll();
        $all = $allprofiles->findAll('nom' , 'ASC', $num, $start);
        $countusers = count($allcount);
        $totalpages = ceil($countusers/$num);
        $params['users'] = $all;
        $params['totalpages'] = $totalpages;

        $this->show('profil/allprofiles', $params);
    }
}
