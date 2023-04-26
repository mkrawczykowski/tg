<?php
  global $post;
  $heading_one = get_field('heading_one');
  $image_or_text_right = get_field('image_or_text_right');
  $image_or_text_left = get_field('image_or_text_left');


  // Counting margins
  $margin_styles = 'style="';
  $margin_styles .= get_sub_field('margin_top', $post->ID) ? 'margin-top: ' . strval(get_sub_field('margin_top', $post->ID)) . 'px;' : null;
  $margin_styles .= get_sub_field('margin_bottom', $post->ID) ? 'margin-bottom: ' . strval(get_sub_field('margin_bottom', $post->ID)) . 'px;' : null;
  $margin_styles .= '"';
?>

<section class="heading-columns" <?php echo $margin_styles; ?>>
  <div class="container">
    <div class="row">

      <div class="col col--first">
<?php echo get_sub_field('margin_top', $post->ID); ?>
      </div>
      <div class="col col--second">
testy
      </div>
    </div>
  </div>

</setion>