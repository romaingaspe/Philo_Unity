<?php  

namespace Manager;

class CommentaireManager extends extends \W\Manager\Manager{
  $post = array();
  $err = array();
  $formError = false;
  $formValid = false;

  // On vérifie notre formulaire
  if(!empty($_POST)){
    foreach ($_POST as $key => $value) {
      $post[$key] = $value;
    }

    if (empty($post['title'])){
    $err[] = 'Le titre ne peut être vide !';    
    }
    elseif (strlen($post['title'])<3 || strlen($post['title'])>40) {
    $err[] = 'Votre titre doit faire au moins 3caractères et ne peut excéder 40 caractères!';    
    }

    if (empty($post['content'])){
    $err[] = 'Votre commentaire ne peut être vide!';    
    }
    elseif (strlen($post['content'])>400) {
    $err[] = 'Votre commentaire a atteint la limite de caractères autotisés, veuillez saisir un commentaire inférieur à 400 caractères!';    
    }

    if (empty($post['userId']) && !is_numeric($_POST['userId'])){
    $err[] = 'Tu ne dois pas modifier le code source petit malin :-)!';
    }

    if (count($err)>0) {
      $formError = true;
    }

    else{
      $formValid =true;
    }
}
