<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div id="mainphoto">
	<div class="row">
		<p class="center white-text">Propulsé par la</p>
		<img id="resp-logo" class="col s12" src="<?= $this->assetUrl('img/LogoPhilomathique.png') ?>" alt="" />
	</div>
</div>
<div class="row section center container" id="presentation">
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
</div>
<div id="carous" class="">
	<div class="carousel">
		<?php foreach ($users as $use):?>
			<a class="carousel-item" href="/philo_unity/public/profil/profiluser/<?= $use['id'] ?>">
				<h2 class="center"><?= $use['prenom'].' '.$use['nom']?></h2>
				<img src="<?= $use['photo'] ?>">
				<?php if(strlen($use['description']) > 100):?>
				<p class="center section"><?= mb_substr($use['description'], 0 , 100).'...' ?></p>
				<?php else:?>
				<p class="center section"><?=$use['description']?></p>
				<?php endif;?>
			</a>
		<?php endforeach;?>
	</div>
</div>
<?php $this->stop('main_content') ?>
