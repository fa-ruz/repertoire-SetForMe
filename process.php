<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez la réponse à la question actuelle
    $currentQuestion = $_POST["nextQuestion"] - 1;
    $answer = $_POST["q$currentQuestion"];

    // Stockez la réponse dans la variable de session
    $_SESSION["q$currentQuestion"] = $answer;

    // Redirigez vers la prochaine question ou les résultats
    $nextQuestion = $_POST["nextQuestion"];
    if ($nextQuestion <= 5) {
        header("Location: q$nextQuestion.php");
    } else {
        header("Location: resultats.php");
    }
} else {
    header("Location: quiz.php");
}
?>