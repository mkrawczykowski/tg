<?php
  global $post;
  $boxes_or_photos = get_sub_field('boxes_or_photos', $post->ID);
  $background_container = get_sub_field('background_container', $post->ID);
?>

<section class="boxes-photos" <?php display_margins_for_page($post->ID) ?>>
  <div class="container"><div class="row__decorator"></div>
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
            <div class="box-photo">
              <div class="box-photo__header">
                <div class="box-photo__header-icon">
                  <?php echo wp_get_attachment_image($boxes_repeater__icon, 'full'); ?>
                </div>
                <div class="box-photo__header-text">
                  <a href="<?php echo get_permalink($boxes_repeater__link); ?>"><h3><?php echo $boxes_repeater__name; ?></h3></a>
                </div>
              </div>
              <div class="box-photo__content">
                <p><?php echo $boxes_repeater__text; ?></p>
              </div>
              <a class="box-photo__link" href="<?php echo get_permalink($boxes_repeater__link); ?>"></a>
            </div>
          </div>

          <?php
          endwhile;
        endif;
      }
    ?>



      <!-- <div class="col">
        
      </div>
      <div class="col">
        
      </div>
      <div class="col"> -->
        
      </div>
    </div>
  </div>
</section>