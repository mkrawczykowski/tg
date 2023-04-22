<?php
  get_header();
?>

	<main class="">
		<?php
      the_title();
      $dupa = 1;
      echo $dupa == 1 ? 'dupa' : 'nie-dupa';
      echo is_user_logged_in();
    ?>
	</main>

<?php
get_footer();