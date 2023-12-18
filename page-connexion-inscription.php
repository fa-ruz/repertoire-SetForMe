<?php
require('actions/Utilisateurs/connexionaction.php'); ?>
<?php require('actions/Utilisateurs/inscriptionaction.php'); ?> 
<?php get_template_part('header4'); ?>

<div class="container mt-5"> <!-- Augmentation de la marge supérieure à mt-5 -->
  <div class="row">
    
  <div class="col-md-6 float-end" style="margin-top: 70px;">

    <form class="container" method="POST">
    <h2>Nouveau ?</h2>

<legend>Créez un compte pour un suivi personnalisé<br>dès maintenant !</legend>
<div class="mb-3">
    <p>Pseudo</p> 
    <input type="text" class="form-control" name="pseudo">
</div> 
<div class="mb-3">
    <p>Mail</p> 
    <input type="text" class="form-control" name="mail">
</div> 
<div class="mb-3">
    <p>Password</p> 
    <input type="password" class="form-control" name="password">
</div>
<?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
<button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
    
</form>
    </div>


<div class="col-md-6 float-end" style="margin-top: 105px;"> <!-- Ajustez la valeur selon vos préférences -->
    <form class="container" method="POST">
        <h2>Déjà inscrit ?</h2>
        
        <legend>Connectez-vous pour suivre vos progrès !</legend>
        <div class="mb-3">
            <p>Pseudo</p> 
            <input type="text" class="form-control" name="pseudo">
        </div> 
        <div class="mb-3">
            <p>Password</p> 
            <input type="password" class="form-control" name="password">
        </div>
        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
        <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
    </form>
</div>
</div>
</div>
