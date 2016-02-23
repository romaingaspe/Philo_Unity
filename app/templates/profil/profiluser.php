<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

  <!-- 1ère ligne de présentation --> 
  <section id="presentation" class="container row">
      <div class="col m6 l6">
        <img class="responsive-img" src="<?= $profil['photo'] ?>" alt=""/>
      </div>
      <div class="col m6 l6">
        <h4><?= $profil['prenom'].' '.$profil['nom'] ?></h4>
        <h5><?= $profil['id_metier']?></h5>
        <p class="teal lighten-5"><?= $profil['description']?></p>
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
	
		<div id="cards-folio" class="container row isotope">
			<div id="cards-global-content"> <!-- div qui contient toutes mes cartes de projets -->
			<?php foreach($projets as $projet):?>
				<div class=" col m6 l4 ">
					<div class="card">
						<div class="card-content">
							<p class="area">
								<a href="<?= $this->url('projectsPage',['id' => $projet['id']])?>"><?= $projet['project_title']?>
							</p>
							<a href="<?= $this->url('projectsPage',['id' => $projet['id']])?>">
								<span class="card-title activator brown-text text-darken-4"><?= $projet['date_publish']?></span>
							</a>
						</div>
						<div class="card-image waves-effect waves-block waves-light">
							<a href="<?= $this->url('projectsPage',['id' => $projet['id']])?>">
								<div>
									<p><?= mb_substr($projet['description'], 0 , 130)?>...</p>
									<img width="640" height="480" src="<?= $projet['photos'][0]['photo']?>" class="responsive-img wp-post-image" alt="Le Café Des Bois / Plateau Mont-Royal, Montréal" title="Le Café Des Bois / Plateau Mont-Royal, Montréal">
								</div>
						</div>
					</div>
				</div>
			<?php endforeach;?>
			</div>
		</div>
	
     

<?php $this->stop('main_content') ?>
