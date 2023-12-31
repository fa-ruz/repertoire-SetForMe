<?php 
/* Template Name: Quiz 2 */
get_template_part('header3'); ?>
<?php
$partieDuCorps = isset($_GET['partie']) ? $_GET['partie'] : '';
?>
<body>
  <div class="wrapper">
    <div class="quiz-container d-flex flex-column justify-content-center align-items-center mt-5" style="min-height: 70vh;">
      <div class="head-quiz">
        <button type="button" id="Retour" class="btn-retour btn-dark" onclick="retourPage()">Retour</button>
        <h2 class="quiz-title">Q5</h2>
      </div>
      <div class="quiz-body">
        <h2 class="quiz-question" id="question">
        <form id="questionForm" action="process.php" method="post">Quel est votre principal objectif d'entraînement en ce moment ?</h2>
        <div class="row quiz-option">
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('haut')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/coeur.png" class="img-fluid icon-img" width="30" height="30" alt="Perte" name="q5" value="Perte de poids" onchange="submitForm(this.value)"> Perte de poids</li>
          </div>
          
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('bas')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/coeur.png" class="img-fluid icon-img" width="30" height="30" alt="Renforcement" name="q5" value="Renforcement musculaire" onchange="submitForm(this.value)"> Renforcement musculaire</li>
          </div>
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('tout')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/coeur.png" class="img-fluid icon-img" width="30" height="30" alt="Bienetre" name="q5" value="Bien-être" onchange="submitForm(this.value)"> Bien-être</li>
          </div>
        </div>
        <input type="hidden" name="nextQuestion" value="6">
    </form>

    </div>
  </div>
  <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 5px">
  <div class="progress-bar" style="width: 100%; background-color: #c0abff;"></div>
</body>
<script>
    function retourPage() {
        window.history.back();
    }

    function redirigerVersPageQuiz2(partieDuCorps) {
        window.location.href = 'resultat'
    }

    function submitForm(answer) {
        // Envoyer automatiquement le formulaire
        document.getElementById("questionForm").submit();
    }
</script>
