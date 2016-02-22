<?php $this->layout('layout2', ['title' => 'Recherche']) ?>

<?php $this->start('main_content') ?>
<form class="container section" action="" method="post">
	<label for="search">Recherche</label>
	<input type="text" name="search">
</form>
<?php $this->stop('main_content') ?>
