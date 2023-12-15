<?php wp_footer(); ?>
  <footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-blanc.png" alt="Logo" width="290" height="46">
            </div>

            <div class="col-md">
                <h6>Categories</h6>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('haut-du-corps'))); ?>">Haut du corps</a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('bas-du-corps'))); ?>">Bas du corps</a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('tout-le-corps'))); ?>">Tout le corps</a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('etirements'))); ?>">Etirements</a></li>
                </ul>
            </div>

            <div class="col-md">
                <h6>Quizz</h6>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('quizz'))); ?>">Faire le quizz</a></li>
                </ul>
            </div>

            <div class="col-md">
                <h6>Infos</h6>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('mentions-legales'))); ?>">Mentions légales</a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('politique-confidentialite'))); ?>">Politique de confidentialité</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons d-flex justify-content-between align-items-center">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Groupe 210.png" alt="test" class="img-fluid">
                </li>
                
                <li style="margin-left: 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Groupe 211.png" alt="test" class="img-fluid">
                </li>
            </ul>
        </div>
    </div>
</div>


</footer>
</body>
</html>