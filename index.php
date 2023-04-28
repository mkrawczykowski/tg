<?php
  get_header();
?>

	<main class="">
  
  <?php get_template_part( 'sections/featured', 'image' ); ?>

    <?php
      if( have_rows( 'sections' ) ){
        while( have_rows( 'sections' ) ){
          the_row();
          $possibleFile = get_template_directory() . '/sections/flexible/' . get_row_layout() . '.php';
          if( file_exists( $possibleFile ) ){
            include( $possibleFile );
          }
        }
      }
    ?>
	</main>

<?php
get_footer();