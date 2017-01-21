<?php

// TEMPLATE NAME: Custom Booking

// =============================================================================
?>

<?php get_header(); ?>

<div class="x-main full" role="main">
    <div class="row custom_template">


        <div id="custom_hero" class="custom_event_container">

            <div id="background" style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/framework/img/custom_images/speaking1.png' ?>')">

            </div>

            <h2>Events</h2>
            <div class="custom_learn_more">
                <h3>Learn More</h3>
            </div>
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
                </div>
            </div>
        </article>

    <?php endwhile; ?>

</div>


<?php get_footer(); ?>
