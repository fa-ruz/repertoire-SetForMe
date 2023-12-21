<?php 
/* Template Name: Quiz 2 */
get_template_part('header3');
 ?>

<body>
  <div class="wrapper">
    <div class="quiz-container d-flex flex-column justify-content-center align-items-center mt-5" style="min-height: 70vh;">
      <div class="head-quiz">
        <button type="button" id="Retour" class="btn-retour btn-dark" onclick="retourPage()">Retour</button>
        <h2 class="quiz-title">Q2</h2>
      </div>
      <div class="quiz-body">
        <h2 class="quiz-question" id="question">
        <form id="questionForm" action="process.php" method="post">Sélectionnez le niveau de compétence qui correspond le mieux à votre expérience actuelle</h2>
        <div class="row quiz-option">
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('haut')">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/poids.png" class="img-fluid icon-img" width="20" height="20" alt="débutant" name="q2" value="Débutant" onchange="submitForm(this.value)">
              Débutant
            </li>
          </div>
          
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('bas')">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/poids.png" class="img-fluid icon-img" width="20" height="20" alt="Intermédiaire" name="q2" value="Intermédiaire" onchange="submitForm(this.value)">
              Intermédiaire
            </li>
          </div>
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('tout')">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/poids.png" class="img-fluid icon-img" width="20" height="20" alt="Avancé" name="q2" value="Avancé" onchange="submitForm(this.value)">
              Avancé
            </li>
          </div>
        </div>
      </div>
      <input type="hidden" name="nextQuestion" value="3">
    </form>
    </div>
    <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 5px">
  <div class="progress-bar" style="width: 40%; background-color: #c0abff;"></div>
</div>
  </div>
</body>



  <script>
    function retourPage() {
      window.history.back();
    }
    function redirigerVersPageQuiz2(partieDuCorps) {
    window.location.href = 'quiz3/?partie=' + partieDuCorps;
    
}function submitForm(answer) {

// Envoyer automatiquement le formulaire
document.getElementById("questionForm").submit();
}
</script>