<?php
get_header(); ?>



<h1>TON CORPS,</h1>
<h2>ton chemin.</h2>

 
<h3>NOS CATEGORIES</h3>
<p>Explorez nos catégories de sport :<br>
Découvrez, choisissez, excellez.</p>


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


<div class="p-3 mb-2 bg-black text-white"><blockquote class="blockquote"><h3>A PROPOS</h3><br><p>SetForMe révolutionne votre parcours sportif en vous offrant une expérience unique
et personnalisée. Notre site propose une vaste gamme de vidéos adaptées à vos 
besoins sportifs spécifiques. Comment ? Grâce à notre quizz intelligent qui vous 
guide dans la personnalisation de votre programme. Répondez à quelques questions
simples, et découvrez des vidéos conçues sur mesure pour vous. De la musculation 
à la flexibilité, SetForMe s'ajuste à vos objectifs, vous offrant une expérience fitness 
aussi unique que vous l'êtes. Rejoignez-nous dans cette aventure où chaque séance
devient une étape vers votre meilleure version!</p></blockquote></div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card-avis mb-3 rounded-0 bg-black text-white" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text">SetForMe a vraiment changé la donne pour moi. Les vidéos personnalisées correspondent bien à mes besoins, et le quizz m'a aidé à cibler mes objectifs. J'adore la variété des exercices proposés.</p>
              <p class="card-text mt-3"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card-avis mb-3 rounded-0 bg-black text-white" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text">SetForMe a vraiment changé la donne pour moi. Les vidéos personnalisées correspondent bien à mes besoins, et le quizz m'a aidé à cibler mes objectifs. J'adore la variété des exercices proposés.</p>
              <p class="card-text mt-3"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



           
<?php get_footer(); ?>