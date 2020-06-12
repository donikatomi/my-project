<?php 

require_once('wp_bootstrap_navwalker.php'); //registering Nav Walker class

function wpbootstrap_enqueue_styles() {  //including bootstrap, css and js files
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', '//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js', array('jquery'), true);
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/css/mystyle.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/myscript.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles'); 

function my_theme_setup() {
    add_theme_support( 'menus' );
    register_nav_menu( 'primary', 'Primary Header Navigation' );
}
add_action( 'init', 'my_theme_setup' );

?>