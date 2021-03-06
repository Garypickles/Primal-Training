<?php
/*
 * Template Name: Flab2Lean Options
 * Description: Flab2Lean Options Page
 */

get_header();
?>
<div class="options-page-wrapper">

<!-- Options page top section -->
<?php
// normal hero optionspage.php
// Sale Hero sale-hero.php
include(locate_template('template-parts/optionspage.php'));
?>


  <div class="booking-section" id="booknow">
    <h2>Grab Your place<br/>on the next flab2lean Course</h2>
    <h3>Select Your Course, Don't miss out</h3>

    <div class="booking">

			<?php if ( have_rows( 'available_courses' ) ) : ?>
				<?php while ( have_rows( 'available_courses' ) ) : the_row();

					$page_id = get_sub_field('course_page_id');
					$number_spaces = get_sub_field('number_of_spaces');

					$spaces_taken = count( get_post_meta( $page_id, '_pmproap_users', true ) );

					$spaces_remaining = $number_spaces-$spaces_taken;

					if ($spaces_remaining < 0){ $spaces_remaining = 0; }

				?>

					<div class="booking-date
					<?php if ( get_sub_field( 'is_bookable' ) == 1 ) {
						 echo 'true';
						} else {
						 echo 'hidden';
						} ?>
					">
							<div class="booking-info">
								<h3><?php the_sub_field( 'program_title' ); ?></h3>
								<p><?php the_sub_field( 'start_date' ); ?></p>
								<p><?php the_sub_field( 'class_one' ); ?> / <?php the_sub_field( 'class_two' ); ?></p>
								<p><?php echo $spaces_remaining ?></p>
								<p>Spaces Available</p>

								<div class="venue">
									<p><?php the_sub_field( 'course_location' ); ?></p>
									<a href="<?php the_sub_field( 'google_maps_link' ); ?>" target="_blank"><img src="<?php bloginfo('url');?>/wp-content/uploads/2016/link.png" alt="Direections & Map" /></a>
								</div>

							</div>
							<!-- Inbetween Butons -->

							<!-- End Inbetween Butons -->
							<?php
							if ($spaces_remaining <= 0) { ?>
								    <div class="book-full">COURSE FULL</div>
								<?php } else { ?>
								    <a href="<?php the_sub_field( 'course_link' ); ?>" class="book-now">Book Now</a>
								<?php }
							?>

					</div>

				<?php endwhile; ?>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>

    </div>

    <h2>This Could be You..... In Just 10 Weeks!</h2>

  </div>

  <div class="op-footer">
    <div class="logo-wrapper"><img alt="" src="<?php bloginfo('url');?>/wp-content/uploads/2016/F2L-logo-orig.svg">
    </div>
  </div>

</div>

<?php get_footer(); ?>
