<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<!-- Mon chemin d'accès url :profil/portfolio/galleryprojects -->
<?php $this->start('main_content') ?>
	<span><a href="">portefolio></a><a href="">gallerie des projets></a></span>
	
	<!-- 1ère ligne de présentation --> 
	<section id="presentation" class="container row">
			<div class="col l6">
				<img src="<?= $this->assetUrl('img/ebeniste.jpg') ?>" alt="">
			</div>
			<div class="col l6">
				<h4>Paul-Emile DOUDAIN</h4>
				<h5>Marquetteur</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus vero dolor quidem possimus dicta consequatur aliquam, soluta minima voluptatibus officia maiores ipsam veritatis dolore dolorum eum, eligendi modi a commodi?</p>
			</div>
	</section>
	
	<!-- 2ème ligne titre --> 
	<div class="container">
		<h6>Gallerie des projets</h6>
	</div>

	<!-- 3ème ligne gallerie -->
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
