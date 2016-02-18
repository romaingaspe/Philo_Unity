<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	<h1>updates_pages</h1>
	<section class="container">
		<div id="entete" class="row">
			<div class="col l4">
				<img src="<?= $this->assetUrl('img/ebeniste2.jpg') ?>" alt="">
				<h6 class="center-align">Pauline DOVES</h6>
			</div>
			<div class="col l8  center-align">
				<h6 class="center-align teal lighten-5">Gestion de vos informations</h6>
			</div>
		</div>
		<div class="row">
			<div id="list-edit" class="col l4">
				<a class="waves-effect waves-light btn">Editer votre profil</a>
				<a class="waves-effect waves-light btn">Editer votre projet</a>
				<a class="waves-effect waves-light btn">Lire vos messages</a>
			</div>
			<div class="col l2">
				<a class="waves-effect waves-light btn">Editer votre profil</a>
				<a class="waves-effect waves-light btn">Editer votre projet</a>
			</div>
			<form class="col l6">
				<!-- <div class="row"> -->
					<div class="input-field col s6">
					<i class="material-icons prefix">mode_edit</i>
					<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
					<label for="icon_prefix2">Votre message</label>
					</div>
				<!-- </div> -->
			</form>
	        
		</div>     
    </section>
<?php $this->stop('main_content') ?>
