<div class="confirm-wrapper confirm-hidden">

		<h3>Message</h3><a class="confirm-cofirm bc-button animated" href="">CONFIRM PLACE</a> <a class="confirm-cancel bc-button animated" href="">CANCEL</a>

	</div>




			<div class="ftwol-sessions-wrapper">

        <div class="ftwol-hero">

          <div class="ftwol-logo-wrapper">

            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-logo-orig.svg" alt="" />

              <p class="class-week">FLAB2LEAN Catch-Up Sessions</p>

          </div>

        </div>


				<div class="success-wrapper none">
					<h2>Your Place Is Booked.</h2>
				</div>

        <!-- Showing the Sessions you've Booked -->
        <div class="your-sessions-wrapper">

          <div class="your-seaaion">

            <!-- Sunday 9:00am -->
            <?php if ($bookedSundayNine == booked) {
              echo '<h3>Your Booked in for Sunday 9:00am FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Sunday 10:00am -->
            <?php if ($bookedSundayTen == booked) {
              echo '<h3>Your Booked in for Sunday 10:00am FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Sunday 11:00am -->
            <?php if ($bookedSundayEleven == booked) {
              echo '<h3>Your Booked in for Sunday 11:00am FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Sunday 12:00pm -->
            <?php if ($bookedSundayTwelve == booked) {
              echo '<h3>Your Booked in for Sunday 12:00pm (Noon) FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Monday 6:00pm -->
            <?php if ($bookedMondaySix == booked) {
              echo '<h3>Your Booked in for Monday 6:00pm FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Monday 8:00pm -->
            <?php if ($bookedMondayEight == booked) {
              echo '<h3>Your Booked in for Monday 8:00pm FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Tuesday 6:00pm -->
            <?php if ($bookedTuesdaySix == booked) {
              echo '<h3>Your Booked in for Tuesday 6:00pm FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Tuesday 7:00pm -->
            <?php if ($bookedTuesdaySeven == booked) {
              echo '<h3>Your Booked in for Tuesday 7:00pm FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Tuesday 8:00pm -->
            <?php if ($bookedTuesdayEight == booked) {
              echo '<h3>Your Booked in for Tuesday 8:00pm FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Wednesday 6:30pm -->
            <?php if ($bookedWednesdaySix == booked) {
              echo '<h3>Your Booked in for Wednesday 6:30pm FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Wednesday 8:15pm -->
            <?php if ($bookedWednesdayEight == booked) {
              echo '<h3>Your Booked in for Wednesday 8:15pm FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Friday 6:00pm -->
            <?php if ($bookedFridaySix == booked) {
              echo '<h3>Your Booked in for Friday 6:00pm FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Friday 7:00pm -->
            <?php if ($bookedFridaySeven == booked) {
              echo '<h3>Your Booked in for Friday 7:00pm FLAB2LEAN Catch-Up Session</h3>';
            }; ?>

            <!-- Friday 8:00pm -->
            <?php if ($bookedFridayEight == booked) {
              echo '<h3>Your Booked in for Friday 8:00pm FLAB2LEAN Catch-Up Session</h3>';
            }; ?>


          </div>

        </div>


				<div class="ftwol-main-box">

					<div class="ftwol-general-text"><?php the_field('general_text'); ?></div>

					<div class="classes" style="max-width: 100%; justify-content: center;">

              <!-- Sunday Nine -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($bookedSundayNine == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Sunday</p>
                  <p class="class-time class-text">9:00am</p>
                  <p class="class-number class-text"><?php echo $sundayninenum;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($sundayninenum > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='sun_nine' data-which='Sunday 9:00am' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End Sunday Nine -->

              <!-- Sunday Ten -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($bookedSundayTen == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Sunday</p>
                  <p class="class-time class-text">10:00am</p>
                  <p class="class-number class-text"><?php echo $sundaytennum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                   if ($sundaytennum > 0) {

                     echo "<a class='bc-button class-button classftwol' data-class='sun_ten' data-which='Sunday 10:00am' href=''>Book This Class</a>";

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }

                 }else{
                   // echo "More Than Two Booked";
                 };?>

                </div>
              <!-- End Sunday Ten -->

              <!-- Sunday Eleven -->

              <!-- End Sunday Eleven -->

              <!-- Sunday Twelve -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($bookedSundayTwelve == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Sunday</p>
                  <p class="class-time class-text">12:00noon</p>
                  <p class="class-number class-text"><?php echo $sundaytwelvenum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                   if ($sundaytwelvenum > 0) {

                        echo "<a class='bc-button class-button classftwol' data-class='sun_twelve' data-which='Sunday 12:00pm (Noon)' href=''>Book This Class</a>";


                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }

                 }else{
                   // echo "More Than Two Booked";
                 };?>

                </div>
              <!-- End Sunday Twelve -->

              <!-- Monday Six -->
                
              <!-- End Monday Six -->

              <!-- Monday Eight -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($bookedMondayEight == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Monday</p>
                  <p class="class-time class-text">8:00pm</p>
                  <p class="class-number class-text"><?php echo $mondayeightnum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                   if ($mondayeightnum > 0) {

                     echo "<a class='bc-button class-button classftwol' data-class='mon_eight' data-which='Monday 8:00pm' href=''>Book This Class</a>";

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }

                 }else{
                   // echo "More Than Two Booked";
                 };?>

                </div>
              <!-- End Monday Eight -->

              <!-- Tuesday Six -->

              <!-- End Tuesday Six -->

              <!-- Tuesday Seven -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($bookedTuesdaySeven == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Tuesday</p>
                  <p class="class-time class-text">7:00pm</p>
                  <p class="class-number class-text"><?php echo $tuesdaysevennum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                   if ($tuesdaysevennum > 0) {

                     echo "<a class='bc-button class-button classftwol' data-class='tue_seven' data-which='Tuesday 7:00pm' href=''>Book This Class</a>";

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }

                 }else{
                   // echo "More Than Two Booked";
                 };?>

                </div>
              <!-- End Tuesday Seven -->

              <!-- Tuesday Eight -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($bookedTuesdayEight == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Tuesday</p>
                  <p class="class-time class-text">8:00pm</p>
                  <p class="class-number class-text"><?php echo $tuesdayeightnum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                   if ($tuesdayeightnum > 0) {

                     echo "<a class='bc-button class-button classftwol' data-class='tue_eight' data-which='Tuesday 8:00pm' href=''>Book This Class</a>";

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }

                 }else{
                   // echo "More Than Two Booked";
                 };?>

                </div>
              <!-- End Tuesday Eight -->

              <!-- Wednesday Six -->

              <!-- End Wednesday Six -->

              <!-- Wednesday Eight -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($bookedWednesdayEight == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Wednesday</p>
                  <p class="class-time class-text">8:15pm</p>
                  <p class="class-number class-text"><?php echo $wednesdayeightnum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                   if ($wednesdayeightnum > 0) {

                     echo "<a class='bc-button class-button classftwol' data-class='wed_eight' data-which='Wednesday 8:15pm' href=''>Book This Class</a>";

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }

                 }else{
                   // echo "More Than Two Booked";
                 };?>

                </div>
              <!-- End Wednesday Eight -->

              <!-- Friday Six -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($bookedFridaySix == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Friday</p>
                  <p class="class-time class-text">6:00pm</p>
                  <p class="class-number class-text"><?php echo $fridaysixnum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                   if ($fridaysixnum > 0) {

                     echo "<a class='bc-button class-button classftwol' data-class='fri_six' data-which='Friday 6:00pm' href=''>Book This Class</a>";

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }

                 }else{
                   // echo "More Than Two Booked";
                 };?>

                </div>
              <!-- End Friday Six -->

              <!-- Friday Seven -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($bookedFridaySeven == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Friday</p>
                  <p class="class-time class-text">7:00pm</p>
                  <p class="class-number class-text"><?php echo $fridaysevennum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                   if ($fridaysevennum > 0) {

                     echo "<a class='bc-button class-button classftwol' data-class='fri_seven' data-which='Friday 7:00pm' href=''>Book This Class</a>";

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }

                 }else{
                   // echo "More Than Two Booked";
                 };?>

                </div>
              <!-- End Friday Seven -->

              <!-- Friday Eight -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($bookedFridayEight == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text">Friday</p>
                  <p class="class-time class-text">8:00pm</p>
                  <p class="class-number class-text"><?php echo $fridayeightnum;?></p>
                  <p class="class-starp class-text">Space Available</p>
                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                   if ($fridayeightnum > 0) {

                     echo "<a class='bc-button class-button classftwol' data-class='fri_eight' data-which='Friday 8:00pm' href=''>Book This Class</a>";

                   } else {
                     echo "<h3>Fully Booked</h3>";
                   }

                 }else{
                   // echo "More Than Two Booked";
                 };?>

                </div>
              <!-- End Friday Eight -->


					</div>

				</div>
			</div><!-- End Boot Camp Wrapper div -->
