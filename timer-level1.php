<?php
/*
 * Template Name: Flab2lean Level 1
 * Description: Timer / Info Page
 */

get_header();

if(pmpro_hasMembershipLevel('7')){

  // while ( have_posts() ) : the_post();

  //   get_template_part( 'template-parts/content', 'page' );

  // endwhile; // End of the loop.
  ?>
  <?php
      if ( is_user_logged_in() ) {

          if(pmpro_has_membership_access('561')){ ?>

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
                  <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-logo-levels.svg" alt="Flab 2 Lean" />
                </div>
                <h1 class="levels-title">Level 1</h1>
              </div>
          </div>


          <div class="info-pointers">
            <div class="leader-text">
              <p><?php the_field('lead-sentence'); ?></p>
              <div class="section extra-margin" >
                <a href="<?php bloginfo('url');?>/flab2lean-level-one-leaderboard" class="level-button">VIEW LEADERBOARD</a>
              </div>
                <div class="pointers">

                    <?php if( have_rows('workout_tips') ): ?>

                        <?php while( have_rows('workout_tips') ): the_row(); ?>

                            <p><?php the_sub_field('tip'); ?></p>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>
          </div>

          <section class="grey-section">

            <div class="tp-main-info">
            
              <?php the_field( 'main_info' ); ?>

                <div class="pdfbooklet">

                    <div class="booklet-image">
                      <a href="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-BOOK.pdf" target="_blank"><img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/team-primal-booklet.png" alt="" /></a>
                    </div>

                    <div class="booklet-text">
                      <h3>FLAB2LEAN Booklet</h3>
                      <p>The full 25 page information PDF booklet can be viewed and download online <a href="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-BOOK.pdf" target="_blank">HERE.....</a></p>
                    </div>

                </div>

            </div>

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

  <?php } else{
    
           while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.

      }

    };

};



 get_footer(); ?>
