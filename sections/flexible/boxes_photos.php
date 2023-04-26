<?php
  global $post;
  $boxes_or_photos = get_sub_field('boxes_or_photos', $post->ID);
  $background_container = get_sub_field('background_container', $post->ID);
?>

<section class="boxes-photos" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">
    <div class="row">

      <div class="col">
        
      </div>
      <div class="col">
        
      </div>
      <div class="col">
        
      </div>
    </div>
  </div>
</section>