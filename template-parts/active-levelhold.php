<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leaderboard
 */

?>


<div class="hero" style="background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2l-hero-v2.jpg)">
    <div class="hero-content-wrapper">
      <div class="logo">
        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-logo-orig.svg" alt="Flab 2 Lean" />
      </div>
      <h2 class="active-title">Your <?php the_field( 'active_course_title' ); ?> Start Date Is <?php the_field( 'course_start_date' ); ?></h2>
    </div>
</div>
<div class="holding-text">
	<?php the_field( 'holding_text' ); ?>
</div>