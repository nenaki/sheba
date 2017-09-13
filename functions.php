<?php
// Metabox
/**
 *
 * Metabox.io documentation : https://metabox.io/docs/
 * Metabox.io demo.php file : https://github.com/rilwis/meta-box/blob/master/demo/demo.php
 *
 */

// include ('metabox/metaboxes.php');

// Post Types

// Order the admin menu
// include ('functions/order-posts-func.php');


// Other funcs
// include ('functions/move-wp-editor-func.php');
include ('functions/thumbnails-func.php');
include ('functions/theme-customiser-func.php');
include ('functions/enque-func.php');
include ('functions/popular-posts-func.php');
include ('functions/pagination-func.php');
include ('functions/sidebar-func.php');




/*
 * REGISTER NAVIATION MENUS
 *************************************************************/
function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );








/*
 * REMOVE WIDTH AND HEIGHT ON IMAGES
 *************************************************************/
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


/*
 * ADD CATEGORY AND PAGE TITLE TO PAGES AS CLASSES
 * ALLOWS US TO STYLE PAGES BY CATEGORY...
 *************************************************************/
function add_slug_body_class( $classes ) {

	// Grab the page title
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}

	// Grab the category
	if ( is_single() && !is_front_page() && !is_home() )
		return $classes;
	$post_categories = get_the_category();
	foreach( $post_categories as $current_category ) {
		$classes[] =  $current_category->slug;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );





/*
 * 	NOFOLLOW EXTERNAL LINKS
 *************************************************************/
add_filter('the_content', 'my_nofollow');
add_filter('the_excerpt', 'my_nofollow');
function my_nofollow($content) {
    return preg_replace_callback('/<a[^>]+/', 'my_nofollow_callback', $content);
}
function my_nofollow_callback($matches) {
    $link = $matches[0];
    $site_link = get_bloginfo('url');
    if (strpos($link, 'rel') === false) {
        $link = preg_replace("%(href=\S(?!$site_link))%i", 'rel="nofollow" $1', $link);
    } elseif (preg_match("%href=\S(?!$site_link)%i", $link)) {
        $link = preg_replace('/rel=\S(?!nofollow)\S*/i', 'rel="nofollow"', $link);
    }
    return $link;
}



/*
 * 	SHOW SOCIAL MEDIA 
 **  See functions/theme-customiser-func.php
 *************************************************************/
function theme_slug_show_social_icons() {

     $social_sites = theme_slug_get_social_sites();

     // Any inputs that aren't empty are stored in $active_sites array
     foreach( $social_sites as $social_site ) {
         if ( strlen( get_theme_mod( $social_site ) ) > 0 ) {
             $active_sites[] = $social_site;
         }
     }

     // For each active social site, add it as a list item
     if ( !empty( $active_sites ) ) {
         echo "<ul class='social-media-icons'>";

         foreach ( $active_sites as $active_site ) { ?>

             <li>
             <a href="<?php echo get_theme_mod( $active_site ); ?>">
             <?php if( $active_site == 'vimeo' ) { ?>
                 <i class="fa fa-<?php echo $active_site; ?>-square"></i> <?php
             } else if( $active_site == 'email' ) { ?>
                 <i class="fa fa-envelope"></i> <?php
             } else { ?>
                 <i class="fa fa-<?php echo $active_site; ?>"></i> <?php
             } ?>
             </a>
             </li> <?php
         }
         echo "</ul>";
     }
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}