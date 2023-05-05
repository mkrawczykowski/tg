<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body class="<?php echo  (is_user_logged_in()) ? "top-margin" : null; ?>">
  <header class="header" id="start">
    <div class="container container--wide">
      <div class="row">
        <div class="col header__content">


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


          <div class="quick-contact">
            <?php
            $header_email = get_field('header_email', 'options');
            if (!empty($header_email)) : ?>
              <a class="quick-contact__link" href="<?php echo $header_email; ?>">Szybki kontakt</a>  
            <?php endif ?>
          </div>


          <div class="hamburger" id="js-hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>


          <?php
            wp_nav_menu( array(
              'theme_location' => 'header-menu',
              'container'      => 'nav',
              'container_class'=> 'main-nav',
              'menu_class'     => 'main-nav__nav',
              'container_id'   => 'js-main-nav'
            ) );
          ?>

        </div>
      </div>
    </div>
  </header>