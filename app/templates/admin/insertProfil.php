<?php $this->layout('layout2',['title' => 'inscription']) ?>
<?php $this->start('main_content') ?>
    <div class="container center">
        <h1>Inserer un nouvelle utilisateur</h1>
        <div class="row">
            <form method="POST" class="col s12 m12 l6 offset-l3" >
                <div class="input-field">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" placeholder="Votre nom">
                </div>
                <div class="input-field">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" placeholder="Votre Prénom">
                </div>
                <div class="input-field">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="Votre email">
                </div>
                <div class="input-field">
                    <i class="material-icons prefix">verified_user</i>
                    <input type="password" name="pass" placeholder="Saisissez votre mot de passe">
          </div>
                <div class="input-field margetop">
                    <input type="submit" name="but" value="Envoyer" class="waves-effect waves-light btn">
                </div>
            </form>
        </div>
    <div class="center margetop">
        <a class="btn waves-effect waves-light red darken-1" name="action" href="<?= $this->url('index') ?>">Retour à l'accueil</a>
    </div>

<?php if(!empty($errors)) :?>
        <p class='red-text text-darken-1'>
        <?= implode('<br />', $errors)?>
        </p>
<?php endif; ?>
<?php if(!empty($success)) :?>
        <p class='green-text text-darken-1'><?=$success?></p>
<?php endif; ?>


<?php $this->stop('main_content') ?>
