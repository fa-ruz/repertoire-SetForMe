<?php get_template_part('header3'); ?>

<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
);

$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div><?php the_content(); ?></div>
        </article>



<?php get_footer(); ?>