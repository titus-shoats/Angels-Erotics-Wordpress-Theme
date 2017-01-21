<?php

// TEMPLATE NAME: Custom Terms

// =============================================================================
?>

<?php get_header(); ?>

<div class="x-main full" role="main">
    <div class="row custom_template">


        <div id="custom_hero" class="custom_terms_container">

            <div id="background" style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/framework/img/custom_images/terms.jpg' ?>')">

            </div>

            <h2>TERMS OF USE</h2>

        </div>
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
