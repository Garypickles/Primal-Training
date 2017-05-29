<?php
/*
 * Template Name: Active Leaderboard 2017
 * Description: Active Leaderboard 2017
 */

if(isset($_GET['myNumber'])){

    $num = $_GET['myNumber'];
    $current_user = wp_get_current_user();
    $fullname = $current_user->user_login;
    $achivedOn = date('j F Y');
    $url = get_query_var('pagename');


    $row = array(
      'f2lname' => $fullname,
      'f2l_time_set'  => $num,
      'f2l_date_set'  => $achivedOn
    );


    if ($num > '00:10') {
      $i = add_row('f2lleaderboard', $row);
    }

    header('Location:'.$url);


 }else{
  // echo 'no values' ;
 }


get_header(); ?>

<?php
// sorting which week where on
$coursestartdate = get_field('course_start_date');
// Just the date
// $createDate = new DateTime($coursestartdate);

// $strip = $createDate->format('d/m/Y');
// Today
$today = date("y-m-d g:i");
// Difference in Min
$difference = (strtotime($today) - strtotime($coursestartdate))+86400;
// Differance in Weeks
$difftime = $difference / 604800;
// Differance in Weeks integer
$difftimeint = intval($difftime);
// Day of the week in Minutes
$dayoftheweekmin = ($difftime - $difftimeint) * 604800;
// Day of the week in Seconds
$dayoftheweeksec = $dayoftheweekmin * 60;
// how may Minutes from course date
$day = intval($dayoftheweekmin / 86400);
?>

<div class="hero" style="background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2016/leaderboard-hero.jpg)">
    <div class="hero-content-wrapper">
      <div class="logo">
        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-logo-orig.svg" alt="Flab 2 Lean" />
      </div>
      <h1>Leaderboard</h1>
    </div>
</div>

<section class="grey-section">

<div class="leaderboard">
  <?php
  // Get repeater value
  $repeater = get_field('f2lleaderboard');
  $p=1; // Set Count


  // Obtain list of columns
  foreach ($repeater as $key => $row) {
  	$the_name[$key] = $row['f2lname'];
  	$the_settime[$key] = $row['f2l_time_set'];
  	$the_date[$key] = $row['f2l_date_set'];
  }

  // Sort the data by restaurant name column, ascending
  array_multisort($the_settime, SORT_ASC, $repeater);

  // Display newly orded columns
  // Unsure if this is the optimal way to do this...
  ?>
  <!-- Add Target Time -->
  <div class="time-set">
    <div class="position">F2L</div>
    <div class="name" style="flex: 1 1 100%; text-align: center;">Target Time 15:00</div>
  </div>
  <?php
  foreach( $repeater as $row ) {
     //change date format
        $a = strptime($row['f2l_date_set'], '%d/%m/%Y');
        $timestamp = mktime(0, 0, 0, $a['tm_mon']+1, $a['tm_mday'], $a['tm_year']+1900);
        $setdiff = strtotime($today) - $timestamp;
    ?>

    <?php if ($setdiff > $dayoftheweekmin) {
      // Show Nothing

    }else{ ?>

          <!-- Leaderboard Entry -->
          <div class="time-set">
            <div class="position"><?php echo $p; ?></div>
            <div class="target-time"><?php echo $row['f2lname']; ?></div>
            <div class="program-time-set"><?php echo $row['f2l_time_set']; ?></div>
            <div class="date-set"><?php echo $row['f2l_date_set']; ?></div>
          </div>
          <!-- /Leaderboard Entry -->

        <?php
          // Add 1 To the postion count
          $p=$p+1;
        }
      }
    ?>

</div>


</section>
<?php get_footer(); ?>
