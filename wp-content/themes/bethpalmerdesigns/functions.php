<?php

// NOTE TO SELF: HAVE NOT ADDED MENUS AT THIS POINT BECAUSE PROBABLY NOT NECESSARY ON THIS PARTICULAR BLOG
// add_theme_support('menus');

// function register_theme_menus() {
// 	register_nav_menus(
// 		array(
// 			'primary-menu' => __('Primary Menu')	
// 		)
// 	);
// }
// add_action ('init', 'register_theme_menus');

function wpt_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}
wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );

add_theme_support('post-thumbnails');

function wpt_excerpt_length( $length ) {
	return 32;
}
add_filter( 'excerpt_length', 'wpt_excerpt_length', 999 );

function wpt_theme_styles() {
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css?family=Amatic+SC:700');
	wp_enqueue_style('font_awesome', get_template_directory_uri().'/fonts/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts', 'wpt_theme_styles');

function wpt_theme_js() {
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', '', '', true);
	wp_enqueue_script('scrolling_nav', get_template_directory_uri().'/js/scrolling-nav.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'wpt_theme_js');

?>