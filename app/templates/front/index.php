<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div class="responsive-img">
	<img src="<?= $this->assetUrl('img/philo.jpg') ?>">
</div>
<?php $this->stop('main_content') ?>
