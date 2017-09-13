<?php
/*
 * REGISTER JQUERY PLUGGINS
 *************************************************************/

/**
 *  
 *  SMARTMENUS
 *  SLIDER
 *  POPUP
 *  CHOSEN (for select and multi select menus)
 *  
 */


function my_theme_scripts() {
    wp_enqueue_script( 'smart-menu', get_template_directory_uri() . '/js/smart-menu/jquery.smartmenus.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'bxslider', get_template_directory_uri() . '/js/bxslider/jquery.bxslider.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/magnific-popup/jquery.magnific-popup.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'chosen', get_template_directory_uri() . '/js/chosen/chosen.jquery.js', array( 'jquery' ), '1.0.0', true );


    wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/js/wp.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );


/**
 *  
 *  FONTAWESOME
 *  CHOSEN
 *  
 */
// Enque CSS
add_action( 'wp_enqueue_scripts', 'rtl_enqueue_awesome' );
function rtl_enqueue_awesome() {
	wp_enqueue_style( 'rtl-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
    wp_enqueue_style( 'chosen.jquery-css', get_template_directory_uri() . '/js/chosen/chosen.jquery.css', array(), '1.0.0' ); 
}


/**
 *  
 *  REQUIRE ADMIN CSS? UNCOMMENT AND ADD STYLES TO:
 *  
 */
/*
// Enque Admin CSS
add_action( 'admin_enqueue_scripts', 'rtl_admin_enqueue_awesome' );
function rtl_admin_enqueue_awesome() {
	wp_enqueue_style( 'rtl-font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
    wp_enqueue_style( 'admin-css', get_template_directory_uri() . '/admin-style.css', array(), '1.0.1' ); // Include the CSS for other metafields in the admin section
}

function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'admin-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
*/
 ?>