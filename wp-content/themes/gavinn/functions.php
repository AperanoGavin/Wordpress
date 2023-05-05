<?php
function getTitle (){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support('menus');
    register_nav_menu('header', "C'est l'en tete du menu");
    register_nav_menu('footer', "En bas de la page");

};


function register_assets (){
    wp_deregister_script('jquery');
    wp_register_style('bootsrap' ,'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_register_script('bootsrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');
    wp_register_script('bootsrap_js2', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js');
    wp_register_script('bootsrap_js3', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js');
   
    wp_enqueue_style('bootsrap');
    wp_enqueue_script('bootsrap_js');
    wp_enqueue_script('bootsrap_js2');
    wp_enqueue_script('bootsrap_js3');

};

function title( $title){
    return '|';
}

function menu( array $class){
    
    $class[] = 'nav-item';
    return $class ;
}

function link_class( $attr){
    $attr['class'] = 'nav-link';
    return $attr ;
}


function connexion_first(){
    if( wp_get_current_user() === NULL) {
         wp_redirect("http://gavinaperano.com:81/connexion/");
            exit;
    }
}

add_action('after_setup_theme', 'getTitle');
add_action('wp_enqueue_scripts' , 'register_assets');

add_filter('document_title_separateur', 'title' );
add_filter('nav_menu_css_class', 'menu');
add_filter('nav_menu_link_attributes' , 'link_class');