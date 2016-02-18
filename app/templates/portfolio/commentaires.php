<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
		<div class="row">

			<div id="banner-project" class="center-align card-panel hoverable grey lighten-2 col l8 offset-l2"
		 			style="margin-top: 1%;"><span class="left"style="background-color: #128b82;padding: 15px;color: transparent;">1 1
		 			</span>COMMENTAIRE<span class="right"style="background-color: #128b82;padding: 15px;color: transparent;">2 2
		 			</span>
			</div>

		</div>
		<div class="container">
		<div id="image-entete" class="row">
			<img class="col l6 offset-l3 responsive-img wp-post-image"src="<?= $this->assetUrl('img/marqueterie4.jpg') ?>">

		</div>
		</div>

		<div class="container"style="width: 50%;background-color: #e0e0e0;">
			<div class="row">
    			<form class="col s12">
      			<div class="row">
        			<div class="input-field col s6">
          			<input placeholder="Placeholder" id="first_name" type="text" class="validate">
          			<label for="first_name">entrer votre nom</label>
        			</div>
        			<div class="input-field col s6">
          			<input id="last_name" type="text" class="validate">
          			<label for="last_name">titre du commentaire</label>
        			</div>
      			</div>
      			<div class="input-field col s6">
          			<input id="last_name" type="text" class="validate">
          			<label for="last_name">posté un commentaire</label>
        			</div>
      			</div>
      			
    		</form>
  			</div>			
		</div>
<?php $this->stop('main_content') ?>
