<?php
/*
 * Template Name: Flab2lean Program Page
 * Description: Timer / Info Page
 */

get_header();


  // Waiting For Course To start

  // is_holding_page ( value )

        $pageid = $post->ID;

        if(pmpro_has_membership_access( $pageid )){

            $is_holding_page_array = get_field( 'is_holding_page' );

            if ( $is_holding_page_array ){
              include(locate_template('template-parts/levelhold.php'));
            }
            else{
              include(locate_template('template-parts/timersection.php'));
            }
        }

        else{

            while ( have_posts() ) : the_post(); ?>

              <div class="top-element" style="width: 100%; max-width: 500px; margin: 0 auto;">
                <h2>Thank For Choosing This FLAB2LEAN Course</h2>
                <p>Course total £199.99</p>
                <p>Deposit £99.99</p>
                <p>By registering for this course and paying the deposit I agree to pay the balance of £100.00 in full on <?php the_field( 'start_date' ); ?>, first session.</p>
                <p>Click on the Register button below to sign up for your FREE Team Primal account and register your palce with Flab2Lean.</p>


                <?php the_content(); ?>

              </div><!-- .entry-content -->

            <?php endwhile; } ?>

<!-- /End Waiting For Course To start -->
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
