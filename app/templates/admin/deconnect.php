<?php $this->layout('layout2', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>
<?php if($vue == true ):?>
<div class="container section center margetop">
  <div class="row center">
    <div class="s8 offset-s2 col m8 offset-m2 l6 offset-l3 center align card-panel brown lighten-2 box shadow-effect">
      <h3 class="white-text">Déconnexion</h3>
      <p class="white-text">Etes vous sur de vouloir vous déconnecter ?</p>
    </div>
  <form method="POST" class="s6 offset-s3 col m6 offset-m3 col l6 offset-l3 margetop">
  <div class="input-field">
      <input type="submit" name="but" value="deconnexion" class="waves-effect waves-light btn">
  </div>
  </form>
</div>
  <div class="center">
      <a class="btn waves-effect waves-light red darken-1" name="action" href="<?= $this->url('index') ?>">Retour à l'accueil</a>
  </div>

<?php endif;?>
<?php if($vue == false): ?>

  <div class="container section center">
    <div class="row center">
      <div class="col l6 offset-l3 center align card-panel brown lighten-2">
        <h3 class="white-text">Vous êtes déconnecté(e) </h3>
        <p class="white-text">Philomathique Unity vous souhaite une excellente Journée :) </p>
      </div>
    </div>
      <div class="center">

        <a class="btn waves-effect waves-light red darken-1" name="action" href="<?= $this->url('index') ?>">Retour à l'accueil</a>
      </div>
  </div>

<?php endif; ?>
<?php $this->stop('main_content') ?>
