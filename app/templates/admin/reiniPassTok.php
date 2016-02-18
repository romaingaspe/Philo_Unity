<?php $this->layout('layout2', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>
<div class="container section center" style="margin-top:50px">
  <div class="row center">
    <div class="col l6 offset-l3 center align card-panel teal lighten-2">
      <h3 class="white-text">Reinitialiser votre mot de passe  </h3>
    </div>
      <form method="POST" class="col l6 offset-l3" style="margin-top:50px">
        <div class="input-field">
            <i class="material-icons prefix">verified_user</i>
            <input type="text" name="pass" placeholder="Votre mot de passe" value="<?php if(isset($_POST['pass'])){  echo $_POST['pass'];} ?>">
        </div>
          <div class="input-field">
              <i class="material-icons prefix">verified_user</i>
              <input type="text" name="pass" placeholder="Saisissez de nouveau votre mot de passe" value="<?php if(isset($_POST['pass'])){  echo $_POST['pass'];} ?>">
          </div>
          <div class="input-field">
              <input type="submit" name="but" value="Envoyer" class="waves-effect waves-light btn">
          </div>
      </form>
  </div>
  <div class="center">
      <a class="btn waves-effect waves-light red darken-1" name="action" href="/Philo_Unity/public/">Retour à l'accueil </a>
  </div>
</div>


<?php $this->stop('main_content') ?>
