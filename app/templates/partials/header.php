<header>
	<nav class="brown">
		<div class="container nav-wrapper">
			<a href="<?= $this->url('index') ?>">
				<img class="left" src="<?= $this->assetUrl('img/logo_final.png') ?>"></img>
			</a>
			<ul id="dropdown1" class="dropdown-content">
				<li><a href="<?= $this->url('profiluser').$_SESSION['user']['id'] ?>">Mon profil</a></li>
			  	<li class="divider"></li>
			  	<li><a href="<?= $this->url('update') ?>">Mes infos</a></li>
			  	<?php if($w_user['role']=='Admin'):?>
	  			<li><a href="<?= $this->url('insertProfil') ?>">Entrer un nouvel utilisateur</a></li>
	  			<?php endif;?>
	  			<?php if($w_user['role']=='Admin'):?>
	  			<li><a href="<?= $this->url('insertSection') ?>">Entrer une nouvelle section</a></li>
	  			<?php endif;?>
			</ul>
			<ul id="dropdown2" class="dropdown-content">
				<form class="center " action="<?= $this->url('recherche') ?>" method="GET">
					<div class="row" id="search">
						<input type="search" name="search" class="col l8 offset-l2 black-text" placeholder="Votre recherche">
					</div>
					<div class="input-field row">
						<div class="col l6">
							<input name="valeur" type="radio" id="test1" value="user"/>
							<label for="test1">Par Utilisateur</label>
						</div>
						<div class="col l6">
							<input name="valeur" type="radio" id="test2" value="metier" />
							<label for="test2">Par Métier</label>
						</div>
					</div>
					<div class="row">
						<button type="submit" class="btn waves-effect waves-light col l4 offset-l4" id="searchbut">cherche!</button>
					</div>
				</form>
			</ul>
			<ul id="mobile-demo" class=" col s12 m6 l4 right side-nav">
				<li>
					<a href="#" class="dropdown-button" data-beloworigin="true" data-hover="true" data-constrainwidth="false" data-activates="dropdown2" >
					<i class="material-icons search">search</i>
					</a>
				</li>
				<li><a href="<?= $this->url('metiers') ?>">Metiers</a></li>
				<?php if(!$w_user) :?><li><a href="<?= $this->url('connect') ?>">Se connecter</a></li><?php endif;?>
				<?php if($w_user) :?><li><a href="<?= $this->url('deconnect') ?>">Se deconnecter</a></li><?php endif;?>
				<?php if($w_user)  :?>
					<li>
						<a href="#" class="col l6 dropdown-button" data-beloworigin="true" data-activates="dropdown1" id="loginfo">
								<img src="<?= $_SESSION['user']['photo'] ?>" alt="" class="left " id="circleprofil"/>
						&nbsp;&nbsp;&nbsp;Mon profil
						<i class="material-icons right">arrow_drop_down</i>
					</a>
					</li>
				<?php endif;?>
			</ul>
			<ul id="nav-resp" class=" col s12 m6 l4 right hide-on-med-and-down">
				<li>
					<a href="#" class="dropdown-button" data-beloworigin="true" data-hover="true" data-constrainwidth="false" data-activates="dropdown2" >
					<i class="material-icons search">search</i>
					</a>
				</li>
				<li><a href="<?= $this->url('metiers') ?>">Metiers</a></li>
				<?php if(!$w_user) :?><li><a href="<?= $this->url('connect') ?>">Se connecter</a></li><?php endif;?>
				<?php if($w_user) :?><li><a href="<?= $this->url('deconnect') ?>">Se deconnecter</a></li><?php endif;?>
				<?php if($w_user)  :?>
					<li>
						<a href="#" class="col l6 dropdown-button" data-beloworigin="true" data-activates="dropdown1" id="loginfo">
								<img src="<?= $_SESSION['user']['photo'] ?>" alt="" class="left " id="circleprofil"/>
						&nbsp;&nbsp;&nbsp;Mon profil
						<i class="material-icons right">arrow_drop_down</i>
					</a>
					</li>
				<?php endif;?>
			</ul>
			<a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
		</div>
	</nav>
</header>
