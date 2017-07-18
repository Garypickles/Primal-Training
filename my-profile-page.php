<?php
/*
 * Template Name: My Profile Page
 * Description: My Profile Page.
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

     		<div class="mpp-wrapper">

          <div class="mpp-hero-section">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/teamprimallogo.png" alt="Team Primal" />
            <div class="hero-info">
              <h1>Hi &<br>Welcome to Primal Training</h1>
              <p>Here you will be able to book & train with Yorkshire's leading health and fitness team.</p>
            </div>
          </div>

          <div class="hero-info">
            <p>Ensure to log in weekly to never miss out on our upcoming events, healthy lifestyle hints and tips as well as free training advice and seasonal promotions.</p>

            <p>Get healthy. Get fit. Get toned.</p>

            <h2>Get Primal</h2>
          </div>

          <?php
            // load elements for all users
            get_template_part( 'template-parts/profile_page_all' );
           ?>


          <div class="mpp-body-wrapper">

                <?php
                  // load elements for Team Primal
                  get_template_part( 'template-parts/profile_page_tp' );
                 ?>

               <?php
                 // load elements for Premium
                 get_template_part( 'template-parts/profile_page_premium' );
                ?>

            <div class="page-content">
              <!-- Content for all at the bottom -->
            </div>

        </div><!-- Close MPP Body Wrapper -->

    </div> <!-- Close MPP Wrapper -->




 		</main><!-- #main -->
 	</div><!-- #primary -->
<?php

 get_footer();
