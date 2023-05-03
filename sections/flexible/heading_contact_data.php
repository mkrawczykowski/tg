<?php
global $post;
  $heading = get_sub_field('heading', $post->ID);
  $email_info = get_sub_field('email_info', $post->ID);
?>


<section class="heading-columns" <?php display_margins_for_page($post->ID) ?>>
  <h2><?php echo $heading; ?></h2>

  <p><?php echo $email_info; ?></p>
</section>