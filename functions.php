<?php

/* Styles and scripts */
function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
    array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/aos.css',
    array(), false, 'all');
    wp_enqueue_style('aos');

    wp_register_style('style', get_template_directory_uri() . '/style.css',
    array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function include_bootstrap()
{
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'include_bootstrap');

function loadjs()
{
    wp_register_script( 'isotope', get_template_directory_uri().'/js/isotope.min.js', array('jquery'),  true );
    wp_register_script( 'imagesloaded', get_template_directory_uri().'/js/imagesloaded.min.js', array('jquery'),  true );
    wp_register_script('aos', get_template_directory_uri() . '/js/aos.js', '', 1, true);
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('aos');
    wp_enqueue_script('isotope');
    wp_enqueue_script('imagesloaded');
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

/* Theme support */
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support( 'title-tag');

/* Menus */
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

/* Image size */
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);


/* purge cache after new portfolio item */
$custom_post_types = array( "portfolio" => "portfolio");
$max_archive_pages = 0;	// 0 == all archive page #s

function post_status( $new_status, $old_status, $post )
{
	global $custom_post_types, $max_archive_pages;

	if ( array_key_exists( $post->post_type, $custom_post_types ) && ( $new_status === "publish" || $old_status === "publish" ) )
	{
		if ( defined( 'W3TC' ) )
		{
                    // Flush everything!
                    w3tc_flush_all();
		}
	}
}
add_action(  'transition_post_status',  'post_status', 10, 3 );

