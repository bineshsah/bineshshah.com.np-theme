<?php
function BKG_setup() {
	add_theme_support( 'html5', array( 'search-form' ) );
	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'BKG' ),
    ) );
  }

function BKG_scripts_method() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', '', true);
	wp_enqueue_script( 'jquery' );

	wp_register_script('bkgqueryjs', get_template_directory_uri() . '/js/bkg.js', 'jquery', true);
	wp_enqueue_script('bkgqueryjs');

	wp_enqueue_style('stylesheet', get_template_directory_uri() .'/css/stylesheet.css', 'true', null);

}
add_action( 'after_setup_theme', 'BKG_setup');
add_action('wp_enqueue_scripts', 'BKG_scripts_method');

if ( ! function_exists( 'better_wpautop' )) {
    function better_wpautop($pee){
        return wpautop($pee,$br=1);
    }

    remove_filter('the_content','wpautop');
    add_filter('the_content','better_wpautop');
}
?>
