<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"> <!-- Resource style -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script> <!-- Modernizr -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script> <!-- Resource jQuery -->
<script>(function(){document.documentElement.className='js'})();</script>



  
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	


<header class="cd-header">
		<div class="cd-logo"><a href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo esc_url( home_url( '/' ) );?>/wp-content/uploads/raleighLogo.png"/></a></div>

		
		<a class="cd-primary-nav-trigger" href="#0">
			<span class="cd-menu-text"></span><span class="cd-menu-icon"></span>
		</a> <!-- cd-primary-nav-trigger -->
	
                

<nav>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'cd-primary-nav' ) ); ?>
                </nav>
</header>