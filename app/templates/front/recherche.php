<?php $this->layout('layout2', ['title' => 'Recherche']) ?>

<?php $this->start('main_content') ?>
<form class="container section" action="" method="GET">
	<label for="search">Recherche</label>
	<input type="submit" name="search">
</form>
<?php $this->stop('main_content') ?>
