<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets\css\app.css">
    <link rel="stylesheet" href="https://use.typekit.net/shy0dic.css">
</head>

<nav class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <a class="navbar-brand me-auto" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-noir.png" alt="Logo" width="290" height="46">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Catégories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo get_permalink(get_page_by_title('Haut du corps')); ?>">Haut du corps</a></li>
                        <li><a class="dropdown-item" href="<?php echo get_permalink(get_page_by_title('Bas du corps')); ?>">Bas du corps</a></li>
                        <li><a class="dropdown-item" href="<?php echo get_permalink(get_page_by_title('Tout le corps')); ?>">Tout le corps</a></li>
                        <li><a class="dropdown-item" href="<?php echo get_permalink(get_page_by_title('Étirements')); ?>">Étirements</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_permalink(get_page_by_title('Quiz')); ?>">Quizz</a>
                </li>
            </ul>

            <a class="btn btn-dark" href="<?php echo get_permalink(get_page_by_title('CONNEXION/INSCRIPTION')); ?>">Se connecter</a>
            
        </div>
    </div>
</nav>

</html>