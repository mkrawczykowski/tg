<?php
  global $post;
  $heading_one = get_sub_field('heading_one', $post->ID);
  $image_or_text_right = get_sub_field('image_or_text_right', $post->ID);
  $image_or_text_left = get_sub_field('image_or_text_left', $post->ID);
  
  function display_column_content($side_string, $image_or_text){
    if (isset($side_string) && $image_or_text !== 'wybierz'){
      if ($image_or_text === 'obraz'){
        $field_name = 'image_' . $side_string;
        echo get_sub_field($field_name, $post->ID);
      }
      if ($image_or_text === 'tekst'){
        $lead_field_name = 'lead_' . $side_string;
        $text_field_name = 'text_' . $side_string;
        echo get_sub_field($lead_field_name, $post->ID);
        echo get_sub_field($text_field_name, $post->ID);
      }
    }
  }
?>

<section class="heading-columns" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">
    <div class="row">

      <div class="col col--first">
        <?php display_column_content('left', $image_or_text_left); ?>
      </div>
      <div class="col col--second">
        <?php display_column_content('right', $image_or_text_left); ?>
      </div>
    </div>
  </div>
</setion>