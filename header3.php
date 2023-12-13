<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">
    <link rel="stylesheet" href="https://use.typekit.net/shy0dic.css">
</head>

<nav class="navbar navbar-expand-lg bg-white header3-nav">
    <div class="container-fluid d-flex justify-content-center align-items-center">
        <a class="navbar-quizz" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-noir.png" alt="Logo" width="290" height="46">
        </a>
    </div>
</nav>
