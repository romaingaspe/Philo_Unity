<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

  <div class="row">
    <div id="banner-project" class="container center-align card-panel hoverable grey lighten-2 col l8 offset-l2">
      <span class="left">1 1
      </span>
        PROJETS:
      <span class="right">2 2
      </span>
    </div>
  </div>


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


  <!-- zone de commentaires où j'afficherai 'commentaire et formulaire' si je suis inscrit-->
  <section class="container comments-bloc">

    <!-- formulaire -->
    <?php if($w_user) :?>
      <div id="form-com"class="">
        <div class="row">

          <!-- commentaires -->
          <div class="affich-com col s12 m12 l4">
            <?php foreach($commentaires as $coms):?>
              <h5 class="center-align">Commentaire de <?= $user['prenom'].' '.$user['nom']?></h5>
              <div id="com-project" class="grey lighten-2 ">
                  <h7><?= $coms['titre']?></h7>
                  <p><?= $coms['comments']?></p>
                  <p class="date-publi">publié le<?= $coms['date']?></p>
              </div>
            <?php endforeach;?>
          </div>
          <!-- Pb d'ajout de texte intempestif en base de données
          J'essaie de régler ce problème, je teste donc avec un nouveau contenu de texte si ma page se recharge sans rajouter du texte en base de données... -->

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
                <label for="titre">titre de votre commentaire</label>
              </div>
              <div id="line-postcom" class="input-field col s12 m12 l12">
                  <textarea id="comments" type="text" class="materialize-textarea validate" name="comments"></textarea>
                  <label for="comments">votre commentaire</label>
                  <p class="left" style="padding-top: 5%; padding-left: 1%; color: darkgrey; font-size: 75%;">0/400 caractères</p>
              </div>
            </div>
            <div class="col s12 m12 l12">
                <button type="submit" class="waves-effect waves-light btn right">Envoyer</button>
            </div>
          </form>
          </div>
        </div>
    <?php endif;?>
    <?php var_dump($user)?>
    <?php if(!$w_user) :?><!-- zone de commentaires où j'afficherai 'les commentaires', si je ne suis pas inscrit -->
      <?php foreach($commentaires as $coms):?>
          <h5 class="center-align">Commentaire de <?= $user['prenom'].' '.$user['nom']?></h5>
          <div id="com-project" class="grey lighten-2 ">
              <h7><?= $coms['titre']?></h7>
              <p><?= $coms['comments']?></p>
              <p class="date-publi">publié le<?= $coms['date']?></p>
          </div>
        <?php endforeach;?>
    <?php endif;?>
  </section>

<?php $this->stop('main_content') ?>
