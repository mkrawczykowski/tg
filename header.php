<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
</head>

<body class="<?php echo  (is_user_logged_in()) ? "top-margin" : null; ?>">
  <header>
    <div class="logo"></div>
    <div class="quick-contact"></div>
    <nav class="main-nav"></div>
  </header>