<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div id="mainphoto">
	<div class="row">
		<p class="center">Propulsé par la</p>
		<img class="col l6 offset-l3"src="<?= $this->assetUrl('img/LogoPhilomathique.png') ?>" alt="" />
	</div>
</div>
<div class="carousel">
	 <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/600/600/nature/1"></a>
	 <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/600/600/nature/2"></a>
	 <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/600/600/nature/3"></a>
	 <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/600/600/nature/4"></a>
	 <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/600/600/nature/5"></a>
 </div>
<?php $this->stop('main_content') ?>
