<?php
/*
 * Template Name: Kidz Landing Page
 * Description: Kidz Landing Page.
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

<div class="kidz-wrapper">

  <div class="kidz-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/primalcubzlogo.svg" alt="Primal Cubz"></div>

  <h1>Be first to know...  100 Spaces Only!</h1>

  <a href="<?php bloginfo('url'); ?>/form-view/5" class="kidz-button">Sign&nbsp;my&nbsp;cub&nbsp;up!</a>

  <?php
    if ( function_exists("add_formcraft_form") ) { add_formcraft_form("[fc id='5' type='popup'][/fc]"); }
  ?>

  <p>presented by team primal Home to Flab2Lean</p>

  <div class="kidz-logos">
    <img src="<?php echo get_template_directory_uri(); ?>/images/kidz-logos.svg" alt="">
  </div>

  <div class="tiger-kidz">
      <img src="<?php echo get_template_directory_uri(); ?>/images/tiger-cubz.png" alt="Primal Cubz">
  </div>
</div>

 		</main><!-- #main -->
 	</div><!-- #primary -->
<?php

 get_footer();
