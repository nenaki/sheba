<?php
    $title_blog = get_field('title_blog');
    $blog_main = get_field('blog_main');
    $blog_main_link= get_field('blog_main_link');
    $colour_picker_blog = get_field('colour_picker_blog');
    $colour_font_blog = get_field('colour_font_blog');
?>
          
<div class="col-md-6 blogs text-center" style="background:<?php the_field('colour_picker_blog') ?>; color:<?php the_field('colour_font_blog') ?>">
            
            <h4><?php the_field('title_blog') ?></h4>
            
            <?php
                // check if the repeater field has rows of data
                if( have_rows('blog_posts') ):?>
                   
                   <?php  while ( have_rows('blog_posts') ) : the_row();?>
                       <?php $count++?>
                     <?php endwhile;?>
                     
                     <?php if ($count == 1) {
                        $widthclass = 'col-sm-12 col-md-12';
                        }
                        else if ($count % 2 == 0) {
                         $widthclass = 'col-sm-12 col-md-6';   
                        }
                        else if ($count % 2 == 1) {
                         $widthclass = 'col-sm-12 col-md-6';   
                        }
                        else {
                            $widthclass = 'col-sm-12 col-md-12';
                       }?>
                       
                   

                   <?php $x=1; while ( have_rows('blog_posts') ) : the_row();?>
                    
                        <?php if($x==$count && $count % 2 == 1)  { $widthclass = 'col-sm-12 col-md-12'; } ?>
                         
                         <?php if($colour_picker_blog == "#fff") { ?>
                                    
                                     <style type="text/css">
                                         #blog_links a, #in-touch a{
                                              border: 1px solid #000 !important;
                                         }
                                         #blog_links a:hover, #in-touch a:hover{
                                             color:#fff !important;
                                             background: #512437 !important;
                                         }
                                         #blog_links a:after,#in-touch a:after{
                                             
                                             background: #512437 !important;
                                         }
                                </style>
                                <?php } ?> 
         
                             <div class=" <?php echo $widthclass?>" id="blog_links">
                                  <a href="
                                  <?php the_sub_field('blog_link');?>" target="_blank" style="color:<?php the_field('colour_font_blog') ?>">
                                  <?php  the_sub_field('blog');?>
                                  </a>
                            </div>

                   
                    <?php $x++;  endwhile;?>
                        
               <?php  endif; ?>
            
            
               
                <div id="in-touch">

                         
                <a href="<?php the_field('blog_main_link') ?>" style="color:<?php the_field('colour_font_blog') ?>">
                    <?php the_field('blog_main') ?>
                </a>
            </div>
        </div>
