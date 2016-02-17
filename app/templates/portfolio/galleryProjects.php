<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<!-- Mon chemin d'accès url :profil/portfolio/galleryprojects -->
<?php $this->start('main_content') ?>
	<span><a href="">portefolio></a><a href="">gallerie des projets></a></span>
	<section id="presentation" class="container section">
		<div class="row">
			<div class="col l6">
				<img src="<?= $this->assetUrl('img/ebeniste.jpg') ?>" alt="">
			</div>
			<div class="col l6">
				<h4>Paul-Emile DOUDAIN</h4>
				<h6>Marquetteur</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus vero dolor quidem possimus dicta consequatur aliquam, soluta minima voluptatibus officia maiores ipsam veritatis dolore dolorum eum, eligendi modi a commodi?</p>
			</div>
		</div>
	</section>
	<section id="gallery">
		<div class="row">
		<article class="col l4">
			<h7></h7>
			<div><img src="" alt=""></div>
			<p></p>
		</article>

		<article class="col l4">
			<h7></h7>
			<div><img src="" alt=""></div>
			<p></p>
		</article>

		<article class="col l4">
			<h7></h7>
			<div><img src="" alt=""></div>
			<p></p>
		</article>

		<article class="col l4">
			<h7></h7>
			<div><img src="" alt=""></div>
			<p></p>
		</article>

		<article class="col l4">
			<h7></h7>
			<div><img src="" alt=""></div>
			<p></p>
		</article>

		<article class="col l4">
			<h7></h7>
			<div><img src="" alt=""></div>
			<p></p>
		</article>
			
		</div>
	</section>

<?php $this->stop('main_content') ?>
