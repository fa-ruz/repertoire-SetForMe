<?php
// traitement_quiz.php

// Récupérer les données des réponses
$partieDuCorps = isset($_POST['partieDuCorps']) ? $_POST['partieDuCorps'] : '';
$question = isset($_POST['question']) ? $_POST['question'] : '';

// Traitement des données, vous pouvez stocker les réponses dans une base de données ou les utiliser comme bon vous semble
// ...

// Répondre au script JavaScript si nécessaire
echo "Données reçues avec succès!";
?>
