<?php $this->layout('layout2', ['title' => 'Login']) ?>

<?php $this->start('form') ?>
<div class="container section center" style="margin-top:50px">
<div class="row center">
  <div class="col l6 offset-l3 center align card-panel teal lighten-2">
    <h3 class="white-text">Veuillez saisir votre adresse email  </h3>
  </div>
    <form method="POST" class="col l6 offset-l3">
        <div class="input-field">
            <label for="email">adresse email</label>
            <i class="material-icons prefix">email</i>
            <input type="text" name="email" placeholder="Votre email">
        </div>
        <div class="input-field">
            <input type="submit" name="but" value="Envoyer" class="waves-effect waves-light btn">
        </div>
    </form>
</div>

<div class="center">
    <a class="btn waves-effect waves-light red darken-1" name="action" href="/Philo_Unity/public/">Retour</a>
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
    echo 'utilisateur : '.$id['username'].'<br />';
    echo 'email : '.$id['email'].'<br />';
    if($id['role'] == 1){
        echo 'role : Admin ';
    }

    var_dump($_SESSION);


?>
<?php $this->stop('form') ?>

<?php $this->start('main_content') ?>
<div class="container section center" style="margin-top:50px">
<div class="row center">
  <div class="col l6 offset-l3 center align card-panel teal lighten-2">
    <h3 class="white-text">Veuillez saisir votre adresse email  </h3>
  </div>
    <form method="POST" class="col l6 offset-l3">
        <div class="input-field">
            <label for="email"></label>
            <input type="text" name="email" placeholder="Votre email">
        </div>
        <div class="input-field">
            <input type="submit" name="but" value="Envoyer" class="waves-effect waves-light btn">
        </div>
    </form>
</div>

<div class="center" style="margin-top:50px">
    <a class="btn waves-effect waves-light red darken-1" name="action" href="/Philo_Unity/public/">Retour</a>
</div>


<?php $this->stop('main_content') ?>
