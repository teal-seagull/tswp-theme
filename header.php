<?php
/**
 * The Header template for our tealseagull theme
 *
 * Displays all of the <head> section and menu
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/ico/favicon.ico">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
  
  <?php wp_head(); ?>
</head>

<body class="body-index">

<!-- HERE COMES OUR UGLY CODING. SHOULD BE TEMPORARY SINCE WE HAVE NO FRAMEWORK YET, JUST PURE PHP -->
<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">TealSeagull</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="index.php">Home</a></li>
            <li class=""><a href="about.php">About</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="services.php#cms">Content Management Solutions</a></li>
                <li class="divider"></li>
                <li><a href="services.php#ecommerce">E-Commerce Solutions</a></li>
                <li class="divider"></li>
                <li><a href="services.php#sap">Information Systems Consulting</a></li>
                <li class="divider"></li>
                <li><a href="services.php#mobile">Mobile Solutions</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>