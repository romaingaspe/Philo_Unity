<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div id="mainphoto">
	<div class="row">
		<p class="center white-text">Propulsé par la</p>
		<img class="col l6 offset-l3"src="<?= $this->assetUrl('img/LogoPhilomathique.png') ?>" alt="" />
	</div>
</div>
<div id="carous" class="">
	<div class="carousel">
		<a class="carousel-item" href="#one!">
			<h2 class="center">Machin truc</h2>
			<img src="http://lorempixel.com/600/600/people/1">
			<p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
		</a>
		<a class="carousel-item" href="#two!">
			<h2 class="center">Machin truc</h2>
			<img src="http://lorempixel.com/600/600/people/2">
			<p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
		</a>
		<a class="carousel-item" href="#three!">
			<h2 class="center">Machin truc</h2>
			<img src="http://lorempixel.com/600/600/people/3">
			<p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
		</a>
		<a class="carousel-item" href="#four!">
			<h2 class="center">Machin truc</h2>
			<img src="http://lorempixel.com/600/600/people/4">
			<p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
		</a>
		<a class="carousel-item" href="#five!"
			><h2 class="center">Machin truc</h2>
			<img src="http://lorempixel.com/600/600/people/5">
			<p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
		</a>
	</div>
</div>
<?php $this->stop('main_content') ?>
