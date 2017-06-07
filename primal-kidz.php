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
                <h3 class="kidz-try-text">Scroll down for info and bookings <span>Primal&nbspCubz!</span></h3>
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
                  <h3 class="kidz-try-text">Scroll down for info and bookings <span>Primal&nbspCubz!</span></h3>
              <?php } ?>

          </div>
          <div class="pk-info">
            <h3 class="kidz-try-text">Welcome to Primal</br>Cubz & Lionz! 🦁😊🐾</h3>
            <div class="info-wrapper">

              <div class="info-inner-wrapper">

                <div class="kidz-header">
                  <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/zerif-pro/images/kidz-header-small.svg" alt="">
                </div>


                <p>The Price is £34.99 or £29.99 for more than one Cub!</br><i>(Message us if you have more than one child joining for discount code.)</i></p>

                <h3>This gets you:</h3>

                <h3><span>X3</span> 45 minute training sessions weekly</br>The <span>Cubz</span> Uniform</br>Weekly home <span>Activity Sheets</span></h3>
                <ul>
                  <li>Monday <em style="margin-right: 30px;">-</em> 3.45pm <em>or</em> 4.30pm</li>
                  <li>Wednesday <em style="margin-right: 5px;">-</em> 3.45pm <em>or</em> 4.30pm</li>
                  <li>Thursday <em style="margin-right: 22px;">-</em> 5.00pm <em>or</em> 5.45pm</li>
                  <li>Friday <em style="margin-right: 43px;">-</em> 3.45pm <em>or</em> 4.30pm</li>
                  <li>Saturday <em style="margin-right: 10px;">-</em> 10.00am <em>or</em> 10.45am</li>
                  <li>Sunday <em style="margin-right: 18px;">-</em> 11.00am <em>or</em> 12.00pm</li>
                </ul>
              </div>
              <div class="rough-background">
                <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/zerif-pro/images/rough-bg.png" alt="">
              </div>
            </div>


          </div>

          <div class="signuplink">

            <?php
              if(pmpro_hasMembershipLevel('10'))
              { ?>

                <h2>Thank You for Signing Up</h2>

              <?php
            }else {
              ?>

              <div class="sign-up-button">
                <a href="https://primaltraininguk.com/membership-account/membership-checkout/?level=10" class="kidz-button"><img src="<?php echo get_template_directory_uri(); ?>/images/signuptoday.svg" alt="Join The Club"></a>
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
