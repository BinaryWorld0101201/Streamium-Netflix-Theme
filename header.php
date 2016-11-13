<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Meta Data -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/dist/img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/dist/img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/dist/img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/dist/img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/dist/img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/dist/img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/dist/img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/dist/img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/dist/img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/dist/img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/dist/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/dist/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/dist/img/favicon-16x16.png">

	<!-- Trackback -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- Wordpress Scripts -->
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<?php if ( !get_theme_mod( 'tutorial_btn' ) ) : ?>
		<div class="streamium-install-instructions"><h2>Please follow this guide for help with installation <a href="http://learning.s3bubble.com/course/build-netflix-wordpress-amazon-web-services/" target="_blank">Video Series</a></h2><p>You can remove this alert in Appearance -> Customizer -> Streamium</p></div>
	<?php endif; ?>
	<div class="streamium-loading">Loading&#8230;</div>
	<header class="cd-main-header">

		<?php if ( get_theme_mod( 'streamium_logo' ) ) : ?>

		    <a class="cd-logo" href="<?php echo esc_url( home_url('/') ); ?>"><img src='<?php echo esc_url( get_theme_mod( 'streamium_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>

		<?php else : ?>

		    <a class="cd-logo" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo( 'name' ); ?></a>

		<?php endif; ?>

		<ul class="cd-header-buttons">
			<li><a class="cd-search-trigger" href="#cd-search"><?php _e( 'Search', 'streamium' ); ?><span></span></a></li>
			<li><a class="cd-nav-trigger" href="#cd-primary-nav"><?php _e( 'Menu', 'streamium' ); ?><span></span></a></li>
		</ul> <!-- cd-header-buttons -->
		<?php get_search_form(); ?>
		
	</header>

	<div class="cd-testimonials-all">
		<div class="cd-testimonials-all-wrapper">
		</div>	<!-- cd-testimonials-all-wrapper -->
		<a href="#0" class="close-btn">Close</a>
	</div> <!-- cd-testimonials-all -->