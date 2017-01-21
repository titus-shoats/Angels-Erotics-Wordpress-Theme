<?php

// TEMPLATE NAME: Custom Contact

// =============================================================================
?>

<?php get_header(); ?>

<div class="x-main full" role="main">
    <div class="row  custom_template">

        <div id="custom_hero" class="custom_support_container">

            <div id="background" style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/framework/img/custom_images/media_inquiries.png' ?>')">

            </div>

            <h2>MEDIA INQUIRIES</h2>
            <div class="custom_learn_more">
                <h3>QUESTIONS ABOUT MEDIA INQUIRES</h3>
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
                        <div class="row ">
                            <div class="col-left col-md-8">
                                <?php  x_get_view( 'global', '_content', 'the-content'); ?>

                            </div>
                            <div class="col-right col-md-4 custom_support_container_sidebar">
                                <?php
                                if( dynamic_sidebar( 'sidebar-custom-products' ) ){

                                }else{
                                    // echo "False";
                                }
                                ?>
                            </div>
                        </div>

                    </div>

                </div>

            </article>

        <?php endwhile; ?>


    </div>


<?php get_footer(); ?>
