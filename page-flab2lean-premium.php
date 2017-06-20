<?php
/*
 * Template Name: Flab2Lean Premium User Page
 * Description: Flab2Lean Premium User Page.
 */
acf_form_head();

$beforeafter = array(

/* (string) Unique identifier for the form. Defaults to 'acf-form' */
'id' => 'acf-form',

/* (int|string) The post ID to load data from and save data to. Defaults to the current post ID.
Can also be set to 'new_post' to create a new post on submit */
'post_id' => false,

/* (array) An array of post data used to create a post. See wp_insert_post for available parameters.
The above 'post_id' setting must contain a value of 'new_post' */
'new_post' => false,

/* (array) An array of field group IDs/keys to override the fields displayed in this form */
'field_groups' => false,

/* (array) An array of field IDs/keys to override the fields displayed in this form */
'fields' => array( 'field_594154c46f053', 'field_594154ea6f054'),

/* (boolean) Whether or not to show the post title text field. Defaults to false */
'post_title' => false,

/* (boolean) Whether or not to show the post content editor field. Defaults to false */
'post_content' => false,

/* (boolean) Whether or not to create a form element. Useful when a adding to an existing form. Defaults to true */
'form' => true,

/* (array) An array or HTML attributes for the form element */
'form_attributes' => array(),

/* (string) The URL to be redirected to after the form is submit. Defaults to the current URL with a GET parameter '?updated=true'.
A special placeholder '%post_url%' will be converted to post's permalink (handy if creating a new post) */
'return' => '',

/* (string) Extra HTML to add before the fields */
'html_before_fields' => '',

/* (string) Extra HTML to add after the fields */
'html_after_fields' => '',

/* (string) The text displayed on the submit button */
'submit_value' => __("Update", 'acf'),

/* (string) A message displayed above the form after being redirected. Can also be set to false for no message */
'updated_message' => __("Post updated", 'acf'),

/* (string) Determines where field labels are places in relation to fields. Defaults to 'top'.
Choices of 'top' (Above fields) or 'left' (Beside fields) */
'label_placement' => 'top',

/* (string) Determines where field instructions are places in relation to fields. Defaults to 'label'.
Choices of 'label' (Below labels) or 'field' (Below fields) */
'instruction_placement' => 'label',

/* (string) Determines element used to wrap a field. Defaults to 'div'
Choices of 'div', 'tr', 'td', 'ul', 'ol', 'dl' */
'field_el' => 'div',

/* (string) Whether to use the WP uploader or a basic input for image and file fields. Defaults to 'wp'
Choices of 'wp' or 'basic'. Added in v5.2.4 */
'uploader' => 'wp',

/* (boolean) Whether to include a hidden input field to capture non human form submission. Defaults to true. Added in v5.3.4 */
'honeypot' => true,

/* (string) HTML used to render the updated message. Added in v5.5.10 */
'html_updated_message'	=> '<div id="message" class="updated"><p>%s</p></div>',

/* (string) HTML used to render the submit button. Added in v5.5.10 */
'html_submit_button'	=> '<input type="submit" class="acf-button button button-primary button-large" value="%s" />',

/* (string) HTML used to render the submit button loading spinner. Added in v5.5.10 */
'html_submit_spinner'	=> '<span class="acf-spinner"></span>'

);
$weight = array(

/* (string) Unique identifier for the form. Defaults to 'acf-form' */
'id' => 'acf-form-weight',

/* (int|string) The post ID to load data from and save data to. Defaults to the current post ID.
Can also be set to 'new_post' to create a new post on submit */
'post_id' => false,

/* (array) An array of post data used to create a post. See wp_insert_post for available parameters.
The above 'post_id' setting must contain a value of 'new_post' */
'new_post' => false,

/* (array) An array of field group IDs/keys to override the fields displayed in this form */
'field_groups' => false,

/* (array) An array of field IDs/keys to override the fields displayed in this form */
'fields' => array( 'field_594154f76f055'),

/* (boolean) Whether or not to show the post title text field. Defaults to false */
'post_title' => false,

/* (boolean) Whether or not to show the post content editor field. Defaults to false */
'post_content' => false,

/* (boolean) Whether or not to create a form element. Useful when a adding to an existing form. Defaults to true */
'form' => true,

/* (array) An array or HTML attributes for the form element */
'form_attributes' => array(),

/* (string) The URL to be redirected to after the form is submit. Defaults to the current URL with a GET parameter '?updated=true'.
A special placeholder '%post_url%' will be converted to post's permalink (handy if creating a new post) */
'return' => '',

/* (string) Extra HTML to add before the fields */
'html_before_fields' => '',

/* (string) Extra HTML to add after the fields */
'html_after_fields' => '',

/* (string) The text displayed on the submit button */
'submit_value' => __("Update", 'acf'),

/* (string) A message displayed above the form after being redirected. Can also be set to false for no message */
'updated_message' => __("Post updated", 'acf'),

/* (string) Determines where field labels are places in relation to fields. Defaults to 'top'.
Choices of 'top' (Above fields) or 'left' (Beside fields) */
'label_placement' => 'top',

/* (string) Determines where field instructions are places in relation to fields. Defaults to 'label'.
Choices of 'label' (Below labels) or 'field' (Below fields) */
'instruction_placement' => 'label',

/* (string) Determines element used to wrap a field. Defaults to 'div'
Choices of 'div', 'tr', 'td', 'ul', 'ol', 'dl' */
'field_el' => 'div',

/* (string) Whether to use the WP uploader or a basic input for image and file fields. Defaults to 'wp'
Choices of 'wp' or 'basic'. Added in v5.2.4 */
'uploader' => 'wp',

/* (boolean) Whether to include a hidden input field to capture non human form submission. Defaults to true. Added in v5.3.4 */
'honeypot' => true,

/* (string) HTML used to render the updated message. Added in v5.5.10 */
'html_updated_message'	=> '<div id="message" class="updated"><p>%s</p></div>',

/* (string) HTML used to render the submit button. Added in v5.5.10 */
'html_submit_button'	=> '<input type="submit" class="acf-button button button-primary button-large" value="%s" />',

/* (string) HTML used to render the submit button loading spinner. Added in v5.5.10 */
'html_submit_spinner'	=> '<span class="acf-spinner"></span>'

);

 get_header(); ?>

 <div class="clear"></div>

 </header> <!-- / END HOME SECTION  -->

 <?php zerif_after_header_trigger(); ?>

