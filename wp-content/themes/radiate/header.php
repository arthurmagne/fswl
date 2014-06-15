<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="parallax-bg"></div>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap clearfix">

			<div class="header-search-icon"></div>
			<?php get_search_form(); ?>	

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h1 class="menu-toggle"></h1>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'radiate' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->				
		</div><!-- .inner-wrap header-wrap -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="menu-container">
			<hr class="menu-border-top">
			<menu class="menu">
				<li>
					<a href="#">Design de Blogs</a>
				<span class="menu-separator">•</span>
				</li>
				<li>
					<a href="#">La vie à Montréal</a>
				<span class="menu-separator">•</span>
				</li>
				<li>
					<a href="#">Voyages</a>
					<div class="sub-menu-container">
						<menu class="sub-menu">
							<li>
								<a href="#">Montréal</a>
							</li>
							<li>
								<a href="#">Floride</a>
							</li>
							<li>
								<a href="#">New-York</a>
							</li>
							<li>
								<a href="#">Toronto</a>
							</li>
							<li>
								<a href="#">Ottawa</a>
							</li>
						</menu>
					</div>
				<span class="menu-separator">•</span>
				</li>
				<li>
					<a href="#">Tutoriels</a>
					<div class="sub-menu-container">
						<menu class="sub-menu">
							<li>
								<a href="#">Photoshop</a>
							</li>
							<li>
								<a href="#">Blogger</a>
							</li>
						</menu>
					</div>
				<span class="menu-separator">•</span>
				</li>
				<li>
					<a href="#">Lifestyle</a>
				</li>
			</menu>
			<hr class="menu-border-bottom">
		</div>
		<div class="menu-separator"></div>
		<div class="inner-wrap">
			












