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
<?php $this->stop('main_content') ?>
