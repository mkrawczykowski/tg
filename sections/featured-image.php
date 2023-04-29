<?php
  $is_front_page;
  if (is_front_page()){
    $is_front_page = true;
  } else {
    $is_front_page = false;
  }
?>

<section class="featured-image <?php echo $is_front_page ? 'featured-image--slider' : null; ?>">

      <?php
        if (!$is_front_page){ ?>
        
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="featured-image__image">
          <div class="featured-image__overlay"></div>
          <div class="featured-image__content">
          <div class="featured-image__menu">
          
          <?php
            $menu_name = 'header-menu';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

            if($menu_items){ ?>

            <div class="featured-image__menu-submenus" id="js-menus">

            <?php
              $parent_item;
              $in_sub_menu = 0;
              foreach($menu_items as $menu_item) {
                $first_submenu_item = true;
                $last_submenu_item = false;

                if ($menu_item->menu_item_parent == 0){
                  if ($in_sub_menu === 0){
                    $parent_item = '<h3>' . $menu_item->title . '</h3>';
                  }
                  if ($in_sub_menu === 1){
                    $in_sub_menu = 0;
                    echo '</ul>';
                    echo '</div>';
                  }
                }
                if ($menu_item->menu_item_parent != 0){
                  if ($in_sub_menu === 0){
                    $in_sub_menu = 1;
                    echo '<div>';
                    echo '<ul>';
                    // echo '<li>' . $menu_item->title . '</li>';
                  }
                  if ($in_sub_menu === 1){
                    echo '<li>' . $menu_item->title . '</li>';
                  }

                  // echo $first_submenu_item ? '<div class="featured-image__submenu">' : NULL;
                  // $first_submenu_item = false;
                  // echo $parent_item;
                  // $parent_item = '';
                  // echo '<li>' . $menu_item->title . '</li>';
                }
              }  ?>

            </div>

            <?php
            }
            
          ?>

            <!-- <div class="container container--wide">
              <div class="row">
                <div class="col">
                  <ul id="js-menu">
                    <li>Instalacje wodno-kanalizacyjne i centralnego ogrzewania</li>
                    <li>Instalacja gazowa wewnętrzna i zewnętrzna</li>
                    <li>Wentylacja mechaniczna</li>
                    <li>Klimatyzacja</li>
                    <li>Automatyzacja i koordynacja systemów klimatyzacji i centralnego ogrzewania</li>
                    <li>Uzdatnianie wody</li>
                    <li>Instalacja gazowa wewnętrzna i zewnętrzna</li>
                    <li>Wentylacja mechaniczna</li>
                    <li>Klimatyzacja</li>
                    <li>Automatyzacja i koordynacja systemów klimatyzacji i centralnego ogrzewania</li>
                    <li>Uzdatnianie wody</li>
                    <li>Instalacja gazowa wewnętrzna i zewnętrzna</li>
                    <li>Wentylacja mechaniczna</li>
                    <li>Klimatyzacja</li>
                    <li>Automatyzacja i koordynacja systemów klimatyzacji i centralnego ogrzewania</li>
                    <li>Uzdatnianie wody</li>
                  </ul>
                </div>
              </div>
            </div> -->
            
        </div>  
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

        <?php
        }

        if ($is_front_page){
          global $post;
          // $hp_slides = get_sub_field('hp_slides', $post->ID);


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
                  <div class="featured-image__overlay"></div>
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