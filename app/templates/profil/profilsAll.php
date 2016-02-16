<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<div id="main_photo" class="center-align">
		<h5>Propulsé par:</h5>
		<img class="bigphoto" src="/Philo_Unity/public/assets/img/philo.jpg" alt="">
	</div>
	<h1 class="center-align">COUTURE</h1>
	<section id="allworks" class="row">
	<!-- les articles ne doivent être cliquables que si il y a du contenu généré(voir avec js) -->
		<article class="col l4">
			<div class="photo-work">
				<img src="/Philo_Unity/public/assets/img/profil_perso.png" alt=""><!-- couture.jpg -->
			</div>
			<h6>Nom_Prénom / Spécialité</h6>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum consectetur eveniet odio aliquam dolores repudiandae, nobis consequuntur inventore incidunt illo rerum, iusto, dolor voluptatum temporibus soluta magni, facilis quibusdam ab?</p>
		</article>

		<article class="col l4">
			<div>
				<img src="/Philo_Unity/public/assets/img/profil_perso.png" alt="">
			</div>
			<h6>Nom_Prénom / Spécialité</h6>	
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum consectetur eveniet odio aliquam dolores repudiandae, nobis consequuntur inventore incidunt illo rerum, iusto, dolor voluptatum temporibus soluta magni, facilis quibusdam ab?</p>
		</article>

		<article class="col l4">
			<div>
				<img src="/Philo_Unity/public/assets/img/profil_perso.png" alt="">
			</div>
			<h6>Nom_Prénom / Spécialité</h6>	
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae voluptatem amet, doloribus, facere dolorum numquam temporibus praesentium esse facilis officiis ipsum nesciunt, ad distinctio sequi autem magni tenetur ex. Laboriosam.</p>
		</article>

		<article class="col l4">
			<div>
				<img src="/Philo_Unity/public/assets/img/profil_perso.png" alt="">
			</div>
			<h6>Nom_Prénom / Spécialité</h6>	
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum libero mollitia iure ipsa! Sint, eveniet, unde doloremque commodi omnis deleniti quibusdam nulla reiciendis illo velit magni fugiat atque incidunt provident.</p>
			
		</article>

		<article class="col l4">
			<div>
				<img src="/Philo_Unity/public/assets/img/profil_perso.png" alt="">
			</div>
			<h6>Nom_Prénom / Spécialité</h6>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, vel obcaecati, deleniti corporis minus inventore facere. Architecto voluptatibus nisi facilis. Fugiat, consequuntur, sint. Alias impedit sequi quod, nulla eveniet consequatur.</p>
		</article>

		<article class="col l4">
			<div>
				<img src="/Philo_Unity/public/assets/img/profil_perso.png" alt="">
			</div>
			<h6>Nom_Prénom / Spécialité</h6>	
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur minus harum, laboriosam commodi ipsum nemo accusamus perferendis consectetur aliquid laudantium? Veritatis in dicta fuga ex inventore quas minima laboriosam sit!</p>
		</article>
	</section>
	<section id="pagination" class="row ">
		<span>1</span>
	</section>

<?php $this->stop('main_content') ?>
