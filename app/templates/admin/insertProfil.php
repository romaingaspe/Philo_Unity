<?php $this->layout('layout2',['title' => 'Accueil']) ?>
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
                    <label for="objet">Objet</label>
                    <input type="text" name="objet" placeholder="Votre Objet">
                </div>        
                <div class="input-field">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="Votre email">
                </div>
            </form>
        </div>
    </div> 
