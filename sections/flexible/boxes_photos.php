<?php
  global $post;
  $boxes_or_photos = get_sub_field('boxes_or_photos', $post->ID);
  $dark_blue_version = get_sub_field('dark_blue_version', $post->ID);
?>

<section class="boxes-photos" <?php display_margins_for_page($post->ID) ?>>
  <div class="container">
  <?php
  if (get_sub_field('background_container', $post->ID) === 'tak') : ?>
    <div class="row__decorator "></div>
  <?php
  endif;
  ?>
    <div class="row">
      <?php
        if((isset($boxes_or_photos)) && ($boxes_or_photos === 'boksy')){
          if( have_rows('boxes_repeater') ):
            while( have_rows('boxes_repeater') ) : the_row(); 
              // global $post;
              $boxes_repeater__name = get_sub_field('boxes_repeater__name', $post->ID);
              $boxes_repeater__text = get_sub_field('boxes_repeater__text', $post->ID);
              $boxes_repeater__link = get_sub_field('boxes_repeater__link', $post->ID);
              $boxes_repeater__icon = get_sub_field('boxes_repeater__icon', $post->ID);   
            ?>
            <div class="col">
              <div class="box-photo<?php echo $dark_blue_version ? ' box-photo--dark' : NULL; ?>">
                <div class="box-photo__header">
                  <div class="box-photo__header-icon">
                    <?php echo wp_get_attachment_image($boxes_repeater__icon, 'full'); ?>
                  </div>
                  <div class="box-photo__header-text">
                    <?php echo $boxes_repeater__link ? '<a href="' . get_permalink($boxes_repeater__link) . '">' : NULL; ?>
                      <h3>
                        <?php echo $boxes_repeater__name; ?>
                      </h3>
                    <?php echo $boxes_repeater__link ? '</a>' : NULL; ?>
                  </div>
                </div>
                <div class="box-photo__content">
                  <p><?php echo $boxes_repeater__text; ?></p>
                </div>
                <?php echo $boxes_repeater__link ?  '<a class="box-photo__link" href="' . get_permalink($boxes_repeater__link) . '"></a>' : NULL; ?>
              </div>
            </div>
            <?php
            endwhile;
          endif;
        }

        if((isset($boxes_or_photos)) && ($boxes_or_photos === 'zdjęcia')){
          if( have_rows('photos_repeater') ):
            while( have_rows('photos_repeater') ) : the_row(); ?>

            <div class="col">
              <div class="box-photo box-photo--limit-height">
                <?php
                  $photos_repeater__photo = get_sub_field('photos_repeater__photo', $post->ID);
                  echo wp_get_attachment_image($photos_repeater__photo, 'image-612', NULL, array());
                ?>
              </div>
            </div>
            
            <?php
            endwhile;
          endif;
        }
      ?>
        
    </div>
  </div>
</section>