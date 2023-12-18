<?php get_header(); ?>

<section class="background-section">
    <!-- Contenu de la section -->
    <div class="content">
        <div class="text">
            <h1>TON CORPS,</h1>
            <h2>ton chemin.</h2>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/accueil.png" alt="Votre Image">
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <?php
        // Arguments de requête pour récupérer les articles de type 'categories'
        $args = array(
            'post_type' => 'categories',
            'posts_per_page' => 4, // Nombre d'articles à afficher
            'orderby' => 'date', // Ordonne par ID
        );

        $categories_query = new WP_Query($args);

        // Vérifier si la requête a des articles
        if ($categories_query->have_posts()) :
            while ($categories_query->have_posts()) : $categories_query->the_post();
        ?>
                <div class="col-md-6">
                    <div class="card mb-4 rounded-0 bg-black text-white" >
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" class="img-fluid" width="728" height="533">
                        <?php endif; ?>
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title" ><?php the_title(); ?></h4>
                            <a href="<?php the_permalink(); ?>" class="btn mt-auto align-self-end" id="monBtn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-flèche.png" alt="flèche" class="img-fluid" alt="icone" style="position:relative; z-index:20; margin:0px;">
                                <span style="margin-left:10px;"></span>
                            </a>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata(); // Réinitialiser les données de la requête
        else :
            echo 'Aucun article trouvé.';
        endif;
        ?>
    </div>
</div>

<?php
$args = array(
    'post_type' => 'blockquote',
    'posts_per_page' => 1,
);

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
?>
        <div class="blockquote-container-custom-padding mb-2 position-relative bg-black text-white">
            <!-- Image en haut à gauche -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png" alt="Image 1" class="image-top-left position-absolute" style="width: 42px; height: 100px; top: 0; left: 0;">

            <!-- Image en bas à droite -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon2.png" class="image-bottom-right position-absolute" style="width: 42px; height: 100px; bottom: 0; right: 0;">

            <h2 class="blockquote-title text-center mb-5"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
<?php
    endwhile;
else :
    // Aucun contenu trouvé
    echo '<p>Aucun contenu trouvé</p>';
endif;

wp_reset_postdata(); // Rétablir les données de publication originales
?>

<h3>RÉSULTATS</h3>
<p>Des réussites, des changements, des vies transformées.<br>Explorez les témoignages SetForMe et laissez-vous inspirer</p>

<div class="carousel">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5, // Nombre d'articles à afficher
    );

    $query = new WP_Query($args);

    while ($query->have_posts()) : $query->the_post();
    ?>
        <div>
            <div class="card mb-3" style="width: 573px; height: 446px; border: none; background-color: #000; color: #fff;">
                <div class="card-body">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/etoiles.png" alt="test" class="card-img-top img-fluid" style="width: 220px; height: 38px; margin-bottom: 45px;">
                    <p class="card-text"><?php the_content(); ?></p>
                    <div class="profile-picture-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profil1.png" alt="test" class="card-img-top img-fluid" style="width: 89px; height: 89px;">
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
</div>

<script>
    jQuery(document).ready(function($) {
        $('.carousel').slick({
            // Configurations de Slick
        });
    });
</script>

<?php get_footer(); ?>
