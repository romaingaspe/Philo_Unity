<?php

namespace Controller;

use \W\Controller\Controller;
use Manager\MetierManager;
use Manager\FixUserManager;
use \W\Security\AuthentificationManager;
use Manager\ProjetManager;
use Manager\CommentaireManager;

class ProfilController extends Controller
{
    public function contact()
    {
        $this->show('profil/contact');
    }
    public function updatesProfil()
    {
        $this->allowTo(['user','Admin']);
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
    public function updatePhoto(){

      $this->allowTo(['user','Admin']);
      $login = new AuthentificationManager();
      $userManager = new FixUserManager;
      $infosUser = $this->getUser();
      $mimeTypeAllowed = array('image/jpg', 'image/jpeg', 'image/png','image/gif');
      $errors =[];
      $validForm = false;


      //fichier image avatar
      if(isset($_FILES['photo']) && $_FILES['photo']['size'] !=0){
        $maxSize = 3*100*1024; //3Mo

        $finfo =new \finfo();

        // On vérifie la taille du fichier
        if($_FILES['photo']['size'] > $maxSize){
          $errors[]='Ficher trop volumineux';
        }
        if (count($errors)==0) {
          // chemin matériel du dossier pr upload fichier
          $uploads_dir_avatar = $_SERVER['DOCUMENT_ROOT'].$_SERVER['REDIRECT_W_BASE'].'/assets/avatar';
          $tmp_name = $_FILES['photo']['tmp_name'];
          $nameAvatar = $infosUser['id'].$_FILES['photo']['name'];
          //Pour que le nom soit unique et eviter les probleme de nom de fichier on l'incrémente de l'id appartenant à user

          // On upload le fichier
          //$uploadAvatar = move_uploaded_file(filename, destination)
          $uploadAvatar=move_uploaded_file($tmp_name, $uploads_dir_avatar.'/'.$nameAvatar);

          //chemin virtuel du dossier pour insertion BD
          $data = [
                  "photo" => 'avatar/'.$nameAvatar
                  ,
          ];
          $params['picUrl'] = $_SERVER['REDIRECT_W_BASE'].'/assets/'.$data['photo'];

          //on met à jour la bdd
          $userManager->update($data, $infosUser['id']);
          $login->refreshUser();
          $validForm =true;
        }
      }
      $params['errors'] = implode(', ',$errors);
      $params['valide'] = $validForm;
      $this->showJson($params);
    }
    public function updateProjet(){

      $this->allowTo(['user','Admin']);
      $login = new AuthentificationManager();
      $projetsManager = new FixUserManager;
      $infosUser = $this->getUser();
      $mimeTypeAllowed = array('image/jpg', 'image/jpeg', 'image/png','image/gif');
      $errors =[];
      $validForm = false;


      //fichier image projet
      if(isset($_FILES['photo']) && $_FILES['photo']['size'] !=0){
        $maxSize = 3*100*1024; //3Mo

        $finfo =new \finfo();

        // On vérifie la taille du fichier
        if($_FILES['photo']['size'] > $maxSize){
          $errors[]='Ficher trop volumineux';
        }
        if (count($errors)==0) {
          // chemin matériel du dossier pr upload fichier
          $uploads_dir_projet = $_SERVER['DOCUMENT_ROOT'].$_SERVER['REDIRECT_W_BASE'].'/assets/projet';
          $tmp_name = $_FILES['photo']['tmp_name'];
          $nameProjet = $infosUser['id'].$_FILES['photo']['name'];
          //Pour que le nom soit unique et eviter les probleme de nom de fichier on l'incrémente de l'id appartenant à projets

          //chose à faire supprimer ou remplacer le ficher


          // On upload le fichier
          //$uploadProjet = move_uploaded_file(filename, destination)
          $uploadProjet=move_uploaded_file($tmp_name, $uploads_dir_projet.'/'.$nameProjet);

          //chemin virtuel du dossier pour insertion BD
          $data = [
                  "photo" => 'projet/'.$nameProjet
                  ,
          ];
          $params['picUrl'] = $_SERVER['REDIRECT_W_BASE'].'/assets/'.$data['photo'];

          //on met à jour la bdd
          $projetsManager->update($data, $infosUser['id']);
          $login->refreshUser();
          $validForm =true;
        }
      }
      $params['errors'] = implode(', ',$errors);
      $params['valide'] = $validForm;
      $this->showJson($params);
    }
    public function projectsPage($id){

      $userManager = new FixUserManager();
      $commentaireManager = new CommentaireManager();// methode manager qui va verifier mon tableau
      $post = array();
      $err = array();
      $formError = false;
      $formValid = false;

      // On vérifie notre formulaire
      if(!empty($_POST)){
        foreach ($_POST as $key => $value) {
          $post[$key] = $value;
        }

        if (empty($post['titre'])){
        $err[] = 'Le titre ne peut être vide !';
        }
        elseif (strlen($post['titre'])<3 || strlen($post['titre'])>100) {
        $err[] = 'Votre titre doit faire au moins 3caractères et ne peut excéder 40 caractères!';
        }

        if (empty($post['comments'])){
        $err[] = 'Votre commentaire ne peut être vide!';
        }
        elseif (strlen($post['comments'])>400) {
        $err[] = 'Votre commentaire a atteint la limite de caractères autotisés, veuillez saisir un commentaire inférieur à 400 caractères!';
        }

        if (count($err)>0) {
          $formError = true;
        }

        else{
          $user = $this->getUser();
          if($user){
            $formValid = true;
            $post['idprojet'] = $id; // Je récupère l'$id en paramètre du controleur projectsPage
            $post['iduserspost'] = $user['id'];// Je récupère l'$id de mon utilisateur par la fonction user utilisé dans mon controller de base

            $commentaireManager->insert($post);// s'il n'y a pas d'erreur je créée un tableau
          }
        }
      }

      $projetManager = new ProjetManager(); // methode manager qui va chercher le projet d'id $id
      $params = [
        'projets' => $projetManager->find($id),
        // récupérer la liste de photos de ce projet
        // pour les afficher dans la vue projectsPage
        'photos'=> $projetManager->getProjectPhotos($id),
        'commentaires' => $commentaireManager->getProjectCommentaires($id),
        'erreurs'=> implode('<br>', $err),
        'formValid' => $formValid,
        'formError' => $formError,
        'user' => $this->getUser(),

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


    public function insertProject(){
        $this->allowTo(['user','Admin']);

        $login = new AuthentificationManager();
        $projectmanager = new ProjectManager();
        $userManager = new FixUserManager;
        $infosUser = $this->getUser();
        $errors = array();
        $params = array();
        $maxSize = 3024 * 3000;
        $dirUpload = 'photo';
        $mimeTypeAllowed = array('image/jpg', 'image/jpeg', 'image/png');
        $validForm =false;

        if(empty($_POST['project_title'])){
            $errors[] = 'le titre est vide';
        }
        if(empty($_POST['description'])){
          $errors[] = 'la description du projet est vide';
        }
        if(count($errors) == 0){
          $projets=$ProjectManager->insert([
          'project_title'   => $_POST['project_title'],
          'description'     => $_POST['description'],
          'date_publish'    => 'NOW()',

          ]);
        }
        else{
          $params['errors'] = $errors;
        }

        //fichier image projets
        if(isset($_FILES['photo']) && $_FILES['photo']['size'] !=0){
          $maxSize = 3*100*1024; //3Mo

          $finfo =new \finfo();

          // On vérifie la taille du fichier
          if($_FILES['photo']['size'] > $maxSize){
            $errors[]='Ficher trop volumineux';
          }
        if(count($errors) == 0){
          // chemin matériel du dossier pr upload fichier
          $uploads_dir_projets = $_SERVER['DOCUMENT_ROOT'].$_SERVER['REDIRECT_W_BASE'].'/assets/projets';
          $tmp_name = $_FILES['photo']['tmp_name'];
          $nameAvatar = $infosUser['id'].$_FILES['photo']['name'];
          //Pour que le nom soit unique et eviter les probleme de nom de fichier on l'incrémente de l'id appartenant à user
          //supprimer ou remplacer le fichier


          $ProjectManager->update([
          'project_title' 	=> $_POST['project_title'],
          'description' 		=> $_POST['description'],

          'date_publish'    => 'NOW()',

          ]);
        }

        else{
          $params['errors'] = $errors;
        }
        $params['success'] = 'votre nouveaux projet à bien été rajouté vous pouvez rajouter des images plus tard !';
        $this->show('profil/insertProject', $params);
        }
    }
    public function allprofiles(){

        $num = 6;
        $page = 1;
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
    public function ajaxpaginallprofiles(){


        $allsusers = new FixUserManager();
        $num = 6;
        $page = $_GET['page'];
        $start = ($page-1) * $num;
        $all = $allsusers->findAll('nom', "ASC", $num, $start);
        $this->showJson($all);
    }
}
