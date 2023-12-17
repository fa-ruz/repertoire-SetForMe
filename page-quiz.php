<?php get_template_part('header3'); ?>

<body>
  <div class="wrapper">
    <div class="quiz-container d-flex flex-column justify-content-center align-items-center mt-5" style="min-height: 70vh;">
      <div class="head-quiz">
        <button type="button" id="Retour" class="btn-retour btn-dark" onclick="retourPage()">Retour</button>
        <h2 class="quiz-title">Q1</h2>
      </div>
      <div class="quiz-body">
        <h2 class="quiz-question" id="question">Pour commencer, quelle partie spécifique de votre corps souhaitez-vous cibler et travailler avec nos vidéos ?</h2>
        <div class="row quiz-option">
          <div class="col-md-6 text-center">
          <li onclick="redirigerVersPageQuiz2('haut')">Haut du corps</li>
          </div>
          
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('bas')">Bas du corps</li>
          </div>
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('tout')">Tout le corps</li>
          </div>
        </div>
        <div id="resultats"></div>
      </div>
    </div>
  </div>

  <script>
    function retourPage() {
      window.history.back();
    }

    function redirigerVersPageQuiz2(partieDuCorps) {
    window.location.href = 'quiz2/?partie=' + partieDuCorps;
}

  </script>
</body>



