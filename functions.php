<?php 
add_filter('show_admin_bar', '__return_false');
add_filter( 'excerpt_more', '__return_false' );


add_action( 'after_setup_theme', 'tiendasurti_theme_setup' );

function tiendasurti_theme_setup() {

	add_theme_support( 'woocommerce' );
	
	add_theme_support( 'post-thumbnails' );
	
	add_image_size( '50x50',50, 50,true);
	add_image_size( '100x100',100, 100,false);
	add_image_size( '200x200',200, 200,true );
	add_image_size( '300x300',300, 300,true );
	add_image_size( '400x400',400, 400,true );

	add_image_size( '800x600',800, 600,true );
	add_image_size( '800x800',800, 800,true );
	add_image_size( '1000x1000f',1000, 1000,false );
	add_image_size( '1000x1000',1000, 1000,true);
	add_image_size( '1920x1280',1920, 1280,true );

		
		if ( function_exists( 'register_nav_menus' ) ) {

			register_nav_menus(
				array(
				'cabecera-menu' => __( 'Menu Cabecera' ),
				'pie-menu' => __( 'Menu Footer' ),
				)
			);

		}

}




// include custom jQuery
function latiendadelsurti_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'latiendadelsurti_custom_jquery');
