<?php
    $text_1 = get_field('text_1');
    $text_2 = get_field('text_2');
    $image_1 = get_field('image_1');
    $text_3 = get_field('text_3');
    $text_4 = get_field('text_4');
    $image_2 =  get_field('image_2');
    $colour_picker_1 =  get_field('colour_picker_1');
    $colour_font_1 =  get_field('colour_font_1');
?>
   

<div class=" col-md-6 text-center cf l-m-1" style="background:<?php the_field('colour_picker_1') ?>; color:<?php the_field('colour_font_1') ?>">
   
    <?php if(!empty($text_1)) { ?>
        <h4 id="h4_1-display"><?php echo $text_1; ?></h4>
    <?php } 
    else { ?>
        <style type="text/css">#h4_1-display{
        display:none;
        }</style>
        <?php } ?>
        
    <div id="left-1-div">
       
       
        <?php if(!empty($text_2)) { ?>
            <div class="d-block " id="p1-display"><?php echo $text_2; ?></div>
        <?php } 
        else { ?>
            <style type="text/css">#p1-display{
            display:none;
            }</style>
            <?php } ?>
        
        <?php if(!empty($image_1)) { ?>
            <img class="img-respsonsive" id="cobra1" src="<?php echo $image_1; ?>" 
        alt="">
        <?php } 
        else { ?>
            <style type="text/css">#cobra1{
            display:none;
            }</style>
            <?php } ?>
        
    </div>
    
    <div id="left-2-div">
       
        <?php if(!empty($text_3)) { ?>
        <div class="d-block" id="p2-display"><?php echo $text_3; ?></div>
        <?php } 
        else { ?>
            <style type="text/css">#p2-display{
            display:none;
            }</style>
            <?php } ?>
        
        <?php if(!empty($text_4)) { ?>
        <div class="d-block ligther " id="p3-display"><?php echo $text_4; ?></div>
        <?php } 
        else { ?>
            <style type="text/css">#p3-display{
            display:none;
            }</style>
            <?php } ?>
        
        <?php if(!empty($image_2)) { ?>
        <img class="img-respsonsive" id="curry1" src="<?php echo $image_2; ?>" alt="">
        <?php } 
        else { ?>
            <style type="text/css">#curry1{
            display:none;
            }</style>
            <?php } ?>
    </div>
</div>


