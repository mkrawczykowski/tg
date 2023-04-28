<?php
  global $post;
  $heading_one = get_sub_field('heading_one', $post->ID);
  $image_or_text_right = get_sub_field('image_or_text_right', $post->ID);
  $image_or_text_left = get_sub_field('image_or_text_left', $post->ID);
  $background_gradient = get_sub_field('background_gradient', $post->ID);
  echo $background_gradient;
?>

<section class="heading-columns<?php echo $background_gradient ? ' heading-columns--gradient' : NULL; ?>" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">

    <div class="row">
      <div class="col">
        <h2><?php echo $heading_one; ?></h2>  
      </div>
    </div>
    <div class="row">
      <div class="col col--first">
        <?php display_column_content('left', $image_or_text_left); ?>
      </div>
      <div class="col col--second">
        <?php display_column_content('right', $image_or_text_right); ?>
      </div>
    </div>
  </div>
</section>