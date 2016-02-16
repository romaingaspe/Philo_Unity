<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/materialize.css') ?>">
</head>
<body>
	<header>
		<nav>
			<div class="container">
				<ul class="right">
					<li><a href="/Philo_Unity/public">Home</a></li>
					<li><a href="metier">Métiers</a></li>
					<li><a href="profil">Profils</a></li>
					<li><a href="login">Login</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="container">
		<section>
			<?= $this->section('main_content') ?>
		</section>
		<footer>
		</footer>
	</div>
</body>
</html>
