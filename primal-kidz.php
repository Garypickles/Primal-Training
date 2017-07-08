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

          <div class="kidz-hero">
            <img src="<?php echo get_template_directory_uri(); ?>/images/kidz-logo-both.svg" alt="Join The Club">

            <!-- Kidz Monthley -->
            <?php
              if(pmpro_hasMembershipLevel(array('10', '11')))
              { ?>

                <div class="pk-info">

                  <div class="info-wrapper">

                    <div class="info-inner-wrapper">
                      <h2>Thank you for choosing Primal&nbspKidz</h2>
                      <p>Please contact your Cub leader via text/call <a href="tel:07805036614">07805&nbsp036614</a> or alternatively email us <a href="mailto:primaltraininguk@gmail.com">primaltraininguk@gmail.com</a></p>
                    </div>

                    <div class="rough-background">
                      <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/zerif-pro/images/rough-bg.png" alt="">
                    </div>

                  </div>

                </div>

              <?php
            }else {
              ?>


            <?php } ?>
            <!-- End Kidz Monthley -->

            <img src="<?php echo get_template_directory_uri(); ?>/images/chevron-arrow-down.png" alt="Join The Club">
          </div>

          <h3 class="kidz-try-text">How many sessions would you like your cub to train?</h3>

          <div class="pk-course-wrapper" id="pk-course-info">


            <div class="pk-course">
              <div class="pk-course-info">
                <ul>
                  <li>£19.99</li>
                  <li>(Paid Monthly)</li>
                  <li>x1 45min Weekly Session</li>
                  <li>Includes Cubz Unifom</li>
                  <li>Weekly Home Activities Sheets</li>
                </ul>
                <div class="sign-up-button">
                  <a href="https://primaltraininguk.com/membership-account/membership-checkout/?level=11" class="kidz-button"><img src="<?php echo get_template_directory_uri(); ?>/images/booknow.svg" alt="Join The Club"></a>
                </div>
              </div>
              <div class="rough-background">
                <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/zerif-pro/images/rough-bg.png" alt="">
              </div>
            </div>

            <div class="pk-course">
              <div class="pk-course-info">
                <ul>
                  <li>£34.99</li>
                  <li>(Paid Monthly)</li>
                  <li>Upto 3x 45min Weekly Session</li>
                  <li>Includes Cubz Unifom</li>
                  <li>Weekly Home Activities Sheets</li>
                </ul>
                <div class="sign-up-button">
                  <a href="https://primaltraininguk.com/membership-account/membership-checkout/?level=10" class="kidz-button"><img src="<?php echo get_template_directory_uri(); ?>/images/booknow.svg" alt="Join The Club"></a>
                </div>
              </div>
              <div class="rough-background">
                <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/zerif-pro/images/rough-bg.png" alt="">
              </div>
            </div>
          </div>
          <div class="kp-centered">
            <h3 class="kidz-try-text">View Our Extensive Timetable</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/chevron-arrow-down.png" alt="Join The Club">
            <p class="kidz-try-text-info">Book any of these sessions weekly we work around any other hobbies & activities.</br><span>You can select sessions weekly</span></br><em>(Changable each week!)</em></p>

          </div>

          <div class="pk-info">

            <div class="info-wrapper">

              <div class="info-inner-wrapper">
                <h2>Weekly Session Times</h2>
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

            <div class="sign-up-button">
              <a href="#pk-course-info" class="kidz-button"><img src="<?php echo get_template_directory_uri(); ?>/images/signuptoday.svg" alt="Join The Club"></a>
            </div>

          </div>

          <div class="pk-info">

            <div class="info-wrapper">

              <div class="info-inner-wrapper">
                <h2>What is Primal Cubz & Lionz?</h2>
                <ul>
                  <li>Primal Cubz (4-7 Years)</li>
                  <li>Primal Lionz (8-11 Years)</li>
                  <li>Kids Fitness & Bootcamp Sessions</li>
                  <li>Teamwork & Self Confidence</li>
                  <li>Fun sessions & conditioning training using the Primal method which has the Halifax fitness scene buzzing</li>
                </ul>
              </div>
              <div class="rough-background">
                <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/zerif-pro/images/rough-bg.png" alt="">
              </div>
            </div>

          </div>

        </div> <!-- End Section 1 -->
      </div> <!-- End Kidz Wrapper -->

 		</main><!-- #main -->
 	</div><!-- #primary -->


 <?php

 get_footer();
