<?php
    $image_title_left = get_field('image_title_left');
    $colour_picker_3 =  get_field('colour_picker_3');
    $colour_font_3 =  get_field('colour_font_3');
?>
 
  <div class="col-md-6 text-center cf padding-0 left-menu-2 " style="background:<?php the_field('colour_picker_3') ?>; color:<?php the_field('colour_font_3') ?>">
   

        
    
      
             <?php if(!empty($image_title_left)) { ?>
                <img class="img-responsive" id="image_3"  src="<?php echo $image_title_left; ?>" alt="">
            <?php } 
            else { ?>
                <style type="text/css">#image_3
                display:none;
                }</style>
                <?php } ?>   
                
                <div class="mesi">

                    <div class="left_2-1">
                    <?php
                            // check if the repeater field has rows of data
                            if( have_rows('text_left_2') ):?>


                               <?php  while ( have_rows('text_left_2') ) : the_row();?>

                                         <div class="text_p">
                                              <?php  the_sub_field('text_8_8');?>

                                          </div>
                                <?php endwhile; else : ?>

                                <style type="text/css">.left_2-1{
                                display:none;
                                }</style>

                            <?php  endif; ?>
                        </div>                
                    <ul class= "list-inline menu-a">

                        <?php
                            // check if the repeater field has rows of data
                            if( have_rows('links_left_2') ):?>


                               <?php  while ( have_rows('links_left_2') ) : the_row();?>
                                    
                                    <?php if($colour_picker_3 == "#fff") { ?>
                                    
                                     <style type="text/css">
                                         .menu-a a{
                                              border: 1px solid #000 !important;
                                         }
                                         .menu-a a:hover{
                                             color:#fff !important;
                                             background: #512437;
                                         }
                                         .menu-a a:after{
                                             
                                             background: #512437;
                                         }
                                </style>
                                <?php } ?>

                                    
                                    
                                    <li>
                                         <div>
                                               <a href="
                                              <?php the_sub_field('text_link');?>" style="color:<?php the_field('colour_font_3') ?>">
                                              <?php  the_sub_field('text');?>
                                              </a>

                                          </div>
                                    </li>
                                <?php endwhile; else : ?>
                                
                                <style type="text/css">.menu-a{
                                display:none;
                                }</style>


                            <?php  endif; ?>


                    </ul>

                </div>
</div>
