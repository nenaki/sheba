<?php 
/*
Template Name: Reviews Template
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
    $button_text_more_reviews = get_field('button_text_more_reviews');
    $button_link_more_reviews = get_field('button_link_more_reviews');
    $colour_picker_more_reviews = get_field('colour_picker_more_reviews');
    $colour_font_more_reviews = get_field('colour_font_more_reviews');
    
?>
   
   
<div class="container-fluid">
         <?php get_template_part( 'template-parts/_hero' ); ?>

        <?php get_template_part( 'template-parts/_reviews' ); ?>

  
   
    <div class="row" id="tp" style="background:<?php the_field('colour_picker_more_reviews') ?>; color:<?php the_field('colour_font_more_reviews') ?>">
       <div class="container"> 
           <div class="col-md-12 text-center" id="trip_reviews">
          
               <?php if(!empty($button_link_more_reviews) && !empty($button_text_more_reviews)) { ?>
                    <a href="<?php the_field('button_link_more_reviews') ?> " target="_blank" id="a1_trip_reviews" style="color:<?php the_field('colour_font_more_reviews') ?>">
                         <?php the_field('button_text_more_reviews') ?> </a>
                <?php } 
                else { ?>
                    <style type="text/css">#a1_trip_reviews, #trip_reviews, #tp{
                    display:none;
                    }</style>
                    <?php } ?>
                    
                  <?php if($colour_picker_more_reviews == "#fff") { ?>
                                    
                                     <style type="text/css">
                                         #trip_reviews a{
                                              border: 1px solid #000 !important;
                                         }
                                         #trip_reviews a:hover{
                                             color:#fff !important;
                                             background: #512437;
                                         }
                                         #trip_reviews a:after{
                                             
                                             background: #512437;
                                         }
                                </style>
                                <?php } ?>
            </div>
        </div> 
    </div>
      
    
    
    
    <div class="row table1">
        <?php get_template_part( 'template-parts/_awards' ); ?>
        <?php get_template_part( 'template-parts/_press' ); ?>
    
    </div>
    
    <div class="row table1">
        <?php get_template_part( 'template-parts/_blog' ); ?>
        <?php get_template_part( 'template-parts/_block_right_2' ); ?>
    </div>
    


</div>

<?php get_footer(); ?>
