
<div class="home-header-wrap">

<?php

	global $wp_customize;

	$zerif_parallax_img1 = get_theme_mod('zerif_parallax_img1',get_template_directory_uri() . '/images/background1.jpg');
	$zerif_parallax_img2 = get_theme_mod('zerif_parallax_img2',get_template_directory_uri() . '/images/background2.png');
	$zerif_parallax_use = get_theme_mod('zerif_parallax_show');

	if ( $zerif_parallax_use == 1 && (!empty($zerif_parallax_img1) || !empty($zerif_parallax_img2)) ) {
		echo '<ul id="parallax_move">';

			if( !empty($zerif_parallax_img1) ) {
				echo '<li class="layer layer1" data-depth="0.10" style="background-image: url(' . $zerif_parallax_img1 . ');"></li>';
			}
			if( !empty($zerif_parallax_img2) ) {
				echo '<li class="layer layer2" data-depth="0.20" style="background-image: url(' . $zerif_parallax_img2 . ');"></li>';
			}

		echo '</ul>';

	}

	$zerif_bigtitle_show = get_theme_mod('zerif_bigtitle_show');

	if( isset($zerif_bigtitle_show) && $zerif_bigtitle_show != 1 ):

		echo '<div class="header-content-wrap">';

		if ( is_user_logged_in() ) { ?>

			<article class="outer-level-wrapper">

			  <!-- Level Logoin section -->
			      <div class="level-wrapper">

			        <div class="level-logo">
			        
			          <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/F2L-logo-levels.svg" alt="FLAB2LEAN level Logo">

			        </div>

			        <div class="level-info">

			          <h2>Welcome Back <?php $current_user = wp_get_current_user(); echo $current_user->user_login ; ?></h2>
			          <p class="mobile-starp"><span>FLAB</span>2<span>LEAN</span></p>
			          
			          <a href="<?php bloginfo('url');?>/your-profile" class="level-button">YOUR PROFILE PAGE</a>

			        </div>

			      </div>
			  <!-- End /Level Logoin section -->

			</article>


		           <?php };


	elseif ( isset( $wp_customize ) ):

		echo '<div class="header-content-wrap zerif_hidden_if_not_customizer">';

	endif;

	if( (isset($zerif_bigtitle_show) && $zerif_bigtitle_show != 1) || isset( $wp_customize ) ):

		echo '<div class="container big-title-container">';

		/* Big title */

		$zerif_bigtitle_title = get_theme_mod( 'zerif_bigtitle_title', __('To add a title here please go to Customizer, "Big title section"','zerif') );

		if( !empty($zerif_bigtitle_title) ):

			echo '<h1 class="intro-text">'.$zerif_bigtitle_title.'</h1>';

		elseif ( isset( $wp_customize ) ):

			echo '<h1 class="intro-text zerif_hidden_if_not_customizer"></h1>';

		endif;

		/* Buttons */

		$zerif_bigtitle_redbutton_label = get_theme_mod( 'zerif_bigtitle_redbutton_label',__('One button','zerif') );
		$zerif_bigtitle_redbutton_url = get_theme_mod( 'zerif_bigtitle_redbutton_url','#' );

		$zerif_bigtitle_greenbutton_label = get_theme_mod( 'zerif_bigtitle_greenbutton_label',__('Another button','zerif') );
		$zerif_bigtitle_greenbutton_url = get_theme_mod( 'zerif_bigtitle_greenbutton_url','#' );


		if( (!empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url)) ||

		(!empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url))):


			echo '<div class="buttons">';

				zerif_big_title_buttons_top_trigger();

				/* Red button */

				if (!empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url)):

					echo '<a href="'.$zerif_bigtitle_redbutton_url.'" class="btn btn-primary custom-button red-btn">'.$zerif_bigtitle_redbutton_label.'</a>';

				elseif ( isset( $wp_customize ) ):

					echo '<a href="" class="btn btn-primary custom-button red-btn zerif_hidden_if_not_customizer"></a>';

				endif;

				/* Green button */

				if (!empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url)):

					echo '<a href="'.$zerif_bigtitle_greenbutton_url.'" class="btn btn-primary custom-button green-btn">'.$zerif_bigtitle_greenbutton_label.'</a>';

				elseif ( isset( $wp_customize ) ):

					echo '<a href="" class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"></a>';

				endif;

				zerif_big_title_buttons_bottom_trigger();


			echo '</div>';


		endif;

		echo '</div>';
		?>
			<!-- <h2 class="intro-text pt-intro-text">FLAB2LEAN 8th May</h2> -->
			<div class="pt-header">
			  <img src="http://primaltraininguk.com/wp-content/uploads/2016/04/F2L.png" alt="" />
			  <h2 class="intro-text pt-intro-text">7th April</h2>
			</div>
			<script src="//www.powr.io/powr.js" external-type="html"></script>
			<div class="powr-countdown-timer" id="6e53b6e3_1453644543514"></div>
		<?php

	echo '</div><!-- .header-content-wrap -->';

	endif;

	echo '<div class="clear"></div>';


?>



</div><!--.home-header-wrap -->
