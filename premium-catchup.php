<?php
/*
 * Template Name: Premium F2L Catch Up Sessions
 * Description: premium F2L Catch Up Sessions
 */


 if(isset($_GET['myClass'])){

   $current_user = wp_get_current_user();

     $class = $_GET['myClass'];
     $fullname = $current_user->user_login;

     $row = array(
      'name' => $fullname
    );

     $i = add_row($class, $row);

     header('Location: http://primaltraininguk.com/premium-catch-up/');

  }else{

  }


// Delete Session Users
 if(isset($_GET['clear'])){

      $val = $_GET['clear'];
      $val = substr($val, 7);

      // instance vars.
      $uid        = $_POST['user_id'];       // current user ID
      $field_key  = $val;                    // ACF field name
      $post_id    = $_POST['post_id'];       // Post ID of draw to update

// Get member_entries field
      $value = get_field($field_key, $post_id);

      $new_value = array();
      foreach ( $value as $id => $entry ) {
        if ($entry['user_id'] == $uid) continue;
        $new_value[$id] = $entry;
      }

      $status = update_field( $field_key, $new_value, $post_id );

    };
// End Delete Session users

 get_header();

/* How Many Spaces a User Can Logon To */

   $logedspaces = get_field( 'how_many_sessions' );

/* Get all the Class Spaces avaliable */

    $classtotal_mon_six = get_field('mon_six_spaces');
    $classtotal_tue_six30 = get_field('tue_six30_spaces');
    $classtotal_tue_six10 = get_field('tue_six10_spaces');
    $classtotal_wed_six30 = get_field('wed_six30_spaces');
    $classtotal_thu_seven = get_field('thu_seven_spaces');
    $classtotal_thu_eight = get_field('thu_eight_spaces');
    $classtotal_sat_nine = get_field('sat_nine_spaces');
    $classtotal_sun_eight15 = get_field('sun_eight15_spaces');
    $classtotal_sun_eleven = get_field('sun_eleven_spaces');
    $classtotal_fri_five = get_field('fri_five_spaces');
    $classtotal_fri_five30 = get_field('fri_five30_spaces');



/* Creat all the Booked Varables for each session */

    $booked_mon_six = 'null';
    $booked_tue_six30 = 'null';
    $booked_tue_six10 = 'null';
    $booked_wed_six30 = 'null';
    $booked_thu_seven = 'null';
    $booked_thu_eight = 'null';
    $booked_sat_nine = 'null';
    $booked_sun_eight15 = 'null';
    $booked_sun_eleven = 'null';
    $booked_fri_five = 'null';
    $booked_fri_five30 = 'null';

/* Session Details as arrays */

    $mon_six = array(
      "Monday",
      "6:00pm"
    );

    $tue_six30 = array(
      "Tuesday",
      "6:30am"
    );

    $tue_six10 = array(
      "Tuesday",
      "6:10pm"
    );

    $wed_six30 = array(
      "Wednesday",
      "6:30pm"
    );

    $thu_seven = array(
      "Thursday",
      "7:00pm"
    );

    $thu_eight = array(
      "Thursday",
      "8:00pm"
    );

    $sat_nine = array(
      "Saturday",
      "9:00am"
    );

    $sun_eight15 = array(
      "Sunday",
      "8:15am"
    );

    $sun_eleven = array(
      "Sunday",
      "11:00am"
    );

    $fri_five = array(
      "Friday",
      "5:00pm"
    );

    $fri_five30 = array(
      "Friday",
      "5:30pm"
    );


    $current_username = wp_get_current_user();
    $fullname = $current_user->user_login;

/* Sessions You Have Booked */
    $totalSessionsBooked = 0;

/* Count mon_six */

    if( have_rows('mon_six') ):
      $i = 0;
      while( have_rows('mon_six') ): the_row();
        if( get_sub_field('name') ) $i++;

          $currentname = get_sub_field('name');

        if ($currentname == $fullname) {
              $booked_mon_six = 'booked';
              $totalSessionsBooked++;
            }

     endwhile;

      $count_mon_six = $i;

    endif;

    $num_mon_six = $classtotal_mon_six - $count_mon_six;

/* End Count mon_six */

/* Count tue_six30 */

    if( have_rows('tue_six30') ):
      $i = 0;
      while( have_rows('tue_six30') ): the_row();
        if( get_sub_field('name') ) $i++;

          $currentname = get_sub_field('name');

        if ($currentname == $fullname) {
              $booked_tue_six30 = 'booked';
              $totalSessionsBooked++;
            }

     endwhile;

      $count_tue_six30 = $i;

    endif;

    $num_tue_six30 = $classtotal_tue_six30 - $count_tue_six30;

/* End Count tue_six30 */

/* Count tue_six10 */

    if( have_rows('tue_six10') ):
      $i = 0;
      while( have_rows('tue_six10') ): the_row();
        if( get_sub_field('name') ) $i++;

          $currentname = get_sub_field('name');

        if ($currentname == $fullname) {
              $booked_tue_six10 = 'booked';
              $totalSessionsBooked++;
            }

     endwhile;

      $count_tue_six10 = $i;

    endif;

    $num_tue_six10 = $classtotal_tue_six10 - $count_tue_six10;

