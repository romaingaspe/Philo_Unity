<?php $this->layout('layout2', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<div class="container center">
<h1>contact</h1>
<div class="row ">

    <form method="POST" class="col l6 offset-l3">
        <div class="input-field">
            <label for="nom">Nom</label>
            <input type="text" name="nom" placeholder="Votre nom">
        </div>
        <div class="input-field">
            <label for="objet">Objet</label>
            <input type="text" name="objet" placeholder="Votre Objet">
        </div>        
        <div class="input-field">
            <label for="email">E-mail</label>
            <input type="text" name="email" placeholder="Votre email">
        </div>
        <div class="input-field">
            <label for="email">Message</label>
            <textarea name="message" class="materialize-textarea" placeholder="Votre message"></textarea>
        </div>
        <div class="input-field">
            <input type="submit" name="but" value="Envoyer" class="waves-effect waves-light btn">
        </div>
    </form>
</div>


</div>

<?php $this->stop('main_content') ?>
