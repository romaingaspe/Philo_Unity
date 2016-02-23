<?php $this->layout('layout', ['title' => 'Recherche']) ?>

<?php $this->start('main_content') ?>

<section id="allworks" class="row section container">
	
<?php foreach ($resultatUser as $resuse):?>
	<article class="col s12 m6 l4">
		<div>
			<img class="photo-work" src="<?= $resuse['photo']?>" alt="">
		</div>
		<div class="text-works">
			<h6><?= $resuse['prenom'].' '.$resuse['nom']?></h6>
			<p><?= $resuse['description']?></p>
			<a href="/philo_unity/public/profil/profiluser/<?= $resuse['id']?>">Visiter le Profil</a>
		</div>
	</article>
<?php endforeach;?>
<?php foreach ($resultatMetier as $resmet):?>
	<article class="col s12 m6 l4">
		<div>
			<img class="photo-work" src="<?= $resmet['photo']?>" alt="">
		</div>
		<div class="text-works">
			<h6><?= $resmet['section']?></h6>
			<p><?= $resmet['description']?></p>
			<a href="/philo_unity/public/metier/<?= $resmet['alias']?>/profilsall">Visiter le Profil</a>
		</div>
	</article>
<?php endforeach;?>

<?php if (!empty($error)) :?>
	<h5><?=$error?></h5>
<?php endif;?>
</section>

<?php $this->stop('main_content') ?>
