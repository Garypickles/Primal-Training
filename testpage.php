<?php
/*
 * Template Name: F2L Test Page
 * Description: F2L Test Page
 */

// Delete Session Users
 if(isset($_GET['test'])){

      $val = $_GET['test'];
      $val = substr($val, 7);

      // instance vars.
      $uid        = $_POST['user_id'];       // current user ID
      $field_key  = $val;                    // ACF field name
      $post_id    = $_POST['post_id'];       // Post ID of draw to update
      // $post_id    = 1130;       // Static Post ID

      // Get member_entries field
      $value = get_field($field_key, $post_id);

      $new_value = array();
      foreach ( $value as $id => $entry ) {
        if ($entry['user_id'] == $uid) continue;
        $new_value[$id] = $entry;
      }

      $status = update_field( $field_key, $new_value, $post_id );

    };
// End Delete Session users

  // Just add a row
  $data = 'Data element ';

  $row = array(
    'name'	=> $data
  );

  $i = add_row('sun_nine', $row);




get_header(); ?>


<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<?php zerif_after_header_trigger(); ?>

<div id="content" class="site-content" style="background-color: black;">
  <div class="container">
    <div id="primary" class="content-area">
      <main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">
      <!-- Page Content -->

          <div class="test-section">
            <p>This is how many spaces are allowed <?php the_field( 'sun_nine_spaces' ); ?></p>

            <p>What is the value passed in <?php echo $data; ?></p>

            <?php if ( have_rows( 'sun_nine' ) ) :
              $i = 0;
              ?>

              <ul>
              	<?php while ( have_rows( 'sun_nine' ) ) : the_row(); ?>
              		<li><?php the_sub_field( 'name' ); ?> (<?php echo ++$i; ?>)</li>
              	<?php

                // $i = ++$i;

              endwhile; ?>
              </ul>

            <?php else : ?>
            	<?php // no rows found ?>
            <?php endif; ?>

          </div>

      <!-- /End Page Content -->
      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- .container -->

<?php get_footer(); ?>
