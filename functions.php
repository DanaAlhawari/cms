<?php
// adderar funktioner för att hämta stylesheets

function load_stylesheets() {
wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'load_stylesheets');
// adderar en menu

function register_my_menus() {
register_nav_menus(
array(
    'header-resturang-menu' => __( 'Header-Resturang-Menu' )
    )
);
}
add_action( 'init', 'register_my_menus' );

//adderar google font
function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb_google-fonts',
    'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap', false );
   }
   add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// lägger till feature imag
add_theme_support( 'post-thumbnails' ); 

//adderar sidebars

function local_register_sidebars() {
   register_sidebar(   
   array(   
   'id' => 'gallery',   
   'name' => __( 'Gallery Front Page' ),  
   'description' => __( 'Gallery.' ),   
   'before_widget' => '<div id="%1$s" class="gallery">',  
   'after_widget' => '</div>',  
   'before_title' => '<h3 class="widget-title">',   
   'after_title' => '</h3>'   
       )
   
    );
    register_sidebar(   
        array(   
        'id' => 'footer',   
        'name' => __( 'Footer' ),  
        'description' => __( 'Footer.' ),   
        'before_widget' => '<div id="%1$s" class="footer">',  
        'after_widget' => '</div>',  
        'before_title' => '<h3 class="widget-title">',   
        'after_title' => '</h3>'   
            )
        
         );
         register_sidebar(   
            array(   
            'id' => 'about',   
            'name' => __( 'About' ),  
            'description' => __( 'About.' ),   
            'before_widget' => '<div id="%1$s" class="about">',  
            'after_widget' => '</div>',  
            'before_title' => '<h3 class="widget-title">',   
            'after_title' => '</h3>'   
                )
            
             );
}
add_action( 'widgets_init','local_register_sidebars');

?>