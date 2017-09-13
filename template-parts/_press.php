<?php
    $title_awards = get_field('title_press');
    $colour_picker_awards = get_field('colour_picker_press');
    $colour_font_awards = get_field('colour_font_press');

?>
          

<div class="col-md-6 press text-center" style="background:<?php the_field('colour_picker_press') ?>; color:<?php the_field('colour_font_press') ?>">
        <div class="mesi">
           
            <h4><?php the_field('title_press') ?></h4>
            
            
            <?php
                // check if the repeater field has rows of data
                if( have_rows('press_posts') ):?>
                    <ul>

                   <?php  while ( have_rows('press_posts') ) : the_row();?>

                        <li>
                             <p>
                                  <?php  the_sub_field('press');?>
                                
                            </p>
                        </li>

                    <?php endwhile;?>
                        </ul>

               <?php  endif; ?>

        </div>
</div>