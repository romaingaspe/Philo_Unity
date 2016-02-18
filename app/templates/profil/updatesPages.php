<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<h1 class="container">updates_pages</h1>
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
				<a id="bouton-edit" class="waves-effect waves-light btn">Editer votre </a>
				<a id="bouton-edit" class="waves-effect waves-light btn">Editer votre profil</a>
			</div>
			<div id="bloc-projet-edit" class="col l2">
				<a id="projet-edit" class="waves-effect waves-light btn">
				Nom de mon projet 1</a>
				<a id="projet-edit" class="waves-effect waves-light btn">
				Nom de mon projet 2</a>
				<a id="projet-edit" class="waves-effect waves-light btn">
				Nom de mon projet 3</a>
				<a id="projet-edit" class="waves-effect waves-light btn">
				Nom de mon projet 4</a>
				<a id="projet-edit" class="waves-effect waves-light btn">
				Nom de mon projet 5</a>
				<a id="projet-edit" class="waves-effect waves-light btn">
				Nom de mon projet 6</a>
			</div>
			<div id="form-update" class="col l6">
				<h6 class="center-align nameProject">Nom de mon projet 1</h6>
				<form class=" grey lighten-4">
					<div class="row">
						 <form>
							 <div class="champsText input-field col s12">
							 	<textarea id="textarea1" class="materialize-textarea"></textarea>
							 	<label for="textarea1">Titre de votre projet</label>
							</div>
							<div class="champsText input-field col s12">
								 	<textarea id="textarea1" class="materialize-textarea"></textarea>
								 	<label for="textarea1">Descriptif</label>
	 						</div>
						</form>
					</div>
				</form>
				<div class="col l1 titre-doc-charge">
					<h6>Titre</h6>
				</div>
				<form class="col l6">
					<div class="row">
						<div class="input-field">
							<input id="input_text" type="text" length="10">
							<label for="input_text">Input text</label>
						</div>
					</div>
				</form>
				<form action="#" class="col l5">
					<div class="file-field input-field">
						<div class="btn">
							<input type="file">
							<span>File</span>
							
						</div>
						<div class="file-path-wrapper">
							<input class="file-path validate" type="text">
						</div>
					</div>
					
				</form>
				
        
        
			</div>
	        
		</div>     
    </section>
<?php $this->stop('main_content') ?>
