<?php
    $image_3 = get_field('image_3');
    $text_8 = get_field('text_8');
    $button_text_2 = get_field('button_text_2');
    $button_link_2 = get_field('button_link_2');
    $button_text_3 = get_field('button_text_3');
    $button_link_3 = get_field('button_link_3');
    $colour_picker_3 =  get_field('colour_picker_3');
    $colour_font_3 =  get_field('colour_font_3');
?>
 
  <div class="col-md-6 text-center cf padding-0 left-menu-2 " style="background:<?php the_field('colour_picker_3') ?>; color:<?php the_field('colour_font_3') ?>">
   
   
    <?php if(!empty($image_3)) { ?>
        <img class="img-responsive" id="image_3"  src="<?php the_field('image_3') ?>" alt="">
    <?php } 
    else { ?>
        <style type="text/css">#image_3{
        display:none;
        }</style>
        <?php } ?>
        
    <div class="padding-1">
    
        <?php if(!empty($text_8)) { ?>
            <div class="text-left p" id="p7-display"><?php the_field('text_8') ?> </div>
            <?php } 
        else { ?>
        <style type="text/css">#p7-display{
        display:none;
        }</style>
        <?php } ?>

        <ul class= "list-inline menu-a">

           <?php if(!empty($button_link_2) && !empty($button_text_2)) { ?>
                <li id="li-1"><a href="<?php the_field('button_link_2') ?>" id="a2-display"><?php the_field('button_text_2') ?>
                </a></li>
            <?php } 
            else { ?>
                <style type="text/css">#a2-display, #li-1 {
                display:none;
                }</style>
                <?php } ?>

            <?php if(!empty($button_link_3) && !empty($button_text_3)) { ?>
                <li id="li-2"><a href="<?php the_field('button_link_3') ?>" id="a3-display"><?php the_field('button_text_3') ?></a></li>
            <?php } 
            else { ?>
                <style type="text/css">#a3-display, #li-2 {
                display:none;
                }</style>
                <?php } ?>
                
           <?php if((empty($button_link_2) && empty($button_text_2)) && (empty($button_link_3) && empty($button_text_3)))  { ?> 
               <style type="text/css">.menu-a {
                    display:none;
                    }</style>
                    <?php } ?>

        </ul>
    </div>
</div>
