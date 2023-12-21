
<?php

get_template_part('header3');

?>
<body>
  <div class="wrapper">
    <div class="quiz-container d-flex flex-column justify-content-center align-items-center mt-5" style="min-height: 70vh;">
      <div class="head-quiz">
        <button type="button" id="Retour" class="btn-retour btn-dark" onclick="retourPage()">Retour</button>
        <h2 class="quiz-title">Q1</h2>
      </div>
      <div class="quiz-body">
        <h2 class="quiz-question" id="question">
        <form id="questionForm" action="process.php" method="post">Pour commencer, quelle partie spécifique de votre corps souhaitez-vous cibler et travailler avec nos vidéos ?</h2>
        <div class="row quiz-option">
          <div class="col-md-6 text-center">
          
            <li onclick="redirigerVersPageQuiz2('Haut')">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calque_1-2.png"class="img-fluid icon-img"width="40" height="40" alt="Icône Haut" name="q1" value="Haut du corps" onchange="submitForm()"> Haut du corps
              </a>
            </li>
          </div>
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('bas')">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calque_1-2.png" class="img-fluid icon-img"width="40" height="40" alt="Icône Bas" name="q1" value="Bas du corps" onchange="submitForm()"> Bas du corps
            </li>
          </div>
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('tout')">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Calque_1-2.png"class="img-fluid icon-img"width="40" height="40" name="q1" value="Tout le corps" onchange="submitForm()"> Tout le corps
            </li>
          </div>
        </div>
      </div>
      <input type="hidden" name="nextQuestion" value="2">
    </form>

    </div>
    <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 5px">
  <div class="progress-bar" style="width: 20%; background-color: #c0abff;"></div>
</div>
  </div>

  
  <script>
    function retourPage() {
      window.history.back();
    }

    function redirigerVersPageQuiz2(partieDuCorps) {
      window.location.href = 'quiz2/?partie=' + partieDuCorps;

      function submitForm() {
            // Envoyer automatiquement le formulaire
            document.getElementById("questionForm").submit();
        }
    }
  </script>
</body>






