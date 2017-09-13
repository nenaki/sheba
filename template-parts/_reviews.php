<?php

    $title_review_ta = get_field('title_review_ta');
    $review_1 = get_field('review_1');
    $review_2 = get_field('review_2');
    $review_3 = get_field('review_3');
    $colour_picker_reviews_trip_adv = get_field('colour_picker_reviews_trip_adv');
    $colour_font_reviews_trip_adv = get_field('colour_font_reviews_trip_adv');
?>


  <div class="row" style="background:<?php the_field('colour_picker_reviews_trip_adv') ?>; color:<?php the_field('colour_font_reviews_trip_adv') ?>">
  <div class="col-sm-8 col-md-8 text-center cf reviews">

           <h4 id="h4_trip_adv"><?php the_field('title_review_ta') ?></h4>
                <hr/>






      <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">


              <?php if( have_rows('review_posts') ):
                  while ( have_rows('review_posts') ) : the_row();
                      if ($count == '') {
                          echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                      } else {
                          echo '<li data-target="#myCarousel" data-slide-to="' . $count . '"></li>';
                      }
                      $count++;
                  endwhile;
              endif; ?>
          </ol>

          <?php $count = 0;?>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
              <?php if( have_rows('review_posts') ):
                  while ( have_rows('review_posts') ) : the_row();
                      if ($count == '') {
                          ?><div class="item active"><?php the_sub_field('review')?></div><?php
                      } else {
                          ?><div class="item"><?php the_sub_field('review')?></div><?php
                      }
                      $count++;
                  endwhile;
              endif; ?>
          </div>
      </div>

    
    <div class="centered">
              <div id="TA_excellent192" class="TA_excellent">
               
                <ul id="DfZz4MA" class="TA_links YzzMlvrIT4Yx">
                <li id="Z1fM3Apb" class="peJN23tmw">
                <a target="_blank" href="https://www.tripadvisor.co.uk/"><img src="https://static.tacdn.com/img2/widget/tripadvisor_logo_115x18.gif" alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"/></a>
                </li>
                </ul>
            </div>
                </div>
                <script src="https://www.jscache.com/wejs?wtype=excellent&amp;uniq=192&amp;locationId=1389777&amp;lang=en_UK&amp;display_version=2"></script>
                
</div>
</div>
</div>
