<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s-materializecss-materializecss
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s-materializecss' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding container">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$_s_materializecss_description = get_bloginfo( 'description', 'display' );
			if ( $_s_materializecss_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $_s_materializecss_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="nav-wrapper container">
				<a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'menu-1',
					'menu_id'        	=> 'primary-menu',
					'menu_class'		=> 'hide-on-med-and-down',
					'container'       => '',
					'walker'				=>	new Materialize_Walker_Nav_Menu(),
				) );
				?>
			</div><!-- .nav-wrapper -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
	<?php
		wp_nav_menu( array(
			'theme_location' 	=> 'menu-1',
			'menu_class'		=> 'sidenav',
			'menu_id'        	=> 'mobile-menu',
			'container'       => '',
			'walker'				=>	new Materialize_Walker_Nav_Menu(),
		) );
	?>

	<div id="content" class="site-content container">
	   <div class="row">
