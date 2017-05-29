<?php
/*
 * Template Name: Primal Kidz Landing Page
 * Description: Primal Kidz Landing Page.
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

      <!-- Kidz Wrapper -->
      <div class="kidz-wrapper signup-wrapper">
        <div class="kidz-section section-01">

          <div class="kidz-hero-logo not-mobile">
            <img src="<?php echo get_template_directory_uri(); ?>/images/join-hero.svg" alt="Join The Club">
            <?php
              if(pmpro_hasMembershipLevel('10'))
              { ?>

              <?php
            }else {
              ?>
                <h3 class="kidz-try-text">Click the link below to sign your Cub up to <span>Primal&nbspCubz!</span></h3>
            <?php } ?>
          </div>

          <div class="kidz-hero-logo mobile">
              <img src="<?php echo get_template_directory_uri(); ?>/images/join-hero-mobile.svg" alt="Join The Club">
              <?php
                if(pmpro_hasMembershipLevel('10'))
                { ?>

                <?php
              }else {
                ?>
                  <h3 class="kidz-try-text">Click the link below to sign your Cub up to <span>Primal&nbspCubz!</span></h3>
              <?php } ?>

          </div>

          <div class="signuplink">

            <?php
              if(pmpro_hasMembershipLevel('10'))
              { ?>

                <h2>Thank You for Signing Up</h2>

              <?php
            }else {
              ?>

              <div class="button_base b03_skewed_slide_in">
                  <div> <a href="https://primaltraininguk.com/membership-account/membership-checkout/?level=10"><h3 class="facny-button">Sign Up</h3></a></div>
                  <div></div>
                  <div><a href="https://primaltraininguk.com/membership-account/membership-checkout/?level=10"><h3 class="facny-button-hover">Sign Up</h3></a></div>
              </div>

            <?php } ?>

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
