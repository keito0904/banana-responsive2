<?php
/*
Template Name:blog
*/
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/blog.css">
</head>
<body>
  <?php get_template_part('layouts/header') ?>
  <div class="sub-header">
    <div class="content">
      <h1>ブログ</h1>
    </div>
  </div>
  <div class="main-content">
    <div class="content">
      <div class="top-word" align="center">
        <img src="<?php bloginfo('template_url'); ?>/img/quo1.png">
        バナナを食べるくらいならバナナになれ！
        <img src="<?php bloginfo('template_url'); ?>/img/quo2.png">
      </div>
    </div>
  </div>
  <?php get_template_part('layouts/footer') ?>
</body>
</html>
