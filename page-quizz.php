<?php get_template_part('header3'); ?>
<script>
// Votre code JavaScript pour le quizz ici
var quizData = {
  question1: "Réponse 1",
  question2: "Réponse 2",
  // ... d'autres questions et réponses
};

var xhr = new XMLHttpRequest();
xhr.open('POST', 'process_quizz.php', true);
xhr.setRequestHeader('Content-Type', 'application/json');

xhr.onreadystatechange = function () {
  if (xhr.readyState == 4 && xhr.status == 200) {
    // Gérer la réponse du serveur si nécessaire
    console.log(xhr.responseText);
  }
};

xhr.send(JSON.stringify(quizData));
</script>

</body>
</html>