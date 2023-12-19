<?php
// recommandation.php

// Inclure l'en-tête ou tout autre code nécessaire

// Récupérer les réponses depuis la session
session_start();
$reponse_q1 = isset($_SESSION['Q1']) ? $_SESSION['Q1'] : '';
$reponse_q2 = isset($_SESSION['Q2']) ? $_SESSION['Q2'] : '';

// Générer la recommandation en fonction des réponses
$recommandation = generer_recommandation($reponse_q1, $reponse_q2);

// Afficher la recommandation
echo "Recommandation de vidéo : " . $recommandation;

// Nettoyer les données de session après affichage de la recommandation
unset($_SESSION['Q1']);
unset($_SESSION['Q2']);
?>
