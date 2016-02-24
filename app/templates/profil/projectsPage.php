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
        <h4><?= $projet['project_title']?></h4>
        <p><?= $projet['description']?></p>
      </div>
      <div id="slideprojet" class="col s12 m12 l8 slider">
        <ul class="slides">
          <?php foreach($photos as $pictures):?>
            <li>
              <img src="<?= $pictures['photo']?>"> <!-- random image -->
              <div class="caption center-align">
                <h3><?= $pictures['caption']?></h3>
                <h5 class="light grey-text text-darken-2">Projet<?= $projet['project_title']?></h5>
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
              <h5 class="center-align">Commentaire de <?= $utilisateur['prenom'].' '.$utilisateur['nom']?></h5>
              <div id="com-project" class="grey lighten-2 ">
                  <h7><?= $coms['titre']?></h7>
                  <p><?= $coms['comments']?></p>
                  <p style="font-style: italic;font-size: 0.8em;">publié le<?= $coms['date']?></p>     
              </div>
            <?php endforeach;?> 
          </div>
          <!-- Pb d'ajout de texte intempestif en base de données
          J'essaie de régler ce problème, je teste donc avec un nouveau contenu de texte si ma page se recharge sans rajouter du texte en base de données... -->
          <?php var_dump($utilisateur) ?>
          <form class="col s12 m12 l8" method="POST" action="<?= $this->url('projectsPage',['id' => $projet['id']])?>">
            <?php if($formError):?>
              <p style="color:red"><?= $erreurs ?></p>
            <?php endif;?>  

            <?php if($formValid):?>
              <p style="color:green">Votre commentaire a bien été envoyé !</p>
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

    <?php if(!$w_user) :?><!-- zone de commentaires où j'afficherai 'les commentaires', si je ne suis pas inscrit -->
      <h5 class="center-align">Derniers commentaires sur le projet</h5>
      <div id="com-project" class="grey lighten-2 ">
          <h7>gorginette</h7>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus accusamus quaerat quam quibusdam modi    enim, fugit! Quod voluptatem quisquam ducimus dolorem nisi blanditiis vitae iste error. Minima necessitatibus, natus minus.</p>
          <p style="font-style: italic;font-size: 0.8em;">posté le 02/03/2156</p>     
      </div>
      <div id="com-project" class="grey lighten-2">
          <h7>pascalette</h7>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus accusamus quaerat quam quibusdam modi enim, fugit! Quod voluptatem quisquam ducimus dolorem nisi blanditiis vitae iste error. Minima necessitatibus, natus minus.</p>
          <p style="font-style: italic;font-size: 0.8em;">posté le 02/04/2156</p> 
      </div>
    <?php endif;?>
  </section>

    <div id="pagi-project" style="text-align: center;">
      <ul class="pagination">
          <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
          <li class="active"><a href="#!">1</a></li>
          <li class="waves-effect"><a href="#!">2</a></li>
          <li class="waves-effect"><a href="#!">3</a></li>
          <li class="waves-effect"><a href="#!">4</a></li>
          <li class="waves-effect"><a href="#!">5</a></li>
          <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>
    </div>

<?php $this->stop('main_content') ?>
