<?php get_template_part('header2'); ?>

<div class="text-bg p-3"><h2>ETIREMENTS</h2></div>
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
            $etirementsList = new WP_Query([
                'post_type'      => 'etirements',
                'posts_per_page' => 3,
                'offset'         => $serie['offset'],
                'orderby'        => 'date', // Vous pouvez changer 'date' selon votre préférence
                'order'          => 'ASC', // 'DESC' pour trier du plus récent au plus ancien, 'ASC' pour l'ordre inverse
            ]);
            ?>
            
            <?php while ($etirementsList->have_posts()) : $etirementsList->the_post(); ?>
                <div class="col-md-4">
                    <div class="card custom-card rounded-0">
                        <div class="container-btn-img">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="test" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h1><?php the_title(); ?></h1>
                            <p class="card-text"><?php the_content(); ?></p>
                            <a href=<?php echo get_field('lien'); ?> class="btn mt-auto align-self-end" id="monBtn">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sur-bouton.png" alt="flèche" class="img-fluid" alt="icone" style="position:relative; z-index:20; margin:0px;">
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endforeach; ?>

</div>

<?php get_footer(); ?>



