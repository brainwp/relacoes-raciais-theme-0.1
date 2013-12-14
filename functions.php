<?php
/**
 * Relacoes Raciais functions and definitions
 *
 * @package Relacoes Raciais
 */

/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/options-framework/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework/inc/options-framework.php';

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */

add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>

<?php

}

include ( dirname( __FILE__ ) . "/options.php" );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'relacoes_raciais_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function relacoes_raciais_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Relacoes Raciais, use a find and replace
	 * to change 'relacoes-raciais' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'relacoes-raciais', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'relacoes-raciais' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'relacoes_raciais_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // relacoes_raciais_setup
add_action( 'after_setup_theme', 'relacoes_raciais_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function relacoes_raciais_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'relacoes-raciais' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer', 'relacoes-raciais' ),
		'id'            => 'sidebar-footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'relacoes_raciais_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function relacoes_raciais_scripts() {
	wp_enqueue_style( 'relacoes-raciais-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'celulas-theme-style',  get_template_directory_uri() . '/twentytwelve.css' );
	wp_enqueue_style( 'temporario-style',  get_template_directory_uri() . '/temporario.css' );

	wp_enqueue_script( 'relacoes-raciais-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'caroufredsel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.1.0-packed.js', array('jquery') );
    wp_enqueue_script( 'caroufredsel_pre', get_template_directory_uri() . '/js/caroufredsel_pre.js', array('caroufredsel') );
    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery') );
    wp_enqueue_script( 'jquery-easing-compatibility', get_template_directory_uri() . '/js/jquery.easing.compatibility.js', array('jquery') );
    wp_enqueue_script( 'kwicks', get_template_directory_uri() . '/js/jquery.kwicks-1.5.1.pack.js', array('jquery') );
	wp_enqueue_script( 'easing_pre', get_template_directory_uri() . '/js/easing_pre.js', array('jquery') );

	wp_enqueue_script( 'relacoes-raciais-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'relacoes_raciais_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_filter('show_admin_bar', '__return_false'); 