<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div id="mainphoto">
	<div class="row">
		<p class="center white-text">Propulsé par la</p>
		<img id="resp-logo" class="col s12" src="<?= $this->assetUrl('img/LogoPhilomathique.png') ?>" alt="" />
	</div>
</div>
<div class="row section center container" id="presentation">
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>
</div>
<div class="container">
	<div class="slider louil">
	    <ul class="slides louil" >
			<?php foreach ($users as $use): ?>
				<li class="row">
				  <img class="col l5"src="<?= $use['photo'];?>">
			    <div class="brown col l7 slida valign-wrapper">
					<div class="valign">
						<h3 class="white-text "><?= ucfirst($use['nom']).' '.ucfirst($use['prenom']);?></h3>
						<?php if (strlen($use['description']) > 50): ?>
							<?php
							function chunk_split_unicode($str, $l = 76, $e = "\r\n") {
							    $tmp = array_chunk(
							        preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY), $l);
							    $str = "";
							    foreach ($tmp as $t) {
							        $str .= join("", $t) . $e;
							    }
							    return $str;
							}
							?>
							<h5 class="light grey-text text-lighten-3"><?= $str = $use['description'];
							chunk_split($use['description'], 50);?></h5>

							<?php else: ?>
								<h5 class="light grey-text text-lighten-3"><?= $use['description'];?></h5>
						<?php endif; ?>
					</div>
				</div>
				</li>
			<?php endforeach; ?>
	    </ul>
	  </div>
</div>


<?php $this->stop('main_content') ?>
