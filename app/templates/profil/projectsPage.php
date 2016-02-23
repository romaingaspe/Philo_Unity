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
        <h4>Dessus de table</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus vero dolor quidem possimus dicta consequatur aliquam, soluta minima voluptatibus officia maiores ipsam veritatis dolore dolorum eum, eligendi modi a commodi?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, pariatur, dignissimos. Assumenda rem dolorum corporis unde eveniet hic voluptas repudiandae eaque illo velit cupiditate porro, non blanditiis consectetur totam ullam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam perferendis eaque perspiciatis harum neque, repudiandae ducimus saepe tenetur consectetur nostrum. Enim necessitatibus quos, dolorem? Impedit explicabo cumque voluptatum tempora Lorem ipsum dolor sit amet, consectetur </p>
      </div>
      <div id="slideprojet" class="col s12 m12 l8 slider">
          <ul class="slides">
            <li>
              <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
              <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-darken-2">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
              <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-darken-2">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
              <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-darken-2">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
              <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-darken-2">Here's our small slogan.</h5>
              </div>
            </li>
          </ul>
          <div id="comment-btn" class="col s12 m12 l12 ">
              <a class="waves-effect waves-light btn right link-com-project">commenter</a>
          </div>
      </div>
      
    </div>
    
  </section>
  <section class="container comments-bloc">
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
