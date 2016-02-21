<header>
	<nav class="brown">
		<div class="container nav-wrapper">
			<a href="/Philo_Unity/public">
				<img class="left" src="<?= $this->assetUrl('img/logo_final.png') ?>"></img>
			</a>
			<ul id="dropdown1" class="dropdown-content">
			  <li><a href="<?php echo '/philo_unity/public/profil/profiluser/'.$_SESSION['user']['id'] ?>">Mon profil</a></li>
			  <li><a href="<?= $this->url('galleryProjects') ?>">Mon Portfolio</a></li>
			  <li class="divider"></li>
			  <li><a href="<?= $this->url('update') ?>">Mes infos</a></li>
			</ul>
			<ul id="nav-resp" class=" col s12 m6 l4 right">
				<li><a href="/Philo_Unity/public/metiers?page=1">Metiers</a></li>
				<?php if(!$_SESSION) :?><li><a href="/Philo_Unity/public/admin/connect">Se connecter</a></li><?php endif;?>
				<?php if($_SESSION) :?><li><a href="/Philo_Unity/public/admin/deconnect">Se deconnecter</a></li><?php endif;?>
				<?php if($_SESSION) :?>
					<li>
						<a href="#" class="col l6 dropdown-button" data-beloworigin="true" data-activates="dropdown1" id="loginfo">
								<img src="<?php echo $_SESSION['user']['photo'] ?>" alt="" class="left " id="circleprofil"/>
						&nbsp;&nbsp;&nbsp;Mon profil
						<i class="material-icons right">arrow_drop_down</i>
					</a>
					</li>
				<?php endif;?>
			</ul>
		</div>
	</nav>
</header>
