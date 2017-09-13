<?php
    $button_text_4 = get_field('button_text_4');
    $button_link_4 = get_field('button_link_4');
    $colour_picker_book = get_field('colour_picker_book');
    $colour_font_book = get_field('colour_font_book');
?>
  <?php if(!empty($button_link_4) && !empty($button_text_4)) { ?>
       <div class="row" id="video-row" style="background:<?php the_field('colour_picker_book') ?>">
            <div class="col-md-12 text-center book ">
               
                <a href="<?php the_field('button_link_4') ?>" style="color:<?php the_field('colour_font_book') ?>" id="a4-display"><?php the_field('button_text_4') ?> </a>   
            
            </div>
        </div>  
        <?php }     
    else { ?>
    <style type="text/css">#a4-display, .book, #video-row{
    display:none;
    }</style>
    <?php } ?>

  <?php if($colour_picker_book == "#fff") { ?>
                                    
                                     <style type="text/css">
                                         .book a{
                                              border: 1px solid #000 !important;
                                         }
                                         .book a:hover{
                                             color:#fff !important;
                                             background: #512437;
                                         }
                                         .book a:after{
                                             
                                             background: #512437;
                                         }
                                </style>
                                <?php } ?>