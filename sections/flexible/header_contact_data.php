<?php
global $post;
  $heading = get_sub_field('heading', $post->ID);
  $text_below_heading = get_sub_field('text_below_heading', $post->ID);
  $phone_number = get_sub_field('phone_number', $post->ID);
  $email_address = get_sub_field('email_address', $post->ID);
?>


<section class="heading-columns" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">
    <div class="row">
      <div class="col">
      </div>
    </div>
  </div>
</section>