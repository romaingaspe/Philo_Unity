<?php $this->layout('layout', ['title' => 'Recherche']) ?>

<?php $this->start('main_content') ?>
}
<form class="container section" action="" method="GET">
	<label for="search">Recherche</label>
	<input type="text" name="search">
	<input type="submit">
</form>
<section id="allworks" class="row section container">
<?php foreach ($resultat as $res):?>
	<article class="col s12 m6 l4">
		<div>
			<img class="photo-work" src="<?= $res['photo']?>" alt="">
		</div>
		<div class="text-works">
			<h6><?= $res['prenom'].' '.$res['nom']?></h6>
			<p><?= $res['description']?></p>
			<a href="/philo_unity/public/profil/profiluser/<?= $res['id']?>">Visiter le Profil</a>
		</div>
	</article>
<?php endforeach;?>
</section>
<?php $this->stop('main_content') ?>
