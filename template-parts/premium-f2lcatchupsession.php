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

            <!-- mon_six-->
            <?php if ($booked_mon_six == booked) {
              echo '<h3>Your Booked in for '.$mon_six[0].' '.$mon_six[1].' FLAB2LEAN Catch-Up Session</h3>';
            }; ?>
						<!-- End mon_six-->

						<!-- tue_six30-->
            <?php if ($booked_tue_six30 == booked) {
              echo '<h3>Your Booked in for '.$tue_six30[0].' '.$tue_six30[1].' FLAB2LEAN Catch-Up Session</h3>';
            }; ?>
						<!-- End tue_six30-->

						<!-- tue_six10-->
            <?php if ($booked_tue_six10 == booked) {
              echo '<h3>Your Booked in for '.$tue_six10[0].' '.$tue_six10[1].' FLAB2LEAN Catch-Up Session</h3>';
            }; ?>
						<!-- End tue_six10-->

						<!-- wed_six30-->
            <?php if ($booked_wed_six30 == booked) {
              echo '<h3>Your Booked in for '.$wed_six30[0].' '.$wed_six30[1].' FLAB2LEAN Catch-Up Session</h3>';
            }; ?>
						<!-- End wed_six30-->

						<!-- thu_seven-->
            <?php if ($booked_thu_seven == booked) {
              echo '<h3>Your Booked in for '.$thu_seven[0].' '.$thu_seven[1].' FLAB2LEAN Catch-Up Session</h3>';
            }; ?>
						<!-- End thu_seven-->

						<!-- thu_eight-->
            <?php if ($booked_thu_eight == booked) {
              echo '<h3>Your Booked in for '.$thu_eight[0].' '.$thu_eight[1].' FLAB2LEAN Catch-Up Session</h3>';
            }; ?>
						<!-- End thu_eight-->

						<!-- sat_nine-->
            <?php if ($booked_sat_nine == booked) {
              echo '<h3>Your Booked in for '.$sat_nine[0].' '.$sat_nine[1].' FLAB2LEAN Catch-Up Session</h3>';
            }; ?>
						<!-- End sat_nine-->

						<!-- sun_eight15-->
            <?php if ($booked_sun_eight15 == booked) {
              echo '<h3>Your Booked in for '.$sun_eight15[0].' '.$sun_eight15[1].' FLAB2LEAN Catch-Up Session</h3>';
            }; ?>
						<!-- End sun_eight15-->

						<!-- sun_eleven-->
            <?php if ($booked_sun_eleven == booked) {
              echo '<h3>Your Booked in for '.$sun_eleven[0].' '.$sun_eleven[1].' FLAB2LEAN Catch-Up Session</h3>';
            }; ?>
						<!-- End sun_eleven-->

						<!-- fri_five-->
            <?php if ($booked_fri_five == booked) {
              echo '<h3>Your Booked in for '.$fri_five[0].' '.$fri_five[1].' FLAB2LEAN Catch-Up Session</h3>';
            }; ?>
						<!-- End fri_five-->

						<!-- fri_five30-->
            <?php if ($booked_fri_five30 == booked) {
              echo '<h3>Your Booked in for '.$fri_five30[0].' '.$fri_five30[1].' FLAB2LEAN Catch-Up Session</h3>';
            }; ?>
						<!-- End fri_five30-->

          </div>

        </div>


				<div class="ftwol-main-box">

					<div class="ftwol-general-text"><?php the_field('general_text'); ?></div>

					<div class="classes" style="max-width: 100%; justify-content: center;">

              <!-- mon_six -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($booked_mon_six == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text"><?php echo $mon_six[0];?></p>
                  <p class="class-time class-text"><?php echo $mon_six[1];?></p>
                  <p class="class-number class-text"><?php echo $num_mon_six;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($num_mon_six > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='mon_six' data-which=' ". $mon_six[0]." ".$mon_six[1]." ' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End mon_six -->

							<!-- tue_six30 -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($booked_tue_six30 == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text"><?php echo $tue_six30[0];?></p>
                  <p class="class-time class-text"><?php echo $tue_six30[1];?></p>
                  <p class="class-number class-text"><?php echo $num_tue_six30;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($num_tue_six30 > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='tue_six30' data-which=' ". $tue_six30[0]." ".$tue_six30[1]." ' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End tue_six30 -->

							<!-- tue_six10 -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($booked_tue_six10 == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text"><?php echo $tue_six10[0];?></p>
                  <p class="class-time class-text"><?php echo $tue_six10[1];?></p>
                  <p class="class-number class-text"><?php echo $num_tue_six10;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($num_tue_six10 > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='tue_six10' data-which=' ". $tue_six10[0]." ".$tue_six10[1]." ' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End tue_six10 -->

							<!-- wed_six30 -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($booked_wed_six30 == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text"><?php echo $wed_six30[0];?></p>
                  <p class="class-time class-text"><?php echo $wed_six30[1];?></p>
                  <p class="class-number class-text"><?php echo $num_wed_six30;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($num_wed_six30 > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='wed_six30' data-which=' ". $wed_six30[0]." ".$wed_six30[1]." ' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End wed_six30 -->

							<!-- thu_seven -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($booked_thu_seven == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text"><?php echo $thu_seven[0];?></p>
                  <p class="class-time class-text"><?php echo $thu_seven[1];?></p>
                  <p class="class-number class-text"><?php echo $num_thu_seven;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($num_thu_seven > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='thu_seven' data-which=' ". $thu_seven[0]." ".$thu_seven[1]." ' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End thu_seven -->

							<!-- thu_eight -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($booked_thu_eight == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text"><?php echo $thu_eight[0];?></p>
                  <p class="class-time class-text"><?php echo $thu_eight[1];?></p>
                  <p class="class-number class-text"><?php echo $num_thu_eight;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($num_thu_eight > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='thu_eight' data-which=' ". $thu_eight[0]." ".$thu_eight[1]." ' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End thu_eight -->

							<!-- sat_nine -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($booked_sat_nine == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text"><?php echo $sat_nine[0];?></p>
                  <p class="class-time class-text"><?php echo $sat_nine[1];?></p>
                  <p class="class-number class-text"><?php echo $num_sat_nine;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($num_sat_nine > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='sat_nine' data-which=' ". $sat_nine[0]." ".$sat_nine[1]." ' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End sat_nine -->

							<!-- sun_eight15 -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($booked_sun_eight15 == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text"><?php echo $sun_eight15[0];?></p>
                  <p class="class-time class-text"><?php echo $sun_eight15[1];?></p>
                  <p class="class-number class-text"><?php echo $num_sun_eight15;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($num_sun_eight15 > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='sun_eight15' data-which=' ". $sun_eight15[0]." ".$sun_eight15[1]." ' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End sun_eight15 -->

							<!-- sun_eleven -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($booked_sun_eleven == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text"><?php echo $sun_eleven[0];?></p>
                  <p class="class-time class-text"><?php echo $sun_eleven[1];?></p>
                  <p class="class-number class-text"><?php echo $num_sun_eleven;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($num_sun_eleven > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='sun_eleven' data-which=' ". $sun_eleven[0]." ".$sun_eleven[1]." ' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End sun_eleven -->


<div class="premium-bootcamp" style="padding-top: 150px; width: 100%;">
	<!-- Start Bootcamp for TP -->
	<div class="boot-bootcamp">
	  <div class="inner-bootcamp">
	    <h1>PREMIUM BOOTCAMPS</h1>
	    <h2>BOOK YOUR PLACE</h2>
	  </div>
	</div>
	<!-- End Bootcamp for TP -->
</div>

							<!-- fri_five -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($booked_fri_five == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text"><?php echo $fri_five[0];?></p>
                  <p class="class-time class-text"><?php echo $fri_five[1];?></p>
                  <p class="class-number class-text"><?php echo $num_fri_five;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($num_fri_five > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='fri_five' data-which=' ". $fri_five[0]." ".$fri_five[1]." ' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End fri_five -->

							<!-- fri_five30 -->
                <div class="class-wrapper f2l-class-wrapper">
                  <?php
                   if ($booked_fri_five30 == booked) {
                     echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
                   }
                   ?>
                  <p class="class-time class-text"><?php echo $fri_five30[0];?></p>
                  <p class="class-time class-text"><?php echo $fri_five30[1];?></p>
                  <p class="class-number class-text"><?php echo $num_fri_five30;?></p>
                  <p class="class-starp class-text">Space Available</p>

                  <?php
                  if ($totalSessionsBooked < $logedspaces){

                    if ($num_fri_five30 > 0) {

                      echo "<a class='bc-button class-button classftwol' data-class='fri_five30' data-which=' ". $fri_five30[0]." ".$fri_five30[1]." ' href=''>Book This Class</a>";

                      } else {
                        echo "<h3>Fully Booked</h3>";
                      }

                  }else{
                    // echo "More Than Two Booked";
                  };?>

                </div>
              <!-- End fri_five30 -->

					</div>

				</div>
			</div><!-- End Boot Camp Wrapper div -->
