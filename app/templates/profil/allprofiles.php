<?php $this->layout('layout', ['title' => 'Profils']) ?>

<?php $this->start('main_content') ?>
	<h1 class="center-align">Tous les profils</h1>
	<div class="container">
		<ul class="pagination center">
			<?php for($i=1; $i<=$totalpages; $i++):?>
				<li class="waves-effect btn">
					<a class="paginations paginallprofiles white-text" href="<?=$i?>"><?= $i?></a>
				</li>
			<?php endfor;?>
		</ul>
	</div>
	<section id="allworks" class="row section container">
	<!-- les articles ne doivent être cliquables que si il y a du contenu généré(voir avec js) -->
		<?php foreach ($users as $use):?>
			<article class="col s12 m6 l4">
				<div>
					<img class="photo-work responsive-img" src="<?= $use['photo']?>" alt="">
				</div>
				<div class="text-works center">
					<h6><?= $use['prenom'].' '.$use['nom']?></h6>
					<p><?= mb_substr($use['description'], 0 , 400 )?></p>
					<br>
					<a href="/philo_unity/public/profil/profiluser/<?= $use['id']?>">Visiter le Profil</a>
				</div>
			</article>
		<?php endforeach;?>
	</section>
<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
	<script type="text/javascript">
		var pageUrl = '<?= $this->url('ajaxpaginallprofiles') ?>';
	</script>
<?php $this->stop('script') ?>
