<?php
/*
 * Template Name: leaderboard
 * Description: leaderboard
 */

  if(isset($_GET['myNumber'])){

    $current_user = wp_get_current_user();

    $num = $_GET['myNumber'];
    $fullname = $current_user->display_name;
    $achivedOn = date('j F Y');

    $row = array(
      'f2lname' => $fullname,
      'f2l_time_set'  => $num,
      'f2l_date_set'  => $achivedOn
    );

    if ($num > '00:10') {
      $i = add_row('f2lleaderboard', $row);
    }
  
  header('Location: http://primaltraininguk.com/f2l-premium-leaderboard/');

 }else{
  // echo 'no values' ;
 }




get_header();
?>

<div class="hero" style="background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2016/leaderboard-hero.jpg)">
    <div class="hero-content-wrapper">
      <div class="logo">
        <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-logo.svg" alt="Flab 2 Lean" />
      </div>
      <h1>Leaderboard</h1>

    </div>
</div>



<?php
    $row = array(
      'f2lname'	=> $fullname,
      'f2l_time_set'	=> $num,
      'f2l_date_set'	=> $achivedOn
    );

    // $i = add_row('f2lleaderboard', $row);
?>

<!-- Testing Cookies -->


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
  foreach( $repeater as $row ) { ?>

    <!-- Leaderboard Entry -->
    <div class="time-set">
      <div class="position"><?php echo $p; ?></div>
      <div class="name"><?php echo $row['f2lname']; ?></div>
      <div class="program-time-set"><?php echo $row['f2l_time_set']; ?></div>
      <div class="date-set"><?php echo $row['f2l_date_set']; ?></div>
    </div>
    <!-- /Leaderboard Entry -->
  <?php $p=$p+1; } ?>

</div>


</section>
<?php get_footer(); ?>
