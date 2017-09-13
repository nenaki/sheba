<?php 
/*
Template Name: Book Template
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
   
<div class="container-fluid">
     <?php get_template_part( 'template-parts/_hero' ); ?>
     
     <div class="row table1">
         <?php get_template_part( 'template-parts/_book' ); ?>
         <?php get_template_part( 'template-parts/_block_left_2' ); ?>
    </div>

       <?php get_template_part( 'template-parts/_reviews' ); ?>


</div>



<?php get_footer(); ?>