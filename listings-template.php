<?php
/*
 * Template Name: User Listings
 * Description: List All Users by page access.
 */

 get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<?php zerif_after_header_trigger(); ?>

<div id="content" class="site-content">



  <div class="container">


    <div id="primary" class="content-area">

      <main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">
      <!-- Page Content -->

<?php

	if(is_super_admin($user_id)) { ?>

	  		<h1>Phase One Courses</h1>

			<div class="all-listings">

				<?php if( have_rows('phase_1_courses') ): ?>
					<?php while( have_rows('phase_1_courses') ): the_row(); 

					$id = get_sub_field('course_id'); ?>

				        <!-- Single List -->
						<div class="single-listing">

						<?php echo do_shortcode("[pmpro_list_addon_users post_id='$id']"); ?>

						</div>
						<!-- End Single List -->
				       
				        
				    <?php endwhile; ?>
				<?php endif; ?>

			</div>

	  		<h1>Phase Two Courses</h1>

			<div class="all-listings">

				<?php if( have_rows('phase_2_courses') ): ?>
					<?php while( have_rows('phase_2_courses') ): the_row(); 

					$id = get_sub_field('course_id'); ?>

				        <!-- Single List -->
						<div class="single-listing">

						<?php echo do_shortcode("[pmpro_list_addon_users post_id='$id']"); ?>

						</div>
						<!-- End Single List -->
				       
				        
				    <?php endwhile; ?>
				<?php endif; ?>

			</div>

	  		<h1>Phase Three Courses</h1>

			<div class="all-listings">

				<?php if( have_rows('phase_3_courses') ): ?>
					<?php while( have_rows('phase_3_courses') ): the_row(); 

					$id = get_sub_field('course_id'); ?>

				        <!-- Single List -->
						<div class="single-listing">

						<?php echo do_shortcode("[pmpro_list_addon_users post_id='$id']"); ?>

						</div>
						<!-- End Single List -->
				       
				        
				    <?php endwhile; ?>
				<?php endif; ?>

			</div>

<?php

		}else {

		   echo "<h1>This is not the page you are looking for!</h1>";

		}

	?>



      <!-- /End Page Content -->
      </main><!-- #main -->

    </div><!-- #primary -->

  </div><!-- .container -->

<?php get_footer(); ?>
