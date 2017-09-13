<?php 


/*
 * REGISTER FOOTER SIDEBAR
 *************************************************************/
if ( function_exists('register_sidebar') ){
	register_sidebar( array(
		'name' => 'Footer Newsletter',
		'id' => 'footer-newsletter',
		'description' => 'Newsletter form shortcode and title',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<small>',
		'after_title' => '</small>',
	) );

	register_sidebar( array(
		'name' => 'Footer Full Menu',
		'id' => 'footer-full-menu',
		'description' => 'Add the "Custom Menu Widget" and select the "Full Menu" from the dropdown menu. (To update this menu visit the admin Appearance/Menus page.)',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<small>',
		'after_title' => '</small>',
	) );

	register_sidebar( array(
		'name' => 'Footer About Menu',
		'id' => 'footer-about-menu',
		'description' => 'Add the "Custom Menu Widget" and select the "bout Menu" from the dropdown menu. (To update this menu visit the admin Appearance/Menus page.)',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<small>',
		'after_title' => '</small>',
	) );
}
 ?>