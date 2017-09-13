<?php
    $text_5 = get_field('text_5');
    $button_text_1 = get_field('button_text_1');
    $button_link_1 = get_field('button_link_1');
    $text_6 = get_field('text_6');
    $colour_picker_2 = get_field('colour_picker_2');
    $colour_font_2= get_field('colour_font_2');

?>
   

<div class="col-md-6 text-center r-m-1 cf" style="background:<?php the_field('colour_picker_2') ?>; color:<?php the_field('colour_font_2') ?>">
 
  
   <?php if( !empty($text_5) ) { ?>
        <h4 id="h4_2-display"><?php the_field('text_5') ?></h4>
    <?php } 
    else { ?>
        <style type="text/css">#h4_2-display{
        display:none;
        }</style>
        <?php } ?>
   
   
    <div id="right-1-div">
    
    <?php if(!empty($button_link_1) && !empty($button_text_1)) { ?>
        <a id="a1-display" href="<?php the_field('button_link_1') ?>"><?php the_field('button_text_1') ?></a>
        <?php } 
    else { ?>
        <style type="text/css">#a1-display, #right-1-div{
        display:none;
        }</style>
        <?php } ?>
        
    </div>
    
    <div id="right-2-div">
    
    <?php if(!empty($text_6)) { ?>
        <div class="text-left p" id="p5-display"><?php the_field('text_6') ?></div>
        <?php } 
    else { ?>
        <style type="text/css">#p5-display{
        display:none;
        }</style>
        <?php } ?>
        
    </div>
</div>

