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
	  			<li><a href="<?= $this->url('insertProfil') ?>">entrer un nouveau user</a></li>
	  			<?php endif;?>
			</ul>
			<ul id="dropdown2" class="dropdown-content">
				<form class="white" action="<?= $this->url('recherche') ?>" method="GET">

					<div class="input-field white col l4">
						<input type="search" name="search">
					</div>
					<div class="input-field white col l4">
						<input name="valeur" type="radio" id="test1" value="user"/>
						<label for="test1">Par Utilisateur</label>
					</div>
					<div class="input-field white col l4">
						<input name="valeur" type="radio" id="test2" value="metier" />
						<label for="test2">Par Métier</label>
					</div>
						<br />
					<input type="submit">
				</form>
			</ul>
			<ul id="nav-resp" class=" col s12 m6 l4 right">
				<a href="#" class="dropdown-button" data-beloworigin="true" data-hover="true" data-activates="dropdown2" id="loginfo">
					<i class="material-icons search">search</i>
				</a>
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
		</div>
	</nav>
</header>
