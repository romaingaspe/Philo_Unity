<?php $this->layout('layout2',['title' => 'Accueil']) ?>
<?php $this->start('main_content') ?>
    <div class="container center">
        <h4>Inserer une nouvelle section</h4>
        <div class="row">
            <form method="POST" class="col s12 m12 l6 offset-l3" >
                <div class="input-field">
                    <label for="section">Intitulé section</label>
                    <input type="text" name="section" placeholder="section">
                </div>
                <div class="input-field">
                    <label for="description">description section</label>
                    <input type="text" name="description" placeholder="description">
                </div>
                <div class="input-field">
                    <label for="alias">alias metier</label>
                    <input type="text" name="alias" placeholder="alias section">
                </div>
                <label for="photo"><h5>inserer une image</h5></label>
                    <!-- champ de type file pour choisir un fichier -->
                    <input type="file" id="photo" name="photo">
                <div class="input-field margetop">

                    <input type="submit" name="but" value="Envoyer" class="waves-effect waves-light btn">
                </div>
            </form>

            <?php if(!empty($errors)) :?>
                    <p class='red-text text-darken-1'>
                    <?= implode('<br />', $errors)?>
                    </p>
            <?php endif; ?>
            <?php if(!empty($success)) :?>
                    <p class='green-text text-darken-1'><?=$success?></p>
            <?php endif; ?>
<?php $this->stop('main_content') ?>