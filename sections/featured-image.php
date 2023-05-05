<?php
  $is_front_page;
  if (is_front_page()){
    $is_front_page = true;
  } else {
    $is_front_page = false;
  }
?>

<section class="featured-image <?php echo $is_front_page ? 'featured-image--slider' : null; ?>">
<?php generate_sub_menu(); ?>
      <?php
        if (!$is_front_page){ ?>
        
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="featured-image__image">
          
          <div class="featured-image__content">
              <div class="container container--wide">
                <div class="row">
                  <div class="col">
                    <h1 class="featured-image__heading"><?php the_title(); ?></h1>
                    <ul class="featured-image__list">
                      <li class="featured-image__list-item">
                        <a class="featured-image__list-link" href="">Strona główna</a>
                      </li>
                      <?php
                        if (is_singular('oferta')){ ?>
                          <li class="featured-image__list-item">
                            <span class="featured-image__list-link">Oferta</span>
                          </li>
                        <?php } ?>
                          
                      <li class="featured-image__list-item">
                        <span class="featured-image__list-link"><?php the_title(); ?></span>
                      </li>
                    </ul>  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="featured-image__overlay"></div> -->
          <?php
        }

        if ($is_front_page){
          global $post;

          if( have_rows('hp_slides', $post->ID) ): ?>
          <div class="featured-image__slider swiper">
            <div class="swiper-wrapper">
              <?php
              while( have_rows('hp_slides', $post->ID) ) : the_row();
                $hp_slides__heading = get_sub_field('hp_slides__heading', $post->ID);
                $hp_slides__text = get_sub_field('hp_slides__text', $post->ID);  
                $hp_slides__picture = get_sub_field('hp_slides__picture', $post->ID);  
                ?>
                <div class="swiper-slide">
                  <?php echo wp_get_attachment_image($hp_slides__picture, 'full', NULL, array( "class" => "featured-image__image" )); ?>
                  <!-- <div class="featured-image__overlay"></div> -->
                  <div class="featured-image__content">
                    <div class="container container--wide">
                      <div class="row">
                        <div class="col">
                          <h1 class="featured-image__heading"><?php echo $hp_slides__heading; ?></h1>
                          <p class="featured-image__paragraph"><?php echo $hp_slides__text; ?></p>
                            <?php
                              $button_1_label = get_sub_field('button_1_label', $post->ID);
                              $button_1_url = get_sub_field('button_1_url', $post->ID);
                              $button_2_label = get_sub_field('button_2_label', $post->ID);
                              $button_2_url = get_sub_field('button_2_url', $post->ID);
                              ?>
                              <div class="buttons">
                                <?php
                                if (isset($button_1_label) && isset($button_1_url)) : ?>
                                  <a class="button button--blue" href="<?php echo $button_1_url; ?>">
                                    <?php echo $button_1_label; ?>
                                  </a>
                                <?php endif; ?>

                                <?php
                                if (isset($button_2_label) && isset($button_2_url)) : ?>
                                  <a class="button button--white" href="<?php echo $button_2_url; ?>">
                                    <?php echo $button_2_label; ?>
                                  </a>
                                <?php endif; ?>
                              </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                
              <?php
             endwhile; ?>
            </div>
            <div class="swiper-pagination">

            </div>
          </div>
          <?php  
          endif;
        }
      ?>  
    </section>