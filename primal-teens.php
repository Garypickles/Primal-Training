<?php
/*
 * Template Name: Primal Teens Landing Page
 * Description: Primal Teens Landing Page.
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

      <!-- Kidz Wrapper -->
      <div class="ptt-wrapper">
        <div class="ptt-hero">
          <div class="ptt-content">
            <img class="ptt-hero-image"src="<?php echo get_template_directory_uri(); ?>/images/primal-teens-logo.svg" alt="Join Primal Teens">
            <p class="ptt-text">transformation course</p>
            <p class="ptt-text ptt-text-bullets">weekly training sessions</p>
            <p class="ptt-text ptt-text-bullets">simple nutrition planning</p>
            <p class="ptt-text ptt-text-bullets">home workout programmes</p>
            <p class="ptt-text ptt-text-bullets">daily support</p>
            <img class="ptt-ages"src="<?php echo get_template_directory_uri(); ?>/images/ptt-ages.png" alt="Join Primal Teens">
            <a class="ptt-button"href="#pk-course-info">explore packages</a>
            <img class="ptt-arrow" src="<?php echo get_template_directory_uri(); ?>/images/chevron-arrow-down.png" alt="Join The Club">
          </div>
        </div>
        <!-- end hero section -->
        <div class="ptt-content">

          <div class="kidz-hero">

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
          </div>

          <h3 class="kidz-try-text">How many sessions would you like to train?</h3>

          <div class="pk-course-wrapper" id="pk-course-info">


            <div class="pk-course">
              <div class="pk-course-info">
                <ul>
                  <li class="ptt-red">£19.99</li>
                  <li>(Paid Monthly)</li>
                  <li>x1 45min Weekly Session</li>
                  <li>Includes Primal Teens Unifom</li>
                  <li>Weekly Home Activity Sheets</li>
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
                  <li class="ptt-red">£34.99</li>
                  <li>(Paid Monthly)</li>
                  <li>Upto 3x 45min Weekly Session</li>
                  <li>Includes Primal Teens</li>
                  <li>Weekly Home Activity Sheets</li>
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
            <h3 class="kidz-try-text">View Our Timetable</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/chevron-arrow-down.png" alt="Join The Club">
            <p class="kidz-try-text-info">Book any of these sessions weekly we work around any other hobbies & activities.</br><span class="ptt-red">You can select sessions weekly</span></br><em>(Changable each week!)</em></p>

          </div>

          <div class="pk-info">

            <div class="info-wrapper">

              <div class="info-inner-wrapper">
                <h2>Weekly Session Times</h2>
                <ul>
                  <li>Monday <em class="ptt-red" style="margin-right: 30px;">-</em> 5:00pm</li>
                  <li>Tuesday <em class="ptt-red" style="margin-right: 5px;">-</em> 5:00pm <em class="ptt-red">or</em> 6:00pm</li>
                  <li>Saturday <em class="ptt-red" style="margin-right: 10px;">-</em> 11:00am</li>
                  <li>Sunday <em class="ptt-red" style="margin-right: 18px;">-</em> 1:00pm</li>
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

        </div> <!-- End Section 1 -->
      </div> <!-- End Kidz Wrapper -->

 		</main><!-- #main -->
 	</div><!-- #primary -->


 <?php

 get_footer();