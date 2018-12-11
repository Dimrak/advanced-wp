<?php

function awp_theme_setup(){

	// Para anadir featured image en post como un boton
	add_theme_support('post-thumbnails');

	/* Para anadir un menu - menu editor y luego poder usarlo
	en header.php */
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu')
	));
}


add_action('after_setup_theme', 'awp_theme_setup');

// Excerpt

function adv_set_excerpt_length(){
	return 60;
}

add_filter('excerpt_lenght', 'set_excerpt_lenght');