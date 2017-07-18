<!-- Flab2lean Preminum -->
  <?php
    if(pmpro_hasMembershipLevel('6')) {

          $level = 'PREMIUM';
          $levellink = 'f2l-premium-program';?>

          <article class="outer-level-wrapper">

            <!-- Level Logoin section -->
                <div class="level-wrapper">
                  <div class="level-logo">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-logo-levels.svg" alt="FLAB2LEAN level Logo">
                  </div>
                  <div class="level-info">
                    <h2>Welcome Back <?php $current_user = wp_get_current_user(); echo $current_user->user_login ; ?></h2>
                    <p class="mobile-starp"><span>FLAB</span>2<span>LEAN</span></p>
                    <a href="<?php bloginfo('url'); echo '/'.$levellink; ?>" class="level-button"><span>FLAB</span>2<span>LEAN</span> <?php echo $level; ?></a>

                    <a href="<?php bloginfo('url'); ?>/f2l-premium-leaderboard/" class="level-button">PREMIUM LEADERBOARD</a>

                </div>
            <!-- End /Level Logoin section -->

          </article>

          <div class="catchup-wrapper">

                <h2 class="catchup-title">Premium Booking Page</h2>

                <div class="button-wrapper">
                  <a class="mpp-button" href="/premium-catch-up">BOOK NOW</a>
                </div>

          </div>

   <?php } ?>
<!-- /End Flab2lean Preminum -->
