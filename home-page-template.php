<?php 
/*
Template Name: Home Template
*/
	/*
	 * add our custom body classes,
	 * these can be used to conditionally load scripts, styles etc...
	 * 
	 **************************************************************/
	add_action( 'body_class', 'add_my_bodyclass'); 
	function add_my_bodyclass( $classes ) {
		
		// each class requires a new $classes[] = '';
		$classes[] = 'ADD_CLASS'; 
		return $classes; 
	} 

?>

<?php get_header(); ?>

<?php
    $video_1 = get_field('video_1');
    
?>
<div class="container-fluid">

     <?php get_template_part( 'template-parts/_hero' ); ?>
     
     <div class="row table1">
         <?php get_template_part( 'template-parts/_block_left_1' ); ?>
         <?php get_template_part( 'template-parts/_right_1' ); ?>
    </div>

     
     <div class="row table1">
         <?php get_template_part( 'template-parts/_left_2' ); ?>
         <?php get_template_part( 'template-parts/_block_right_2' ); ?>
    </div>
     

     <?php if(!empty($video_1)) { ?> 
    <div class="row" id="video-row">
        <div class="col-md-12 embed-container text-center video">
            <div class="videoWrapper">
                <?php the_field('video_1') ?> 
            </div>
            
        </div>
    </div>
    <?php } 
    else { ?>
        <style type="text/css">.video, #video-row{
        display:none;
        }</style>
        <?php } ?>


    <?php get_template_part( 'template-parts/_reviews' ); ?>

    <?php get_template_part( 'template-parts/_book_button' ); ?>
    

</div>



<?php get_footer(); ?>


 