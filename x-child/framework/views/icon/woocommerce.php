<?php

// =============================================================================
// VIEWS/ICON/WOOCOMMERCE.PHP
// -----------------------------------------------------------------------------
// WooCommerce page output for Icon.
// =============================================================================

?>

<?php get_header(); ?>

  <div class="x-main full" role="main">
    <div class="x-container max width offset-top offset-bottom ">

      <?php if ( x_is_shop() ) : ?>
        <header class="entry-header shop ">
          <h1 class="entry-title"><?php echo x_get_option( 'x_icon_shop_title' ); ?></h1>
        </header>
      <?php endif; ?>
      <?php
      if(!is_product()){
        if( dynamic_sidebar( 'sidebar-custom-products' ) && is_shop() ){

        }else{
          // echo "False";
        }
      }
      ?>
      <?php



      ?>
      <div class="row custom_shop_container">
        <?php woocommerce_content(); ?>
      </div>

    </div>

  </div>

  <?php //get_sidebar(); ?>
<?php get_footer(); ?>