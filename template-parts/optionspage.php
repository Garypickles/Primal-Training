<?php
/**
 * Template part for Top of options page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leaderboard
 */

?>

<div class="op-hero">
		<div class="logo-wrapper"><img alt="" src="<?php bloginfo('url');?>/wp-content/uploads/2016/F2L-logo-orig.svg"></div>
		<div class="headline">
			<h1>Scroll To Book!</h1>
		</div>
		<?php /* video will play full width, put it in a container to control width */ ?>
		<div class="headline-video">
			<div class='F2l-video' id="video<?php echo $vid; ?>"><iframe src='https://player.vimeo.com/video/192527728' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>
		</div>
	</div>

	<div class="leader-section">
		<?php the_field( 'leader_text' ); ?>
		<div class="button-wrapper">
			<a class="op-button" href="#booknow">Book Your Course Now!</a>
		</div>
		<div class="info-section">
			<div class="info-image">
        <img alt="" src="<?php bloginfo('url');?>/wp-content/uploads/2016/couple-running.jpg">
      </div>

			<div class="info">
				<?php the_field( 'why_flab2lean' ); ?>
			</div>
		</div>
	</div>

  <div class="testimonials-section">
    <?php putRevSlider("testimonials") ?>
  </div>