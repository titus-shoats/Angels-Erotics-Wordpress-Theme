<?php

// =============================================================================
// VIEWS/GLOBAL/_INDEX.PHP
// -----------------------------------------------------------------------------
// Includes the index output.
// =============================================================================

$stack = x_get_stack();

if ( is_home() ) :
  $style     = x_get_option( 'x_blog_style' );
  $cols      = x_get_option( 'x_blog_masonry_columns' );
  $condition = is_home() && $style == 'masonry';
elseif ( is_archive() ) :
  $style     = x_get_option( 'x_archive_style' );
  $cols      = x_get_option( 'x_archive_masonry_columns' );
  $condition = is_archive() && $style == 'masonry';
elseif ( is_search() ) :
  $condition = false;
endif;

?>

<?php if ( $condition ) : ?>

  <?php x_get_view( 'global', '_script', 'isotope-index' ); ?>

  <div id="x-iso-container" class="x-iso-container x-iso-container-posts cols-<?php echo $cols; ?>">

    <!------------------>
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php if ( $stack != 'ethos' ) : ?>
          <?php x_get_view( $stack, 'content', get_post_format() ); ?>
        <?php else : ?>
          <?php x_ethos_entry_cover( 'main-content' ); ?>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php else : ?>
      <?php x_get_view( 'global', '_content-none' ); ?>
    <?php endif; ?>

  </div>

