<?php $this->layout('layout', ['title' => 'modification de mes infos']) ?>

<?php $this->start('main_content') ?>

	<h1 class="container center-align"></h1>
	<section class="container update-content">

		<div id="entete" class="row">

			<div class="col l4">

				<img src="<?php if(isset($w_user['photo'])){  echo $w_user['photo'];} ?>" alt="">
				<form action="" method="POST">
					<div class="file-field input-field">
						<div class="btn btn-add">
							<input type="file" name="photo">
							<span class="add">Ajouter/modifier photo profil </span>
						</div>
					</div>
				</form>

				<h6 class="center-align nom-prenom"><?php if(isset($w_user['nom'])){  echo $w_user['nom'];} ?></h6>
                
			</div>
			<div class="col l8 right  center-align">
				<h6 class="center-align teal lighten-5">Editer vos informations</h6>
				<div class="container center">
					<ul class="collapsible" data-collapsible="expandable">
    					<li>
      						<div class="collapsible-header active"><i class="material-icons">filter_drama</i>Modifier son profil</div>
      						<div class="collapsible-body">
	      						<div class="row">
				            		<form method="POST" class="col l8 offset-l2"  >
						                <div class="input-field">
						                    <label for="nom">Nom</label>
						                    <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($w_user['nom'])){  echo $w_user['nom'];} ?>">
						                </div>
						                <div class="input-field">
						                    <label for="prenom">Prénom</label>
						                    <input type="text" name="prenom" placeholder="Votre Prénom" value="<?php if(isset($w_user['prenom'])){  echo $w_user['prenom'];} ?>">
						                </div>
						                <div class="input-field">
						                    <label for="email">E-mail</label>
						                    <input type="email" name="email" placeholder="Votre email" value="<?php if(isset($w_user['email'])){  echo $w_user['email'];} ?>">
						                </div>
						                <div class="input-field">
						                    <label for="description">description</label>
						                    <textarea id="description" class="materialize-textarea" name="description" placeholder="Votre description" ><?php if(isset($w_user['description'])){  echo $w_user['description'];} ?></textarea>
						                    
						                </div>
						                <div class="input-field">
						                    <label for="linkedin">linkedin</label>
						                    <input type="text" name="linkedin" placeholder="Votre linkedin" value="<?php if(isset($w_user['linkedin'])){  echo $w_user['linkedin'];} ?>">
						                </div>

						                
										<div class="input-field">
											<input type="submit" name="but" value="Envoyer" class="left waves-effect waves-light btn">
										</div>	
										<br>
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
				            		</form>
			        			</div>	
      						</div>
    					</li>
    					<li>
		      				<div class="collapsible-header"><i class="material-icons">whatshot</i>Ajouter un projet
		      				</div>
		      				<div class="collapsible-body">
		      					<div class="row">
	  								<form method="POST" class="col l8 offset-l2" >
	        							<div class="input-field">
	              							<label for="project_title">Titre projet</label>
	                  						<input type="text" name="project_title" placeholder="titre projet">
	        							</div>
								        <div class="input-field">
								            <label for="description">description projet</label>
								            <input type="text" name="description" placeholder="description">
								        </div>
              							
	        							<div class="input-field margetop">
	                  						<input type="submit" name="but" value="Envoyer" class="waves-effect waves-light btn">
	        							</div>
	      							</form>
      							</div>
      						</div>
    					</li>
    					vb 
  					</ul>		
				</div>		
		    </div>   
		</div>
	</section>
<?php $this->stop('main_content') ?>				