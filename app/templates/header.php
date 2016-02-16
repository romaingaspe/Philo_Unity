<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/materialize.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<header>
		<nav>
			<div class="container">
				<a href="/Philo_Unity/public">
					<img class="left" src="<?= $this->assetUrl('img/logo_final.png') ?>"></img>
				</a>
				<ul class="right">
					<li><a href="/Philo_Unity/public/metiers">Métiers</a></li>
					<li><a href="/Philo_Unity/public/profils">Profils</a></li>
					<li><a href="/Philo_Unity/public/admin/connect">Se connecter</a></li>
				</ul>
			</div>
		</nav>
	</header>