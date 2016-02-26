<?php $this->layout('layout', ['title' => 'Contact Admin']) ?>

<?php $this->start('main_content') ?>
<div class="container section center margetop">
    <div class="col s8 offset-s2  m8 offset-m2 l6 offset-l3 center align card-panel grey lighten-3 box shadow-effect">
        <h2>Contacter l'administrateur</h2>
    </div>
    <div class="row">

        <form class="col s6 offset-s3 col m6 offset-m3 col l6 offset-l3 margetop">
            <div class="row">
                <div class="input-field col s12 m12 l6">
                  <i class="material-icons prefix">perm_identity</i>
                    <input placeholder="Prénom" id="prénom" type="text" class="validate">
                </div>
                <div class="input-field col s12 m12 l6">
                  <i class="material-icons prefix">perm_identity</i>
                    <input placeholder="Nom" id="nom" type="text" class="validate">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                  <i class="material-icons prefix">info_outline</i>
                    <input placeholder="Objet du message" id="objet" type="text" class="validate">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix">chat_bubble_outline</i>
                    <textarea id="textarea1" name="message" class="materialize-textarea"placeholder="Votre message"></textarea>
                </div>
            </div>
            <div class="input-field">
                <input type="submit" name="but" value="Envoyer" class="teal waves-effect waves-light btn">
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
