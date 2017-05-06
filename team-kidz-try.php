<?php
/*
 * Template Name: Kidz Try Day Page
 * Description: Kidz Try Day Pag.
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

        <div class="kidz-wrapper">
          <div class="kidz-section section-01">

            <div class="kidz-hero-logo not-mobile">
              <img src="<?php echo get_template_directory_uri(); ?>/images/join-hero.svg" alt="Join The Club">
              <h3 class="kidz-try-text">Private Tryit Event</br><span>On&nbsp;The&nbsp;21st&nbsp;May</span></br>50 Kids Only</h3>
            </div>

            <div class="kidz-hero-logo mobile">
                <img src="<?php echo get_template_directory_uri(); ?>/images/join-hero-mobile.svg" alt="Join The Club">
              <h3 class="kidz-try-text">Private Tryit Event</br><span>On&nbsp;The&nbsp;21st&nbsp;May</span></br>50 Kids Only</h3>
            </div>

            <div class="kidz-timeslot">
              <?php if (function_exists("add_formcraft_form")) { add_formcraft_form("[fc id='6'][/fc]"); } ?>
            </div>

            <div class="kidz-hero-both">
              <img src="<?php echo get_template_directory_uri(); ?>/images/kidz-logo-both.svg" alt="Join The Club">
            </div>



          </div> <!-- End Section 1 -->
        </div> <!-- End Kidz Wrapper -->

 		</main><!-- #main -->
 	</div><!-- #primary -->
<?php

 get_footer();
