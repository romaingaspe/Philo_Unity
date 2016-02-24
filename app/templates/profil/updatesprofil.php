<?php $this->layout('layout', ['title' => 'modification du profil']) ?>

<?php $this->start('main_content') ?>

	<h1 class="container center-align"></h1>
	<section class="container update-content">
		<div id="entete" class="row">
			<div class="col l4">
				<img src="<?php if(isset($user['photo'])){  echo $user['photo'];} ?>" alt="">
				<div class="file-field input-field">
					<div class="btn btn-add">
						<input type="file" name="photo">
						<span class="add">Ajouter/modifier photo profil </span>
					</div>
				</div>
				<h6 class="center-align nom-prenom"><?php if(isset($user['nom'])){  echo $user['nom'];} ?></h6>
                
			</div>
			<div class="col l8 right  center-align">
				<h6 class="center-align teal lighten-5">Editer vos informations</h6>
				<div class="container center">
			<ul class="collapsible" data-collapsible="expandable">
    			<li>
      				<div class="collapsible-header"><i class="material-icons">filter_drama</i>Modifier son profil</div>
      				<div class="collapsible-body">
      					<div class="row">
		            		<form method="POST" class="col l8 offset-l2"  >
				                <div class="input-field">
				                    <label for="nom">Nom</label>
				                    <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($user['nom'])){  echo $user['nom'];} ?>">
				                </div>
				                <div class="input-field">
				                    <label for="prenom">Prénom</label>
				                    <input type="text" name="prenom" placeholder="Votre Prénom" value="<?php if(isset($user['prenom'])){  echo $user['prenom'];} ?>">
				                </div>
				                <div class="input-field">
				                    <label for="email">E-mail</label>
				                    <input type="email" name="email" placeholder="Votre email" value="<?php if(isset($user['email'])){  echo $user['email'];} ?>">
				                </div>
				                <div class="input-field">
				                    <label for="description">description</label>
				                    <textarea id="description" class="materialize-textarea" name="description" placeholder="Votre description" ><?php if(isset($user['description'])){  echo $user['description'];} ?></textarea>
				                    
				                </div>
				                <div class="input-field">
				                    <label for="linkedin">linkedin</label>
				                    <input type="text" name="linkedin" placeholder="Votre linkedin" value="<?php if(isset($user['linkedin'])){  echo $user['linkedin'];} ?>">
				                </div>

				                <div class="file-field input-field ">
									<div class="btn btn-add">
										<input type="file" name="photo">
										<span class="add">Ajouter/modifier photo profil </span>											
		                      	 	</div>		                      	 
								</div>

								<div class="input-field">
									<input type="submit" name="but" value="Envoyer" class="left waves-effect waves-light btn">
								</div>	

		            		</form>
		        </div>	
      				</div>
    			</li>
    			<li>
      				<div class="collapsible-header"><i class="material-icons">place</i>Ajouter/modifier photo profil</div>
      				<div class="collapsible-body">
      					<div class="file-field input-field">
					<div class="btn btn-add">
						<input type="file" name="photo">
						<span class="add">Ajouter/modifier photo profil </span>
					</div>
				</div>
      				</div>
    			</li>
    			<li>
      				<div class="collapsible-header"><i class="material-icons">whatshot</i>Ajouter/modifier un projet</div>
      				<div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    			</li>
  			</ul>
        
			
		</div>
		<div class="center margetop">
		        	<a class="btn waves-effect waves-light red darken-1" name="action" href="<?= $this->url('index') ?>">Retour à l'accueil</a>
		    	</div>
		
		     </div>   
		    

		    <div class="container center">
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
			<!-- <div class="row gestionInfos">
			<div id="list-edit" class="col m12 l4">
			<div></div>
				<a id="bouton-edit" class=" col m4 waves-effect waves-light btn">Editer votre profil</a>
			 -->


			 


<?php $this->stop('main_content') ?>				