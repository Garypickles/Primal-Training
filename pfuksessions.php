<?php
/*
 * Template Name: PrimafitUK Sessions
 * Description: PrimafitUK Sessions check in page.
 */

 if(isset($_GET['myClass'])){

   $current_user = wp_get_current_user();

     $class = $_GET['myClass'];
     $fullname = $current_user->user_login;

     $row = array(
      'name' => $fullname
    );

     $i = add_row($class, $row);

     header('Location: http://primaltraininguk.com/primafituk-sessions');


  }else{

  }


 get_header();


    $classtotalSaturday = get_field('sat_number');
    $classtotalSunday = get_field('sun_number');
    $classtotalTuesday = get_field('tue_number');
    $classtotalThursday = get_field('thur_number');
    $classtotalFriday = get_field('fri_number');

    $current_username = wp_get_current_user();
    $fullname = $current_user->user_login;

    $bookedSaturday = 'null';
    $bookedSunday = 'null';
    $bookedTuesday = 'null';
    $bookedTursday = 'null';
    $bookedFriday = 'null';

/* Saturdays Count */
if( have_rows('sat') ):
  $i = 0;
  while( have_rows('sat') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');
    if ($currentname == $fullname) {
      $bookedSaturday = 'booked';
    }

 endwhile;
  $saturdayCount = $i;
endif;
/* End Saturdays Count */

/* Sundays Count */
if( have_rows('sunday') ):
  $i = 0;
  while( have_rows('sunday') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');
    if ($currentname == $fullname) {
      $bookedSunday = 'booked';
    }

 endwhile;
  $sundayCount = $i;
endif;
/* End Sundays Count */

/* Tuesday Count */
if( have_rows('tue') ):
  $i = 0;
  while( have_rows('tue') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');
    if ($currentname == $fullname) {
      $bookedTuesday = 'booked';
    }

 endwhile;
  $tuesdayCount = $i;
endif;
/* End Tuesday Count */

/* Thursday Count */
if( have_rows('thur') ):
  $i = 0;
  while( have_rows('thur') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');
    if ($currentname == $fullname) {
      $bookedThursday = 'booked';
    }

 endwhile;
  $thursdayCount = $i;
endif;
/* End Thursday Count */

/* Friday Count */
if( have_rows('friday') ):
  $i = 0;
  while( have_rows('friday') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');
    if ($currentname == $fullname) {
      $bookedFriday = 'booked';
    }

 endwhile;
  $fridayCount = $i;
endif;
/* End Friday Count */

    $satnum = $classtotalSaturday - $saturdayCount;
    $sunnum = $classtotalSunday - $sundayCount;
    $tuenum = $classtotalTuesday - $tuesdayCount;
    $thunum = $classtotalThursday - $thursdayCount;
    $frinum = $classtotalFriday - $fridayCount;


?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if(pmpro_hasMembershipLevel('1')) { ?>
    <!-- Protected Page Content -->
    <div class="confirm-wrapper confirm-hidden">
    <h3>Message</h3><a class="confirm-cofirm bc-button animated" href="">CONFIRM PLACE</a> <a class="confirm-cancel bc-button animated" href="">CANCEL</a>
  </div>
  <div class="content-area" id="primary">
    <main class="site-main" id="main" role="main">


      <div class="primafituk-sessions-wrapper">

        <div class="primafituk-hero">

          <div class="primafituk-logo-wrapper">

              <svg xmlns="http://www.w3.org/2000/svg" width="1200.112" height="192.942" viewBox="0 0 1200.112 192.942">
                  <path d="M11.27 125.02v66.297H0V0h52.266C67.48 1.986 80.393 8.075 91.008 18.267c12.68 12.27 19.017 26.972 19.017 44.108 0 17.32-6.338 32.09-19.017 44.31-12.68 12.226-27.99 18.336-45.927 18.336H11.27zm0-114.06v103.102h33.81c14.746 0 27.378-5.025 37.898-15.087 10.517-10.056 15.778-22.257 15.778-36.6 0-14.25-5.26-26.383-15.778-36.395-10.52-10.013-23.153-15.02-37.897-15.02H11.27zm172.295 114.06h-37.19v66.297h-11.272V0h52.266c15.212 1.986 28.124 8.075 38.74 18.267 12.68 12.27 19.02 26.972 19.02 44.108 0 17.32-6.34 32.067-19.02 44.245-8.83 8.482-18.928 14.026-30.29 16.643l45.925 68.054H227.94l-44.375-66.296zm-37.19-114.06v103.102h33.81c14.744 0 27.376-5.025 37.896-15.087 10.52-10.056 15.78-22.257 15.78-36.6 0-14.25-5.26-26.383-15.78-36.395-10.52-10.013-23.15-15.02-37.894-15.02h-33.81zM282.885 0v191.317h-11.27V0h11.27zm207.233 0v191.317h-11.27V11.637l-77.132 129.547-77.13-129.547v179.68h-11.272V0h16.343l72.06 121.213L473.777 0h16.34zm97.628 0h-11.552l-73.116 191.317h11.975l32.402-84.154h.04c.013-.05.003-.088.023-.135 1.45-3.508 2.505-7.146 4.198-10.555l30.254-80.236 30.288 80.236h-55.846c.028.24-2.838 7.376-4.16 10.69h64.093l31.84 84.154h11.832L587.747 0z" fill="#D2D3D4"/>
                  <path fill="#939598" d="M687.49 101.074v90.243h-11.27V0h87.2v10.825h-75.93V90.25"/>
                  <path fill="#939598" d="M696.904 74.27h66.388v10.82h-66.388M799.207 0v191.317h-11.27V0h11.27zm83.258 10.825v180.492h-11.128V10.825h-50.435V0h112v10.825h-50.437z"/>
                  <g fill="#8EC641">
                  <path d="M1071.947 0h11.27v137.468c-2.065 14.613-8.405 27.02-19.02 37.21-12.68 12.177-27.986 18.264-45.927 18.264-18.03 0-33.388-6.087-46.065-18.264-12.68-12.177-19.02-26.88-19.02-44.11V0h11.27v130.57c0 14.16 5.26 26.296 15.78 36.395 10.518 10.104 23.195 15.157 38.034 15.157s27.494-5.054 37.97-15.157c10.47-10.1 15.703-22.234 15.703-36.396V0z"/>
                  <path d="M1113.05 71.847L1164.75 0h-13.66l-66.637 91.603v-.557c-.668 1.11-1.398 2.285-2.147 3.525.04 2.03.066 4.06.12 6.087.1 3.902.262 7.77.435 11.63.528.444 1.596-2.01 1.596-2.01l21.413-29.5 80.58 110.542h13.665l-87.062-119.47z"/>
                </g>
              </svg>

              <p class="class-week">Weekly Sessions</p>

          </div>

        </div>


        <div class="success-wrapper none">
          <h2>Your Place Is Booked.</h2>
        </div>


        <div class="primafituk-main-box">

          <div class="general-text"><?php the_field('general_text'); ?></div>

          <div class="classes">

                <div class="class-wrapper">
                  <?php
                   if ($bookedSaturday == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Saturday</p>
                  <p class="class-time class-text">9:00am</p>
                  <p class="class-number class-text"><?php echo $satnum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                   if ($satnum > 0) {

                      if ($bookedSaturday == booked) {
                        echo '<div class="grey-button">Place Book</div>';
                      }else{
                        echo "<a class='bc-button class-button class-submit' data-class='sat' data-which='Sundays 9:00am' href=''>Book This Class</a>";
                      }

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }?>
                </div>

                <div class="class-wrapper">
                  <?php
                   if ($bookedSunday == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Sunday</p>
                  <p class="class-time class-text">8:20am</p>
                  <p class="class-number class-text"><?php echo $sunnum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                   if ($sunnum >= 0) {

                      if ($bookedSunday == booked) {
                        echo '<div class="grey-button">Place Book</div>';
                      }else{
                        echo "<a class='bc-button class-button class-submit' data-class='sunday' data-which='Sundays 8:20am' href=''>Book This Class</a>";
                      }

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }?>
                </div>

                <div class="class-wrapper">
                  <?php
                   if ($bookedTuesday == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Tuesday</p>
                  <p class="class-time class-text">6:45am</p>
                  <p class="class-number class-text"><?php echo $tuenum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                   if ($tuenum > 0) {

                      if ($bookedTuesday == booked) {
                        echo '<div class="grey-button">Place Book</div>';
                      }else{
                        echo "<a class='bc-button class-button class-submit' data-class='tue' data-which='Tuesday 6:45am' href=''>Book This Class</a>";
                      }

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }?>
                </div>

                <div class="class-wrapper">
                  <?php
                   if ($bookedThursday == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Thurday</p>
                  <p class="class-time class-text">8:15pm</p>
                  <p class="class-number class-text"><?php echo $thunum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                   if ($tuenum > 0) {

                      if ($bookedThursday == booked) {
                        echo '<div class="grey-button">Place Book</div>';
                      }else{
                        echo "<a class='bc-button class-button class-submit' data-class='thur' data-which='Thursday 8:15pm' href=''>Book This Class</a>";
                      }

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }?>
                </div>

                <div class="class-wrapper">
                  <?php
                   if ($bookedFriday == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Friday</p>
                  <p class="class-time class-text">5:15pm</p>
                  <p class="class-number class-text"><?php echo $frinum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                   if ($tuenum > 0) {

                      if ($bookedFriday == booked) {
                        echo '<div class="grey-button">Place Book</div>';
                      }else{
                        echo "<a class='bc-button class-button class-submit' data-class='friday' data-which='Friday 5:15pm' href=''>Book This Class</a>";
                      }

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }?>
                </div>

          </div>
          <div class="bootcamp-footer">
            <p>Instuructions Go Here</p>
          </div>
        </div>
      </div>

        <script type="text/javascript">

        $(document).ready(function(e) {
          var $input = $('#refresh');

            $input.val() == 'yes' ? location.reload(true) : $input.val('yes');
        });

        $url = "http://primaltraininguk.com";
        $current_page = "primafituk-sessions"
        $( document )
          .ready( function() {
            var checksuccess = localStorage.getItem( 'placebooked' );
            if ( checksuccess == 'Sucess' ) {
              $( ".success-wrapper" )
                .removeClass( "none" );
              localStorage.removeItem( "placebooked" );
            } else {
              // alert("Nope....");
            }
            $( ".class-submit" )
              .on( 'click', function() {
                event.preventDefault();
                $class = $( this )
                  .data( 'class' );
                $dayofweek = $( this )
                  .data( 'which' );
                $( ".confirm-cofirm" )
                  .attr( 'href', $url + '/' + $current_page + '/?myClass=' + $class )
                $( ".confirm-wrapper h3" )
                  .text( "Your about to book your palce on " + $dayofweek + " PrimafitUK" );
                $( ".confirm-wrapper" )
                  .toggleClass( "confirm-hidden" );
                $( ".confirm-wrapper" )
                  .children()
                  .each( function() {
                    $( this )
                      .addClass( "fadeInUp" );
                  } );
              } );
            $( ".confirm-cancel" )
              .on( 'click', function() {
                event.preventDefault();
                $( ".confirm-wrapper" )
                  .toggleClass( "confirm-hidden" );
              } );
            $( ".confirm-cofirm" )
              .on( 'click', function() {
                $( ".confirm-wrapper" ).toggleClass( "confirm-hidden" );
                var idvalue = 'Sucess';
                localStorage.setItem( 'placebooked', idvalue );
              } );
          } );

        </script>

      <!-- End Boot Camp Wrapper div -->


    <!-- /End Protected Page Content -->

    <?php  } else{ ?>

      <div class="tp-notloggedin">
            
            <header class="entry-header">
              <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
              <?php the_content(); ?>
            </div><!-- .entry-content -->

      </div>

    <?php }?>


	


		</main><!-- #main -->
	</div><!-- #primary -->


<?php

 get_footer();

 ?>
