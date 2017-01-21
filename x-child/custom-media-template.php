<?php

// TEMPLATE NAME: Custom Media

// =============================================================================
?>

<?php get_header(); ?>

<div class="x-main full" role="main">
    <div class="row custom_template custom_media_template">

        <div id="custom_hero" class="custom_media_container custom_background_container_red">

            <div id="background" style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/framework/img/custom_images/media-background.png' ?>')">

            </div>

            <h2>MEDIA & PHOTOS</h2>

        </div>
   </div>
    <div class="row">
        <div class="col-md-12" id="top_desc_1"><strong>EXPERIENCE ANGELS LIVE: SPEAK TO ONE OF OUR EVENT SPECIALISTS TODAY!  </strong> <a style="border-radius: 1px" class="btn btn-large" href="http://angelserotics.titusshoats.com/events/booking/">Take Action</a></div>

    </div>
    <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-wrap">
                <div class="x-container max width">
                    <?php  x_get_view( 'global', '_content', 'the-content'); ?>
                     <a style="border-radius: 1px" class="btn btn-large" href="#">Learn More</a>

                </div>

            </div>

        </article>

    <?php endwhile; ?>

    <div class="row">
        <div  class="col-md-12 custom_video_container" >
            <h1>ANGEL'S SEX + FOOD RECAP VIDEO</h1>


            <div id="video" >
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Fgeg7mxfSG0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

    </div>

    <div class="row">
        <div  class="col-md-12 custom_slide_container" >
            <h1>ANGEL'S MEDIA GALLERY</h1>


            <?php echo get_new_royalslider(1); ?>
        </div>
     </div>


    <script>


        jQuery(document).ready(function($) {
          //  $('video').mediaelementplayer(/* Options */);
        });
    </script>
</div>


<?php get_footer(); ?>
