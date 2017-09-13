<?php
    $image_4 = get_field('image_4');
?>
  
   <?php if(!empty($image_4)) { ?>
        <div class="col-md-6 right-menu-2 padding-0 cf" id="left-1-div" style="background-image:url('<?php the_field('image_4') ?>') ">
        </div>
    <?php } 
    else { ?>
        <style type="text/css">#left-1-div{
        display:none;
        }</style>
        <?php } ?>


