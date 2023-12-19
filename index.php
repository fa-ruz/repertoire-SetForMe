<?php get_header(); 
function enqueue_slick_styles() {
    wp_enqueue_style('slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
}
add_action('wp_enqueue_scripts', 'enqueue_slick_styles');

?>

    <div class="content">
        <div class="text">
            <h1>TON CORPS,</h1>
            <h2>ton chemin.</h2>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/accueil.png" alt="Votre Image">
        </div>
    </div>


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
                            <h2 class="card-title" ><?php the_title(); ?></h2>
                            <a href="<?php the_permalink(); ?>" class="btn1 mt-auto align-self-end" id="monBtn">
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
 <h2>RÉSULTATS</h2>
<p>Des réussites, des changements, des vies transformées.<br>Explorez les témoignages SetForMe et laissez-vous inspirer</p>
<div id="carousel-container">
    <div id="card-slider">
        <div class="card2 rounded-0">
            <div class="stars-container" id="stars-container-1">
                <span class="star" data-index="1">★</span>
                <span class="star" data-index="2">★</span>
                <span class="star" data-index="3">★</span>
                <span class="star" data-index="4">★</span>
                <span class="star" data-index="5">★</span>
            </div>
            <p>SetForMe a vraiment changé la donne pour moi. Les vidéos personalisées correspondent bien à mes besoins, et le quizz m'a aidé à cibler mes objectifs. J'adore la variété des exercices proposés</p>
            <div class="profile-container">
                <img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/assets/images/profil1.png" alt="Profile 1">
                <p>Sarah<br>23 ans</p>
            </div>
        </div>

        <div class="card2 rounded-0">
            <div class="stars-container" id="stars-container-2">
                <span class="star" data-index="1">★</span>
                <span class="star" data-index="2">★</span>
                <span class="star" data-index="3">★</span>
                <span class="star" data-index="4">★</span>
                <span class="star" data-index="5">★</span>
            </div>
            <p>SetForMe a vraiment changé la donne pour moi. Les vidéos personalisées correspondent bien à mes besoins, et le quizz m'a aidé à cibler mes objectifs. J'adore la variété des exercices proposés</p>
            <div class="profile-container">
                <img class="profile-pic" src="images/pfp.png" alt="Profile 2">
                <p>Alexandre<br>32 ans</p>
            </div>
        </div>

        <div class="card2 rounded-0">
            <div class="stars-container" id="stars-container-3">
                <span class="star" data-index="1">★</span>
                <span class="star" data-index="2">★</span>
                <span class="star" data-index="3">★</span>
                <span class="star" data-index="4">★</span>
                <span class="star" data-index="5">★</span>
            </div>
            <p>Texte de la troisième carte</p>
            <div class="profile-container">
                <img class="profile-pic" src="images/pfp.png" alt="Profile 3">
                <p>Nom<br>Age</p>
            </div>
        </div>

        <div class="card2 rounded-0">
            <div class="stars-container" id="stars-container-4">
                <span class="star" data-index="1">★</span>
                <span class="star" data-index="2">★</span>
                <span class="star" data-index="3">★</span>
                <span class="star" data-index="4">★</span>
                <span class="star" data-index="5">★</span>
            </div>
            <p>Texte de la quatrième carte</p>
            <div class="profile-container">
                <img class="profile-pic" src="images/pfp.png" alt="Profile 4">
                <p>Nom<br>Age</p>
            </div>
        </div>
        <div class="card2 rounded-0">
            <div class="stars-container" id="stars-container-5">
                <span class="star" data-index="1">★</span>
                <span class="star" data-index="2">★</span>
                <span class="star" data-index="3">★</span>
                <span class="star" data-index="4">★</span>
                <span class="star" data-index="5">★</span>
            </div>
            <p>Texte de la cinquième carte</p>
            <div class="profile-container">
                <img class="profile-pic" src="images/pfp.png" alt="Profile 5">
                <p>Nom<br>Age</p>
            </div>
        </div>
        <!-- Ajoutez d'autres cartes selon vos besoins -->
    </div>
    <button id="prev-btn">&lt;</button>
    <button id="next-btn">&gt;</button>
</div>

<script>
    const cardSlider = document.getElementById("card-slider");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");
    let currentIndex = 0;

    prevBtn.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    nextBtn.addEventListener("click", () => {
        if (currentIndex < cardSlider.children.length - 1) {
            currentIndex++;
            updateSlider();
        }
    });

    function updateSlider() {
        const marginValue = 100; // Ajustez la marge entre les cartes ici
        const translateValue = -(currentIndex * (500 + marginValue)) + "px";
        cardSlider.style.transform = "translateX(" + translateValue + ")";
    }

    // Gestion de la notation (étoiles)
    const starsContainers = document.querySelectorAll('.stars-container');

    // Définir le nombre d'étoiles attribuées pour chaque carte
    const ratings = [3, 5, 2]; // Changez ces valeurs selon vos besoins

    starsContainers.forEach((container, index) => {
        const stars = container.querySelectorAll('.star');

        stars.forEach((star, starIndex) => {
            star.style.opacity = starIndex < ratings[index] ? 1 : 0.5;
        });
    });
</script>

</body>
</html>





<?php get_footer(); ?>

