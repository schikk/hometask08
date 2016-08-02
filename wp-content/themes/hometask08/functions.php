<?php
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

	function theme_name_scripts() {
		wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/styles.css');
	}
	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
	add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
	function my_wp_nav_menu_args( $args = '' ){
	$args['container'] = false;
	return $args;
}

?>