<?php
    $title_contact = get_field('title_contact');

    $text_contact_4 = get_field('text_contact_4');
    $button_text_contact_1 = get_field('button_text_contact_1');
    $button_link_contact_1 = get_field('button_link_contact_1');

    $colour_picker_contact_info = get_field('colour_picker_contact_info');
    $colour_font_contact_info = get_field('colour_font_contact_info');
?>


 <div class="col-md-6 info-menu text-center cf " style="background:<?php the_field('colour_picker_contact_info') ?>; color:<?php the_field('colour_font_contact_info') ?>" >
            <div class="mesi">
                    
                
                     <h4><?php the_field('title_contact') ?> </h4>
                

                     <div class="contact_spaces">
                                   <?php
                                // check if the repeater field has rows of data
                                if( have_rows('text_contact_1') ):?>


                                   <?php  while ( have_rows('text_contact_1') ) : the_row();?>

                                        <div class="contact-1">

                                                  
                                                  <?php the_sub_field('text_contact_1Repeater');?>
                                                  
                                          </div>    

                                    <?php endwhile;?>


                                <?php  endif; ?>
                       </div>
                       
                       
                       <?php if($colour_picker_contact_info == "#fff") { ?>
                                    
                                     <style type="text/css">
                                         #info-1 a{
                                              border: 1px solid #000 !important;
                                         }
                                         #info-1 a:hover{
                                             color:#fff !important;
                                             background: #512437 !important;
                                         }
                                         #info-1 a:after{
                                             
                                             background: #512437 !important;
                                         }
                                </style>
                                <?php } ?>
                       
                       
                       <div id="info-1">
                                   <?php if(!empty($text_contact_4)) { ?>        
                                     <p id="info-p"><?php the_field('text_contact_4') ?></p>
                                   <?php } 
                                    else { ?>
                                        <style type="text/css">#info-p{
                                        display:none;
                                        }</style>
                                        <?php } ?>  
                                
                                 
                                
                                 <?php if((!empty($button_link_contact_1)) && (!empty($button_text_contact_1))) { ?> 
                                     <a href="<?php the_field('button_link_contact_1') ?> " id="a1_contact" style="color:<?php the_field('colour_font_contact_info') ?>">
                                     <?php the_field('button_text_contact_1') ?> </a>
                                  <?php } 
                                  else { ?>
                                        <style type="text/css">#a1_contact{
                                        display:none;
                                        }</style>
                                        <?php } ?>
                         
                                 
                                 
                     </div>
                     
                     <div class="contact_spaces">
                                 <?php
                                // check if the repeater field has rows of data
                                if( have_rows('text_contact_2') ):?>


                                   <?php  while ( have_rows('text_contact_2') ) : the_row();?>

                                        <div class="">

                                                <div class="contact-1">  
                                                  <?php the_sub_field('text_contact_2Repeater');?>
                                                  </div>  
                                          </div>    

                                    <?php endwhile;?>


                                <?php  endif; ?>
                     </div>
                    <div class="contact_spaces">
                              <?php
                                    // check if the repeater field has rows of data
                                    if( have_rows('info_address_call') ):?>


                                       <?php  while ( have_rows('info_address_call') ) : the_row();?>

                                            <div class="contact-2">


                                                     <h5><?php the_sub_field('title_info');?></h5>
                                                     <?php the_sub_field('text_info');?>


                                              </div>    

                                        <?php endwhile;?>


                                    <?php  endif; ?>
                     </div>
                     
                     <div class="contact_spaces">
                             <?php
                                // check if the repeater field has rows of data
                                if( have_rows('text_contact_3') ):?>


                                   <?php  while ( have_rows('text_contact_3') ) : the_row();?>

                                        <div class="">

                                                  
                                                  <?php the_sub_field('text_contact_3Repeater');?>
                                                  
                                          </div>    

                                    <?php endwhile;?>


                                <?php  endif; ?>
                     </div>
                   
                </div>

         </div>
         
        
       
 