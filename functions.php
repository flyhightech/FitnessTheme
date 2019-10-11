<?php 

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

    //Google Fonts
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Roboto&display=swap', array(), '1.0.0');

    // Main Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googlefont'), '1.0.0');

}

add_action('wp_enqueue_scripts', 'gymfitness_scripts');
