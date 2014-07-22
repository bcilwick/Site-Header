<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Blake Cilwick
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'blake-cilwick' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="twocol">
						<a href="http://www.blakecilwick.com" title="Go Home" class="logo">
							<img src="http://www.blakecilwick.com/wp-content/uploads/2014/07/bbc-logo.gif" alt="blakecilwick.com" />
						</a>
				</div>
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'blake-cilwick' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->

				<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
				<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
			</div>
			<div class="row intro">
				<div class="eightcol">
					<h1>Front-end <br>Web Developer</h1>
					<p>"Far and away the best prize that life has to offer is the chance to work hard at work worth doing."</p>
				</div>
				<a href="http://www.blakecilwick.com/portfolio/" title="Portfolio" class="portfolio-link">Portfolio</a>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
