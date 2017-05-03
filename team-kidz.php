<?php
/*
 * Template Name: Kidz Landing Page
 * Description: Kidz Landing Page.
 */

 get_header(); ?>


 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

<div class="kidz-wrapper">
  <div class="kidz-section section-01">
    <div class="kidz-hero-logo not-mobile">
      <img src="<?php echo get_template_directory_uri(); ?>/images/join-hero.svg" alt="Join The Club">
      <h2>yorkshire’s leading training team&nbsp;presents</h2>
    </div>
    <div class="kidz-hero-logo mobile">
        <img src="<?php echo get_template_directory_uri(); ?>/images/join-hero-mobile.svg" alt="Join The Club">
      <h2>yorkshire’s leading training team&nbsp;presents</h2>
    </div>

    <div class="kidz-hero-both">
      <img src="<?php echo get_template_directory_uri(); ?>/images/kidz-logo-both.svg" alt="Join The Club">
      <h2>information&nbsp;leaks <span>sunday&nbsp;may&nbsp;14Th</span></h2>
    </div>
    <a href="<?php bloginfo('url'); ?>/form-view/5" class="kidz-button"><img src="<?php echo get_template_directory_uri(); ?>/images/info.svg" alt="Join The Club"></a>
  </div>

  <?php if ( function_exists("add_formcraft_form") ) { add_formcraft_form("[fc id='5' type='popup'][/fc]"); } ?>



</div>

 		</main><!-- #main -->
 	</div><!-- #primary -->
<?php

 get_footer();
