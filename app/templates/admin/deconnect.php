<?php $this->layout('layout2', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>
<div class="container section center" style="margin-top:50px">
  <div class="row center">
    <div class="col l6 offset-l3 center align card-panel teal lighten-2">
      <h3 class="white-text">Déconnexion</h3>
      <p>Etes vous sur de vouloir vous déconnecter ?</p>
    </div>
  <form method="POST" class="col l6 offset-l3" style="margin-top:50px">
  <div class="input-field">
      <input type="submit" name="but" value="Oui, je le veux ;)!!!" class="waves-effect waves-light btn">
  </div>
  </form>
</div>
  <div class="center">
      <a class="btn waves-effect waves-light red darken-1" name="action" href="/Philo_Unity/public/">Retour à l'accueil</a>
  </div>


<?php $this->stop('main_content') ?>

<?php $this->layout('layout2', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>
<div class="container section center" style="margin-top:50px">
  <div class="row center">
    <div class="col l6 offset-l3 center align card-panel teal lighten-2">
      <h3 class="white-text">Vous êtes déconnecté(e) </h3>
      <p class="white-text">Philomathique Unity vous souhaite une excellente Journée :) </p>
    </div>
  </div>
    <div class="center">
      <a class="btn waves-effect waves-light red darken-1" name="action" href="/Philo_Unity/public/">Retour à l'accueil</a>
    </div>
</div>
<?php $this->stop('main_content') ?>
