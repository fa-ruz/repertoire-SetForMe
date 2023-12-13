<?php
// process_quizz.php

// Récupérer les données envoyées depuis le script JavaScript
$quizData = json_decode(file_get_contents('php://input'), true);

// Traiter les données du quiz
// ...

// Répondre au script JavaScript
echo "Données reçues avec succès!";
?>
