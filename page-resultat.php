<?php
get_template_part('header3'); ?>
<?php
session_start();

// Les catégories possibles
$categories = array(
    'Haut du corps' => 'HAUT_DU_CORPS',
    'Bas du corps' => 'BAS_DU_CORPS',
    'Tout le corps' => 'TOUT_LE_CORPS'
);

// Les niveaux possibles
$niveaux = array(
    'Débutant' => 'DEBUTANT',
    'Intermédiaire' => 'INTERMEDIAIRE',
    'Avancé' => 'AVANCE'
);

// Les durées possibles
$durees = array(
    '5 minutes' => '5MIN',
    '10 minutes' => '10MIN',
    '15 minutes' => '15MIN'
);

// Les équipements possibles
$equipements = array(
    'Avec' => 'AVEC_EQUIPEMENT',
    'Sans' => 'SANS_EQUIPEMENT'
);

// Les objectifs possibles
$objectifs = array(
    'Perte de poids' => 'PERTE_DE_POIDS',
    'Renforcement musculaire' => 'RENFORCEMENT_MUSCULAIRE',
    'Bien-être' => 'BIEN_ETRE'
);

// Initialisation des critères à partir des réponses du quizz
$selectedCategory = isset($_SESSION['q1']) ? $categories[$_SESSION['q1']] : null;
$selectedNiveau = isset($_SESSION['q2']) ? $niveaux[$_SESSION['q2']] : null;
$selectedDuree = isset($_SESSION['q3']) ? $durees[$_SESSION['q3']] : null;
$selectedEquipement = isset($_SESSION['q4']) ? $equipements[$_SESSION['q4']] : null;
$selectedObjectif = isset($_SESSION['q5']) ? $objectifs[$_SESSION['q5']] : null;

// Tableau associatif des vidéos recommandées
// Tableau associatif des vidéos recommandées
$videosRecommandees = array(
    // ABSOLUMENT RESPECTER LA FORME DE LIENS https://youtube.com/embed/
    // Haut du corps
    'Video1' => array('HAUT_DU_CORPS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', 'https://youtube.com/embed/1fjeQKI-5wg?si=thBEZ_Zh867e9is9'),
    'Video4' => array('HAUT_DU_CORPS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', 'https://youtube.com/embed/alvaQZjxY_Y?si=1W_l2Jdi5Hh2XZRg'),
    'Video7' => array('HAUT_DU_CORPS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', 'https://youtube.com/embed/7dpO-nSNPZg?si=J7dzoT6RgxJkJiGX'),
    'Video2' => array('HAUT_DU_CORPS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE',''),
    'Video5' => array('HAUT_DU_CORPS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE', ''),
    'Video8' => array('HAUT_DU_CORPS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE', ''),
    'Video3' => array('HAUT_DU_CORPS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', ''),
    'Video6' => array('HAUT_DU_CORPS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', ''),
    'Video9' => array('HAUT_DU_CORPS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', ''),

    // Bas du corps
    'Video10' => array('BAS_DU_CORPS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', ''),
    'Video13' => array('BAS_DU_CORPS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', ''),
    'Video16' => array('BAS_DU_CORPS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', ''),
    'Video11' => array('BAS_DU_CORPS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE', ''),
    'Video14' => array('BAS_DU_CORPS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE', ''),
    'Video17' => array('BAS_DU_CORPS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE', ''),
    'Video12' => array('BAS_DU_CORPS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', ''),
    'Video15' => array('BAS_DU_CORPS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', ''),
    'Video18' => array('BAS_DU_CORPS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', ''),

    // Tout le corps
    'Video19' => array('TOUT_LE_CORPS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', ''),
    'Video22' => array('TOUT_LE_CORPS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', ''),
    'Video25' => array('TOUT_LE_CORPS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', ''),
    'Video20' => array('TOUT_LE_CORPS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE', ''),
    'Video23' => array('TOUT_LE_CORPS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE', ''),
    'Video26' => array('TOUT_LE_CORPS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE', ''),
    'Video21' => array('TOUT_LE_CORPS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', ''),
    'Video24' => array('TOUT_LE_CORPS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', ''),
    'Video27' => array('TOUT_LE_CORPS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', ''),

    // Étirements
    'Video28' => array('ETIREMENTS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', ''),
    'Video31' => array('ETIREMENTS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', ''),
    'Video34' => array('ETIREMENTS', 'DEBUTANT', '5MIN', 'SANS_EQUIPEMENT', 'PERTE_DE_POIDS', ''),
    'Video29' => array('ETIREMENTS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE', ''),
    'Video32' => array('ETIREMENTS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE', ''),
    'Video35' => array('ETIREMENTS', 'DEBUTANT', '10MIN', 'SANS_EQUIPEMENT', 'RENFORCEMENT_MUSCULAIRE', ''),
    'Video30' => array('ETIREMENTS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', ''),
    'Video33' => array('ETIREMENTS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', ''),
    'Video36' => array('ETIREMENTS', 'DEBUTANT', '15MIN', 'SANS_EQUIPEMENT', 'BIEN_ETRE', '')
    // Ajoutez autant de vidéos que nécessaire
);




// Filtrer les vidéos en fonction des critères sélectionnés
$videosFiltrees = array_filter($videosRecommandees, function ($video) use (
    $selectedCategory, $selectedNiveau, $selectedDuree, $selectedEquipement, $selectedObjectif
) {
    return (
        (!$selectedCategory || in_array($selectedCategory, $video)) &&
        (!$selectedNiveau || in_array($selectedNiveau, $video)) &&
        (!$selectedDuree || in_array($selectedDuree, $video)) &&
        (!$selectedEquipement || in_array($selectedEquipement, $video)) &&
        (!$selectedObjectif || in_array($selectedObjectif, $video))
    );
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Quizz PHP</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        /* Ajoutez ces styles CSS pour créer une marge à gauche pour les vidéos */
        .video-container {
            margin-left: 20px; /* Ajoutez la marge souhaitée en pixels */
        }
    </style>
</head>
<body>
    <p> Prêt(e) à personnaliser votre expérience d’entraînement ? Connectez-vous ou créez un compte dès maintenant pour bénéficier d’un suivi personnalisé de vos vidéos préférées, des recommandations adaptées à vos objectifs, et pour rester motivé(e) tout au long de votre parcours fitness. Rejoignez notre communauté pour vivre une expérience d’entraînement unique et sur mesure !</p>

    <?php
    

    // Affichez les vidéos recommandées horizontalement
    echo "<h1>Voici nos recommendations :</h1>";
    echo "<div class='d-flex flex-wrap'>";

    foreach ($videosFiltrees as $video => $criteria) {
        echo "<div class='mr-3 mb-3'>";
        echo "<iframe class='video-container' style='margin-left: 50px;' width='419' height='224' src='" . $criteria[5] . "' frameborder='0' allowfullscreen></iframe>";
        echo "</div>";
    }

    echo "</div>";

    ?>

</body>
</html>