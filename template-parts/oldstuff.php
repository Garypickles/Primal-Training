<!-- Promo Window Pop Up -->

    <?php if ( get_field( 'pop_up_promo' ) == 1 ) {

          // Check if next level pages bought

          $hasboughtnext = false;

           if ( have_rows( 'next_level_pages' ) ) :
             while ( have_rows( 'next_level_pages' ) ) : the_row();

               $pageid = get_sub_field( 'next_level_page_id' );

              if(pmpro_has_membership_access($pageid)) {
                $hasboughtnext = true;
              };

             endwhile;

           endif;

           // Display Modal or Not

            if ( $hasboughtnext === false ) { ?>

                <!-- modal window -->

                <div class="promo-wrapper" id="promo-wrapper">
                  <div class="promo-modal">
                    <div class="promo-modal-close" id="promo-modal-close">
                      <img alt="" src="<?php bloginfo('url');?>/wp-content/uploads/2016/close-icon.png">
                    </div>
                    <?php the_field( 'promo_window_text' ); ?>
                    <div class="button-wrapper">
                      <a class="op-button" href="<?php the_field( 'promo_link' ); ?>">Book Your Next Course Now!</a>
                    </div>
                  </div>
                </div>

                <!-- /End modal window -->

            <?php } ?>

    <?php } ?> <!-- End If -->

<!-- /End Promo Window Pop Up -->
