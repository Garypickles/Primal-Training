<?php
/*
 * Template Name: My Profile Page
 * Description: My Profile Page.
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

     		<div class="mpp-wrapper">
          <div class="mpp-hero-section">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/teamprimallogo.png" alt="Team Primal" />
            <div class="hero-info">
              <h1>Hi &<br>Welcome to Primal Training</h1>
              <p>Here you will be able to book & train with Yorkshire's leading health and fitness team.</p>
            </div>
          </div>

          <div class="hero-info">
            <p>Ensure to log in weekly to never miss out on our upcoming events, healthy lifestyle hints and tips as well as free training advice and seasonal promotions.</p>

            <p>Get healthy. Get fit. Get toned.</p>

            <h2>Get Primal</h2>
          </div>

          <!-- Free PDF Files -->
          <div class="primal-sessions-pdf">
            <?php if ( have_rows( 'free_pdfs' ) ) : ?>
              <?php while ( have_rows( 'free_pdfs' ) ) : the_row(); ?>
                <div class="free-pdf-wrapper">

                  <?php if ( get_sub_field( 'icon_pdf_file') ) { ?>
                    <img src="<?php the_sub_field( 'icon_pdf_file' ); ?>" />
                  <?php } ?>

                  <?php $pdf_files = get_sub_field( 'pdf_files' ); ?>
                  <?php if ( $pdf_files ) { ?>
                    <a class="free-pdf-button" target="_blank" href="<?php echo $pdf_files['url']; ?>" />View PDF File</a>
                  <?php } ?>

                </div>
              <?php endwhile; ?>
            <?php else : ?>
              <?php // no rows found ?>
            <?php endif; ?>
          </div>
          <!-- /End Free PDF Files -->

          <div class="mpp-body-wrapper">

                <div class="boot-bootcamp">
                  <div class="inner-bootcamp">
                    <h1>BOOTCAMP</h1>
                    <h2>BOOK YOUR PLACE</h2>

                    <div class="button-wrapper">
                      <a class="mpp-button" href="/bootcamp">BOOK NOW</a>
                    </div>
                  </div>

                </div>

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


            <!-- Flab2lean Preminum -->
              <?php
                if(pmpro_hasMembershipLevel('6')) {

                      $level = 'PREMIUM';
                      $levellink = 'f2l-premium-program';

                      include(locate_template('template-parts/premium-member.php'));?>

                      <div class="catchup-wrapper">

                            <h2 class="catchup-title">Book Your Weekley FLAB2LEAN Catch Up Session</h2>

                            <div class="button-wrapper">
                              <a class="mpp-button" href="/flab2lean-catch-up-sessions">BOOK NOW</a>
                            </div>

                      </div>

               <?php } ?>
            <!-- /End Flab2lean Preminum -->


                <?php
                  if(pmpro_hasMembershipLevel('1'))
                  {
                  ?>
                  <!-- PrimafitUK Content -->
                      <div class="primafituk-section-profile">

                            <div class="logo-wrapper">
                              <svg xmlns="http://www.w3.org/2000/svg" width="1200.112" height="192.942" viewBox="0 0 1200.112 192.942">
                                <path d="M11.27 125.02v66.297H0V0h52.266C67.48 1.986 80.393 8.075 91.008 18.267c12.68 12.27 19.017 26.972 19.017 44.108 0 17.32-6.338 32.09-19.017 44.31-12.68 12.226-27.99 18.336-45.927 18.336H11.27zm0-114.06v103.102h33.81c14.746 0 27.378-5.025 37.898-15.087 10.517-10.056 15.778-22.257 15.778-36.6 0-14.25-5.26-26.383-15.778-36.395-10.52-10.013-23.153-15.02-37.897-15.02H11.27zm172.295 114.06h-37.19v66.297h-11.272V0h52.266c15.212 1.986 28.124 8.075 38.74 18.267 12.68 12.27 19.02 26.972 19.02 44.108 0 17.32-6.34 32.067-19.02 44.245-8.83 8.482-18.928 14.026-30.29 16.643l45.925 68.054H227.94l-44.375-66.296zm-37.19-114.06v103.102h33.81c14.744 0 27.376-5.025 37.896-15.087 10.52-10.056 15.78-22.257 15.78-36.6 0-14.25-5.26-26.383-15.78-36.395-10.52-10.013-23.15-15.02-37.894-15.02h-33.81zM282.885 0v191.317h-11.27V0h11.27zm207.233 0v191.317h-11.27V11.637l-77.132 129.547-77.13-129.547v179.68h-11.272V0h16.343l72.06 121.213L473.777 0h16.34zm97.628 0h-11.552l-73.116 191.317h11.975l32.402-84.154h.04c.013-.05.003-.088.023-.135 1.45-3.508 2.505-7.146 4.198-10.555l30.254-80.236 30.288 80.236h-55.846c.028.24-2.838 7.376-4.16 10.69h64.093l31.84 84.154h11.832L587.747 0z" fill="#D2D3D4"/>
                                <path fill="#939598" d="M687.49 101.074v90.243h-11.27V0h87.2v10.825h-75.93V90.25"/>
                                <path fill="#939598" d="M696.904 74.27h66.388v10.82h-66.388M799.207 0v191.317h-11.27V0h11.27zm83.258 10.825v180.492h-11.128V10.825h-50.435V0h112v10.825h-50.437z"/>
                                <g fill="#8EC641">
                                  <path d="M1071.947 0h11.27v137.468c-2.065 14.613-8.405 27.02-19.02 37.21-12.68 12.177-27.986 18.264-45.927 18.264-18.03 0-33.388-6.087-46.065-18.264-12.68-12.177-19.02-26.88-19.02-44.11V0h11.27v130.57c0 14.16 5.26 26.296 15.78 36.395 10.518 10.104 23.195 15.157 38.034 15.157s27.494-5.054 37.97-15.157c10.47-10.1 15.703-22.234 15.703-36.396V0z"/>
                                  <path d="M1113.05 71.847L1164.75 0h-13.66l-66.637 91.603v-.557c-.668 1.11-1.398 2.285-2.147 3.525.04 2.03.066 4.06.12 6.087.1 3.902.262 7.77.435 11.63.528.444 1.596-2.01 1.596-2.01l21.413-29.5 80.58 110.542h13.665l-87.062-119.47z"/>
                                </g>
                              </svg>
                            </div>

                          <?php the_field( 'pf_text' ); ?>

                          <h3>Paul & Dave</h3>

                          <div class="button-wrapper">

                            <a class="mpp-button green-button" href="/primafituk-2">Videos & PDF Downloads</a>

                          </div>

                          <div class="button-wrapper">

                            <a class="mpp-button green-button" href="/primafituk-sessions">PrimafitUK Classes</a>

                          </div>
                      </div>

                  <!-- /End PrimafitUK Content -->
                  <?php
                  };
                  ?>

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

                  <div class="page-content">
                    .....
                  </div>

            </div><!-- Close MPP Body Wrapper -->

        </div> <!-- Close MPP Wrapper -->




 		</main><!-- #main -->
 	</div><!-- #primary -->
<?php

 get_footer();
