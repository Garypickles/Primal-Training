<?php
/*
 * Template Name: Active Pages Template
 * Description: 10 Week active pages template.
 */

 get_header();

// set up variables

$startdate = get_field('course_start_date');
$today = date("y-m-d G:i");

$difference = strtotime($today) - strtotime($startdate);

$interval = 604800;   // 1 min 60 seconds, 1hr 3600 seconds , 1 Day 86400 seconds , 1 Week 604800

$popup = "false";

?>


<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<?php zerif_after_header_trigger(); ?>

<div id="content" class="site-content">

  <?php $pageid = $post->ID;

  if(pmpro_has_membership_access( $pageid )){
    // Output if Member //

     if ($difference <= 0){

            // Course has not started
            include(locate_template('template-parts/active-levelhold.php'));
            // End Course has not started

          }elseif ($difference   > 0 and $difference < $interval*1){

            // Start Weekly Part

                // Header Part
                include(locate_template('template-parts/active-header.php'));
                // End Header Part

                // Start of the post object //
                $post_object = get_field( 'select_week_1_course' );
                    if ( $post_object ):
                     $post = $post_object;
                     setup_postdata( $post );
                        // Start Page template
                            include(locate_template('template-parts/active-timersection.php'));
                        // End Page template
                     wp_reset_postdata();
                    endif;
                // End of the post object //

            // End Weekly Part

          }elseif ($difference*1 > 0 and $difference < $interval*2){
            // Start Weekly Part

                // Header Part
                include(locate_template('template-parts/active-header.php'));
                // End Header Part

                // Start of the post object //
                $post_object = get_field( 'select_week_2_course' );
                    if ( $post_object ):
                     $post = $post_object;
                     setup_postdata( $post );
                        // Start Page template
                            include(locate_template('template-parts/active-timersection.php'));
                        // End Page template
                     wp_reset_postdata();
                    endif;
                // End of the post object //

            // End Weekly Part
          }elseif ($difference*2 > 0 and $difference < $interval*3){
            // Start Weekly Part

                // Header Part
                include(locate_template('template-parts/active-header.php'));
                // End Header Part

                // Start of the post object //
                $post_object = get_field( 'select_week_3_course' );
                    if ( $post_object ):
                     $post = $post_object;
                     setup_postdata( $post );
                        // Start Page template
                            include(locate_template('template-parts/active-timersection.php'));
                        // End Page template
                     wp_reset_postdata();
                    endif;
                // End of the post object //

            // End Weekly Part
          }elseif ($difference*3 > 0 and $difference < $interval*4){
            // Start Weekly Part

                // Header Part
                include(locate_template('template-parts/active-header.php'));
                // End Header Part

                // Start of the post object //
                $post_object = get_field( 'select_week_4_course' );
                    if ( $post_object ):
                     $post = $post_object;
                     setup_postdata( $post );
                        // Start Page template
                            include(locate_template('template-parts/active-timersection.php'));
                        // End Page template
                     wp_reset_postdata();
                    endif;
                // End of the post object //

            // End Weekly Part
          }elseif ($difference*4 > 0 and $difference < $interval*5){
            // Start Weekly Part
            $popup = "true";

                // Header Part
                include(locate_template('template-parts/active-header.php'));
                // End Header Part

                // Start of the post object //
                $post_object = get_field( 'select_week_5_course' );
                    if ( $post_object ):
                     $post = $post_object;
                     setup_postdata( $post );
                        // Start Page template
                            include(locate_template('template-parts/active-timersection.php'));
                        // End Page template
                     wp_reset_postdata();
                    endif;
                // End of the post object //

            // End Weekly Part
          }elseif ($difference*5 > 0 and $difference < $interval*6){
            // Start Weekly Part
            $popup = "true";

                // Header Part
                include(locate_template('template-parts/active-header.php'));
                // End Header Part

                // Start of the post object //
                $post_object = get_field( 'select_week_6_course' );
                    if ( $post_object ):
                     $post = $post_object;
                     setup_postdata( $post );
                        // Start Page template
                            include(locate_template('template-parts/active-timersection.php'));
                        // End Page template
                     wp_reset_postdata();
                    endif;
                // End of the post object //

            // End Weekly Part
          }elseif ($difference*6 > 0 and $difference < $interval*7){
            // Start Weekly Part
            $popup = "true";

                // Header Part
                include(locate_template('template-parts/active-header.php'));
                // End Header Part

                // Start of the post object //
                $post_object = get_field( 'select_week_7_course' );
                    if ( $post_object ):
                     $post = $post_object;
                     setup_postdata( $post );
                        // Start Page template
                            include(locate_template('template-parts/active-timersection.php'));
                        // End Page template
                     wp_reset_postdata();
                    endif;
                // End of the post object //

            // End Weekly Part
          }elseif ($difference*7 > 0 and $difference < $interval*8){
            // Start Weekly Part
            $popup = "true";

                // Header Part
                include(locate_template('template-parts/active-header.php'));
                // End Header Part

                // Start of the post object //
                $post_object = get_field( 'select_week_8_course' );
                    if ( $post_object ):
                     $post = $post_object;
                     setup_postdata( $post );
                        // Start Page template
                            include(locate_template('template-parts/active-timersection.php'));
                        // End Page template
                     wp_reset_postdata();
                    endif;
                // End of the post object //

            // End Weekly Part
          }elseif ($difference*8 > 0 and $difference < $interval*9){
            // Start Weekly Part
            $popup = "true";

                // Header Part
                include(locate_template('template-parts/active-header.php'));
                // End Header Part

                // Start of the post object //
                $post_object = get_field( 'select_week_9_course' );
                    if ( $post_object ):
                     $post = $post_object;
                     setup_postdata( $post );
                        // Start Page template
                            include(locate_template('template-parts/active-timersection.php'));
                        // End Page template
                     wp_reset_postdata();
                    endif;
                // End of the post object //

            // End Weekly Part
          }elseif ($difference*9 > 0 and $difference < $interval*10){
            // Start Weekly Part
            $popup = "true";

                // Header Part
                include(locate_template('template-parts/active-header.php'));
                // End Header Part

                // Start of the post object //
                $post_object = get_field( 'select_week_10_course' );
                    if ( $post_object ):
                     $post = $post_object;
                     setup_postdata( $post );
                        // Start Page template
                            include(locate_template('template-parts/active-timersection.php'));
                        // End Page template
                     wp_reset_postdata();
                    endif;
                // End of the post object //

            // End Weekly Part
          }else{
            echo "This Course Has Finished";
          };


    // End Output if Member //
  }

  else{

      while ( have_posts() ) : the_post(); ?>

        <div class="top-element" style="width: 100%; max-width: 500px; margin: 0 auto;">
          <h2>Thank For Choosing</h2>
          <h1><?php the_field( 'active_course_title' ); ?></h1>
          <p>Course total £199.99</p>
          <p>Deposit £99.99</p>
          <p>By registering for this course and paying the deposit I agree to pay the balance of £100.00 in full on <?php the_field( 'start_date' ); ?>, first session.</p>
          <p>Click on the Register button below to sign up for your FREE Team Primal account and register your palce with Flab2Lean.</p>

          <?php the_content(); ?>

        </div><!-- .entry-content -->

      <?php endwhile; } ?>

      <?php if ($popup == "true"): echo $popup; ?>

        <!-- modal window -->
          <div class="promo-wrapper" id="promo-wrapper">
            <div class="promo-modal">
              <div class="promo-modal-close" id="promo-modal-close">
                <img alt="" src="<?php bloginfo('url');?>/wp-content/uploads/2016/close-icon.png">
              </div>
              <?php the_field( 'promo_window_text' ); ?>
              <div class="button-wrapper">
                <a class="op-button" href="<?php the_field( 'promo_link' ); ?>">Book Your Next Course&nbspNow!</a>
              </div>
            </div>
          </div>
        <!-- /End modal window -->

        <?php endif ?>


      <!-- /End Page Content -->
      <script>

            $( "#stop" ).click(function() {
              event.preventDefault();
              $( "#stop-wrapper" ).hide();
              $( "#submit-wrapper" ).show().addClass( "tada" );
              $( "#submit-message" ).show().addClass( "animated bounceIn" );
              $('.timer').timer('pause');
              var str = $( "#divId" ).text();
              $( "#submit-wrapper" ).html( '<a href="<?php the_field( 'select_leaderboard_page' ); ?>?myNumber='+str+' " class="button SubmitButton" id="submit">Submit</a>');
            });

      </script>


<?php get_footer(); ?>


<!-- Page Content -->

  <!--

  1. The Course hasn't started yet.

  2. The Course have started, Display By Weeks 1 to 10.

  3. This Course has Finished

  4. Pop Up Section to promote next level.

  -->
