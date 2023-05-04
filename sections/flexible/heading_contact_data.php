<?php
global $post;
  $heading = get_sub_field('heading', $post->ID);
  $text_below_heading = get_sub_field('text_below_heading', $post->ID);
  $phone_number = get_sub_field('phone_number', $post->ID);
  $email_address = get_sub_field('email_address', $post->ID);
  $background_gradient = get_sub_field('background_gradient', $post->ID);
  $background_gradient = get_sub_field('background_gradient', $post->ID);
  $button = get_sub_field('button', $post->ID);
?>


<section class="heading-contact-data<?php echo $background_gradient ? ' heading-contact-data--gradient' : NULL; ?>" <?php display_margins_for_page($post->ID) ?>>
  
  <?php echo $heading ? '<h2 class="heading-contact-data__heading">' . $heading . '</h2>' : NULL ?>
  <?php echo $text_below_heading ? '<h2 class="heading-contact-data__paragraph">' . $text_below_heading . '</h2>' : NULL ?>

  <div class="heading-contact-data__columns">
    <a class="heading-contact-data__column heading-contact-data__column--phone" href="tel:<?php echo $phone_number; ?>">
      <?php echo $phone_number; ?>
    </a>

    <a class="heading-contact-data__column heading-contact-data__column--email" href="mailto:<?php echo $email_address; ?>">
      <?php echo $email_address; ?>
    </a>
  </div>

  <?php 
   
    if($button): 
      $button_url = $button['url'];
      $button_title = $button['title'];
      $button_target = $button['target'] ? $button['target'] : '_self';
      ?>
      <div class="button-container">
        <a class="button button--white" href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
      </div>
    <?php endif; ?>
</section>