<?php
	$prevPost = get_previous_post(true);
	$nextPost = get_next_post(true);
?>

    <?php $prevPost = get_previous_post(true);
        if($prevPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $prevPost->ID
            );
            $prevPost = get_posts($args);
            foreach ($prevPost as $post) {
                setup_postdata($post);
    ?>
    <nav class="single-post-nav clearfix">
        <div class="post-previous">
             <a class="previous button green" href="<?php the_permalink(); ?>"><i class="fa fa-arrow-left"></i> Previous Article</a>
        </div> <!-- /.post-previous-->
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
    ?>
        <a href="" class="button green">Back to news</a>
    <?php
        $nextPost = get_next_post(true);
        if($nextPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $nextPost->ID
            );
            $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
                setup_postdata($post);
    ?>
        <div class="post-next">

            <a class="previous button green" href="<?php the_permalink(); ?>">Next Article <i class="fa fa-arrow-right"></i></a>
        </div> <!-- /.post-next -->
    </nav> <!-- /.single-post-nav -->
    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
    ?>
