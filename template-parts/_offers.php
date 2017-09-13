<?php
    
    $colour_picker_offers = get_field('colour_picker_offers');
    $colour_font_offers = get_field('colour_font_offers');
?>
          
<div class="col-sm-12 col-md-12 offers" id="anchor_offers" style="background:<?php the_field('colour_picker_offers') ?>; color:<?php the_field('colour_font_offers') ?>">
            
            
            
            <?php
                // check if the repeater field has rows of data
                if( have_rows('offers_posts') ):?>
                    
         
                   <?php  while ( have_rows('offers_posts') ) : the_row();?>
                       <?php $count++?>
                   <?php endwhile;?>
                       
                       
                        <?php if ($count == 1) {
                        $widthclass = 'col-md-12';
                        }
                        else if ($count == 2) {
                         $widthclass = 'col-md-6';   
                        }
                        else if ($count == 3) {
                         $widthclass = 'col-md-4';   
                        }
                        else if ($count == 4) {
                         $widthclass = 'col-md-3';   
                        }
                        else {
                            
                       }?>
                       


                   <?php  while ( have_rows('offers_posts') ) : the_row();?>

                            <div class="col-sm-6 <?php echo $widthclass?> offers_posts">
                                 <div class="olo">
                                      <h4><?php the_sub_field('title_offer');?></h4>
                                      <div class="p_offers">
                                      <?php  the_sub_field('text_offer');?>
                                      </div>

                                  </div>

                            </div>


                        <?php endwhile;?>
               <?php  endif; ?>
            

        </div>
