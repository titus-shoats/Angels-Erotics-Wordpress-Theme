<?php

// TEMPLATE NAME: Custom Testimonial

// =============================================================================
?>

<?php get_header(); ?>

<div class="x-main full" role="main">
    <div class="row  custom_template">

        <div id="custom_hero" class="custom_testimonial_container">

        <div id="background" style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/framework/img/custom_images/testimonial_background.png' ?>')">

        </div>

            <h2>TESTIMONIALS</h2>
            <div class="custom_learn_more">
                <h3>REAL PEOPLE REAL RESULTS</h3>
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
                        <div class="col-md-8">

                        </div>
                        <div class="col-md-4">

                        </div>
                        <?php  x_get_view( 'global', '_content', 'the-content'); ?>

                    </div>

                </div>

            </article>

        <?php endwhile; ?>

     <div class="row custom_testimonial_slider">
         <!---------Slider Container------->
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators">
                 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                 <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                 <li data-target="#carousel-example-generic" data-slide-to="2"></li>
             </ol>
             <div class="carousel-inner" role="listbox">

                 <h2>ANGELS CLIENTS RESULTS</h2>

                 <div class="item active">


                     <img class="" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/testimonial-bg.png' ?>" alt="First slide">
                     <div class="carousel-caption">
                         <p>
                             <i class="fa fa-quote-left"></i>

                             Thanks again for making Saturday Nov. 9, 2011 night a suck-cess!!! (I got that from one of the other girls and thought it was cute). I received so many calls from my friends yesterday about all the fun we had with you.</p>
                              <span>Erin, Country Club Hills</span>
                     </div>

                 </div>

                 <div class="item ">
                     <img class="" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/testimonial-bg.png' ?>" alt="Second slide">
                     <div class="carousel-caption">
                         <p>
                             <i class="fa fa-quote-left"></i>

                             Angel, that Grapefruit technique you taught me was amazing! I couldn’t wait to go home and grapefruit my man.
                             <span>Cheyl, Chicago</span>

                         </p>
                     </div>

                 </div>

                 <div class="item ">
                     <img class="" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/testimonial-bg.png' ?>" alt="Second slide">
                     <div class="carousel-caption">
                         <p>
                             <i class="fa fa-quote-left"></i>

                             He really loved how I was touching, licking and kissing all over his body on the spots that you suggested on the dvd. It was amazing listening to him moan and seeing him squirm like that.                         </p>
                         <span>Tracy N. 3/2014</span>

                     </div>

                 </div>
                 <div class="item ">
                     <img class="" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/testimonial-bg.png' ?>" alt="Second slide">
                     <div class="carousel-caption">
                         <p>
                             <i class="fa fa-quote-left"></i>

                             I had no idea there were shows like yours out here before; I’ve never seen anything quite like it. Girl, you are amazing and so professional all at the same time...                         </p>
                         <span>Diondra, Dolton</span>

                     </div>

                 </div>
                 <div class="item ">
                     <img class="" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/testimonial-bg.png' ?>" alt="Second slide">
                     <div class="carousel-caption">
                         <p>
                             <i class="fa fa-quote-left"></i>

                             I love the Twist and Spit Trick technique! It’s wet, but you were right: he loves the wetter, the better concept. I will be calling you...                         </p>
                         <span>Jeannie, Bolingbrook</span>

                     </div>

                 </div>
                 <div class="item ">
                     <img class="" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/testimonial-bg.png' ?>" alt="Second slide">
                     <div class="carousel-caption">
                         <p>
                             <i class="fa fa-quote-left"></i>

                             Girl, the twist and spit trick is the bomb! I did that one thing to my guy and he went crazy. Three days later I got a 7 carat ring—YES 7 CARATS—so, of course,...                         </p>
                         <span>Sandy, Chicago</span>

                     </div>

                 </div>

                 <div class="item ">
                     <img class="" src="<?php echo get_stylesheet_directory_uri()  . '/framework/img/custom_images/testimonial-bg.png' ?>" alt="Second slide">
                     <div class="carousel-caption">
                         <p>
                             <i class="fa fa-quote-left"></i>

                             Hi Angel, I have your DVD! My boyfriend is like my servant now! Your DVD has increased our sex life immensely.....                         </p>
                         <span>DaNa, Chicago</span>

                     </div>

                 </div>





             </div>
             <!----------------------

            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
             -------------------------------------->
         </div>
         <script>


             jQuery(document).ready(function($) {
                 // Code that uses jQuery's $ can follow here.
                 $('.carousel').carousel();
             });
         </script>
     </div>
</div>

<?php get_footer(); ?>
