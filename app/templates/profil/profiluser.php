<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
    <div class="row" id="bandeau">
        <h1 class="center col l12  red accent-2">Section *Insérer Nom*</h1>
    </div>
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
