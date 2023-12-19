<?php get_header(); 
function enqueue_slick_styles() {
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
}
add_action('wp_enqueue_scripts', 'enqueue_slick_styles');

?>


<div id="content-container">
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
<div class="col-md-6 mb-4">
    <div class="card rounded-0 bg-black text-white">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title(); ?>" class="img-fluid">
        <?php endif; ?>
        <div class="card-body d-flex flex-column">
            <h2 class="card-title"><?php the_title(); ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-flèche.png" alt="flèche" class="img-fluid arrow-icon ml-auto" alt="icone">
            </h2>
            <a href="<?php the_permalink(); ?>" class="btn1 mt-2 align-self-end" id="monBtn"></a>
        </div>
    </div>
    <!-- Ajout d'un paragraphe en dessous de chaque carte -->
    <p class="card-description mt-2"><?php the_excerpt(); ?></p>
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
<div id="resultats-carousel-container" class="mt-5">
<h3>RÉSULTATS</h3>
<p>Des réussites, des changements, des vies transformées.<br>Explorez les témoignages SetForMe et laissez-vous inspirer</p>

<div class="carousel-images">
                <div class="images">
                    <img src="img/vert.jpg" alt="Image 1">
                    <img src="img/orange.jpg" alt="Image 2">
                    <img src="img/blou.jpg" alt="Image 3">
                    <img src="img/mauve.jpg" alt="Image 4">
                    <img src="img/blanc.jpg" alt="Image 5">
                    <img src="img/rouge.jpg" alt="Image 6">
                    <img src="img/rouge.jpg" alt="Image 7">
                </div>
            </div>
            <div class="nav-buttons">
                <button class="prev"><</button>
                <button class="next">></button>
            </div>
        </div>
        
      </main>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
              const imagesContainer = document.querySelector(".carousel-images .images");
              const prevButton = document.querySelector(".prev");
              const nextButton = document.querySelector(".next");
              const imageWidth = imagesContainer.clientWidth; // Largeur d'une image
              const totalImages = imagesContainer.childElementCount; // Nombre total d'images
              let currentIndex = 0; // Indice de l'image actuelle
          
              function updateButtonsState() {
                prevButton.disabled = currentIndex === 0; // Désactiver le bouton "Précédent" à la première image
                nextButton.disabled = currentIndex === totalImages - 4; // Désactiver le bouton "Suivant" lorsqu'il reste 4 images pour afficher
              }
          
              nextButton.addEventListener("click", function () {
                if (currentIndex < totalImages - 4) {
                  currentIndex++;
                  const offset = -currentIndex * imageWidth;
                  imagesContainer.style.transform = `translateX(${offset}px)`;
                  updateButtonsState();
                }
              });
          
              prevButton.addEventListener("click", function () {
                if (currentIndex > 0) {
                  currentIndex--;
                  const offset = -currentIndex * imageWidth;
                  imagesContainer.style.transform = `translateX(${offset}px)`;
                  updateButtonsState();
                }
              });
          
              // Mettez à jour l'état des boutons au chargement de la page
              updateButtonsState();
            });
          </script>

<?php get_footer(); ?>



