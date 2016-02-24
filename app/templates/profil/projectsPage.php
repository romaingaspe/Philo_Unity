<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<?php var_dump($photos) ?>
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
          
          <!-- <div id="comment-btn" class="col s12 m12 l12 ">
              <a class="waves-effect waves-light btn right link-com-project">commenter</a>
          </div> -->
      </div>
    </div>
  </section>

  

  <!-- zone de commentaires où j'afficherai 'commentaire et formulaire' -->
  <section class="container comments-bloc">

    <!-- formulaire -->
  <?php if($w_user) :?> 
      <div id="form-com"class="">
        <div class="row">

        <!-- commentaires -->
        <div class="col s12 m12 l4">
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
        </div>
          <form class="col s12 m12 l8" method="POST" action="<?= $this->url('projectsPage',['id' => $projet['id']])?>">
            <h5 class="container center-align ">Publier un commentaire </h5>
            <div class="row">
              <div class="input-field col s12 m12 l12">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">titre de votre commentaire</label>
              </div>
              <div id="line-postcom" class="input-field col s12 m12 l12">
                  <textarea id="last_name" type="text" class="materialize-textarea validate"></textarea>
                  <label for="last_name">votre commentaire</label>
              </div>
            </div>
            <div class="col s12 m12 l12">
                <button type="submit" class="waves-effect waves-light btn right">Envoyer</button>
            </div>
          </form>  
      </div>  
    </div>
      <?php endif;?>  

    <?php if(!$w_user) :?><!-- zone de commentaires où j'afficherai 'commentaires' tout court -->
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
