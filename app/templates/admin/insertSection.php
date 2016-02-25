<?php $this->layout('layout',['title' => 'Accueil']) ?>
<?php $this->start('main_content') ?>
    <div class="container center">
        <h3 id="marge-titre" class="container grey lighten-4 z-depth-1 center-align">Inserer une nouvelle section</h3>
        <div class="row">
            <form method="POST" class="col s12 m12 l6 offset-l3" >
                <div class="input-field">
                    <label for="section">Intitulé section</label>
                    <input type="text" name="section" placeholder="section">
                </div>
                <div class="input-field">
                    <label for="description">description section</label>
                    <textarea name="description" class="materialize-textarea" placeholder="Votre description"></textarea>
                </div>
                <div class="input-field">
                    <label id="alias-m" for="alias">alias metier</label>
                    <input id="alias" type="text" name="alias" placeholder="alias section">
                </div>
                <div class="file-field input-field">
                  <div class="btn btn-add">
                    <span class="add">photo </span>
                    <input type="file"  id="photo" name="photo">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
                <div class="input-field margetop">
                    <input type="submit" name="but" value="Envoyer" class="waves-effect waves-light btn">
                </div>
            </form>
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
