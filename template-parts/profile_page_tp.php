<?php
  if(pmpro_hasMembershipLevel('7')) {
?>

<!-- Start Bootcamp for TP -->
<div class="boot-bootcamp">
  <div class="inner-bootcamp">
    <h1>BOOTCAMP</h1>
    <h2>BOOK YOUR PLACE</h2>
    <div class="button-wrapper">
        <a class="mpp-button" href="/bootcamp">BOOK NOW</a>
    </div>
  </div>
</div>
<!-- End Bootcamp for TP -->

<!-- FLAB2LEAN Catch Up Links -->

    <?php if ( have_rows( 'f2l_catch_up_sessions' ) ) : ?>

      <?php
      // set count to 0 to show Catchup sessions
      $count = 0;

      while ( have_rows( 'f2l_catch_up_sessions' ) ) : the_row(); ?>

        <?php $id = get_sub_field( 'course_id' ); ?>


        <?php if(pmpro_has_membership_access(get_sub_field( 'course_id' ))) { ?>

          <?php

            if ($count == 0) {
              // Check if this has already been show
                ?>
                <div class="catchup-wrapper">
                    <h2 class="catchup-title">Book Your Weekley FLAB2LEAN Catch Up Session</h2>

                    <div class="button-wrapper">
                      <a class="mpp-button" href="/flab2lean-catch-up-sessions">BOOK NOW</a>
                    </div>
                </div>
                <?php
                // set count to 1
                $count = 1;
            }?>

        <?php } ?>

      <?php endwhile; ?>
    <?php else : ?>
      <?php // no rows found ?>
    <?php endif; ?>

<!-- /End FLAB2LEAN Catch Up Links -->

<!-- Post Object For Flab2Lean Courses -->

<?php $post_object = get_field( 'flab_2_lean_programs' ); ?>

<?php if ( $post_object ): ?>
  <?php $post = $post_object; ?>
  <?php setup_postdata( $post ); ?>

  <!-- FLAB2LEAN program Section -->
      <?php if ( have_rows( 'available_courses' ) ) : ?>
            <?php while ( have_rows( 'available_courses' ) ) : the_row(); ?>

              <?php
                  /* Flab2lean Level 1 */
                  if(pmpro_has_membership_access(get_sub_field( 'course_page_id' ))){ ?>

                    <div class="f2l-program-section">
                      <div class="logo-program-section">
                        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-logo-orig.svg" alt="Flab 2 Lean" />
                      </div>
                      <div class="infomation">
                        <h2><span class="full">Flab<span class="greentwo">2</span>lean - </span><?php the_sub_field( 'program_title' ); ?></h2>
                        <p class="class-times">Your level start <span><?php the_sub_field( 'start_date' ); ?></span> then,&nbsp;for&nbsp;10&nbsp;weeks.<br/>
                          <?php the_sub_field( 'class_one' ); ?><br/><?php the_sub_field( 'class_two' ); ?></p>

                        <?php the_sub_field( 'course_info' ); ?>
                        <div class="button-wrapper">
                          <a class="mpp-button" href="<?php the_sub_field( 'course_link' ); ?>">FLAB<span>2</span>LEAN - <?php the_sub_field( 'program_title' ); ?></a>
                        </div>

                      </div>
                    </div>

              <?php }; ?>



            <?php endwhile; ?>
      <?php else : ?>
        <?php // no rows found ?>
      <?php endif; ?>

  <!-- /End FLAB2LEAN program Section -->

  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<!-- / End Post Object For Flab2Lean Courses -->

<!-- Post Object For Flab2Lean Phase 2 Courses -->

<?php $post_object = get_field( 'flab_2_lean_phase_2' ); ?>

<?php if ( $post_object ): ?>
  <?php $post = $post_object; ?>
  <?php setup_postdata( $post ); ?>

  <!-- FLAB2LEAN Phase 2 program Section -->
      <?php if ( have_rows( 'available_courses' ) ) : ?>
            <?php while ( have_rows( 'available_courses' ) ) : the_row(); ?>

              <?php
                  /* Flab2lean Phase 2 */

                  if(pmpro_has_membership_access(get_sub_field( 'course_page_id' ))){ ?>

                    <div class="f2l-program-section">
                      <div class="logo-program-section">
                        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-logo-orig.svg" alt="Flab 2 Lean" />
                      </div>
                      <div class="infomation">
                        <h2><span class="full">Flab<span class="greentwo">2</span>lean - </span><?php the_sub_field( 'program_title' ); ?></h2>
                        <p class="class-times">Your level start <span><?php the_sub_field( 'start_date' ); ?></span> then,&nbsp;for&nbsp;10&nbsp;weeks.<br/>
                          <?php the_sub_field( 'class_one' ); ?><br/><?php the_sub_field( 'class_two' ); ?></p>

                        <?php the_sub_field( 'course_info' ); ?>
                        <div class="button-wrapper">
                          <a class="mpp-button" href="<?php the_sub_field( 'course_link' ); ?>">FLAB<span>2</span>LEAN - <?php the_sub_field( 'program_title' ); ?></a>
                        </div>

                      </div>
                    </div>

              <?php }; ?>



            <?php endwhile; ?>
      <?php else : ?>
        <?php // no rows found ?>
      <?php endif; ?>

  <!-- /End FLAB2LEAN Phase 2 program Section -->

  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<!-- / End Post Object For Flab2Lean Phase 2 Courses -->

<!-- Post Object For Flab2Lean Phase 3 Courses -->

<?php $post_object = get_field( 'flab_2_lean_phase_3' ); ?>

<?php if ( $post_object ): ?>
  <?php $post = $post_object; ?>
  <?php setup_postdata( $post ); ?>

  <!-- FLAB2LEAN Phase 3 program Section -->
      <?php if ( have_rows( 'available_courses' ) ) : ?>
            <?php while ( have_rows( 'available_courses' ) ) : the_row(); ?>

              <?php
                  /* Flab2lean Phase 2 */

                  if(pmpro_has_membership_access(get_sub_field( 'course_page_id' ))){ ?>

                    <div class="f2l-program-section">
                      <div class="logo-program-section">
                        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-logo-orig.svg" alt="Flab 2 Lean" />
                      </div>
                      <div class="infomation">
                        <h2><span class="full">Flab<span class="greentwo">2</span>lean - </span><?php the_sub_field( 'program_title' ); ?></h2>
                        <p class="class-times">Your level start <span><?php the_sub_field( 'start_date' ); ?></span> then,&nbsp;for&nbsp;10&nbsp;weeks.<br/>
                          <?php the_sub_field( 'class_one' ); ?><br/><?php the_sub_field( 'class_two' ); ?></p>

                        <?php the_sub_field( 'course_info' ); ?>
                        <div class="button-wrapper">
                          <a class="mpp-button" href="<?php the_sub_field( 'course_link' ); ?>">FLAB<span>2</span>LEAN - <?php the_sub_field( 'program_title' ); ?></a>
                        </div>

                      </div>
                    </div>

              <?php }; ?>



            <?php endwhile; ?>
      <?php else : ?>
        <?php // no rows found ?>
      <?php endif; ?>

  <!-- /End FLAB2LEAN Phase 3 program Section -->

  <?php wp_reset_postdata(); ?>
<?php endif; ?>

<!-- / End Post Object For Flab2Lean Phase 3 Courses -->

<?php } ?>
<!-- /End Team Primal -->
