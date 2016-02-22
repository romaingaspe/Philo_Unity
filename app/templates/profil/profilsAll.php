<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<div id="mainphoto3">
		<div class="row">
			<p class="center white-text">Propulsé par la</p>
			<img class="col s12 col m8 offset-m2 col l6 offset-l3" src="<?= $this->assetUrl('img/LogoPhilomathique.png') ?>" alt="" />
		</div>
	</div>
	<h1 class="center-align"><?php echo implode('', $sectionchoix);?></h1>
	<section id="allworks" class="row section container">
		<?php
			echo '<ul class="pagination2">';
			for($i=1; $i<=$totalpages; $i++){
				echo '<li class="waves-effect"><a class="paginations2" href="'.$i.'">'.$i.' </a></li>';
			}
			echo '</ul>';
		?>
	<!-- les articles ne doivent être cliquables que si il y a du contenu généré(voir avec js) -->
		<?php
		foreach($users as $use){
			echo '<article class="col s12 m6 l4">';
			echo '<div>';
			echo '<img class="photo-work responsive-img" src="'.$use['photo'].'" alt="">';
			echo '</div>';
			echo '<div class="text-works">';
			echo '<h6>'.$use['prenom'].' '.$use['nom'].'</h6>';
			echo '<p>'.$use['description'].'</p>';
			echo '<a href="/philo_unity/public/profil/profiluser/'.$use['id'].'">Visiter le Profil</a>';
			echo '</div>';
			echo '</article>';
		}
	?>
	</section>
	<section id="pagination" class="row ">
		<span>1</span>
	</section>

<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
	<script type="text/javascript">
		var pageUrl = '<?= $this->url('paginationprofils', ['section'=>$section]) ?>';
	</script>
<?php $this->stop('script') ?>
