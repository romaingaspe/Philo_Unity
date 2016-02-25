<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

  <!-- 1ère ligne titre --> 
  <div id="gallery-title" class="container row">
    <div class="col s12 m12 l12">
      <div class="center">
      <span class="col offset-s1 s10 offset-m1 m10 offset-l1 l10 center-align patch-centered nw-titleentete">Projet n° <?= $projets['id']?></span></div>
      <!-- <div class="cote-titre"></div> -->
    </div>
  </div>
<!-- 2ème ligne ZONE présentation de projet (description projet à gauche et slide projet à droite) --> 

  <section id="description" class="container section">
    <div class="row">
      <div id="titleprojet" class="col s12 m12 l4">
        <h4><?= $projets['project_title']?></h4>
        <p><?= $projets['description']?></p>
      </div>
      <div id="slideprojet" class="col s12 m12 l8 slider">
        <ul class="slides">
          <?php foreach($photos as $pictures):?>
            <li>
              <img src="<?= $pictures['photo']?>"> <!-- random image -->
              <div class="caption center-align">
                <h3><?= $pictures['caption']?></h3>
                <h5 class="light grey-text text-darken-2">Projet<?= $projets['project_title']?></h5>
                </div>
            </li>
          <?php endforeach;?>
        </ul>
      </div>
    </div>
  </section>


  <!-- ZONE de commentaires où j'afficherai 'commentaire et formulaire' si je suis inscrit-->
  <section class="container comments-bloc">

    
    <?php if($w_user) :?>
      <div id="form-com"class="">
        <div class="row">

        <!-- Gauche : commentaires des utilisateurs -->
          <div class="affich-com col s12 m12 l4">
            <?php foreach($commentaires as $coms):?>
              <h5 class="center-align">Commentaire de <?= $w_user['prenom'].' '.$w_user['nom']?></h5>
              <div id="com-project" class="grey lighten-2 ">
                  <h7><?= $coms['titre']?></h7>
                  <p><?= $coms['comments']?></p>
                  <p class="date-publi">publié le<?= $coms['date']?></p>
              </div>
            <?php endforeach;?>
          </div>
          <!-- Droite : formulaire apparant pour les utilisateurs-->
          <form class="col s12 m12 l8" method="POST" action="<?= $this->url('projectsPage',['id' => $projet['id']])?>">
            <?php if($formError):?>
              <p class="error"><?= $erreurs ?></p>
            <?php endif;?>

            <?php if($formValid):?>
              <p class="valid">Votre commentaire a bien été envoyé !</p>
            <?php endif;?>

            <h5 class="container center-align ">Publier un commentaire </h5>
            <div class="row">
              <div class="input-field col s12 m12 l12">
                <input id="titre" type="text" class="validate" name="titre">
                <label for="titre">Titre de votre commentaire</label>
              </div>
              <div id="line-postcom" class="input-field col s12 m12 l12">
                  <textarea id="comments" type="text" class="materialize-textarea validate" name="comments"></textarea>
                  <label for="comments">Votre commentaire</label>
                  <p class="left">0/400 caractères</p>
              </div>
            </div>
            <div class="col s12 m12 l12">
                <button type="submit" class="waves-effect waves-light btn right">Envoyer</button>
            </div>

          </form>
        </div>
      </div>
        
    <?php endif;?>

    <!-- ZONE de commentaires où j'afficherai SEULEMENT'les commentaires', si je ne suis pas inscrit -->
    <?php if(!$w_user) :?>
      <?php foreach($commentaires as $coms):?>
        <h5 class="center-align">Commentaire de <?= $coms['prenomUser'].' '.$coms['nomUser']?></h5>
        <div id="com-project" class="grey lighten-2 ">
            <h7><?= $coms['titre']?></h7>
            <p><?= $coms['comments']?></p>
            <p class="date-publi">publié le<?= $coms['date']?></p>
        </div>
      <?php endforeach;?>
      <div class="affich-com col s12 m12 l4">
      </div>
    <?php endif;?>
  </section>

<?php $this->stop('main_content') ?>