<?php else : ?>

    <!-----------Custom Body ------->
   <div class="container-fluid">
      <div class="row custom_home_page_template"  id="custom_home_page_top_row" >
          <div id="custom_hero" >

          <img  src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/seductive-kiss.png' ?>"/>

          </div>

          <h2>GET READY!</h2>
          <div class="custom_learn_more">
              <h3>Your Sexual Breakthrough Awaits</h3>

          </div>
          <div class="col-md-12 " id="top_desc_0">
              <p>
                  <a class="btn btn-large" href="http://angelserotics.titusshoats.com/events/booking/">See Angel Live</a>
              </p>
          </div>
      </div>

       <div class="row custom_featured_by">
           <h3><i>Featured By...</i></h3>

           <div class="col-md-2">

               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/ebony-logo-gray.png' ?>"/>

           </div>
           <div class="col-md-2">

               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/playboy-logo-gray.png' ?>"/>

           </div>
           <div class="col-md-2">

               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/vice-logo-gray.png' ?>"/>


           </div>
           <div class="col-md-2">

               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/essence-logo-gray.png' ?>"/>


           </div>
           <div class="col-md-2">

               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/cosmopolitan-logo-gray.png' ?>"/>


           </div>
           <div class="col-md-2">

               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/wordlstar-logo-gray.png' ?>"/>


           </div>
       </div>

       <div class="row custom_lead_optin">
           <div class="row custom_lead_optin_background">

           </div>
           <div class="col-md-12">
               <h2>Discover Angels 7 Bedroom Tips To Shock Your Mate </h2>
           <p>Enter Your Name & Email To Get Instant Access</p>
           </div>
           <form name="mc-embedded-subscribe-form" action="//angelseroticsolutions.us14.list-manage.com/subscribe/post?u=0966c79774109148e42f9af25&amp;id=8b28ad5782" method="post" enctype="application/x-www-form-urlencoded">

               <input type="hidden" name="ht" value="2b610e2cd60baed47db087cf57c97bb7d2b4e52a:MTQ3NTAwMTkzOC43OTA1">
              <div class="col-right col-md-4">
                   <input type="text" name="FNAME" value="" placeholder="Enter Name"/>


               </div>
               <div class="col-left col-md-4">
                   <input type="text" name="EMAIL" value="" placeholder="Enter Email"/>

               </div>
               <div class="col-left col-md-4">
                   <input type="submit" name="submit" value="YES,I WANT THIS." />

               </div>
           </form>

       </div>

       <div class="row custom_video_intro">
           <div class="col-right col-md-6">
               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/top_logo.png' ?>" />
               <p>Angels Erotics Solutions is a online sexual expert, for teaching and educating sexual intimacy and lessons. Our online
                   courses and platform allows for anyone to have the tools and knowledge to experience sexual pleasure, and
                   fulfillment with our online courses and material.

               </p>
               <a style="border-radius: 0px"  class="btn btn-large" href="http://angelserotics.titusshoats.com/events/booking/">Get Instant Access</a>

           </div>
           <div class="col-left col-md-6">
               <script src="//fast.wistia.com/embed/medias/22zmyt2fhk.jsonp" async></script><script src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_22zmyt2fhk videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>

           </div>
       </div>
       <div class="row custom_home_servicices_desc">
           <img  src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/mobile-device.png' ?>"/>

           <div class="col-left col-md-6">
               <h2>ACCESS ANGELS SEXUAL LESSONS 24/7 ON ANY DEVICE</h2>
           </div>

           <div class="col-right col-md-6">
                 <p>ANGELS EROTICS provides a free digital library for those looking to improve the quality of their sexual lives. The content delivered will help members to achieve more and experience a greater intimacy fulfillment through a unique set of proven tools and strategies.

                  <br/>
                  Whether your looking to spice up your romance, or to surprise your spouse, Angels techinques
                  will have your mate begging for more. Angels lessons have helped many relationships
                  build stronger communication in and outside of the bedroom. Her clients are thrilled and are
                  always seeking more of her techniques and lessons to explode their sexual intimacy.
                 </p>
           </div>
    </div>
       <div class="row custom_marketing_callout"  >


           <span class="callout_desc">
                 <img class="img-circle" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/grapefruit-icon.PNG' ?>"/>

           EXPLODE YOUR SEX LIFE ALMOST OVERNIGHT 
           </span>


           <div class="col-md-4">
               <img class="background_logo" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/white_logo.png' ?>"/>

               <img class="img-circle" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/callout-img1.png' ?>"/>
               <h3>Sexual Fulfillment</h3>
           </div>

           <div class="col-md-4">
               <img class="background_logo" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/white_logo.png' ?>"/>

               <img class="img-circle" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/callout-img2.png' ?>"/>
                <h3>Sexual Education</h3>
           </div>

           <div class="col-md-4">
               <img class="background_logo" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/white_logo.png' ?>"/>

               <img class="img-circle" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/callout-img3.png' ?>"/>

               <h3>Sexual Communication</h3>
           </div>


       </div>



       <div class="row custom_home_classroom_desc">




            <span class="callout_desc">
             <img class="" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/strawberry-icon.png' ?>"/>
            DISCOVER HOW TO SPICE YOUR SEXUAL DESIRES
            </span>

           <img class="custom_home_classroom_desc_background"  src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/sexual-couple-gradient0.png' ?>"/>
           <div class="col-left col-md-6">

               <h2>
                   <i class="fa fa-video-camera" aria-hidden="true"><span>WATCH</span></i>

               </h2>
               <p>Watch as Angel teaches hot, spicy, and erotic oral and sexual video lessons.
                   Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget
                   <a style="border-radius: 0px" class="btn btn-large" href="http://angelserotics.titusshoats.com/members/">GET INSTANT ACCESS NOW</a>
               </p>
           </div>

           <div class="col-right col-md-6">
               <h2>
                   <i class="fa fa-graduation-cap" aria-hidden="true"><span>LEARN</span></i>
                  </h2>
               <p>Once inside the members area, you'll be able to use Angels techniques on your mate in no time.
                   Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget
                    <br/>
                   <a style="border-radius: 0px" class="btn btn-large" href="http://angelserotics.titusshoats.com/members/">GET INSTANT ACCESS NOW</a
               </p>
           </div>

       </div>

       <div class="row custom_home_products_container">
 
            <span class="callout_desc">Featured Products</span>
           <div class="col-right col-md-6">
               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/promo1.jpg' ?>" />
               <p>
                   <a style="border-radius: 0px"  class="btn btn-large" href="http://angelserotics.titusshoats.com/product/angel-teaching-home-is-where-the-heart-is-vol-1-dvd-download/">View Details</a>

               </p>

           </div>
           <div class="col-left col-md-6">
               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/promo2.jpg' ?>" />
               <p>
                   <a style="border-radius: 0px"  class="btn btn-large" href="http://angelserotics.titusshoats.com/product/angels-fellatio-secrets-dvd-download/">View Details </a>

               </p>
           </div>

       </div>

       <div class="row custom_home_products_categories_container">
           <span class="callout_desc">Featured Categories</span>

           <div class="col-md-4">
               <h3>Books</h3>
               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/books_category.png' ?>" />
               <p>
                   <a style="border-radius: 0px"  class="btn btn-large custom_blue_button" href="http://angelserotics.titusshoats.com/product-category/books/">View Details </a>

               </p>
           </div>
           <div class="col-md-4">
               <h3>Apparel</h3>
               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/apparel_category.png' ?>" />
               <p>
                   <a style="border-radius: 0px"  class="btn btn-large custom_blue_button" href="http://angelserotics.titusshoats.com/product-category/apparel/">View Details </a>

               </p>
           </div>

           <div class="col-md-4">
               <h3>Jewelery</h3>
               <img src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/jewlery_category.png' ?>" />
               <p>
                   <a style="border-radius: 0px"  class="btn btn-large custom_blue_button" href="http://angelserotics.titusshoats.com/product-category/jewelry/">View Details </a>

               </p>
           </div>

           <div class="col-md-3"></div>

       </div>
</div>
<?php endif; ?>

<?php pagenavi(); ?>



