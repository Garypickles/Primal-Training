<?php
/*
 * Template Name: Landing Page
 * Description: Landing Page Template.
 */

 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">
      <?php putRevSlider("pagehero") ?>

      <?php if (function_exists("add_formcraft_form")) { add_formcraft_form("[fc id='4' type='popup' bind='.lp-button'][/fc]"); } ?>


    <div class="section leadersection">
      <h1>Why we are the best</h1>
      <p>Here at Primal we have had a top reputation for Results all across Yorkshire and then we created FLAB2LEAN. Our course has taken Yorkshire by storm with its results, simplicity and affordability.</p>

      <p>Join hundreds of locals who have completed and are still on their journey toward becoming a fitter, slimmer & healthier you.</p>

      <p>Call now to book or book a free consultation via our survey on the button below</p>

      <div class="button-wrapper">
        <a href="http://primaltraininguk.com/flab2lean-booking-page/" class="get-it-button">WHAT IS FLAB2LEAN?</a>
      </div>

    </div>

    <?php putRevSlider("beforeafter") ?>


    <div class="bluebg">
        <p>Get the results you deserve!</p>
        <a href="#" class="lp-button">free&nbsp;consultation</a>
    </div>

    <div class="whitebg">
        <p>FREE info guide on why we are No1 & Who are Team Primal?</p>
        <a href="http://primaltraininguk.com/wp-content/uploads/2016/12/Team-Primal.pdf" target="_blank" id="get-it-button" class="get-it-button">get&nbsp;it&nbsp;now</a>
    </div>

    <?php putRevSlider("pagehero") ?>

 		</main><!-- #main -->
 	</div><!-- #primary -->


 <?php



 get_footer();
