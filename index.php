<?php
  get_header();
?>

	<main class="">
    <section class="page-featured-image">
      <?php
        if (!is_front_page()){
          the_title();
        }
      ?>  
    </section>
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
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
    <br>
    sdsdsdsdcvsavda s ag as adsghasd  hah ah a 
	</main>

<?php
get_footer();