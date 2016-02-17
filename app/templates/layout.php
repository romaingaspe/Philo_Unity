<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/materialize.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<?php $this->insert('partials/header') ?>

	<div>
		<section>
			<?= $this->section('main_content') ?>
		</section>
	</div>

	<?php $this->insert('partials/footer') ?>

	<script type="text/javascript" src="<?= $this->assetUrl('js/jquery-2.2.0.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/materialize.js') ?>"></script>

	<?= $this->section('scripts') ?>
</body>
</html>
