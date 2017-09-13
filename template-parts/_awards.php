<?php
    $title_awards = get_field('title_awards');
    $colour_picker_awards = get_field('colour_picker_awards');
    $colour_font_awards = get_field('colour_font_awards');
?>
          

          
<div class="col-md-6 cf awards_reviews" style="background:<?php the_field('colour_picker_awards') ?>; color:<?php the_field('colour_font_awards') ?>">
           <div class="mesi">
                <h4><?php the_field('title_awards') ?></h4>
                
                <?php
                // check if the repeater field has rows of data
                if( have_rows('awards_posts') ):?>
                    <ul>

                   <?php  while ( have_rows('awards_posts') ) : the_row();?>

                        <li>
                             <div>
                                  <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/awards_icon.png" alt="">
                                  <?php  the_sub_field('award');?>
                                  
                              </div>
                        </li>

                    <?php endwhile;?>
                        </ul>

               <?php  endif; ?>
   
            </div>
</div>
        
       