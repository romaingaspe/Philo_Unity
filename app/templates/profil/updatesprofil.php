<?php $this->layout('layout', ['title' => 'modification du profil']) ?>

<?php $this->start('main_content') ?>

	<h1 class="container center-align"></h1>
	<section class="container update-content">
		<div id="entete" class="row">
			<div class="col l4">
				<img src="<?= $this->assetUrl('img/ebeniste2.jpg') ?>" alt="">
				<h6 class="center-align nom-prenom">Pauline DOVES</h6>
			</div>
			<div class="col l8  center-align">
				<h6 class="center-align teal lighten-5">Editer vos informations</h6>
				<div class="container center">
		        <h1>Modifier votre profil</h1>
		        <div class="row">
		            <form method="POST" class="col s12 m12 l6 offset-l3" >
		                <div class="input-field">
		                    <label for="nom">Nom</label>
		                    <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])){  echo $_POST['nom'];} ?>">
		                </div>
		                <div class="input-field">
		                    <label for="prenom">Prénom</label>
		                    <input type="text" name="prenom" placeholder="Votre Prénom" value="<?php if(isset($_POST['prenom'])){  echo $_POST['prenom'];} ?>">
		                </div>
		                <div class="input-field">
		                    <label for="email">E-mail</label>
		                    <input type="email" name="email" placeholder="Votre email" value="<?php if(isset($_POST['email'])){  echo $_POST['email'];} ?>">
		                </div>
		                <div class="input-field">
		                    <label for="description">description</label>
		                    <input type="text" name="description" placeholder="Votre description" value="<?php if(isset($_POST['description'])){  echo $_POST['description'];} ?>">
		                </div>
		                <div class="input-field">
		                    <label for="linkedin">linkedin</label>
		                    <input type="text" name="linkedin" placeholder="Votre linkedin" value="<?php if(isset($_POST['linkedin'])){  echo $_POST['linkedin'];} ?>">
		                </div>
		                <div class="file-field input-field">
							<div class="btn btn-add">
								<input type="file" name="photo">
								<span class="add">Ajouter/modifier photo profil </span>
							</div>
						</div>		                		                		             
		                <div class="input-field margetop">
		                    <input type="submit" name="but" value="Envoyer" class="waves-effect waves-light btn">
		                </div>
		            </form>
		        </div>
		    <div class="center margetop">
		        <a class="btn waves-effect waves-light red darken-1" name="action" href="<?= $this->url('index') ?>">Retour à l'accueil</a>
		    </div>

		<?php if(!empty($errors)) :?>
		        <p class='red-text text-darken-1'>
		        <?= implode('<br />', $errors)?>
		        </p>
		<?php endif; ?>
		<?php if(!empty($success)) :?>
		        <p class='green-text text-darken-1'><?=$success?></p>
		<?php endif; ?>
		</div>

			</div>
			<div class="row gestionInfos">
			<div id="list-edit" class="col m12 l4">
			<div></div>
				<a id="bouton-edit" class=" col m4 waves-effect waves-light btn">Editer votre profil</a>
			 


<?php $this->stop('main_content') ?>				