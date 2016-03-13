<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!-- Font Awesome CDN link -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<div class="site-branding-inner container">
						<div class="logo">
							<img src="<?php bloginfo('template_directory'); ?>/images/lrb-logo.svg" alt="Le Red Bread logo" />
						</div>
						<div class="header-social-icons">
							<ul>
								<li><i class="fa fa-facebook"></i></li>
								<li><i class="fa fa-twitter"></i></li>
								<li><i class="fa fa-google-plus"></i></li>
								<li><i class="fa fa-envelope"></i></li>
							</ul>
						</div>
					</div>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
					<div class="main-navigation-inner container">
						<div class="menu-buttons">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</div>

						<div class="nav-search">
							<?php get_search_form(); ?>
						</div>
					</div>
				</nav><!-- #site-navigation -->

			</header><!-- #masthead -->

			<div id="content" class="site-content">
