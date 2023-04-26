<?php
  global $post;
  $heading_one = get_field('heading_one');
  $image_or_text_right = get_field('image_or_text_right');
  $image_or_text_left = get_field('image_or_text_left');
?>

<section class="heading-columns" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">
    <div class="row">

      <div class="col col--first">
      </div>
      <div class="col col--second">
testy
      </div>
    </div>
  </div>

</setion>