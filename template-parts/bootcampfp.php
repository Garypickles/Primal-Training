<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leaderboard
 */

?>


<article class="outer-level-wrapper outer-level-wrapper-bootcamp">

  <!-- Level Logoin section -->
      <div class="level-wrapper level-wrapper-bootcamp">
        <div class="level-logo level-logo-bootcamp">
          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/bootcamp-woman.png" alt="FLAB2LEAN level Logo">
        </div>
        <div class="level-info">
          <h2>Welcome Back <?php $current_user = wp_get_current_user(); echo $current_user->user_login ; ?></h2>
          
          <a href="<?php bloginfo('url'); echo '/'.$levellink; ?>" class="level-button"><?php echo $level; ?></a>
          <a href="<?php bloginfo('url');?>/your-profile" class="level-button">YOUR PROFILE PAGE</a>
        </div>
      </div>
  <!-- End /Level Logoin section -->

</article>
