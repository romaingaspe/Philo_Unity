<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div id="mainphoto">
	<div class="row">
		<p class="center white-text">Propulsé par la</p>
		<img id="resp-logo" class="col s12" src="<?= $this->assetUrl('img/LogoPhilomathique.png') ?>" alt="" />
	</div>
</div>
<div id="carous" class="">
	<div class="carousel">
		<?php foreach ($users as $use):?>
			<a class="carousel-item" href="/philo_unity/public/profil/profiluser/<?= $use['id'] ?>">
				<h2 class="center"><?= $use['prenom'].' '.$use['nom']?></h2>
				<img src="<?= $use['photo'] ?>">
				<p class="truncate"><?= $use['description'] ?></p>
			</a>
		<?php endforeach;?>
	</div>
</div>
<?php $this->stop('main_content') ?>
