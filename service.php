<?php
/*
Template Name:service
*/
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/service.css">
</head>
<body id="service">
  <?php get_template_part('layouts/header') ?>
  <div class="sub-header">
    <div class="content">
      <h1>事業内容</h1>
    </div>
  </div>
  <div class="main-content">
    <div class="content">
      <div class="left-content sidebar">
        <nav class="sidebar-nav">
          <ul>
            <li>
              <a href="" class="nav-link">
                <img src="<?php bloginfo('template_url'); ?>/img/banana.png">
                事業内容
              </a>
            </li>
          </ul>
      </div>
      <div class="right-content main">
        right
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <?php get_template_part('layouts/footer') ?>
</body>
</html>
