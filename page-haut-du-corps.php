<?php get_template_part('header2'); ?>


<div class="text-bg p-3"><h1>HAUT DU CORPS</h1></div>
<div class="spacer"></div>


<div class="container mt-5">

    <?php
    $series = array(
        array(
            'title' => '5 minutes',
            'offset' => 0
        ),
        array(
            'title' => '10 minutes',
            'offset' => 3
        ),
        array(
            'title' => '15 minutes',
            'offset' => 6
        ),
    );

    foreach ($series as $serie) :
    ?>
        <h2 class="video-title"><?php echo $serie['title']; ?></h2>
        <div class="row mb-4">
            <?php
            $exercicesList = new WP_Query([
                'post_type'      => 'exercices',
                'posts_per_page' => 3,
                'offset'         => $serie['offset'],
                'orderby'        => 'date', // Vous pouvez changer 'date' selon votre préférence
                'order'          => 'ASC', // 'DESC' pour trier du plus récent au plus ancien, 'ASC' pour l'ordre inverse
            ]);

            ?>
            <?php while ($exercicesList->have_posts()) : $exercicesList->the_post(); ?>
                <div class="col-md-4">
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
        </div>
    <?php endforeach; ?>

</div>

<?php get_footer(); ?>