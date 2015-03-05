<?php



// Register custom navigation walker



require_once('navClass.php');



add_theme_support( 'post-thumbnails' ); 



// Disable Admin bar



show_admin_bar( FALSE ); 







	// Add RSS links to <head> section



automatic_feed_links();







	// Clean up the <head>



function removeHeadLinks() {



 remove_action('wp_head', 'rsd_link');



 remove_action('wp_head', 'wlwmanifest_link');



}



add_action('init', 'removeHeadLinks');



remove_action('wp_head', 'wp_generator');







	// Declare sidebar widget zone



if (function_exists('register_sidebar')) {



 register_sidebar(array(



  'name' => 'Sidebar Widgets',



  'id'   => 'sidebar-widgets',



  'description'   => 'These are widgets for the sidebar.',



  'before_widget' => '<div id="%1$s" class="widget %2$s">',



  'after_widget'  => '</div>',



  'before_title'  => '<h2>',



  'after_title'   => '</h2>'



  ));



}



if (function_exists('register_sidebar')) {



 register_sidebar(array(



  'name' => 'Home Left',



  'id'   => 'home-left',



  'description'   => 'These are widgets for the featured home left.',



  'before_widget' => '',



  'after_widget'  => '',



  'before_title'  => '',



  'after_title'   => ''



  ));



}



if (function_exists('register_sidebar')) {



 register_sidebar(array(



  'name' => 'Home Middle',



  'id'   => 'home-middle',



  'description'   => 'These are widgets for the featured home middle.',



  'before_widget' => '',



  'after_widget'  => '',



  'before_title'  => '',



  'after_title'   => ''



  ));



}



if (function_exists('register_sidebar')) {



 register_sidebar(array(



  'name' => 'Home Right',



  'id'   => 'home-right',



  'description'   => 'These are widgets for the featured home right.',



  'before_widget' => '',



  'after_widget'  => '',



  'before_title'  => '',



  'after_title'   => ''



  ));



}







    // Add in menus



function register_my_menus() {



  register_nav_menus(



    array(



      'header-menu' => __( 'Header Menu' )



      )



    );



}



add_action( 'init', 'register_my_menus' );





?>