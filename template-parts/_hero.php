<?php 

$small_title = get_field('small_title');
$banner_image_1 = get_field('banner_image_1');

?>


        <div class="row ">
             <div class="col-md-12 padding-0 dis-table banner" style="background-image:url('<?php the_field('banner_image') ?>'); color:<?php the_field('banner_colour_font') ?>">
               
               
                <div class="text-center table-div">
                    
                     <h2 class="text-center"><?php the_field('title') ?></h2>
                   
                <?php if(!empty($banner_image_1)) { ?>
                     <div class="table-img" style="background-image:url('<?php the_field('banner_image_1') ?>')"></div>
                <?php } 
                else { ?>
                    <style type="text/css">
                        #table-img{
                            display:none;
                            }
                    </style>
                <?php } ?>
                     
                <?php if(!empty($small_title)) { ?>   
                     <h4><?php the_field('small_title') ?></h4> 
                <?php } 
                else { ?>
                     <style type="text/css">
                        .table-div h4{
                            display:none;
                            }
                    </style>
                <?php } ?>
                   
                 </div>
             </div>
         </div>
         