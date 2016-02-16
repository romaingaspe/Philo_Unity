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
			<ul class="container">
				<li><a href="#">Home</a></li>
				<li><a href="#">Login</a></li>
				<li><a href="#">Métiers</a></li>
				<li><a href="#">Profils</a></li>
			</ul>
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
