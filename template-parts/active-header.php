<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leaderboard
 */

?>
<!-- Top Part of the Page -->
<div class="timer-bar" id="timerbar">
  <div class="submit-message" id="submit-message">
    <p>Press Submit Button to add your time to the leaderboard or <a href="#" id="reset">Reset</a></p></div>
  <div class="timer" id="divId">00:00</div>
  <div class="controls">
    <div class="start animated" id="start-wrapper">
      <a href="" class="button StartButton" id="start">Start</a>
    </div>
    <div class="stop animated" id="stop-wrapper">
      <a href="" class="button StopButton" id="stop">Stop</a>
    </div>
    <div class="submit animated" id="submit-wrapper">
      <a href="#" class="button SubmitButton" id="submit">Submit</a>
    </div>
  </div>
</div>

<div class="hero" style="background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2l-hero-v2.jpg)">
    <div class="hero-content-wrapper">
      <div class="logo">
        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-logo-orig.svg" alt="Flab 2 Lean" />
      </div>
      <h2 class="active-title"><?php the_field( 'active_course_title' ); ?></h2>
      <!-- View Leaderboard -->
      <div class="button-wrapper">
          <a class="mpp-button" href="<?php the_field ('select_leaderboard_page'); ?>">VIEW YOUR LEADERBOARD</a>
      </div>
      <!-- End View Leaderboard -->
    </div>
</div>

<!-- /End Top Part of the Page -->
