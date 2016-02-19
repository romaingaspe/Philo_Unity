<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<!-- Mon chemin d'accès url :profil/portfolio/galleryprojects -->
<?php $this->start('main_content') ?>
	
	<!-- 1ère ligne de présentation --> 
	<section id="presentation" class="container row">
			<div class="col m6 l6">
				<img src="<?= $this->assetUrl('img/ebeniste.jpg') ?>" alt="">
			</div>
			<div class="col m6 l6">
				<h4>Paul-Emile DOUDAIN</h4>
				<h5>Marquetteur</h5>
				<p class="teal lighten-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus vero dolor quidem possimus dicta consequatur aliquam, soluta minima voluptatibus officia maiores ipsam veritatis dolore dolorum eum, eligendi modi a commodi?</p>
			</div>
	</section>
	
	<!-- 2ème ligne titre --> 
	<div id="gallery-title" class="container row">
	<div class="col s12 m12 l12">
		<span class="col s1 m1 l1 center-align patch-leftside">2</span>
		<span class="col s10 m10 l10 center-align patch-centered teal lighten-5">Gallerie des projets</span>
		<span class="col s1 m1 l1 center-align patch-rightside">2</span>
		</div>
	</div>

	<!-- 3ème ligne gallerie -->
	<div id="cards-folio" class="container row isotope" style="position: relative; height: 50em;">
		<div class=" " style="position: absolute; left: 0px; top: 0px;">
			<div class=" col m6 l4 ">
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
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! 
			  					</p>
		  						<img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
		  					</div>
		  				</a>
	  				</div>
	  			</div>
  			</div>
  			<div class=" col m6 l4 ">
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
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! 
			  					</p>
		  						<img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
		  					</div>
		  				</a>
	  				</div>
	  			</div>
  			</div>
  			<div class=" col m6 l4 ">
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
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! 
			  					</p>
		  						<img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
		  					</div>
		  				</a>
	  				</div>
	  			</div>
  			</div>
  			<div class=" col m6 l4 ">
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
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut!
			  					</p>
		  						<img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
		  					</div>
		  				</a>
	  				</div>
	  			</div>
  			</div>
  			<div class=" col m6 l4 ">
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
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! 
			  					</p>
		  						<img width="640" height="480" src="<?= $this->assetUrl('img/ebenisterie.jpg') ?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
		  					</div>
		  				</a>
	  				</div>
	  			</div>
  			</div>
  			<div class=" col m6 l4 ">
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
		  						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, libero. Sit voluptatibus voluptate minus, voluptatem aut! 
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
