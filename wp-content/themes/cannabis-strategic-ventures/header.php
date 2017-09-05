<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo $GLOBALS['assets']->get('main.css'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
    <header class="site-header">
      <div class="container">
        <a href="index.php" class="logo-container">
          <div class="logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/csv-logo.svg')"></div>
          <div class="open-logo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/csv-logo-black.svg')"></div>
        </a>
        <button class="mobile-menu-toggle">
          <span class="bar bar-1"></span>
          <span class="bar bar-2"></span>
          <span class="bar bar-3"></span>
        </button>
        <ul class="site-nav">
          <li><a href="#market" class="nav-link hero-link" id="hero-link">THE MARKET</a></li>
          <li><a href="#work" class="nav-link hero-link" id="hero-link">OUR WORK</a></li>
          <li><a href="#invest" class="nav-link hero-link" id="hero-link">INVEST</a></li>
          <li><a href="#contact" class="nav-link hero-link" id="hero-link">CONTACT</a></li>
        </ul>
      </div>
      <div class="divider"></div>
      <ul class="modal-nav">
        <li><a href="#market" class="hero-link" id="hero-link">THE MARKET</a></li>
        <li><a href="#work" class="hero-link" id="hero-link">OUR WORK</a></li>
        <li><a href="#invest" class="hero-link" id="hero-link">INVEST</a></li>
        <li><a href="#contact" class="hero-link" id="hero-link">CONTACT</a></li>
      </ul>
      <ul class="cb-slideshow">
        <li>
          <span style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header-image-1.jpg')"><h1>WE PLANT BUSINESS & GROW DREAMS</h1></span>
        </li>
        <li>
          <span style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header-image-2.jpg')"><h1>HEADING 2</h1></span>
        </li>
        <li>
          <span style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header-image-3.jpg')"><h1>HEADING 3</h1></span>
        </li>
        <li>
          <span style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header-image-4.jpg')"><h1>HEADING 4</h1></span>
        </li>
      </ul>
      <a href="#intro" class="hero-link scroll-link" id="hero-link"><div class="scroll-down" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/header-arrow.svg')"></div></a>
    </header>
