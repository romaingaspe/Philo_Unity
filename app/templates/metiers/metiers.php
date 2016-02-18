<?php $this->layout('layout', ['title' => 'Accueil']) ?>


<?php $this->start('main_content') ?>
	<div id="mainphoto2">
		<div class="row">
			<p class="center white-text">Propulsé par la</p>
			<img class="col l6 offset-l3"src="<?= $this->assetUrl('img/LogoPhilomathique.png') ?>" alt="" />
		</div>
	</div>
	<h1 class="center-align">Nos métiers</h1>
	<section id="allworks" class="row container">
		<?php
		foreach($metiers as $met){
			echo '<article class="col l4">';
			echo '<div>';
			echo '<img src="'.$met['photo'].'" alt="">';
			echo '</div>';
			echo '<div class="text-works">';
			echo '<h6>'.$met['section'].'</h6>';
			echo '<p>'.$met['description'].'</p>';
			echo '</div>';
			echo '</article>';
		}
		?>
	<!-- les articles ne doivent être cliquables que si il y a du contenu généré(voir avec js)
		<article class="col l4">
			<div>
				<img src="<?= $this->assetUrl('img/empty_works.png') ?>" alt="">
			</div>
			<div class="text-works">
				<h6>Arts-Plastiques</h6>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur minus harum, laboriosam commodi ipsum nemo accusamus perferendis consectetur aliquid laudantium? Veritatis in dicta fuga ex inventore quas minima laboriosam sit!</p>
			</div>
		</article>
	-->
	</section>
	<section id="pagination" class="row">
		<span>1</span>
	</section>

<?php $this->stop('main_content') ?>
