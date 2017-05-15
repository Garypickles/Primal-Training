<?php
/*
 * Template Name: F2L Catch Up Sessions
 * Description: F2L Catch Up Sessions
 */


 if(isset($_GET['myClass'])){

   $current_user = wp_get_current_user();

     $class = $_GET['myClass'];
     $fullname = $current_user->user_login;

     $row = array(
      'name' => $fullname
    );

     $i = add_row($class, $row);

     header('Location: http://primaltraininguk.com/flab2lean-catch-up-sessions/');


  }else{

  }

 get_header();

 /* How Many Spaces a User Can Logon To */

 $logedspaces = get_field( 'how_many_sessions' );

/* Get all the Class Spaces */
    $classtotalSundayNine = get_field('sun_nine_spaces');
    $classtotalSundayTen = get_field('sun_ten_spaces');
    $classtotalSundayEleven = get_field('sun_eleven_spaces');
    $classtotalSundayTwelve = get_field('sun_twelve_spaces');

    $classtotalMondaySix = get_field('mon_six_spaces');
    $classtotalMondayEight = get_field('mon_eight_spaces');

    $classtotalTuesdaySix = get_field('tue_six_spaces');
    $classtotalTuesdaySeven = get_field('tue_seven_spaces');
    $classtotalTuesdayEight = get_field('tue_eight_spaces');

    $classtotalWednesdaySix = get_field('wed_six_spaces');
    $classtotalWednesdayEight = get_field('wed_eight_spaces');

    $classtotalFridaySix = get_field('fri_six_spaces');
    $classtotalFridaySeven = get_field('fri_seven_spaces');
    $classtotalFridayEight = get_field('fri_eight_spaces');


/* Creat all the Booked Varables */

    $bookedSundayNine = 'null';
    $bookedSundayTen = 'null';
    $bookedSundayEleven = 'null';
    $bookedSundayTwelve = 'null';

    $bookedMondaySix = 'null';
    $bookedMondayEight = 'null';

    $bookedTuesdaySix = 'null';
    $bookedTuesdaySeven = 'null';
    $bookedTuesdayEight = 'null';

    $bookedWednesdaySix = 'null';
    $bookedWednesdayEight = 'null';

    $bookedFridaySix = 'null';
    $bookedFridaySeven = 'null';
    $bookedFridayEight = 'null';

    $current_username = wp_get_current_user();
    $fullname = $current_user->user_login;

    /* Sessions You Have Booked */
    $totalSessionsBooked = 0;

/* Count Sunday Nine */
if( have_rows('sun_nine') ):
  $i = 0;
  while( have_rows('sun_nine') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedSundayNine = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $sundaynineCount = $i;

endif;

$sundayninenum = $classtotalSundayNine - $sundaynineCount;

/* End Count Sunday Nine */

/* Count Sunday Ten */
if( have_rows('sun_ten') ):
  $i = 0;
  while( have_rows('sun_ten') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedSundayTen = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $sundaytenCount = $i;

endif;

$sundaytennum = $classtotalSundayTen - $sundaytenCount;

/* End Count Sunday Ten */

/* Count Sunday Eleven */
if( have_rows('sun_eleven') ):
  $i = 0;
  while( have_rows('sun_eleven') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedSundayEleven = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $sundayelevenCount = $i;

endif;

$sundayelevennum = $classtotalSundayEleven - $sundayelevenCount;

/* End Count Sunday Eleven */

/* Count Sunday Twelve */
if( have_rows('sun_twelve') ):
  $i = 0;
  while( have_rows('sun_twelve') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedSundayTwelve = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $sundaytwelveCount = $i;

endif;

$sundaytwelvenum = $classtotalSundayTwelve - $sundaytwelveCount;

/* End Count Sunday Twelve */

/* Count Monday Six */
if( have_rows('mon_six') ):
  $i = 0;
  while( have_rows('mon_six') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedMondaySix = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $mondaysixCount = $i;

endif;

$mondaysixnum = $classtotalMondaySix - $mondaysixCount;

/* End Count Monday Six */

/* Count Monday Eight */
if( have_rows('mon_eight') ):
  $i = 0;
  while( have_rows('mon_eight') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedMondayEight = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $mondayeightCount = $i;

endif;

  $mondayeightnum = $classtotalMondayEight - $mondayeightCount;

/* End Count Monday Eight */

/* Count Tuesday Six */
if( have_rows('tue_six') ):
  $i = 0;
  while( have_rows('tue_six') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedTuesdaySix = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $tuesdaysixCount = $i;

endif;

  $tuesdaysixnum = $classtotalTuesdaySix - $tuesdaysixCount;

/* End Count Tuesday Six */

/* Count Tuesday Seven */
if( have_rows('tue_seven') ):
  $i = 0;
  while( have_rows('tue_seven') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedTuesdaySeven = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $tuesdaysevenCount = $i;

endif;

  $tuesdaysevennum = $classtotalTuesdaySeven - $tuesdaysevenCount;

/* End Count Tuesday Seven */

/* Count Tuesday Eight */
if( have_rows('tue_eight') ):
  $i = 0;
  while( have_rows('tue_eight') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedTuesdayEight = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $tuesdayeightCount = $i;

endif;

  $tuesdayeightnum = $classtotalTuesdayEight - $tuesdayeightCount;

/* End Count Tuesday Eight */

/* Count Wednesday Six */
if( have_rows('wed_six') ):
  $i = 0;
  while( have_rows('wed_six') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedWednesdaySix = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $wednesdaysixCount = $i;

endif;

  $wednesdaysixnum = $classtotalWednesdaySix - $wednesdaysixCount;

/* End Count Wednesday Six */

/* Count Wednesday Eight */
if( have_rows('wed_eight') ):
  $i = 0;
  while( have_rows('wed_eight') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedWednesdayEight = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $wednesdayeightCount = $i;

endif;

  $wednesdayeightnum = $classtotalWednesdayEight - $wednesdayeightCount;

/* End Count Wednesday Eight */

/* Count Friday Six */
if( have_rows('fri_six') ):
  $i = 0;
  while( have_rows('fri_six') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedFridaySix = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $fridaysixCount = $i;

endif;

  $fridaysixnum = $classtotalFridaySix - $fridaysixCount;

/* End Count Friday Six */

/* Count Friday Seven */
if( have_rows('fri_seven') ):
  $i = 0;
  while( have_rows('fri_seven') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedFridaySeven = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $fridaysevenCount = $i;

endif;

  $fridaysevennum = $classtotalFridaySeven - $fridaysevenCount;

/* End Count Friday Seven */

/* Count Friday Eight */
if( have_rows('fri_eight') ):
  $i = 0;
  while( have_rows('fri_eight') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');

    if ($currentname == $fullname) {
          $bookedFridayEight = 'booked';
          $totalSessionsBooked++;
        }

 endwhile;

  $fridayeightCount = $i;

endif;

  $fridayeightnum = $classtotalFridayEight - $fridayeightCount;

/* End Count Friday Eight */

?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<?php zerif_after_header_trigger(); ?>

<div id="content" class="site-content" style="background-color: black;">



  <div class="container">


    <div id="primary" class="content-area">

      <main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">
      <!-- Page Content -->



<?php if(pmpro_hasMembershipLevel(array('7','6'))) {

    include(locate_template('template-parts/f2lcatchupsession.php'));

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
