<?php $this->layout('layout2', ['title' => 'Login']) ?>

<?php $this->start('main_content') ?>
<div class="row center">
    <form method="POST" class="col l6 offset-l3">
        <div class="input-field">
            <label for="login">Login</label>
            <input type="text" name="login" placeholder="Votre login">
        </div>
        <div class="input-field">
            <label for="pass">Mot de passe</label>
            <input type="text" name="pass" placeholder="Votre mot de passe">
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
<?php $this->stop('main_content') ?>
