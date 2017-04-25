<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leaderboard
 */

?>

<!-- Promo Window Pop Up -->
<?php if ( get_field( 'pop_up_promo' ) == 1 ) {

      // Check if next level pages bought

      $hasboughtnext = false;

       if ( have_rows( 'next_level_pages' ) ) :
         while ( have_rows( 'next_level_pages' ) ) : the_row();

           $pageid = get_sub_field( 'next_level_page_id' );

          if(pmpro_has_membership_access($pageid)) {
            $hasboughtnext = true;
          };

         endwhile;

       endif;

       // Display Modal or Not

        if ( $hasboughtnext === false ) { ?>

            <!-- modal window -->

            <div class="promo-wrapper" id="promo-wrapper">
              <div class="promo-modal">
                <div class="promo-modal-close" id="promo-modal-close">
                  <img alt="" src="<?php bloginfo('url');?>/wp-content/uploads/2016/close-icon.png">
                </div>
                <?php the_field( 'promo_window_text' ); ?>
                <div class="button-wrapper">
                  <a class="op-button" href="<?php the_field( 'promo_link' ); ?>">Book Your Next Course Now!</a>
                </div>
              </div>
            </div>

            <!-- /End modal window -->

        <?php }

       ?>


<?php } ?> <!-- End If -->
<!-- /End Promo Window Pop Up -->

<!-- This will output if you have access to Flab2Lean Level 1 2 or 3 -->
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
    </div>
</div>
<div class="info-pointers">

          <!-- Addotion Info & PDF Download -->

            <div class="tp-main-info">

              <?php the_field( 'main_info' ); ?>

                <div class="pdfbooklet">

                    <div class="booklet-image">
                      <a href="<?php the_field('pdf_booklet'); ?>" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/team-primal-booklet-02.png" alt="" /></a>
                    </div>

                    <div class="booklet-text">
                      <h3>FLAB2LEAN Booklet</h3>
                      <p>The full 16 page information PDF booklet can be viewed and download online <a href="<?php the_field('pdf_booklet'); ?>" target="_blank">HERE.....</a></p>
                    </div>

                </div>

            </div>

          <!-- / End Addition Info & PDF Download -->

  <div class="leader-text">
    <p><?php the_field('lead_sentence'); ?></p>

      <!-- View Leaderboard -->
      <div class="button-wrapper">
          <a class="mpp-button" href="<?php the_field ('select_leaderboard_page'); ?>">VIEW YOUR LEADERBOARD</a>
      </div>
      <!-- End View Leaderboard -->

      <div class="pointers">

          <?php if( have_rows('workout_tips') ): ?>

              <?php while( have_rows('workout_tips') ): the_row(); ?>

                  <p><?php the_sub_field('tip'); ?></p>

              <?php endwhile; ?>

          <?php endif; ?>

      </div>
  </div>



</div>



<!-- Vimeo Video Clips Section -->
<?php
$dir = 'http://primaltraininguk.com';
$select_videos = get_field( 'select_videos' ); ?>

<!-- Main Wrapper for Vimoe Clips -->
<div class="video-main-wrapper" id="video-main-wrapper">

  <?php if ( $select_videos ): ?>
    <?php foreach ( $select_videos as $post ):?>

      <?php $vid = get_field('vimeo_id'); $vidurl = 'https://player.vimeo.com/video/'.$vid ?>

          <div class='video' id="video<?php echo $vid; ?>"><iframe src='<?php echo $vidurl; ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>

    <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>

