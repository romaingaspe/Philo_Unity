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
            <?php
            echo '<h2>'.$profil['prenom'].' '.$profil['nom'].'</h2>';
            echo '<h3>Métier</h3>';
            echo '<p>inscrite le '. $profil['date_update'].'</p>';
            echo '<br />';
            echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
            ?>
        </div>
        </div>
   
<?php $this->stop('main_content') ?>
