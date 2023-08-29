<?php 
//LOAD SCRIPTS
function enqueue_bkc_scripts() {
    wp_enqueue_script('font-awesome-5', 'https://kit.fontawesome.com/dd00380525.js', false, null, null, false);
    wp_enqueue_script('Bootstrap-5.3.1', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script('font-awesome-5', 'https://kit.fontawesome.com/42219cbebc.js', false, null, null, false);
    wp_enqueue_script('bkc-scripts', get_template_directory_uri() . '/assets/js/bkcScripts.min.js', array('jquery'), null, true, null);
}
add_action('wp_enqueue_scripts', 'enqueue_bkc_scripts');

//LOAD CSS
function enqueue_bkc_styles() {
    wp_enqueue_style('bootstrap-5.3.1', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('bkc-styles', get_template_directory_uri() . '/assets/styles/bkcStyles.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display&family=Raleway&display=swap');
}
add_action('wp_enqueue_scripts', 'enqueue_bkc_styles');

// Register Custom Navigation Walker
require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'dmi-theme' ),
    'secondary_menu' => __('Secondary Menu', 'dmi-theme'),
    'footer_menu' => __( 'Footer Menu', 'dmi-theme'),  
));

