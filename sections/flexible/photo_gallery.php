<?php
  global $post;
  $boxes_or_photos = get_sub_field('boxes_or_photos', $post->ID);
  $dark_blue_version = get_sub_field('dark_blue_version', $post->ID);
?>

<section class="photo-gallery" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">
    
      <?php
        $count_to_three = 0;
        if( have_rows('photos_repeater') ): ?>
        
          <div class="photos-grid">
            <?php
            while( have_rows('photos_repeater') ) : the_row(); 
              $photos_repeater__photo = get_sub_field('photos_repeater__photo', $post->ID);
            ?>

                <a class="photos-grid__photo venobox" href="<?php echo wp_get_attachment_image_url($photos_repeater__photo, 'large') ?> ">
                  <?php
                    echo wp_get_attachment_image($photos_repeater__photo, 'image-612', NULL, array());
                  ?>
                </a>
              
            <?php
            endwhile; ?>
          </div>
        <?php  
        endif;
      ?>      
    </div>
  </div>
</section>