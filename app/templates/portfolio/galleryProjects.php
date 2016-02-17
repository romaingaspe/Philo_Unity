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
				<p class="teal lighten-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus vero dolor quidem possimus dicta consequatur aliquam, soluta minima voluptatibus officia maiores ipsam veritatis dolore dolorum eum, eligendi modi a commodi?</p>
			</div>
	</section>
	
	<!-- 2ème ligne titre --> 
	<div class="container center-align">
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



	<div id="cards-folio" class="container row isotope" style="position: relative; height: 50em;">
		<div class=" " style="position: absolute; left: 0px; top: 0px;">
			<div class=" col l4 ">
	  			<div class="card">
	  				<div class="card-content" style="padding: 7px;">
	          			<p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
	        			<a href="">
	        				<span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
	        			</a>
	  				</div>
	  				<div class="card-image waves-effect waves-block waves-light">
		  				<a href="">
		  					<div>
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! Quod dolorem, quis modi, sed nobis necessitatibus quam cum aspernatur, quidem iste expedita alias.
			  					</p>
		  						<img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
		  					</div>
		  				</a>
	  				</div>
	  			</div>
  			</div>
  			<div class=" col l4 ">
	  			<div class="card">
	  				<div class="card-content" style="padding: 7px;">
	          			<p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
	        			<a href="">
	        				<span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
	        			</a>
	  				</div>
	  				<div class="card-image waves-effect waves-block waves-light">
		  				<a href="">
		  					<div>
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! Quod dolorem, quis modi, sed nobis necessitatibus quam cum aspernatur, quidem iste expedita alias.
			  					</p>
		  						<img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
		  					</div>
		  				</a>
	  				</div>
	  			</div>
  			</div>
  			<div class=" col l4 ">
	  			<div class="card">
	  				<div class="card-content" style="padding: 7px;">
	          			<p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
	        			<a href="">
	        				<span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
	        			</a>
	  				</div>
	  				<div class="card-image waves-effect waves-block waves-light">
		  				<a href="">
		  					<div>
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! Quod dolorem, quis modi, sed nobis necessitatibus quam cum aspernatur, quidem iste expedita alias.
			  					</p>
		  						<img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
		  					</div>
		  				</a>
	  				</div>
	  			</div>
  			</div>
  			<div class=" col l4 ">
	  			<div class="card">
	  				<div class="card-content" style="padding: 7px;">
	          			<p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
	        			<a href="">
	        				<span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
	        			</a>
	  				</div>
	  				<div class="card-image waves-effect waves-block waves-light">
		  				<a href="">
		  					<div>
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! Quod dolorem, quis modi, sed nobis necessitatibus quam cum aspernatur, quidem iste expedita alias.
			  					</p>
		  						<img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
		  					</div>
		  				</a>
	  				</div>
	  			</div>
  			</div>
  			<div class=" col l4 ">
	  			<div class="card">
	  				<div class="card-content" style="padding: 7px;">
	          			<p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
	        			<a href="">
	        				<span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
	        			</a>
	  				</div>
	  				<div class="card-image waves-effect waves-block waves-light">
		  				<a href="">
		  					<div>
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! Quod dolorem, quis modi, sed nobis necessitatibus quam cum aspernatur, quidem iste expedita alias.
			  					</p>
		  						<img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
		  					</div>
		  				</a>
	  				</div>
	  			</div>
  			</div>
  			<div class=" col l4 ">
	  			<div class="card">
	  				<div class="card-content" style="padding: 7px;">
	          			<p class="area" style="margin:0 auto;"><a href="">Projet Plateau</a></p>
	        			<a href="">
	        				<span class="card-title activator brown-text text-darken-4">Le Café Des Bois</span>
	        			</a>
	  				</div>
	  				<div class="card-image waves-effect waves-block waves-light">
		  				<a href="">
		  					<div>
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! Quod dolorem, quis modi, sed nobis necessitatibus quam cum aspernatur, quidem iste expedita alias.
			  					</p>
		  						<img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
		  					</div>
		  				</a>
	  				</div>
	  			</div>
  			</div>
  		</div>
	</div>




                    
                  
      
    
<?php $this->stop('main_content') ?>
