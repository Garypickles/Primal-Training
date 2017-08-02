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

          <div class="catchup-wrapper stats-wrapper">

                <h2 class="catchup-title">Your Premium Stat's Page</h2>
                <p class="stata-info">Track your weigh & Body fat and keep a track of your stats, including before & After photos</p>
                <?php
                    $current_user = wp_get_current_user();

                    $user = $current_user->user_login;

                      function usernameclean($string) {
                        //Lower case everything
                        $string = strtolower($string);
                        //Make alphanumeric (removes all other characters)
                        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
                        //Clean up multiple dashes or whitespaces
                        $string = preg_replace("/[\s-]+/", " ", $string);
                        //Convert whitespaces and underscore to dash
                        $string = preg_replace("/[\s_]/", "-", $string);
                        return $string;
                      }

                      $cleanUrl = usernameclean($user); // call the function

                ?>

                <div class="button-wrapper">
                  <a class="mpp-button" href="<?php echo '/user-pages/'.$cleanUrl.'/flab2lean-premium/'; ?>">YOUR STATS PAGE</a>
                </div>

          </div>

      <!-- Video Wrapper for Premium -->
      <div class="profile-page-wrapper">
        <h1>Premium Intro & Diet</h1>

        <h2>Premium Intro</h1>

        <div class="headline-video">
          <div class='F2l-video' id="video<?php echo $vid; ?>"><iframe src='https://player.vimeo.com/video/227487246' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
        </div>


        <h2>Premium Stats</h1>

        <div class="headline-video">
          <div class='F2l-video' id="video<?php echo $vid; ?>"><iframe src='https://player.vimeo.com/video/227877896' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
        </div>


        <h2>My Fitness Pal</h1>

        <div class="headline-video">
          <div class='F2l-video' id="video<?php echo $vid; ?>"><iframe src='https://player.vimeo.com/video/227889993' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
        </div>

      </div>


<?php } ?>
<!-- /End Flab2lean Preminum -->
