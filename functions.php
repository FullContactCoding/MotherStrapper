<?php
/**
 * Enqueues scripts and styles for front end.
 *
 * @since Wp Bootstrap 1.0
 *
 * @return void
 */
function cwd_wp_bootstrap_scripts_styles() {
    // Loads Bootstrap minified JavaScript file.
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'3.0.0', true );
    // Loads Bootstrap minified CSS file.
    wp_enqueue_style('bootstrapwp', get_template_directory_uri() . '/css/bootstrap.min.css', false ,'3.0.0');
    // Loads our main stylesheet.
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array('bootstrapwp') ,'1.0');
    // Loads functions.js
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js');
}
add_action('wp_enqueue_scripts', 'cwd_wp_bootstrap_scripts_styles');

    // Nav setup
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
 // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
