<?php

/**
 *
 * Create inline margin styles from ACF fields for section
 *
 * @param   integer  $pageID  Page ID
 * @return  string   Inline CSS styles
 *
 */

function display_margins_for_page($pageID){
  $margin_padding_styles = 'style="';

  //generating margins
  $margin_padding_styles .= get_sub_field('margin_top', $pageID) ? 'margin-top: ' . strval(get_sub_field('margin_top', $pageID)) . 'px; ' : null;
  $margin_padding_styles .= get_sub_field('margin_bottom', $pageID) ? 'margin-bottom: ' . strval(get_sub_field('margin_bottom', $pageID)) . 'px; ' : null;

  //generating paddings
  $margin_padding_styles .= get_sub_field('padding_top', $pageID) ? 'padding-top: ' . strval(get_sub_field('padding_top', $pageID)) . 'px; ' : null;
  $margin_padding_styles .= get_sub_field('padding_bottom', $pageID) ? 'padding-bottom: ' . strval(get_sub_field('padding_bottom', $pageID)) . 'px;' : null;
  $margin_padding_styles .= '"';

  echo $margin_padding_styles;
}


/**
 *
 * generates content in sections/flexible/heading_columns.php
 *
 * @param   string  $side_string  'left' or 'right'
 * @param   string  $image_or_text  'obraz' or 'tekst'
 * @return  string  <img> OR .heading-columns__lead and .heading-columns__text
 *
 */

function display_column_content($side_string, $image_or_text){
    global $post;
    if (isset($side_string) && $image_or_text !== 'wybierz'){
      if ($image_or_text === 'obraz'){
        $image_field_name = 'image_' . $side_string;
        $image_ID = get_sub_field($image_field_name, $post->ID);
      
        echo wp_get_attachment_image($image_ID, 'image-612', NULL, array('class' => "heading-columns__image",));

      }
      if ($image_or_text === 'tekst'){
        $lead_field_name = 'lead_' . $side_string;
        $text_field_name = 'text_' . $side_string;
        echo '<p class="heading-columns__lead">' . get_sub_field($lead_field_name, $post->ID) . '</p>';
        echo '<div class="heading-columns__text">' . apply_filters('the_content', get_sub_field($text_field_name, $post->ID)) . '</div>';
      }
    }
  }



/**
 *
 * generates content in sections/flexible/heading_columns.php
 *
 * @param   string  $side_string  'left' or 'right'
 * @param   string  $image_or_text  'obraz' or 'tekst'
 * @return  string  <img> OR .heading-columns__lead and .heading-columns__text
 *
 */

function generate_sub_menu(){

  // echo '<div class="featured-image__menu">';
              $menu_name = 'header-menu';
              $locations = get_nav_menu_locations();
              $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
              $menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

              if($menu_items){ 

              echo '<div class="featured-image__menu-submenus" id="js-menus">';

                $parent_item;
                $in_sub_menu = 0;
                foreach($menu_items as $menu_item) {
                  $first_submenu_item = true;
                  $last_submenu_item = false;

                  if ($menu_item->menu_item_parent == 0){
                    if ($in_sub_menu === 0){
                      $parent_item = '<h3 class="featured-image__menu-parent-heading">' . $menu_item->title . '</h3>';
                    }
                    if ($in_sub_menu === 1){
                      $in_sub_menu = 0;
                      $parent_item = '<h3 class="featured-image__menu-parent-heading">' . $menu_item->title . '</h3>';
                      echo '</ul>';
                      echo '</div>';
                    }
                  }
                  if ($menu_item->menu_item_parent != 0){
                    if ($in_sub_menu === 0){
                      $in_sub_menu = 1;
                      echo '<div class="featured-image__menu-submenu">';
                      echo $parent_item;
                      echo '<ul id="js-submenu"  class="featured-image__menu-ul">';
                    }
                    if ($in_sub_menu === 1){
                      echo '<a href="' . $menu_item->url . '"><li>' . $menu_item->title . '</li></a>';
                    }
                  }
                }

                echo '</div>';

              }

            
          // echo '</div>';



}
?>