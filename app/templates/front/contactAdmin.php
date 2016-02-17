<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
<div class="container section">
    <div class="center row">
       <form class="col l8">
         <div class="row">
           <div class="input-field col l6">
             <input placeholder="Prénom" id="prénom" type="text" class="validate">
             <label for="prénom">Prénom</label>
           </div>
           <div class="input-field col l6">
             <input placeholder="Nom" id="nom" type="text" class="validate">
             <label for="nom">Nom</label>
           </div>
         </div>
         <div >
           <div class="input-field col l12">
             <input placeholder="Objet du message" id="objet" type="text" class="validate">
             <label for="objet">Objet</label>
           </div>
         </div>
         <div >
           <div class="input-field col l12">
             <textarea id="textarea1" class="materialize-textarea"></textarea>
             <label for="message">Message</label>
           </div>
         </div>
         <div class="input-field">
             <input type="submit" name="but" value="Envoyer" class="red accent-2 waves-effect waves-light btn">
         </div>
       </form>
   </div>
 </div>
<?php $this->stop('main_content') ?>

<?php $this->start('script') ?>
<?php $this->stop('script') ?>
