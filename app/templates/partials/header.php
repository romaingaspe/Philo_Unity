<header>
	<?php var_dump($_SESSION);?>
	<nav class="brown">
		<div class="container nav-wrapper">
			<a href="/Philo_Unity/public">
				<img class="left" src="<?= $this->assetUrl('img/logo_final.png') ?>"></img>
			</a>
			<ul id="nav-resp" class=" col s12 m6 l4 right">
				<li><a href="/Philo_Unity/public/metiers?page=1">Metiers</a></li>
				<?php if(!$_SESSION) :?><li><a href="/Philo_Unity/public/admin/connect">Se connecter</a></li><?php endif;?>
				<?php if($_SESSION) :?><li><a href="/Philo_Unity/public/admin/deconnect">Se deconnecter</a></li><?php endif;?>
					<li>
						<a href="#">
							<div class="col l12">
			        	<div class="lighten-5">
				          <div class="valign-wrapper">
										<img src="http://lorempixel.com/50/50" alt="" class="circle valign" />
											<p>
												
											</p>
						          <span class="valign">
							          Mon Profil
						          </span>
				          </div>
			        	</div>
		      		</div>
						</a>
					</li>
			</ul>
		</div>
	</nav>
</header>
