<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Relacoes Raciais
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="bg-menu"></div><!-- .bg-cabecalho -->
<div class="bg-cabecalho"></div><!-- .bg-cabecalho -->

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header-home" role="banner">

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'relacoes-raciais' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'relacoes-raciais' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
  
		</nav><!-- #site-navigation -->

		<div class="elemento-header-home">
		</div><!-- .elemento-header-home -->
		
        <a href="http://www.acaoeducativa.org" target="_blank">
            <div class="logo-acao">
            </div><!-- .logo-acao -->
       	</a>
		
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="logo-site">
		</div><!-- .logo-site -->
        </a>
		
	</header><!-- #masthead -->

	<div id="content" class="site-content-home">
