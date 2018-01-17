<?php
/*
Plugin Name: Asif Toolkit
*/

// Exit if accessed directly
if ( ! defined('ABSPATH') ) {
    exit;
}

// Define
define( 'ASIF_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/');
define( 'ASIF_ACC_PATH', plugin_dir_path( __FILE__) );


function asif_toolkit_get_slide_as_list() {
    $args = wp_parse_args(array(
        'post_type' => 'slide',
        'numberposts' => -1
    ));
	
    $posts = get_posts( $args );
	
    $post_option = array( esc_html__('-- Select Slide --', 'asif-toolkit')=>'' );
    if( $posts ) {
        foreach( $posts as $post ) {
            $post_options[ $post->post_title ] = $post->ID;
        }
    }
    return $post_options;
}

// Register custom post & custom taxonomy 
add_action( 'init', 'asif_toolkit_custom_post' );
function asif_toolkit_custom_post() {
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name' => __( 'Slides' ),
                'singular_name' => __( 'Slide' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
}

// Print shortcodes in widgets
add_filter('widget_text', 'do_shortcode');

// Loading VC addons
require_once( ASIF_ACC_PATH . 'vc-addons/vc-blocks-load.php' );

//Theme shortcodes
require_once( ASIF_ACC_PATH . 'theme-shortcodes/slides-shortcode.php' );


//Shortcodes depended on Visual Composer
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if (is_plugin_active('js_composer/js_composer.php')){
    //require_once( ASIF_ACC_PATH . 'theme-shortcodes/staff-shortcode.php');
}


//Registering stock toolkit files
function asif_toolkit_files(){
    wp_enqueue_style( 'owl-carousel', plugin_dir_url( __FILE__ ) .'assets/css/owl.carousel.css');
    wp_enqueue_style( 'asif-toolkit', plugin_dir_url( __FILE__ ) .'assets/css/asif-toolkit.css');
    wp_enqueue_script( 'owl-carousel', plugin_dir_url( __FILE__ ) . 'assets/js/owl.carousel.min.js', array('jquery'), '20120206', true);
}
add_action('wp_enqueue_scripts', 'asif_toolkit_files');
