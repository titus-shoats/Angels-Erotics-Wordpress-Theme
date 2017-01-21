<?php

// TEMPLATE NAME: Custom Bio

// =============================================================================
?>

<?php get_header(); ?>

<div class="x-main full" role="main">
    <div class="row  custom_template">


        <div id="custom_hero" class="custom_bio_container">

            <div id="background" style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/framework/img/custom_images/about-background.png' ?>')">

            </div>

            <h2>ABOUT ANGEL</h2>
            <div class="custom_learn_more">
                <h3>EXPERT AUTHORITY ON SEXUAL INTIMACY</h3>
            </div>
        </div>

    </div>


    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-wrap">
                <div class="x-container max width">

                    <div class="row ">
                        <div class="col-left col-md-8">
                            <h2>ANGELS BIOGRAPHY</h2>
                            <img src="<?php echo get_stylesheet_directory_uri() . '/framework/img/custom_images/angel_bio.png' ?>" alt="angels-biography" class="img-circle">

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
