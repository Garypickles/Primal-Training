<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leaderboard
 */

?>


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

<div class="premium-program-times">
  <h2>Premium Sessions</h2>
  <ul>
    <li>Monday 6:00pm</li>
    <li>Tuesday 6:30am & 6:10pm</li>
    <li>Wednesday 6:30pm</li>
    <li>Thursday 7:00pm & 8:00pm</li>
    <li>Saturday 9:00am</li>
    <li>Sunday 8:15am and 11:00am</li>
    <li class="no-line"><h2>Plus Private Premium Bootcamp</h2></li>
    <li>Friday 5:00pm & 5:30pm</li>
  </ul>

</div>
