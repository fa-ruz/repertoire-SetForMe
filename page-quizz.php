<?php get_template_part('header3'); ?>

<body>
  <div class="wrapper">
    <div class="quiz-container d-flex flex-column justify-content-center align-items-center mt-5" style="min-height: 70vh;">
      <div class="head-quiz">
      <button type="button" id="Retour" class="btn-retour btn-dark">Retour</button>
        <h2 class="quiz-title">Q1</h2>
      </div>
      <div class="quiz-body">
        <h2 class="quiz-question" id="question">Pour commencer, quelle partie spécifique de votre corps souhaitez-vous cibler et travailler avec nos vidéos ?</h2>
        <div class="row quiz-option">
          <div class="col-md-6 text-center">
            <li>Haut du corps</li>
          </div>
          
          <div class="col-md-6 text-center">
            <li>Bas du corps</li>
          </div>
          <div class="col-md-6 text-center">
            <li>Tout le corps</li>
          </div>
        </div>
        <div id="resultats"></div>
      </div>
    </div>
  </div>

  <!-- Le reste de votre code

