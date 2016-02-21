<header>
	<?php var_dump($_SESSION);?>
	<nav class="brown">
		<div class="container nav-wrapper">
			<a href="/Philo_Unity/public">
				<img class="left" src="<?= $this->assetUrl('img/logo_final.png') ?>"></img>
			</a>
			<ul id="nav-resp" class="row col s12 m6 l3 right">
				<li><a href="/Philo_Unity/public/metiers?page=1">Metiers</a></li>
				<?php if(!$_SESSION) :?><li><a href="/Philo_Unity/public/admin/connect">Se connecter</a></li><?php endif;?>
				<?php if($_SESSION) :?><li><a href="/Philo_Unity/public/admin/deconnect">Se deconnecter</a></li><?php endif;?>
			</ul>
		</div>
	</nav>
</header>
