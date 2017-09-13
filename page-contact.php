<?php 
/*
Template Name: Contact Template
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
<?php
    $contact_form_title = get_field('contact_form_title');
    $contact_find_us_text = get_field('contact_find_us_text');
    $colour_picker_find_us = get_field('colour_picker_find_us');
    $colour_font_find_us = get_field('colour_font_find_us');
?>

<?php get_header(); ?>
   
<div class="container-fluid">
     <?php get_template_part( 'template-parts/_hero' ); ?>
     
     <div class="row table1">
         <?php get_template_part( 'template-parts/_contact_info' ); ?>
         
         <div class="col-md-6 contact-form" style="background:<?php the_field('colour_picker_contact_1') ?>; color:<?php the_field('colour_font_contact_1') ?>">
                  
                   <div class="mesi1">

                        <?php if(!empty($contact_form_title)) { ?>
                           <h4 id="h4_contact_form_1"><?php the_field('contact_form_title') ?></h4>
                         <?php } 
                         else { ?>
                            <style type="text/css">#h4_contact_form_1{
                            display:none;
                            }</style>
                            <?php } ?>   
                            
                        <?php echo do_shortcode('[contact-form-7 id="280" title="Contact form 1"]'); ?>
                    
                   </div>
         </div>
    </div>

    <div class="row" id="find-us" style="background:<?php the_field('colour_picker_find_us') ?>; color:<?php the_field('colour_font_find_us') ?>">
        <div class="container"> 
            <div class="col-md-12 padding-0">
                <div id="find-us"  style="background:<?php the_field('colour_picker_find_us') ?>;">
                  
                   
                        <h4><?php the_field('contact_find_us_text') ?></h4> 
                </div>

            </div>
        </div>
    </div>
  
   
    <div class="row">
        <div class="col-md-12 map">
                <?php echo do_shortcode('[wpgmza id="1"]'); ?>
            
        </div>
   </div> 
      

</div>



<?php get_footer(); ?>
