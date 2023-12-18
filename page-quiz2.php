<?php 
/* Template Name: Quiz 2 */
get_template_part('header3');
if (isset($_POST['reponse_q2'])) {
  $reponse_q1 = $_POST['reponse_q2'];
  enregistrer_reponse('Q2', $reponse_q1);
} ?>
<?php
$partieDuCorps = isset($_GET['partie']) ? $_GET['partie'] : '';
?>
<body>
  <div class="wrapper">
    <div class="quiz-container d-flex flex-column justify-content-center align-items-center mt-5" style="min-height: 70vh;">
      <div class="head-quiz">
        <button type="button" id="Retour" class="btn-retour btn-dark" onclick="retourPage()">Retour</button>
        <h2 class="quiz-title">Q2</h2>
      </div>
      <div class="quiz-body">
        <h2 class="quiz-question" id="question">Sélectionnez le niveau de compétence qui correspond le mieux à votre expérience actuelle</h2>
        <div class="row quiz-option">
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('haut')">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/poids.png" class="img-fluid icon-img" width="20" height="20" alt="débutant">
              Débutant
            </li>
          </div>
          
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('bas')">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/poids.png" class="img-fluid icon-img" width="20" height="20" alt="Intermédiaire">
              Intermédiaire
            </li>
          </div>
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('tout')">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/poids.png" class="img-fluid icon-img" width="20" height="20" alt="Avancé">
              Avancé
            </li>
          </div>
        </div>
      </div>
      
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
}
</script>