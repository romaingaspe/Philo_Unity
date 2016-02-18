<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<h1>updates_pages</h1>
	<section class="container">
		<div id="entete" class="row">
			<div class="col l4">
				<img src="<?= $this->assetUrl('img/ebeniste2.jpg') ?>" alt="">
				<h6 class="center-align nom-prenom">Pauline DOVES</h6>
			</div>
			<div class="col l8  center-align">
				<h6 class="center-align teal lighten-5">Gestion de vos informations</h6>
			</div>
		</div>
		<div class="row">
			<div id="list-edit" class="col l4">
				<a id="bouton-edit" class="waves-effect waves-light btn">Editer votre profil</a>
				<a id="bouton-edit" class="waves-effect waves-light btn">Editer votre profil</a>
				<a id="bouton-edit" class="waves-effect waves-light btn">Editer votre profil</a>
			</div>
			<div class="col l2">
				<a id="bouton-edit" class="waves-effect waves-light btn">Editer votre profil</a>
				<a id="bouton-edit" class="waves-effect waves-light btn">Editer votre projet</a>
			</div>
			<div class="col l6">
				<form >
					<div class="row">
						 <form class="">
							 <div class="input-field col s12">
							 	<textarea id="textarea1" class="materialize-textarea"></textarea>
							 	<label for="textarea1">Textarea</label>
							</div>
						</form>
					 </div>
					 <div class="row">
 						 <form class="">
	 						 <div class="input-field col s12">
								 	<textarea id="textarea1" class="materialize-textarea"></textarea>
								 	<label for="textarea1">Textarea</label>
	 						</div>
 						</form>
					 </div>
				</form>
			</div>
	        
		</div>     
    </section>
<?php $this->stop('main_content') ?>
