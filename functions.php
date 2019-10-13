<?php 

// Link to the queries file

require get_template_directory() . '/inc/queries.php';

// Creates the menues

function gymfitness_menus() {

    //Wordpress Function
    register_nav_menus( array(
        'main-menu' => 'Main Menu',
        'social-menu' => 'Social Menu'
    ) );
}

// Hook

add_action('init', 'gymfitness_menus');

// Stylesheets and scripts 

function gymfitness_scripts() {

    // Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    // Google Fonts
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Roboto&display=swap', array(), '1.0.0');

    // Slicknav CSS 
    wp_enqueue_style('slicknavcss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

    // Main Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0');

    wp_enqueue_script('jquery');

    // Load JS Files 
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'gymfitness_scripts');

// Enable feature image and other elements 

function gymfitness_setup() {

    // Register new image size 

    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 644, true);

    // Add feature image 

    add_theme_support('post-thumbnails');
}

// When the theme is activated and ready this runs

add_action('after_setup_theme', 'gymfitness_setup'); 

// Creates a widget zone

function gymfitness_widgets() {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'   => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>' 
    ));
}

add_action('widgets_init', 'gymfitness_widgets');