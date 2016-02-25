<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<div id="mainphoto2">
		<div class="row">
			<p class="center white-text">Propulsé par la</p>
			<img id="resp-logo" class="col s12"src="<?= $this->assetUrl('img/LogoPhilomathique.png') ?>" alt="" />
		</div>
	</div>
	<h1 class="center-align">Nos métiers</h1>
	<div class="container">
		<ul class="pagination center">
			<?php for($i=1; $i<=$totalpages; $i++):?>
				<li class="waves-effect btn">
					<a class="paginations paginmet white-text" href="<?= $i?>"><?= $i?></a>
				</li>
			<?php endfor;?>
		</ul>
	</div>
	<section id="allworks" class="row section container">
		<?php foreach ($metiers as $met):?>
				<article class=" col s12 m6 l4">
					<div class="teal lighten-2">
						<div class=" contain-img">
							<img class="hov-zoom" src="<?= $met['photo']?>" alt="">
							<div class="text-box">
								<h2 class="lighten-4">Voir les profils</h2>
							<a class="link-metier" href="metiers/<?= $met['alias']?>/profilsall"></a>
						</div>
					</div>
					<div class=" text-works center">
						<h6><?= $met['section']?></h6>
						<p class=""><?= mb_substr($met['description'], 0 , 400 ).'...'?></p>
					</div>
					</div>
				</article>
		<?php endforeach;?>
	</section>
<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
	<script type="text/javascript">
		var pageUrl = '<?= $this->url('paginationsmetiers') ?>';
	</script>
<?php $this->stop('script') ?>
