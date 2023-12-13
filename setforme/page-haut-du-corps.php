<?php get_header(); ?>
<div class="container mt-5">
    
<h2 class="video-title">5 minutes</h2>
    <!-- Première série -->
    <div class="row mb-4">
        <div class="col-md-4">
        <?php
            $exercicesList = new WP_Query([
                'post_type' => 'exercices',
                'posts_per_page' => 3
            ]);
        ?>

        <?php while ( $exercicesList->have_posts() ) : $exercicesList->the_post(); ?>
            <div class="card custom-card">
                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="test" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h1><?php the_title(); ?></h1>
                        <p class="card-text"><?php the_content(); ?></p>
                        <img src="<?php echo get_template_directory_uri(); ?> /assets\icon-oeil.png">
                        <a href="https://youtu.be/1fjeQKI-5wg?si=thBEZ_Zh867e9is9" class="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <!--<div class="card custom-card">
                <img src="<?php // echo get_template_directory_uri(); ?>/assets/Rectangle 150.png" alt="test" class="card-img-top img-fluid">
                <div class="card-body">
                    <h1>Allblanc TV</h1>
                    <p class="card-text">Vous effectuez cet entraînement sans aucun équipement et renforcez les muscles de votre poitrine, de vos épaules et de votre dos.</p>
                    <img src="<?php // echo get_template_directory_uri(); ?> /assets\icon-oeil.png">
                    <a href="https://youtu.be/1fjeQKI-5wg?si=thBEZ_Zh867e9is9" class="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>-->

        <div class="col-md-4">
            <div class="card custom-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 144.png" alt="test" class="card-img-top img-fluid">
                <div class="card-body">
                <h1>LivFitness</h1>
                    <p class="card-text">Les entraînements courts peuvent-ils être efficaces ? Oui. Cinq minutes d’exercice à la fois peuvent être bénéfiques pour votre santé de différentes manières.</p>
                    <a href="LIEN_VIDEO_2_SERIE_1" class="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 145.png" alt="test" class="card-img-top img-fluid">
                <div class="card-body">
                <h1>Move with Nicole</h1>
                    <p class="card-text">Aucun équipement n'est nécessaire! Répétez 1 à 2 fois de plus pour une brûlure encore plus importante!</p>
                    <a href="LIEN_VIDEO_3_SERIE_1" class="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Deuxième série -->
    <h2 class="video-title">10 minutes</h2>
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card custom-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 142.png" alt="test" class="card-img-top img-fluid">
                <div class="card-body">
                <h1>MadFit</h1>
                    <p class="card-text">Cibler le dos, les bras, la poitrine et les épaules en seulement 10 minutes. Prenez vos d'haltères et allons-y!</p>
                    <a href="LIEN_VIDEO_1_SERIE_2" class="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 143.png" alt="test" class="card-img-top img-fluid">
                <div class="card-body">
                <h1>BullyJuice</h1>
                    <p class="card-text">ROUTINE DU HAUT DU CORPS DE 10 MINUTES commence à 00:26 !</p>
                    <a href="LIEN_VIDEO_2_SERIE_2" class="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 146.png" alt="test" class="card-img-top img-fluid">
                <div class="card-body">
                <h1>Pamela Reif</h1>
                    <p class="card-text">Les entraînements du haut du corps pour les bras, le dos et la poitrine sont rares et ce pour une bonne raison. Il est très difficile de les entraîner sans équipement. </p>
                    <a href="LIEN_VIDEO_3_SERIE_2" class="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Troisième série -->
      <h2 class="video-title">15 minutes</h2>
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card custom-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 147.png" alt="test" class="card-img-top img-fluid">
                <div class="card-body">
                <h1>Oliver Sjostrom</h1>
                    <p class="card-text">Prenez vos haltères et préparez-vous pour une explosion du haut du corps! J'utilisais des haltères de 10 kg pour cet entraînement.</p>
                    <a href="LIEN_VIDEO_1_SERIE_3" class="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 148.png" alt="test" class="card-img-top img-fluid">
                <div class="card-body">
                <h1>Train With Gainsbybrains</h1>
                    <p class="card-text">Quel exercice de cette vidéo préférez-vous pour le haut du corps?</p>
                    <a href="LIEN_VIDEO_2_SERIE_3" class="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card custom-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 149.png" alt="test" class="card-img-top img-fluid">
                <div class="card-body">
                <h1>BullyJuice</h1>
                    <p class="card-text">Passons aux GAINS avec cet entraînement du haut du corps! Préparez votre poitrine, vos bras, vos abdominaux, votre dos et vos épaules pour une pompe folle!</p>
                    <a href="LIEN_VIDEO_3_SERIE_3" class="">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>

