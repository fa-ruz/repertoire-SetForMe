<?php get_template_part('header3'); ?>

<?php
$args = array(
    'post_type' => 'intro',
    'posts_per_page' => 1, 
);

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
?>
        <div class="intro">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
                <button class="inspi-valo"href="<?php echo get_permalink(get_page_by_title('quiz')); ?>"><div><div>Faire le quiz</div></div></button>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/femme-intro.png" alt="flèche" class="img-fluid">
        </div>
<?php
    endwhile;
else :
    // Aucun contenu trouvé
    echo '<p>Aucun contenu trouvé</p>';
endif;

wp_reset_postdata(); // Rétablir les données de publication originales
?>
