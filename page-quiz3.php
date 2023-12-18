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
        <h2 class="quiz-title">Q3</h2>
      </div>
      <div class="quiz-body">
        <h2 class="quiz-question" id="question">Quelle durée préférez-vous pour vos sessions d'entraînement ?</h2>
        <div class="row quiz-option">
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('haut')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bras.png" class="img-fluid icon-img" width="25" height="25" alt="5m">
              5 minutes
            </li>
          </div>
          
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('bas')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bras.png" class="img-fluid icon-img" width="25" height="25" alt="10m"> 10 minutes</li>
          </div>
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('tout')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bras.png" class="img-fluid icon-img" width="25" height="25" alt="15m"> 15 minutes</li>
          </div>
        </div>
      
</div>
    </div>
  </div>
  <div class="progress" role="progressbar" aria-label="Example 1px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 5px">
  <div class="progress-bar" style="width: 60%; background-color: #c0abff;"></div>
</body>
  <script>
    function retourPage() {
      window.history.back();
    }
    function redirigerVersPageQuiz2(partieDuCorps) {
    window.location.href = 'quiz4/?partie=' + partieDuCorps;
}
</script>