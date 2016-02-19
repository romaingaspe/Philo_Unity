<?php $this->layout('layout', ['title' => 'Accueil']) ?>


<?php $this->start('main_content') ?>
	<div id="mainphoto2">
		<div class="row">
			<p class="center white-text">Propulsé par la</p>
			<img class="col l6 offset-l3"src="<?= $this->assetUrl('img/LogoPhilomathique.png') ?>" alt="" />
		</div>
	</div>
	<h1 class="center-align">Nos métiers</h1>
	<?php
		if($page != 1){
			echo '<a class="pagination" href=1">'. 'First ' .'</a> ';
			echo '<a class="pagination" href="'.($page-1).'">'.'< '.'</a>';
		}
		for($i=1; $i<=$totalpages; $i++){
			echo '<a class="pagination" href="'.$i.'">'.$i.' </a>';
		}
		if($page != $totalpages){
			echo '<a class="pagination" href="'.($page+1).'">'.'>'.'</a> ';
			echo '<a class="pagination" href="'.$totalpages.'">'. ' Last' .'</a> ';
		}
	?>
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
				echo '<a href="'.$met['alias'].'">'.$met['section'].'</a>';
				echo '</div>';
				echo '</article>';
			}
		?>
	</section>


<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
	<script type="text/javascript">
		var pageUrl = '<?= $this->url('paginationsmetiers') ?>';
	</script>
<?php $this->stop('script') ?>
