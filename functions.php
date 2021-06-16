<?php

/**
 * @package WordPress
 * @subpackage temple-os-online
 */

define( 'TOS_VERSION', 1.0 );

if ( ! function_exists( 'blank_setup' ) ) :

	function tos_setup() {
		load_theme_textdomain( 'temple-os-online' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 256,
				'width'       => 256,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);
		function tos_custom_logo() {
			if ( function_exists( 'the_custom_logo' ) ) {
				return get_custom_logo();
			}else{
				return '';
			}
		}
	}
endif;

add_action( 'after_setup_theme', 'tos_setup' );


function tos_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar',
		'name' => 'Sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="side-title">',
		'after_title' => '</h2>',
		'empty_title'=> '',
	));
} 

add_action( 'widgets_init', 'tos_register_sidebars' );

function tos_scripts()  { 

	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('animations.css', get_stylesheet_directory_uri() . '/styles/animations.css');
	wp_enqueue_style('forms.css', get_stylesheet_directory_uri() . '/styles/forms.css');
	
	wp_enqueue_script( 'tos-godword', get_template_directory_uri() . '/js/godword.js', array(), TOS_VERSION, true );
	wp_enqueue_script( 'tos-query', get_template_directory_uri() . '/js/jquery.min.js', array( 'jquery' ), TOS_VERSION, true );
	wp_enqueue_script( 'tos', get_template_directory_uri() . '/js/theme.min.js', array(), TOS_VERSION, true );
	
}

add_action( 'wp_enqueue_scripts', 'tos_scripts' );

include('shortcodes.php');

/** 
 * remove empty paragraph tags from shortcodes in WordPress.
 */ 

function remove_empty_shortcode_paragraphs( $content ) {
    $toFix = array( 
    	'<p>['    => '[', 
    	']</p>'   => ']', 
    	']<br />' => ']' 
    ); 
    return strtr( $content, $toFix );
}
add_filter( 'the_content', 'remove_empty_shortcode_paragraphs' );
