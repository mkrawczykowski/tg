<?php
  global $post;
?>

<section class="text-editor" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">
    <div class="row">
      <div class="col">
        <?php echo apply_filters('the_content', get_sub_field('text', $post->ID)); ?>
      </div>
    </div>
  </div>
</setion>