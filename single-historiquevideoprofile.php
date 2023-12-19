<?php
// Récupère la valeur du champ ACF
$lien_video = get_field('lien_de_la_video');

// Vérifie si le champ est rempli avant de l'afficher
if ($lien_video) {
    echo '<a href="' . esc_url($lien_video) . '">Regarder la vidéo</a>';
}
?>

