<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
function responsive_menu_setup() {/*== Register responsive menu ==*/
	register_nav_menu ('Responsive Menu', __( 'Responsive Menu', 'twentyeleven' ));
}
add_action( 'after_setup_theme', 'responsive_menu_setup' );

function define_class ($args) {/*== Set classes of menu container ==*/
	$args['container_class'] = str_replace(' ','-',$args['theme_location']).'-nav'; return $args;
}
add_filter ('wp_nav_menu_args', 'define_class');
?>