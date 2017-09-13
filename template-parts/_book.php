<?php
    $title_book = get_field('title_book');
    $colour_picker_book = get_field('colour_picker_book');
    $colour_font_book = get_field('colour_font_book');

?>
 
       
<div class="col-md-6 text-center cf book_menu" style="background:<?php the_field('colour_picker_book') ?>; color:<?php the_field('colour_font_book') ?>">
    <div class="mesi">   
        <h4><?php the_field('title_book') ?></h4>
   
        <div class="col-md-12 book-1" id="book-display1">
            <?php
                        // check if the repeater field has rows of data
                        if( have_rows('book_posts') ):?>
                           <?php  while ( have_rows('book_posts') ) : the_row();?>
                                        <div class="p_spaces">
                                          <?php  the_sub_field('text_book');?>
                                        </div>
                            <?php $x++; endwhile; else : ?>
                            <style type="text/css">#book-display1{
                            display:none;
                            }</style>
            <?php  endif; ?>
         </div>

        <div class="col-md-12" id="book-2" >


           <?php
                    // check if the repeater field has rows of data
                    if( have_rows('social_media_icons') ):?>
                        

                       <?php  while ( have_rows('social_media_icons') ) : the_row();?>

                            <div class="book_links">
                                 
                                      <a href="
                                      <?php the_sub_field('link_sm_icon');?>" target="_blank" ?>
                                      <img src="<?php  the_sub_field('image_sm_icon');?>" alt="">
                                      
                                      </a>
                              </div>    
                            
                        <?php $x++; endwhile; else : ?>
                            <style type="text/css">#book-2{
                            display:none;
                            }</style>
                         

            <?php  endif; ?>
        </div> 

        <div class="col-md-12 book-1" id="book-display2">


            <?php
                    // check if the repeater field has rows of data
                    if( have_rows('book_posts_second') ):?>
                       <?php  while ( have_rows('book_posts_second') ) : the_row();?>

                                      <?php  the_sub_field('text_book_second');?>

                        <?php $x++; endwhile; else : ?>
                            <style type="text/css">#book-display2{
                            display:none;
                            }</style>
            <?php  endif; ?>
        </div>
        
        <div class="col-md-12 book-1" id="book_link_text">
        
               
                 <?php
                // check if the repeater field has rows of data
                if( have_rows('button_links_sm') ):?>
                    
         
                   <?php  while ( have_rows('button_links_sm') ) : the_row();?>
                       <?php $count++?>
                   <?php endwhile;?>
                       
                       
                        <?php if ($count == 1) {
                        $widthclass = ' col-sm-12 col-md-12';
                        }
                        else if ($count % 2 == 0) {
                         $widthclass = 'col-sm-6 col-md-6';   
                        }
                        else if ($count % 2 == 1) {
                         $widthclass = 'col-sm-6 col-md-6';   
                        }
                        else {
                            $widthclass = 'col-sm-12 col-md-12';
                       }?>
                       

                       <?php $x=1;  while ( have_rows('button_links_sm') ) : the_row();?>

                            <?php if($x==$count && $count % 2 == 1)  { $widthclass = ' col-sm-12 col-md-12'; } ?>
                                

                           <?php if($colour_picker_book == "#fff") { ?>

                                         <style type="text/css">
                                             #book_link_text a{
                                                  border: 1px solid #000 !important;
                                             }
                                             #book_link_text a:hover{
                                                 color:#fff !important;
                                                 background: #512437 !important;
                                             }
                                             #book_link_text a:after{

                                                 background: #512437 !important;
                                             }
                                    </style>
                                    <?php } ?>
                                
                                
                                
                                
                                 <div class=" <?php echo $widthclass?> book_link_inline">
                                      <a href="
                                      <?php the_sub_field('link_button_links');?>" style="color:<?php the_field('colour_font_book') ?>">
                                      <?php  the_sub_field('text_button_links');?>
                                      </a>
                                  </div>
                           
                        <?php $x++; endwhile; else : ?>
                            <style type="text/css">#book_link_text{
                            display:none;
                            }</style>

            <?php  endif; ?>
            
         
        </div> 

    </div>      
</div>

