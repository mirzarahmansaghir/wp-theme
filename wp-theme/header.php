<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="container nav">
    <a href="<?php echo home_url(); ?>" class="brand"><?php bloginfo('name'); ?></a>
    <nav>
      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'nav-list'
        ));
      ?>
    </nav>
    <a class="cta" href="#contact">Hire Me</a>
  </div>
</header>
