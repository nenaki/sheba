<?php
/**
 *
 * Using this to add popular posts to the blog sidebar (if needed)
 * https://digwp.com/2016/03/diy-popular-posts/
 *
 */

function rtl_popular_posts($post_id) {
	$count_key = 'popular_posts';
	$count = get_post_meta($post_id, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($post_id, $count_key);
		add_post_meta($post_id, $count_key, '0');
	} else {
		$count++;
		update_post_meta($post_id, $count_key, $count);
	}
}
function rtl_track_posts($post_id) {
	if (!is_single()) return;
	if (empty($post_id)) {
		global $post;
		$post_id = $post->ID;
	}
	rtl_popular_posts($post_id);
}
add_action('wp_head', 'rtl_track_posts');
?>