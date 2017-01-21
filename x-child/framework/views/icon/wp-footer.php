<?php

// =============================================================================
// VIEWS/ICON/WP-FOOTER.PHP
// -----------------------------------------------------------------------------
// Footer output for Icon.
// =============================================================================

?>

  <?php x_get_view( 'global', '_header', 'widget-areas' ); ?>
  <?php x_get_view( 'global', '_footer', 'scroll-top' ); ?>
  <?php x_get_view( 'global', '_footer', 'widget-areas' ); ?>

  <?php if ( x_get_option( 'x_footer_bottom_display' ) == '1' ) : ?>

    <footer class="x-colophon bottom custom_footer" role="contentinfo" style="width: 100%; background-image: url('<?php echo get_stylesheet_directory_uri() . '/framework/img/custom_images/grapefruit-bg2.png' ?>')">

        <?php if ( x_get_option( 'x_footer_content_display' ) == '1' ) : ?>

        <?php endif; ?>

        <?php if ( x_get_option( 'x_footer_social_display' ) == '1' ) : ?>
          <?php x_social_global(); ?>
        <?php endif; ?>


      <div class="container-fluid custom_footer">
        <div class="row">

          <div class="col-md-12 center">
            <article class="col-md-4">
              <h3>ABOUT ANGEL</h3>
              <?php
              $the_query = new WP_Query( 'page_id=34' );
              // The Loop
              if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                  // Do Stuff
                  // the_content('',true);
                  echo wp_trim_words(get_the_content(),18,'...');

                  ?>

                  <br/>
                  <a style="border-radius: 1px" class="btn btn-large" href="<?php the_permalink() ?>">MORE ABOUT ANGEL</a>
                  <?php
                endwhile;
              endif;
              // Reset Post Data
              // wp_reset_postdata();
              ?>

            </article>

            <article class="col-md-4">
              <h3>Support</h3>
              <?php
              $the_query = new WP_Query( 'page_id=14' );
              // The Loop
              if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                  // Do Stuff
                  // the_content('',true);
                  echo wp_trim_words(get_the_content(),18,'...');

                  ?>

                  <br/>
                  <a style="border-radius: 1px" class="btn btn-large" href="<?php the_permalink() ?>">Questions?</a>
                  <?php
                endwhile;
              endif;
              // Reset Post Data
              // wp_reset_postdata();
              ?>
            </article>
            <article class="col-md-4">


              <?php

              ?>

               <h3>RESOURCES</h3>
              <ul>
                <li>
                  <a href="http://angelserotics.titusshoats.com/shop">Products</a>
                </li>
                <li>
                  <a href="http://angelserotics.titusshoats.com/events/booking/"> Events</a>
                </li>
                <li>

                  <a href="http://angelserotics.titusshoats.com/members">Members</a>
                </li>

                <li>
                  <a href="http://angelserotics.titusshoats.com/media/">Media</a>
                </li>
              </ul>
            </article>
          </div>
        </div>


      </div>
      <div class="container-fluid">
        <div class="row company_trademark_footer">
          <div class="col-left col-md-6">
            <address>
              <strong>ANGELS EROTICS SOLUTIONS </strong> <br/>
              PO BOX 872<br>
              Robbins, IL 60472<br>
              <!-----<abbr title="Phone">P:</abbr> (123) 456-7890---->
            </address>
          </div>
          <div class="col-right col-md-6">
            <ul class="socialmedia">
              <li class="socialmedia_li"><a href="https://plus.google.com/+AngelGrapefruitlady2013" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
              <li class="socialmedia_li"><a href="https://twitter.com/angelserotics" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
              <li class="socialmedia_li"><a href="https://www.linkedin.com/in/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
              <li class="socialmedia_li"><a href="https://www.facebook.com/angeleroticzoneb" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
              <li class="socialmedia_li"><a href="https://www.youtube.com/user/Denisecauseytt/videos" target="_blank"><i class="fa fa-youtube-square"></i></a></li>

            </ul>
          </div>

        </div>

      </div>
      <?php if ( x_get_option( 'x_footer_menu_display' ) == '1' ) : ?>


        <?php x_get_view( 'global', '_nav', 'footer' ); ?>

      <?php endif; ?>
    </footer>

  <?php endif; ?>

<?php x_get_view( 'global', '_footer' ); ?>