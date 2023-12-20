<?php get_template_part('header3'); ?>
<style> .inspi-valo {
        margin-bottom: 200px; /* Adjust the margin to move the button down */
        /* Add any additional styles for the button here */
        margin-top: 0;
        margin-left: 50px;
    }
            </style>
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
            <button class="inspi-valo" onclick="redirectToQuizPage()">
                <div>
                    <div>Faire le quiz</div>
                </div>
            </button>

            <style>
            body {
            background-image: url('http://localhost/SetForMe/wordpress/wp-content/uploads/2023/12/Groupe-18.png');
            background-repeat: no-repeat; /* Empêche la répétition de l'image de fond */
            background-position: right;
            overflow: hidden;

            }
            </style>

        <style> 
        .inspi-valo {
        margin-bottom: 200px;
        margin-top: 0;
        margin-left: 50px;
    }
            </style>



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

