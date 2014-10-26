<?php
/*
Template Name:about
*/
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/about.css">
</head>
<body id="about">
  <nav class="top-nav">
    <ul class="content">
      <li class="logo">
        <a href="<?php bloginfo('url'); ?>" class="nav-logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>" class="home nav-link <?php if ( is_page('top') ) { echo 'active'; } ?>">ホーム</a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>/about" class="about nav-link <?php if ( is_page('about') ) { echo 'active'; } ?>">組織概要</a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>/service" class="service nav-link <?php if ( is_page('service') ) { echo 'active'; } ?>">事業内容</a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>/blog" class="blog nav-link <?php if ( is_page('blog') ) { echo 'active'; } ?>">ブログ</a>
      </li>
      <li class="list-border"></li>
      <div class="clear"></div>
    </ul>
  </nav>
</body>
</html>
