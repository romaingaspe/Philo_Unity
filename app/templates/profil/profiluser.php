<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
  
  <!-- 1ère ligne de présentation --> 
  <section id="presentation" class="container row">
      <div class="col m6 l6">
        <img class="responsive-img" src="<?= $profil['photo'] ?>" alt=""/>
      </div>
      <div class="col m6 l6">
        <h4><?= $profil['prenom'].' '.$profil['nom'] ?></h4>
        <h5><?= $profil['id_metier']?></h5>
        <p class="teal lighten-5"><?= $profil['description']?></p>
      </div>
  </section>
  
  <!-- 2ème ligne titre --> 
  <div id="gallery-title" class="container row">
  <div class="col s12 m12 l12">
    <span class="col s1 m1 l1 center-align patch-leftside">2</span>
    <span class="col s10 m10 l10 center-align patch-centered teal lighten-5">Gallerie des projets</span>
    <span class="col s1 m1 l1 center-align patch-rightside">2</span>
    </div>

  </div>

  <!-- 3ème ligne gallerie -->
  <div id="cards-folio" class="container row isotope">
    <div id="cards-global-content"> <!-- div qui contient toutes mes cartes de projets -->
      <div class=" col m6 l4 ">
          <div class="card">
            <div class="card-content" style="padding: 7px;">
                  <p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
                <a href="">
                  <span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
                </a>
            </div>
            <div class="card-image waves-effect waves-block waves-light">
              <a href="">
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! 
                  </p>
                  <img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class=" col m6 l4 ">
          <div class="card">
            <div class="card-content" style="padding: 7px;">
                  <p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
                <a href="">
                  <span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
                </a>
            </div>
            <div class="card-image waves-effect waves-block waves-light">
              <a href="">
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! 
                  </p>
                  <img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class=" col m6 l4 ">
          <div class="card">
            <div class="card-content" style="padding: 7px;">
                  <p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
                <a href="">
                  <span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
                </a>
            </div>
            <div class="card-image waves-effect waves-block waves-light">
              <a href="">
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! 
                  </p>
                  <img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class=" col m6 l4 ">
          <div class="card">
            <div class="card-content" style="padding: 7px;">
                  <p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
                <a href="">
                  <span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
                </a>
            </div>
            <div class="card-image waves-effect waves-block waves-light">
              <a href="">
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut!
                  </p>
                  <img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class=" col m6 l4 ">
          <div class="card">
            <div class="card-content" style="padding: 7px;">
                  <p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
                <a href="">
                  <span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
                </a>
            </div>
            <div class="card-image waves-effect waves-block waves-light">
              <a href="">
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! 
                  </p>
                  <img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class=" col m6 l4 ">
          <div class="card">
            <div class="card-content" style="padding: 7px;">
                  <p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
                <a href="">
                  <span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
                </a>
            </div>
            <div class="card-image waves-effect waves-block waves-light">
              <a href="">
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! 
                  </p>
                  <img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>

        <img class="col l3 responsive-img" src="<?= $profil['photo'] ?>" alt="" id="trombi"/>
        <div class="col l6">

    <div class="row" id="profil">
        <div id="img-prof-use" class=" col l8 offset-l3">
        <?php
        echo '<img class="col l3 m4 s12 offset-m2 s1" src="'.$profil['photo'].'" alt="" id="trombi"/>'
        ?>
        <div id="profil-desc" class="col l6 offset-s3">

            <?php
            echo '<h2>'.$profil['prenom'].' '.$profil['nom'].'</h2>';
            echo '<h3>Métier</h3>';
            echo '<p>inscrite le '. $profil['date_update'].'</p>';
            echo '<br />';
            echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
            ?>
        </div>
        </div>

    </div>
    <a  href="#" id="font-folio" class="center-align"><h4>Voir le portfolio</h4></a>
    <div id="profilslide" class="slider center-ali">
       <ul class="slides ">
         <li>
           <img class="responsive-img" src="http://lorempixel.com/1000/500/technics/1"> <!-- random image -->
           <div class="caption center-align">
             <h3>This is our big Tagline!</h3>
             <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
           </div>
         </li>
         <li>
           <img src="http://lorempixel.com/1000/500/technics/2"> <!-- random image -->
           <div class="caption left-align">
             <h3>Left Aligned Caption</h3>
             <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
           </div>
         </li>
         <li>
           <img src="http://lorempixel.com/1000/500/technics/3"> <!-- random image -->
           <div class="caption right-align">
             <h3>Right Aligned Caption</h3>
             <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
           </div>
         </li>
         <li>
           <img src="http://lorempixel.com/1000/500/technics/4"> <!-- random image -->
           <div class="caption center-align">
             <h3>This is our big Tagline!</h3>
             <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
           </div>
         </li>
       </ul>
     </div>

<?php $this->stop('main_content') ?>
