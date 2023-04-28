<?php

function button_function($atts, $content = null) {
	$a = shortcode_atts( array(
		'kolor' => 'blue',
		'link' => 'https://',
	), $atts );

  $colors = array(
    "niebieski" => "blue",
    "bialy" => "white",
  );

  $final_color = $colors[$a['kolor']];

	// return "foo = {$a['kolor']}";
  return '<a class="button button--' . $final_color . '" href="' . $a['link'] . '">' . $content . '</a>';
}
add_shortcode( 'button', 'button_function' );
?>
