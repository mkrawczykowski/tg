    <footer class="footer">
      <div class="container container--wide">
        <div class="row">
          <div class="col">
            <a class="logo" href="<?php echo site_url(); ?>">
                <picture class="logo__picture">
                  <source type="image/webp"
                    srcset=
                    "
                      <?php echo get_stylesheet_directory_uri(); ?>/public/logo-technika-grzewcza.webp,
                      <?php echo get_stylesheet_directory_uri(); ?>/public/logo-technika-grzewcza@2x.webp 2x
                    "
                  >
                  <img 
                    srcset=
                    "
                      <?php echo get_stylesheet_directory_uri(); ?>/public/logo-technika-grzewcza.png,
                      <?php echo get_stylesheet_directory_uri(); ?>/public/logo-technika-grzewcza@2x.png 2x
                    "
                    src="<?php echo get_stylesheet_directory_uri(); ?>/public/logo-technika-grzewcza.png"
                    alt="Technika Grzewcza - logo"
                    decoding="async"
                  >
                </picture>
              </a>
              
              <?php 
                echo get_field('footer_text', 'options') ?  '<p class="footer__text">' . get_field('footer_text', 'options') . '</p>' : NULL;
              ?>
              <p class="footer__designed-by">
                Designed by 
                <a class="" href="https://coolbrand.pl/" target="_blank">
                  <picture class="">
                    <img 
                      srcset=
                      "
                        <?php echo get_stylesheet_directory_uri(); ?>/public/cool-brand.png,
                        <?php echo get_stylesheet_directory_uri(); ?>/public/cool-brand@2x.png 2x
                      "
                      src="<?php echo get_stylesheet_directory_uri(); ?>/public/cool-brand.png"
                      alt="Cool Brand - logo"
                      decoding="async"
                    >
                  </picture>
                </a>  
              </p>
              

          </div>
          <div class="col">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'footer-menu',
                'container'      => 'nav',
                'container_class'=> 'footer__nav',
                'menu_class'     => 'footer__nav-menu',
                'container_id'   => 'js-main-nav'
              ));
            ?>
            <?php 
                echo get_field('footer_contact_text', 'options') ?  '<div class="footer__contact-text"><p>' . get_field('footer_contact_text', 'options') . '</p></div>' : NULL;
              ?>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>

  </body>
</html>