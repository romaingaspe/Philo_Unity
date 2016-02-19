<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<h1 class="container center-align"></h1>
	<section class="container">
		<div id="entete" class="row">
			<div class="col l4">
				<img src="<?= $this->assetUrl('img/ebeniste2.jpg') ?>" alt="">
				<h6 class="center-align nom-prenom">Pauline DOVES</h6>
			</div>
			<div class="col l8  center-align">
				<h6 class="center-align teal lighten-5">Editer vos informations</h6>
			</div>
		</div>
		<div class="row gestionInfos">
			<div id="list-edit" class="col m12 l4">
			<div></div>
				<a id="bouton-edit" class=" col m4 waves-effect waves-light btn">Editer votre profil</a>
				<a id="bouton-edit" class=" col m4 waves-effect waves-light btn">Editer votre </a>
				<a id="bouton-edit" class=" col m4 waves-effect waves-light btn">Editer votre profil</a>
			</div>
			<div id="bloc-projet-edit" class="col m12 l2">
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
				<div class=" grey lighten-4">
					<div class="row">
						 <form>
							 <div class="champsText input-field col s12">
							 	<textarea id="textarea1" class="input-field materialize-textarea"></textarea>
							 	<label for="textarea1">Titre de votre projet</label>
							</div>
							<div class="champsText input-field col s12">
								 	<textarea id="textarea1" class="materialize-textarea"></textarea>
								 	<label for="textarea1">Descriptif</label>
	 						</div>
						</form>
					</div>
				</div>
				<div>
					<div class="col l1 titre-doc-charge">
						<h6>Titre</h6>
					</div>
				</div>
					<form class="col l5">
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
						<div class="file-field input-field">
							<div class="btn btn-add">
								<input type="file">
								<span class="add">Ajouter un fichier</span>
							</div>
						</div>
					</form>
					<div class="col l12 center-align">
						<button class="btn waves-effect waves-light" type="submit" name="action">Enregistrer
							<i class="material-icons right">send</i>
						</button>
					</div>
				</div>
			
			
		</div>     
    </section>
<?php $this->stop('main_content') ?>
