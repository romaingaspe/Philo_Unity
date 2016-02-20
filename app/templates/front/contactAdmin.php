<?php $this->layout('layout2', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
<div class="container section center margetop">
    <div class="col s6 m8 l10">
        <h2>Contacter l'administrateur</h2>
    </div>
    <div class="row">
        
        <form class="col s6 offset-s3 col m6 offset-m3 col l6 offset-l3 margetop">
            <div class="row">
                <div class="input-field col s12 m12 l6">
                    <input placeholder="Prénom" id="prénom" type="text" class="validate">
                    <label for="prénom">Prénom</label>
                </div>
                <div class="input-field col s12 m12 l6">
                    <input placeholder="Nom" id="nom" type="text" class="validate">
                    <label for="nom">Nom</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <input placeholder="Objet du message" id="objet" type="text" class="validate">
                    <label for="objet">Objet</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="message">Message</label>
                </div>
            </div>
            <div class="input-field">
                <input type="submit" name="but" value="Envoyer" class="red accent-2 waves-effect waves-light btn">
            </div>
        </form>
    </div>
    <div class="center">
      <a class="btn waves-effect waves-light red darken-1" name="action" href="<?= $this->url('index') ?>">Retour à l'accueil</a>
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
<?php $this->stop('script') ?>
