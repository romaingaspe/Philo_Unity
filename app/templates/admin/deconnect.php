<?php $this->layout('layout2', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>
<?php if($vue == true ):?>
<div class="container section center" style="margin-top:50px">
  <div class="row center">
    <div class="col l6 offset-l3 center align card-panel teal lighten-2">
      <h3 class="white-text">Déconnexion</h3>
      <p class="white-text">Etes vous sur de vouloir vous déconnecter ?</p>
    </div>
  <form method="POST" class="col l6 offset-l3" style="margin-top:50px">
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

  <div class="container section center" style="margin-top:50px">
    <div class="row center">
      <div class="col l6 offset-l3 center align card-panel teal lighten-2">
        <h3 class="white-text">Vous êtes déconnecté(e) </h3>
        <p class="white-text">Philomathique Unity vous souhaite une excellente Journée :) </p>
      </div>
    </div>
      <div class="center">

        <a class="btn waves-effect waves-light red darken-1" name="action" href="<?= $this->url('index') ?>">Retour à l'accueil</a>
      </div>
  </div>

<?php endif; ?>
<?php var_dump($vue) ?>

<?php $this->stop('main_content') ?>
