<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<p>portfolio>galerie des projets>projets1></p>
		<div id="barreproj" class="container center-align card-panel hoverable grey lighten-2">PROJETS</div>

		<section id="description" class="container section">
		<div class="row">
			<div id="titleprojet" class="col l4 teal lighten-5">
				<h4>DESSUS DE TABLE</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus vero dolor quidem possimus dicta consequatur aliquam, soluta minima voluptatibus officia maiores ipsam veritatis dolore dolorum eum, eligendi modi a commodi?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, pariatur, dignissimos. Assumenda rem dolorum corporis unde eveniet hic voluptas repudiandae eaque illo velit cupiditate porro, non blanditiis consectetur totam ullam?</p>
			</div>
			<div id="slideprojet" class="col l8 slider">
    				<ul class="slides">
      				<li>
        				<img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
        				<div class="caption center-align">
          				<h3>This is our big Tagline!</h3>
          				<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        				</div>
      				</li>
      				<li>
        				<img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
        				<div class="caption left-align">
          				<h3>Left Aligned Caption</h3>
          				<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        				</div>
      				</li>
      				<li>
        				<img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
        				<div class="caption right-align">
          				<h3>Right Aligned Caption</h3>
          				<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        				</div>
      				</li>
      				<li>
                        <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
        				<div class="caption center-align">
                  		<h3>This is our big Tagline!</h3>
                  		<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                		</div>
              		</li>
            		</ul>
          		</div>
			</div>
	</section>

<?php $this->stop('main_content') ?>