/* End Count tue_six10 */

/* Count wed_six30 */

    if( have_rows('wed_six30') ):
      $i = 0;
      while( have_rows('wed_six30') ): the_row();
        if( get_sub_field('name') ) $i++;

          $currentname = get_sub_field('name');

        if ($currentname == $fullname) {
              $booked_wed_six30 = 'booked';
              $totalSessionsBooked++;
            }

     endwhile;

      $count_wed_six30 = $i;

    endif;

    $num_wed_six30 = $classtotal_wed_six30 - $count_wed_six30;

/* End Count wed_six30 */

/* Count thu_seven */

    if( have_rows('thu_seven') ):
      $i = 0;
      while( have_rows('thu_seven') ): the_row();
        if( get_sub_field('name') ) $i++;

          $currentname = get_sub_field('name');

        if ($currentname == $fullname) {
              $booked_thu_seven = 'booked';
              $totalSessionsBooked++;
            }

     endwhile;

      $count_thu_seven = $i;

    endif;

    $num_thu_seven = $classtotal_thu_seven - $count_thu_seven;

/* End Count thu_seven */

/* Count thu_eight */

    if( have_rows('thu_eight') ):
      $i = 0;
      while( have_rows('thu_eight') ): the_row();
        if( get_sub_field('name') ) $i++;

          $currentname = get_sub_field('name');

        if ($currentname == $fullname) {
              $booked_thu_eight = 'booked';
              $totalSessionsBooked++;
            }

     endwhile;

      $count_thu_eight = $i;

    endif;

    $num_thu_eight = $classtotal_thu_eight - $count_thu_eight;

/* End Count thu_eight */

/* Count sat_nine */

    if( have_rows('sat_nine') ):
      $i = 0;
      while( have_rows('sat_nine') ): the_row();
        if( get_sub_field('name') ) $i++;

          $currentname = get_sub_field('name');

        if ($currentname == $fullname) {
              $booked_sat_nine = 'booked';
              $totalSessionsBooked++;
            }

     endwhile;

      $count_sat_nine = $i;

    endif;

    $num_sat_nine = $classtotal_sat_nine - $count_sat_nine;

/* End Count sat_nine */

/* Count sun_eight15 */

    if( have_rows('sun_eight15') ):
      $i = 0;
      while( have_rows('sun_eight15') ): the_row();
        if( get_sub_field('name') ) $i++;

          $currentname = get_sub_field('name');

        if ($currentname == $fullname) {
              $booked_sun_eight15 = 'booked';
              $totalSessionsBooked++;
            }

     endwhile;

      $count_sun_eight15 = $i;

    endif;

    $num_sun_eight15 = $classtotal_sun_eight15 - $count_sun_eight15;

/* End Count sun_eight15 */

/* Count sun_eleven */

    if( have_rows('sun_eleven') ):
      $i = 0;
      while( have_rows('sun_eleven') ): the_row();
        if( get_sub_field('name') ) $i++;

          $currentname = get_sub_field('name');

        if ($currentname == $fullname) {
              $booked_sun_eleven = 'booked';
              $totalSessionsBooked++;
            }

     endwhile;

      $count_sun_eleven = $i;

    endif;

    $num_sun_eleven = $classtotal_sun_eleven - $count_sun_eleven;

/* End Count sun_eleven */

/* Count fri_five */

    if( have_rows('fri_five') ):
      $i = 0;
      while( have_rows('fri_five') ): the_row();
        if( get_sub_field('name') ) $i++;

          $currentname = get_sub_field('name');

        if ($currentname == $fullname) {
              $booked_fri_five = 'booked';
              $totalSessionsBooked++;
            }

     endwhile;

      $count_fri_five = $i;

    endif;

    $num_fri_five = $classtotal_fri_five - $count_fri_five;

/* End Count fri_five */

/* Count fri_five30 */

    if( have_rows('fri_five30') ):
      $i = 0;
      while( have_rows('fri_five30') ): the_row();
        if( get_sub_field('name') ) $i++;

          $currentname = get_sub_field('name');

        if ($currentname == $fullname) {
              $booked_fri_five30 = 'booked';
              $totalSessionsBooked++;
            }

     endwhile;

      $count_fri_five30 = $i;

    endif;

    $num_fri_five30 = $classtotal_fri_five30 - $count_fri_five30;

/* End Count fri_five30 */



?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<?php zerif_after_header_trigger(); ?>

<div id="content" class="site-content" style="background-color: black;">



  <div class="container">


    <div id="primary" class="content-area">

      <main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">
      <!-- Page Content -->



<?php if(pmpro_hasMembershipLevel(array('6'))) {

    include(locate_template('template-parts/premium-f2lcatchupsession.php'));

  } else{ ?>

  <div class="tp-notloggedin">

        <header class="entry-header">

          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        </header><!-- .entry-header -->

        <div class="entry-content">

          <?php the_content(); ?>

        </div><!-- .entry-content -->

  </div>


<?php }?>

      <!-- /End Page Content -->
      </main><!-- #main -->

    </div><!-- #primary -->

  </div><!-- .container -->

<?php get_footer(); ?>
