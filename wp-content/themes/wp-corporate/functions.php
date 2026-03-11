<?php
/**
 * WP Corporate Theme Functions
 *
 * @package WP_Corporate
 */

namespace WPCorporate;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup theme features.
 */
function theme_setup() {
	// Add title tag support.
	add_theme_support( 'title-tag' );

	// Enable post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// HTML5 support.
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\theme_setup' );

/**
 * Register custom post type: Products.
 */
function register_products_post_type() {
	$labels = [
		'name'               => '製品紹介',
		'singular_name'      => '製品',
		'add_new'            => '新規追加',
		'add_new_item'       => '新製品を追加',
		'edit_item'          => '製品を編集',
		'new_item'           => '新製品',
		'view_item'          => '製品を表示',
		'search_items'       => '製品を検索',
		'not_found'          => '製品が見つかりません',
		'not_found_in_trash' => 'ゴミ箱に製品はありません',
	];

	$args = [
		'labels'             => $labels,
		'public'             => true,
		'has_archive'        => true,
		'menu_icon'          => 'dashicons-products',
		'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
		'show_in_rest'       => true, // Block editor support.
		'rewrite'            => [ 'slug' => 'products' ],
	];

	register_post_type( 'products', $args );
}
add_action( 'init', __NAMESPACE__ . '\\register_products_post_type' );

/**
 * Enqueue scripts and styles.
 */
function enqueue_assets() {
	// Google Fonts: Shippori Mincho.
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;500;600;700;800&display=swap', [], null );

	// Main stylesheet.
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), [], '1.0.0' );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\enqueue_assets' );
