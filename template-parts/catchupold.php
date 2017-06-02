
<!-- Sunday Eleven -->
  <div class="class-wrapper f2l-class-wrapper">
    <?php
     if ($bookedSundayEleven == booked) {
       echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
     }
     ?>
    <p class="class-time class-text">Sunday</p>
    <p class="class-time class-text">11:00am</p>
    <p class="class-number class-text"><?php echo $sundayelevennum;?></p>
    <p class="class-starp class-text">Space Available</p>
    <?php
    if ($totalSessionsBooked < $logedspaces){

     if ($sundayelevennum > 0) {

       echo "<a class='bc-button class-button classftwol' data-class='sun_eleven' data-which='Sunday 11:00am' href=''>Book This Class</a>";

     } else {
       echo "<h3>Fully Booked</h3>";
     }

   }else{
     // echo "More Than Two Booked";
   };?>

  </div>
<!-- End Sunday Eleven -->

<!-- Wednesday Six -->
  <div class="class-wrapper f2l-class-wrapper">
    <?php
     if ($bookedWednesdaySix == booked) {
       echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
     }
     ?>
    <p class="class-time class-text">Wednesday</p>
    <p class="class-time class-text">6:30pm</p>
    <p class="class-number class-text"><?php echo $wednesdaysixnum;?></p>
    <p class="class-starp class-text">Space Available</p>
    <?php
    if ($totalSessionsBooked < $logedspaces){

     if ($wednesdaysixnum > 0) {

       echo "<a class='bc-button class-button classftwol' data-class='wed_six' data-which='Wednesday 6:30pm' href=''>Book This Class</a>";

     } else {
       echo "<h3>Fully Booked</h3>";
     }

   }else{
     // echo "More Than Two Booked";
   };?>

  </div>
<!-- End Wednesday Six -->

<!-- Tuesday Six -->
  <div class="class-wrapper f2l-class-wrapper">
    <?php
     if ($bookedTuesdaySix == booked) {
       echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
     }
     ?>
    <p class="class-time class-text">Tuesday</p>
    <p class="class-time class-text">6:00pm</p>
    <p class="class-number class-text"><?php echo $tuesdaysixnum;?></p>
    <p class="class-starp class-text">Space Available</p>
    <?php
    if ($totalSessionsBooked < $logedspaces){

     if ($tuesdaysixnum > 0) {

       echo "<a class='bc-button class-button classftwol' data-class='tue_six' data-which='Tuesday 6:00pm' href=''>Book This Class</a>";

     } else {
       echo "<h3>Fully Booked</h3>";
     }

   }else{
     // echo "More Than Two Booked";
   };?>

  </div>
<!-- End Tuesday Six -->

<!-- Monday Six -->
  <div class="class-wrapper f2l-class-wrapper">
    <?php
     if ($bookedMondaySix == booked) {
       echo '<div class = "primafituk-booking-confirm-tab"><p>BOOKED</p></div>';
     }
     ?>
    <p class="class-time class-text">Monday</p>
    <p class="class-time class-text">6:00pm</p>
    <p class="class-number class-text"><?php echo $mondaysixnum;?></p>
    <p class="class-starp class-text">Space Available</p>
    <?php
    if ($totalSessionsBooked < $logedspaces){

     if ($mondaysixnum > 0) {

       echo "<a class='bc-button class-button classftwol' data-class='mon_six' data-which='Monday 6:00pm' href=''>Book This Class</a>";

     } else {
       echo "<h3>Fully Booked</h3>";
     }

   }else{
     // echo "More Than Two Booked";
   };?>

  </div>
<!-- End Monday Six -->
