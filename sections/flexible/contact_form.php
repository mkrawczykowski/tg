<?php
global $post;
  $heading = get_sub_field('heading', $post->ID);
  $form_shortcode = get_sub_field('form_shortcode', $post->ID);
  $email_info = get_sub_field('email_info', $post->ID);
?>

<section class="contact-form" <?php display_margins_for_page($post->ID) ?>>
  <h2 class="contact-form__heading"><?php echo $heading; ?></h2>

  <div class="arrow-separator">
    <div class="arrow-separator__arrow"></div>
  </div>

  <?php
    echo do_shortcode($form_shortcode);
  ?>

  <p class="contact-form__email-info">
    <?php echo $email_info; ?>
  </p>
</section>