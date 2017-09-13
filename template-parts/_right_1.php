<?php
    $title_right_1_home = get_field('title_right_1_home');
    $colour_picker_right_1_home = get_field('colour_picker_right_1_home');
    $colour_font_right_1_home = get_field('colour_font_right_1_home');
?>



<div class="col-md-6 text-center r_section_1 cf" style="background:<?php the_field('colour_picker_right_1_home') ?>; color:<?php the_field('colour_font_right_1_home') ?>">
    <div class="mesi">
        <h4><?php the_field('title_right_1_home') ?></h4>
       
        <div class="col-md-12" id="right_1">
        <?php
                // check if the repeater field has rows of data
                if( have_rows('info_text_1') ):?>
                    

                   <?php  while ( have_rows('info_text_1') ) : the_row();?>
                                <div class="col-md-12">
                                <p> <?php  the_sub_field('text');?> </p> 
                                </div>
       
                    <?php endwhile; else : ?>

                        <style type="text/css">#right_1{
                        display:none;
                        }</style>

        <?php  endif; ?>
        </div>

        <div class="col-md-12" id="right_2">

        <?php
                    // check if the repeater field has rows of data, if not display:none
                if( have_rows('info_links') ):?> 
                     
                     <?php  while ( have_rows('info_links') ) : the_row();?>
                       <?php $count++?>
                     <?php endwhile;?>
                       
                       
                        <?php if ($count == 1) {
                        $widthclass = 'col-md-12';
                        }
                        else if ($count % 2 == 0) {
                         $widthclass = 'col-md-6';   
                        }
                        else if ($count % 2 == 1) {
                         $widthclass = 'col-md-6';   
                        }
                        else {
                            $widthclass = 'col-md-12';
                       }?>
                       

                   <?php $x=1; while ( have_rows('info_links') ) : the_row();?>
                        
                             <?php if($x==$count && $count % 2 == 1)  { $widthclass = ' col-md-12'; } ?>
                               
                            <?php if($colour_picker_right_1_home == "#fff") { ?>
                                    
                                     <style type="text/css">
                                         #links a{
                                              border: 1px solid #000 !important;
                                         }
                                         #links a:hover{
                                             color:#fff !important;
                                             background: #512437;
                                         }
                                         #links a:after{
                                             
                                             background: #512437;
                                         }
                                </style>
                                <?php } ?>
                                        
                                  <div  class="<?php echo $widthclass?>" id="links">
                                      <a href="
                                      <?php the_sub_field('text_info_link');?> " style="color:<?php the_field('colour_font_right_1_home') ?>">
                                      <?php  the_sub_field('text_info');?>
                                      </a>
                                  </div>
                        
                     
                    <?php $x++; endwhile; else : ?>

                        <style type="text/css">#right_2{
                        display:none;
                        }</style>

        <?php  endif; ?>
        </div> 

        <div class="col-md-12" id="right_3">
        <?php
                // check if the repeater field has rows of data
                if( have_rows('info_text_2') ):?>
                    

                   <?php  while ( have_rows('info_text_2') ) : the_row();?>
                                <div class="col-md-12">
                                <p> <?php  the_sub_field('text');?> </p> 
                                </div>
       
                    <?php endwhile; else : ?>

                        <style type="text/css">#right_3{
                        display:none;
                        }</style>

               <?php  endif; ?>
        </div>
    </div>
</div>