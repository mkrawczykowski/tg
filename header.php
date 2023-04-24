<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
</head>

<body class="<?php echo  (is_user_logged_in()) ? "top-margin" : null; ?>">
  <header>
    <div class="container container--wide">
      <div class="row">
        <div class="col">
          <a class="logo">
            <picture class="logo__picture">
              <source type="image/webp"
                srcset=
                "
                  <?php echo get_stylesheet_directory_uri(); ?>/public/logo-technika-grzewcza.webp,
                  <?php echo get_stylesheet_directory_uri(); ?>/public/logo-technika-grzewcza@2x.png 2x
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
          <div class="quick-contact"></div>
          <nav class="main-nav"></div>          
        </div>
      </div>
    </div>

  </header>