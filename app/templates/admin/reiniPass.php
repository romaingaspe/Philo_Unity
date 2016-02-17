<?php $this->layout('layout2', ['title' => 'Login']) ?>

<?php $this->start('form') ?>
<div class="row">
    <form method="POST" class="col l6 offset-l3">
        <div class="input-field">
            <label for="email">adresse email</label>
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
<h1>Veuillez saisir votre adresse email</h1>


<?php $this->stop('main_content') ?>
