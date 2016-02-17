<?php $this->layout('layout2', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>

<div class="container section center" style="margin-top:50px">
<div class="row center">
  <h2>Connecte toi </h2>
    <form method="POST" class="col l6 offset-l3" style="margin-top:50px">
        <div class="input-field">
            <label for="login">Login</label>
            <input type="text" name="login" placeholder="Votre login" value="<?php if(isset($_POST['login'])){  echo $_POST['login'];} ?>">
        </div>
        <div class="input-field">
            <label for="pass">Mot de passe</label>
            <input type="text" name="pass" placeholder="Votre mot de passe" value="<?php if(isset($_POST['pass'])){  echo $_POST['pass'];} ?>">
            <a href="/admin/reinipass">Vous avez perdu votre mot de passe ?</a>
        </div>
        <div class="input-field">
            <input type="submit" name="but" value="Envoyer" class="waves-effect waves-light btn">
        </div>
    </form>
</div>


<div class="center">
    <a class="btn waves-effect waves-light red darken-1" name="action" href="/nom_de_mon_projet/public/adhome">Retour</a>
</div>

<?php
    if(!empty($errors)){
        echo '<p class="red-text text-darken-1">';
        echo implode('<br />', $errors);
        echo '</p>';
    }
    if(!empty($success)){
        echo  '<p class="green-text text-darken-1">'.$success.'</p>';

    }


?>

<?php $this->stop('main_content') ?>
