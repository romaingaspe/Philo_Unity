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
  			<h5 class="center-align col s12 m12 l12">Dessus de table</h5>
        <div class="center-align">
  			<img class="col s12 m12 l12  responsive-img wp-post-image"src="<?= $this->assetUrl('img/marqueterie4.jpg') ?>"></div>

  		</div>
		</div>

		<div id="form-com"class="container">
			<div class="row">
    			<form class="col s12">
    			<div id="image-entete">
    				<h5 class="container center-align ">Publier un commentaire </h5>
    			</div>
          <div class="row">
        			<div class="input-field col s12 m12 l12">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">votre nom</label>
              </div>
        			<div class="input-field col s12 m12 l12">
          			<input id="last_name" type="text" class="validate">
          			<label for="last_name">titre de votre commentaire</label>
        			</div>
      		</div>
      		<div id="line-postcom" class="input-field col s12 m12 l12">
          			<input id="last_name" type="text" class="validate">
          			<label for="last_name">votre commentaire</label>
        			</div>
              <div class="col s12 m12 l12">
        			<a class="waves-effect waves-light btn right">Envoyer</a></div>
      			</div>
      		</form>
    		</form>
  			</div>			
		</div>
<?php $this->stop('main_content') ?>