<div id="content" class="site-content">

 	<div class="container">

 		<div id="primary" class="content-area user-page-settings">
      <!-- Top User Section -->
      <div class="top-user-section">
        <!-- User Images -->
        <div class="tp-user-images">
          <div class="tp-image-before user-image"> </div>
          <div class="tp-image-current user-image"> </div>
        </div><!-- User Images -->
        <div class="tp-user-info">
          <h1>Susan</h1>
          <div class="tp-info-item"><p>Start Weight:</p></div>
          <div class="tp-info-item"><p>Current Weight:</p></div>
          <div class="tp-info-item"><p>Height:</p></div>
          <div class="tp-info-item"><p>Body Fat:</p></div>
        </div>
      </div><!-- End Top User Section -->

 			<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main" role="main">

            <?php
              // TO SHOW THE PAGE CONTENTS
              while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                  <div class="entry-content-page">
                      <?php the_content(); ?> <!-- Page Content -->
                  </div><!-- .entry-content-page -->

              <?php
              endwhile; //resetting the page loop
              wp_reset_query(); //resetting the page query
              ?>

          <div class="before-after">
            <h1><?php $current_user = wp_get_current_user(); echo $current_user->user_login ; ?></h1>
          </div>

          <div class="before-after override">
            <?php acf_form($beforeafter); ?>
          </div>

          <div class="weight-section override">
            <?php acf_form($weight); ?>
          </div>

 			</main><!-- #main -->

 		</div><!-- #primary -->

 	</div><!-- .container -->

</div><!-- .site-content -->

 <?php get_footer(); ?>
