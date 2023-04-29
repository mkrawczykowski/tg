<?php

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    .acf-flexible-content .layout .acf-fc-layout-handle {
      line-height: 2em;
      background-color: #dcdcdc;
      font-size: 18px;
    } 
  </style>';
}



?>