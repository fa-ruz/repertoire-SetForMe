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
        <h2 class="quiz-title">Q4</h2>
      </div>
      <div class="quiz-body">
        <h2 class="quiz-question" id="question">Quelle durée préférez-vous pour vos sessions d'entraînement ?</h2>
        <div class="row quiz-option">
          <div class="col-6 text-center">
            <li onclick="redirigerVersPageQuiz2('haut')">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/haltere.png" class="img-fluid icon-img" width="40" height="40" alt="Avec"> Avec
            </li>
          </div>
          <div class="col-6 text-center">
            <li onclick="redirigerVersPageQuiz2('tout')">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/haltere.png" class="img-fluid icon-img" width="40" height="40" alt="Sans"> Sans
            </li>
          </div>
        </div>
      </div>
    </div>
    <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 5px">
  <div class="progress-bar" style="width: 80%; background-color: #c0abff;"></div>
  </div>
</body>



  <script>
    function retourPage() {
      window.history.back();
    }
    function redirigerVersPageQuiz2(partieDuCorps) {
      window.location.href = 'quiz5/?partie=' + partieDuCorps;
    }
  </script>
</body>
