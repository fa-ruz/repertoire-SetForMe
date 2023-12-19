<?php get_template_part('header3'); ?>
<?php
$args = array(
    'post_type' => 'resultats',
    'posts_per_page' => 1, 
);

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();
?>
        <div class="resultats">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>

                <div class="p-titre" style="display: flex; margin-bottom: 20px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdc-1.png" alt="test" width="419" height="224" style="margin-left: 50px; margin-right: 10px; margin-bottom: 50px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdc-1.png" alt="test" width="419" height="224" style="margin-left: 30px; margin-right: 10px; margin-bottom: 50px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdc-1.png" alt="test" width="419" height="224" style="margin-left: 30px; margin-right: 10px; margin-bottom: 50px;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hdc-1.png" alt="test" width="419" height="224" style="margin-left: 30px; margin-bottom: 50px;">
                </div>

        </div>
<?php
    endwhile;
else :
    // Aucun contenu trouvé
    echo '<p>Aucun contenu trouvé</p>';
endif;



wp_reset_postdata(); // Rétablir les données de publication originales
?>
<script>
    function redirectToQuizPage() {
        window.location.href = "<?php echo get_permalink(get_page_by_title('quiz')); ?>";
    }
</script>
