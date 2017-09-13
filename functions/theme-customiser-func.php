<?php

/*
 * 	ENABLE LOGO IN CUSTOMISER
 *************************************************************/
function mytheme_setup() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'mytheme_setup');


function your_theme_new_customizer_settings($wp_customize) {

	$wp_customize->add_section('footer_settings_section', array(
	  'title'          => 'Footer Section'
	 ));
	$wp_customize->add_setting('footer_logo');
	$wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize,'footer_logo',array(
	 'label'      => __('Footer Logo', 'mytheme'),
	 'section'    => 'footer_settings_section',
	 'settings'   => 'footer_logo',
	 'priority'		=> '5'
	 )));

	 $social_sites = theme_slug_get_social_sites();


	 foreach( $social_sites as $social_site ) {

	     $wp_customize->add_setting( "$social_site", array(
	         'type' => 'theme_mod',
	         'capability' => 'edit_theme_options',
	         'sanitize_callback' => 'esc_url_raw',
	     ));

	     $wp_customize->add_control( $social_site, array(
	         'label' => ucwords( __( "$social_site URL:", 'social_icon' ) ),
	         'section' => 'footer_settings_section',
	         'type' => 'text',

	     ));


	 }

}

add_action('customize_register', 'your_theme_new_customizer_settings');

 function theme_slug_get_social_sites() {

     // Store social site names in array
     $social_sites = array(
         // 'google-plus',
         // 'flickr',
         // 'pinterest',
         // 'youtube',
         // 'vimeo',
         // 'tumblr',
         // 'dribbble',
         // 'rss',
         // 'instagram',
         // 'email,'
         'twitter',
         'facebook',
         'linkedin'
     );
 return $social_sites; // SEE FUNCTIONS FOR "function theme_slug_show_social_icons()"
}
 ?>