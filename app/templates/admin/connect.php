<?php $this->layout('layout', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>
<div class="row">
    <form method="POST" class="col l6">
        <div class="input-field">
            <label for="login">Login</label>
            <input type="text" name="login" placeholder="Votre login">
        </div>
        <div class="input-field">
            <label for="pass">Mot de passe</label>
            <input type="text" name="pass" placeholder="Votre mot de passe">
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
    echo 'utilisateur : '.$id['username'].'<br />';
    echo 'email : '.$id['email'].'<br />';
    if($id['role'] == 1){
        echo 'role : Admin ';


    }

    var_dump($_SESSION);     
         ?>
<?php $this->stop('main_content') ?>
