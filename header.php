<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(' | ', 'true', 'right'); ?><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<div class="top px-3 px-md-5">
  <?php wp_nav_menu(array('theme_location' => 'top', 'container' => '')); ?>
</div>

<div class="header d-flex align-items-center justify-content-between px-3 py-4 px-md-5 pb-md-5">
  <a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/landair-logo.svg" alt="<?php echo get_bloginfo('name'); ?>" class="logo"></a>

  <input type="checkbox" id="main-menu-toggle-checkbox" />
  <label for="main-menu-toggle-checkbox" class="main-menu-toggle">
  	<span></span>
  	<span></span>
  	<span></span>
  </label>

  <div class="main-menu-wrapper d-md-flex align-items-center justify-content-between">
    <?php wp_nav_menu(array('theme_location' => 'main', 'container' => '')); ?>
    <?php if ( is_active_sidebar('header')) : ?>
      <?php dynamic_sidebar('header'); ?>
    <?php endif; ?>
  </div>
</div>
