<?php

// =============================================================================
// VIEWS/GLOBAL/_NAV-PRIMARY.PHP
// -----------------------------------------------------------------------------
// Outputs the primary nav.
// =============================================================================

?>

<a href="#" class="x-btn-navbar collapsed" data-toggle="collapse" data-target=".x-nav-wrap.mobile">
  <i class="x-icon-bars" data-x-icon="&#xf0c9;"></i>
  <span class="visually-hidden"><?php _e( 'Navigation', '__x__' ); ?></span>
</a>

<nav class="x-nav-wrap desktop" role="navigation">
  <a class="custom_logo" href="http://localhost/angelserotics">
    <img src="http://localhost/angelserotics/wp-content/themes/x-child/framework/img/custom_images/small-logo.png"/>
  </a>
  <?php x_output_primary_navigation(); ?>
</nav>

<div class="x-nav-wrap mobile collapse">
  <?php x_output_primary_navigation(); ?>
</div>