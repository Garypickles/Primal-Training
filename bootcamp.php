<?php
/*
 * Template Name: Bootcamp
 * Description: Bootcamp check in page.
 */

 if(isset($_GET['myClass'])){

   $current_user = wp_get_current_user();

     $class = $_GET['myClass'];
     $fullname = $current_user->user_login;
     $achivedOn = date('j F Y');

     $row = array(
      'name' => $fullname,
      'date'  => $achivedOn
    );

     $i = add_row($class, $row);

     header('Location: http://primaltraininguk.com/bootcamp');


  }else{

  }


 get_header();

$classtotal = 30;
$current_username = wp_get_current_user();
$fullname = $current_user->user_login;

$bookedSunday = 'null';
$bookedMonday = 'null';
$bookedTuesday = 'null';
$bookedWednesday = 'null';
$bookedFridaySix = 'null';
$bookedFridaySeven = 'null';




/* Friday six Count */
if( have_rows('six_class') ):
  $i = 0;
  while( have_rows('six_class') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');
    if ($currentname == $fullname) {
      $bookedFridaySix = 'booked';
    }

 endwhile;
  $fridaysixCount = $i;
endif;
/* End Friday six Count */

/* Friday Seven Count */
if( have_rows('seven_class') ):
  $i = 0;
  while( have_rows('seven_class') ): the_row();
    if( get_sub_field('name') ) $i++;

      $currentname = get_sub_field('name');
    if ($currentname == $fullname) {
      $bookedFridaySeven = 'booked';
    }

 endwhile;
  $fridaysevenCount = $i;
endif;
/* End Fridayseven Count */

    $sunnum = $classtotal - $sundayCount;
    $monnum = $classtotal - $mondayCount;
    $tuenum = $classtotal - $tuesdayCount;
    $wednum = $classtotal - $wednesdayCount;
    $sixnum = $classtotal - $fridaysixCount;
    $sevennum = $classtotal - $fridaysevenCount;

?>



  <div class="confirm-wrapper confirm-hidden">
    <h3>Message</h3><a class="confirm-cofirm bc-button animated" href="">CONFIRM PLACE</a> <a class="confirm-cancel bc-button animated" href="">CANCEL</a>
  </div>
  <div class="content-area" id="primary">
    <main class="site-main" id="main" role="main">
      <?php
        if(pmpro_has_membership_access('612'))
         {
             ?>
      <div class="bootcamp-wrapper">
        <div class="success-wrapper none">
          <h2>Your place is Booked.</h2>
        </div>
        <div class="man figure"><img alt="" src="<?php bloginfo('url');?>/wp-content/uploads/2016/bootcamp-man.png"></div>
        <div class="woman figure"><img alt="" src="<?php bloginfo('url');?>/wp-content/uploads/2016/bootcamp-woman.png"></div>
        <div class="main-box">


          <h1 class="headline">Boot Camp</h1>
          <p class="class-week">Weekly Boot Camps</p>
          <p class="class-info"><?php the_field('general_text'); ?></p>
          <div class="classes">






            <!-- Everybody -->



            <div class="class-wrapper">
              <?php
               if ($bookedFridaySix == booked) {
                 echo '<div class = "booking-confirm-tab"><p>BOOKED</p></div>';
               }
               ?>
              <p class="class-time class-text">Wednesday</p>
              <p class="class-time class-text">6:00pm</p>
              <p class="class-number class-text"><?php echo $sixnum;?></p>
              <p class="class-starp class-text">Spaces Available</p>
              <?php
                 if ($sixnum > 0) {
                   ?><a class="bc-button class-button class-submit" data-class='six_class' data-which='Wednesday 6:00pm' href="">Book This Class</a> <?php
                 } else {
                   echo "<h3>Fully Booked</h3>";
                 }
                 ?>
            </div>

            <div class="class-wrapper">
              <?php
               if ($bookedFridaySeven == booked) {
                 echo '<div class = "booking-confirm-tab"><p>BOOKED</p></div>';
               }
               ?>
              <p class="class-time class-text">Saturday</p>
              <p class="class-time class-text">8:15am</p>
              <p class="class-number class-text"><?php echo $sevennum;?></p>
              <p class="class-starp class-text">Spaces Available</p>
              <?php
               if ($sevennum > 0) {
                 ?><a class="bc-button class-button class-submit" data-class='seven_class' data-which='Saturday 8:15am' href="">Book This Class</a> <?php
               } else {
                 echo "<h3>Fully Booked</h3>";
               }
               ?>
            </div>

            <!-- End Everybody -->


          </div>

          <div class="bootcamp-footer">
            <p>

            <span>FLAB</span>2<span>LEAN</span> <?php } ?>Weekley bootcamp session's with Paul & Dave, Select you session this week, Don't miss out!</p>
          </div>

        </div>
      </div><!-- End Boot Camp Wrapper div -->

 

    </main><!-- #main -->
  </div><!-- #primary -->

  <script type="text/javascript">


 $url = "http://primaltraininguk.com";
 $current_page = "bootcamp"

    $( document ).ready(function() {

      var checksuccess = localStorage.getItem('placebooked');

      if(checksuccess == 'Sucess') {

        $(".success-wrapper").removeClass("none");

        localStorage.removeItem("placebooked");
      }
      else {
        // alert("Nope....");
      }



        $(".class-submit").on('click', function(){
          event.preventDefault();
          $class = $(this).data('class');
          $dayofweek = $(this).data('which');
          $(".confirm-cofirm").attr('href', $url+'/'+$current_page+'/?myClass='+$class)
          $(".confirm-wrapper h3" ).text( "Your about to book your place on " + $dayofweek + " Bootcamp" );
          $(".confirm-wrapper").toggleClass("confirm-hidden");

          $(".confirm-wrapper").children().each(function(){
               $(this).addClass( "fadeInUp" );
          });

        });

        $(".confirm-cancel").on('click', function(){
          event.preventDefault();
          $(".confirm-wrapper").toggleClass("confirm-hidden");
        });

        $(".confirm-cofirm").on('click', function(){
          $( ".confirm-wrapper" ).toggleClass( "confirm-hidden" );
          var idvalue='Sucess';
          localStorage.setItem('placebooked', idvalue);

        });
  });

 </script>


 <?php

 get_footer();
