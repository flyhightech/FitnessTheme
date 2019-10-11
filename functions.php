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
    
}
