<?php 
/*
Template Name: Menu Template
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
         <?php get_template_part( 'template-parts/_block_left_1' ); ?>
         <?php get_template_part( 'template-parts/_menu_row2' ); ?>
         
    </div>
    
     <div class="row table1 table1fix" >
         <?php get_template_part( 'template-parts/_block_right_2' ); ?>
         <div class="col-md-6 right-menu-2 padding-0 cf" style="background-image:url('<?php the_field('image_5') ?>');height:39em">
        </div>
     </div>
    
    <?php 
        $title_special_offers = get_field('title_special_offers');
        $small_title_so = get_field('small_title_so');
        $colour_picker_so = get_field('colour_picker_so');
        $colour_font_so = get_field('colour_font_so');
    ?>
    
    <div class="row special-o" style="background:<?php the_field('colour_picker_so') ?>; color:<?php the_field('colour_font_so') ?>">
        <div class="container"> 
            <div class="col-md-12 padding-0 text-center">
                <div style="background:<?php the_field('colour_picker_so') ?>;">
                        <h4><?php the_field('title_special_offers') ?></h4>
                        <h6><?php the_field('small_title_so') ?></h6>
                     
                </div>

            </div>
        </div>
    </div>
    
    <div class="row">
        <?php get_template_part( 'template-parts/_offers' ); ?>

    </div>
    

        <?php get_template_part( 'template-parts/_reviews' ); ?>

    <div class="row">
    <?php get_template_part( 'template-parts/_book_button' ); ?>
   </div> 
      

</div>



<?php get_footer(); ?>
