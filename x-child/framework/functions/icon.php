<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

function my_addition_script() {
    ?>

    <script>
        window.onload = function(){
            // alert("Works");
        }
    </script>
    <?php
}
add_action('x_before_site_begin','my_addition_script');

function my_custom_css(){
    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/framework/css/dist/site/stacks/custom.css' ?>" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/framework/css/dist/site/stacks/mediaelementplayer.min.css' ?>" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <?php
}

add_action('wp_head','my_custom_css');

function my_custom_javascript(){

    wp_enqueue_script( 'custom-jquery', 'http://angelserotics.titusshoats.com/wp-includes/js/jquery/jquery.js?ver=1.12.4', false );

    wp_enqueue_script( 'custom-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', false );
    wp_enqueue_script( 'custom-mediaelementsjs', 'https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.23.0/mediaelement.min.js', false );
    wp_enqueue_script( 'custom-mediaelementsjs-player', 'https://cdnjs.cloudflare.com/ajax/libs/mediaelement/2.23.0/mediaelementplayer.min.js', false );




}
add_action( 'wp_enqueue_scripts', 'my_custom_javascript' );

function my_custom_woo_commerce_css(){
    if(!is_product()){
        if(is_shop() ) {
            ?>
            <link rel="stylesheet" type="text/css"
                  href="<?php echo get_stylesheet_directory_uri() . '/framework/css/dist/site/woocommerce/custom.css' ?>"/>
            <?php
        }
    }

    if(is_product_category()){
        ?>
        <link rel="stylesheet" type="text/css"
              href="<?php echo get_stylesheet_directory_uri() . '/framework/css/dist/site/woocommerce/custom.css' ?>"/>
        <?php
    }

    if(is_product()){
        ?>
        <link rel="stylesheet" type="text/css"
              href="<?php echo get_stylesheet_directory_uri() . '/framework/css/dist/site/woocommerce/custom_product.css' ?>"/>
        <?php
    }

    if(is_cart()){
        ?>
        <link rel="stylesheet" type="text/css"
              href="<?php echo get_stylesheet_directory_uri() . '/framework/css/dist/site/woocommerce/custom_cart.css' ?>"/>
        <?php
    }
}
add_action('wp_head','my_custom_woo_commerce_css');


function custom_right_sidebar(){
    $args = array(
        'name'          => 'Custom Products Sidebar',
        'id'            => "sidebar-custom-products",
        'description'   => '',
        'class'         => '',
        // 'before_widget' => '<li id="sidebar-custom-products-li" class="widget 888 x-navbar-fixed-top">',

        'before_widget' => '<li id="sidebar-custom-products-li" class="widget ">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle sidebar-custom-products-h2">',
        'after_title'   => "</h2>\n",
    );

    register_sidebar( $args );
}

add_action('widgets_init','custom_right_sidebar');


register_new_royalslider_files(1);


//add_action('wp_head', function(){ echo '<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" >'; }, 99999 );

