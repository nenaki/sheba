<?php

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {

	$prefix = '_add_';

	include_once('inc/_video-hero-meta.php');
	include_once('inc/_hero-meta.php');
	include_once('inc/_about-hero-meta.php');


	return $meta_boxes;
}
