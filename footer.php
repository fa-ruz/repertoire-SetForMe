<?php wp_footer(); ?>
  <footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <a class="navbar-brand me-auto" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-blanc.png" alt="Logo" width="290" height="46">
            </a>
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
            <div class="col-md-8 col-sm-6 col-xs-12">
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="Insta" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets\images\insta.png" alt="Logo" width="36" height="36"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="Tiktok" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets\images\tiktok.png" alt="Logo" width="29" height="33"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>


</footer>
</body>
</html>