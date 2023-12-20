<?php get_template_part('header4'); ?>



<style>
            body {
                background-image: url('http://localhost/SetForMe/wordpress/wp-content/uploads/2023/12/Groupe-18.png');
                background-repeat: no-repeat;
                background-position: right; 
                height: 100vh; 
                margin: 0; 
                background-attachment: fixed; /* Fixe l'image de fond */
                background-size: 50%;
                overflow: hidden;
    
            }
        
</style>



<div class="container mt-5"> <!-- Augmentation de la marge supérieure à mt-5 -->
    <div class="row">
        <div class="col-md-6 float-end" style="margin-top: 70px;">

            <form class="container-titre-in mb-4" method="POST"> <!-- Ajout de la classe mb-4 pour ajouter de l'espace en bas -->
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
                <div class="btn-page-in">
                <button type="submit" class="btn btn-dark" name="submit" href="<?php echo get_permalink(get_page_by_title('Profil')); ?>">S'inscrire</button>
                </div>
            </form>
        </div>

        <div class="col-md-6 float-end" style="margin-top: 70px;"> <!-- Ajustez la valeur selon vos préférences -->
            <form class="container-titre-co" method="POST">
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
                <div class="btn-page-co">
                    <a class="btn btn-dark" href="<?php echo get_permalink(get_page_by_title('Profil')); ?>">Se connecter</a>
                </div>
            </form>
        </div>
    </div>
</div>


