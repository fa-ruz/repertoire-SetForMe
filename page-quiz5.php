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
        <h2 class="quiz-question" id="question">Quel est vptre principal objectif d'entraînement en ce moment ?</h2>
        <div class="row quiz-option">
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('haut')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/coeur.png" class="img-fluid icon-img" width="30" height="30" alt="Perte"> Perte de poids</li>
          </div>
          
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('bas')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/coeur.png" class="img-fluid icon-img" width="30" height="30" alt="Renforcement"> Renforcement musculaire</li>
          </div>
          <div class="col-md-6 text-center">
            <li onclick="redirigerVersPageQuiz2('tout')"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/coeur.png" class="img-fluid icon-img" width="30" height="30" alt="Bienetre"> Bien-être</li>
          </div>
        </div>

    </div>
  </div>

  <script>
    function retourPage() {
      window.history.back();
    }
    function redirigerVersPageQuiz2(partieDuCorps) {
    window.location.href = 'résultat/?partie=' + partieDuCorps;
}
</script>