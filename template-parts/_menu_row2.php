<?php
    $title_menu_1 = get_field('title_menu_1');
    $menu_link_1 = get_field('menu_link_1');
    $menu_text_1 = get_field('menu_text_1');
    $header_colour_picker_1 = get_field('header_colour_picker_1');
    $header_colour_font_1 = get_field('header_colour_font_1');
    $title_menu_2 = get_field('title_menu_2');
    $menu_link_2 = get_field('menu_link_2');
    $menu_text_2 = get_field('menu_text_2');
    $header_colour_picker_2 = get_field('header_colour_picker_2');
    $header_colour_font_2 = get_field('header_colour_font_2');



?>
   
    

    
<div class="col-md-6 text-center r-m-3 cf">

   <?php if(!empty($title_menu_1) && !empty($menu_link_1) && !empty($menu_text_1)) { ?>
        <div id="deksi-1" style="background:<?php the_field('header_colour_picker_1') ?>; color:<?php the_field('header_colour_font_1') ?>">

            <h4><?php the_field('title_menu_1') ?></h4> 

            <div>
                <a href="<?php the_field('menu_link_1') ?>" target="_blank"><?php the_field('menu_text_1') ?></a>
            </div>
        </div>
    <?php } 
        else { ?>
            <style type="text/css">
                #deksi-1 a, #deksi-1 h4, #deksi-1 {
                display:none;
                }
                .r-m-3{
                    background: <?php the_field('header_colour_picker_2') ?>;
                }
                #deksi-2{
                    padding: 100px 0;
                }
    
            </style>
        <?php } ?>

       
    <?php if(!empty($title_menu_2) && !empty($menu_link_2) && !empty($menu_text_2)) { ?>   
        <div id="deksi-2" style="background:<?php the_field('header_colour_picker_2') ?>; color:<?php the_field('header_colour_font_2') ?>">

            <h4><?php the_field('title_menu_2') ?></h4>

            <div>
                <a href="<?php the_field('menu_link_2') ?>" target="_blank"><?php the_field('menu_text_2') ?></a>
            </div>
        </div>
       <?php } 
        else { ?>
            <style type="text/css">
                #deksi-2 a, #deksi-2 h4, #deksi-2 {
                display:none;
                }
                .r-m-3{
                    background: <?php the_field('header_colour_picker_1') ?>;
                }
                #deksi-1{
                    padding: 100px 0;
                }
    
            </style>
        <?php } ?>


</div>