</div>
<!-- Thumbnail Sections -->
<div class="video-thumb-wrapper">

  <?php if ( $select_videos ): ?>
    <?php foreach ( $select_videos as $post ):?>

      <?php
      $vid = get_field('vimeo_id');
      $thumbnail = $dir.'/wp-content/themes/zerif-pro/images/video_thumbs/'.$vid.'_590x332.jpg';
      ?>

      <div class="video-thumb" data-rel="video<?php echo $vid; ?>" >

        <div class="video-cover">
          <div class="play-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78.3 20" overflow="scroll">
              <style>
                .st0{fill:#FFFFFF;stroke:#1D71B8;stroke-miterlimit:10;} .st1{fill:#1D71B8;}
              </style>
              <path id="XMLID_52_" class="st0" d="M68.3 19.5H10C4.8 19.5.5 15.2.5 10S4.8.5 10 .5h58.3c5.2 0 9.5 4.3 9.5 9.5s-4.2 9.5-9.5 9.5z"/>
              <g id="XMLID_15_">
                <path id="XMLID_50_" class="st1" d="M12.6 13.7l-3-8h2.3l2 5.8 2-5.8h2.3l-3 8h-2.6z"/>
                <path id="XMLID_48_" class="st1" d="M18.8 13.7v-8h2.1v8h-2.1z"/>
                <path id="XMLID_45_" class="st1" d="M22.3 13.7v-8h5.9v1.8h-3.8v1.2h3.7v1.8h-3.7v1.4h3.8v1.8h-5.9z"/>
                <path id="XMLID_43_" class="st1" d="M35.5 13.7l-1.2-5-1.2 5h-2.2l-2.3-8h2.3l1.2 5.3 1.4-5.3H35l1.4 5.3 1.2-5.3h2.3l-2.3 8h-2.1z"/>
                <path id="XMLID_23_" class="st1" d="M43.3 9.7c0-2.5 1.9-4.1 4.3-4.1 1.9 0 3 1.1 3.5 2.1l-1.8.9c-.3-.6-1-1.2-1.7-1.2-1.3 0-2.2 1-2.2 2.3 0 1.3.9 2.3 2.2 2.3.8 0 1.5-.5 1.7-1.2l1.8.8c-.5 1-1.6 2.1-3.5 2.1-2.5.2-4.3-1.5-4.3-4z"/>
                <path id="XMLID_21_" class="st1" d="M51.9 13.7v-8H54v6.2h3.2v1.8h-5.3z"/>
                <path id="XMLID_19_" class="st1" d="M58.3 13.7v-8h2.1v8h-2.1z"/>
                <path id="XMLID_16_" class="st1" d="M61.8 13.7v-8h4c1.8 0 2.8 1.2 2.8 2.7 0 1.4-1 2.7-2.8 2.7h-1.9v2.7h-2.1zm4.7-5.3c0-.6-.4-.9-1-.9h-1.6v1.7h1.6c.5.1 1-.3 1-.8z"/>
              </g>
            </svg>
          </div>
        </div>

        <img src="<?php echo $thumbnail; ?>" alt="" />

        <h3><?php echo the_title(); ?></h3>

      </div>

    <?php endforeach; ?>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>

</div>
<!-- End Vimeo Video Clips Section -->

<section class="grey-section">



      <div class="program-content">

        <div class="header-row">
          <div class="titles">Exercise</div>
          <div class="titles mobile-titles">Sets</div>
          <div class="titles mobile-titles">Reps / Times / Intervals</div>
          <div class="titles mobile-titles">Weight / Time</div>
          <div class="titles mobile-titles">Rest</div>
        </div>

        <?php if( have_rows('program_section') ): ?>

            <?php while( have_rows('program_section') ): the_row(); ?>

                <!-- Row Start -->
                <div class="content-row">
                  <div class="content-title">
                    <?php the_sub_field('exercise_name'); ?>
                  </div>
                  <!-- Info Start -->
                  <div class="info-sections">
                    <div class="content">
                      <div class="sub-title">Sets</div>
                      <div class="info"><?php the_sub_field('sets'); ?></div>
                    </div>
                    <div class="content">
                      <div class="sub-title">Reps / Times / Intervals</div>
                      <div class="info"><?php the_sub_field('reps'); ?></div>
                    </div>
                    <div class="content">
                      <div class="sub-title">Weight / Time</div>
                      <div class="info"><?php the_sub_field('weight_time'); ?></div>
                    </div>
                    <div class="content">
                      <div class="sub-title">Rest</div>
                      <div class="info"><?php the_sub_field('rest'); ?></div>
                    </div>
                  </div><!-- /Info End -->
                </div><!-- /Row End -->

            <?php endwhile; ?>

        <?php endif; ?>

      </div>

</section>
<!-- /End Flab2Lean Level 1 2 or there -->
