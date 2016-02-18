<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<div class="row">
    <h1 class="center col l12  red accent-2">Section *Insérer Nom*</h1>
</div>
<div class="slider">
   <ul class="slides">
     <li>
       <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
       <div class="caption center-align">
         <h3>This is our big Tagline!</h3>
         <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
       </div>
     </li>
     <li>
       <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
       <div class="caption left-align">
         <h3>Left Aligned Caption</h3>
         <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
       </div>
     </li>
     <li>
       <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
       <div class="caption right-align">
         <h3>Right Aligned Caption</h3>
         <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
       </div>
     </li>
     <li>
       <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
       <div class="caption center-align">
         <h3>This is our big Tagline!</h3>
         <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
       </div>
     </li>
   </ul>
 </div>
<?php $this->stop('main_content') ?>
