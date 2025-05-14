<?php
add_action( 'after_setup_theme', 'ps_theme_setup' );
function ps_theme_setup() {
    // WooCommerce
    add_theme_support( 'woocommerce' );
    // dynamiczny & bezpieczny <title>
    add_theme_support( 'title-tag' );
    // Obrazy wyróżniające
    add_theme_support( 'post-thumbnails' );
    // Menu główne
    register_nav_menu( 'primary', __( 'Menu Główne', 'prezentowy-swiat' ) );
}
add_action('wp_enqueue_scripts', function() {
    // Enqueue Tailwind CSS built file
    wp_enqueue_style('ps-main-style', get_template_directory_uri() . '/assets/css/dist.css', [], filemtime(get_template_directory() . '/assets/css/dist.css'));
});
