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
'fields' => array( 'field_594154c46f053', 'field_594154ea6f054', 'field_594f850404b8a', 'field_594f855204b8b', 'field_594f858104b8c', 'field_594f85c112d55', 'field_594f85dc12d56'),

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
'uploader' => 'basic',

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

$measurement = array(

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
'fields' => array( 'field_5953c5b60b828'),

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

 <!-- Upload Model -->
<div class="uploader-model none" id="uploader-model">
  <div class="lds-css ng-scope">
  <div class="lds-gear" style="100%;height:100%"><div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>
</div>
 <!-- Upload Model -->

 </header> <!-- / END HOME SECTION  -->

 <?php zerif_after_header_trigger(); ?>

<div id="content" class="site-content" style="background-color: black;">

 	<div class="container">

 		<div id="primary" class="content-area user-page-settings">

      <!-- top user section form -->
      <div class="before-after override" id="before-after">
        <?php acf_form($beforeafter); ?>
      </div>
      <!-- End top user section form -->

      <!-- Top User Section -->
      <div class="top-user-section">
        <div class="top-section-promt">
          <?php $before = get_field( 'before' ); ?>
            <?php if ( $before ) {

            }else{
              ?>
              <img src="<?php bloginfo( url ); ?>/wp-content/themes/zerif-pro/images/startby.png" alt="Start By">
            <?php } ?>
        </div>
        <!-- User Images -->
          <div class="tp-user-images">

              <div class="tp-image-before user-image"
              <?php $before = get_field( 'before' );
                    $imageBefore = $before['sizes']['medium'];
              ?>
                  <?php if ( $before ) { ?>
                    style="background-image: url('<?php echo $imageBefore  ?>')"
                  <?php }else{ ?>
                    style="background-image: url('<?php bloginfo( url ); ?>/wp-content/themes/zerif-pro/images/before-icon.jpg');"
                  <?php } ?> >
              </div>

              <div class="tp-image-current user-image"
              <?php $after = get_field( 'after' );
                    $imageAfter = $after['sizes']['medium'];
              ?>
              <?php if ( $after ) { ?>
                style="background-image: url('<?php echo $imageBefore  ?>' ); ?>"

              <?php }else{ ?>
                style="background-image: url('<?php bloginfo( url ); ?>/wp-content/themes/zerif-pro/images/after-icon.jpg');"
              <?php } ?> >
              </div>

          </div><!-- User Images -->

          <?php $before = get_field( 'before' ); ?>
            <?php if ( $before ) { ?>
              <div class="tp-user-info">

                  <h1><?php $current_user = wp_get_current_user(); echo $current_user->user_login ; ?></h1>
                  <div class="tp-info-item"><p>Start Weight: <?php the_field( 'start_weight_stones' ); ?><span>s</span> <?php the_field( 'start_weight_pounds' ); ?><span>lb</span> <?php the_field( 'start_weight_ounces' ); ?><span>oz</span></p></div>
                  <!-- <div class="tp-info-item"><p>Current Weight: 9<span>s</span> 1<span>lb</span> 6<span>oz</span></p></div> -->
                  <div class="tp-info-item"><p>Height: <?php the_field( 'height_feet' ); ?><span>ft</span> <?php the_field( 'height_inches' ); ?><span>in</span></p></div>
                  <!-- <div class="tp-info-item"><p>Body Fat: 30<span>%</span></p></div> -->

                  <!-- Flab2Lean Logo -->
                  <div class="mp-logo">
                    <img src="<?php bloginfo( url ); ?>/wp-content/uploads/2016/F2L-logo-levels.svg" alt="FLAB2LEAN level Logo">
                  </div>
                  <!-- End Flab2Lean Logo -->

              </div>
            <?php }?>



        <!-- edit button -->
        <div id="top-user-section"class="edit-button">
          <a href=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182.4 65.4">
              <style>
                .st0{fill:#00FF00;} .st1{fill:#FFFFFF;}
              </style>
              <path class="st0" d="M149.6 65.4H32.7C14.7 65.4 0 50.7 0 32.7 0 14.7 14.7 0 32.7 0h116.9c18 0 32.7 14.7 32.7 32.7.1 18-14.7 32.7-32.7 32.7z"/>
              <path class="st1" d="M81.6 28.8h10.8V36H81.6v14.7h13.6v7.2H73.7V7.6h21.5v7.2H81.6v14zm18.5-21.2h12.5c7.9 0 11.8 4.4 11.8 12.4v25.4c0 8-3.9 12.4-11.8 12.4h-12.5V7.6zm7.9 7.2v35.9h4.4c2.5 0 4-1.3 4-4.9V19.7c0-3.6-1.5-4.9-4-4.9H108zm21.4-7.2h7.9v50.2h-7.9V7.6zm11.3 0h24.4v7.2h-8.3v43.1h-7.9V14.8h-8.3V7.6zM42.3 27.1H61V38H42.3v19.1H31.4V38H12.7V27.1h18.7V8.3h10.9v18.8z"/>
            </svg></a>
        </div>
        <!-- end edit button -->

      </div><!-- End Top User Section -->



      <div class="weight-stats">
        <div class="weight-stats-title">
          <h2>weight in Stats</h2>
          <!-- edit button -->
          <div id="weight-section"class="edit-button">
            <a href=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182.4 65.4">
                <style>
                  .st0{fill:#00FF00;} .st1{fill:#FFFFFF;}
                </style>
                <path class="st0" d="M149.6 65.4H32.7C14.7 65.4 0 50.7 0 32.7 0 14.7 14.7 0 32.7 0h116.9c18 0 32.7 14.7 32.7 32.7.1 18-14.7 32.7-32.7 32.7z"/>
                <path class="st1" d="M81.6 28.8h10.8V36H81.6v14.7h13.6v7.2H73.7V7.6h21.5v7.2H81.6v14zm18.5-21.2h12.5c7.9 0 11.8 4.4 11.8 12.4v25.4c0 8-3.9 12.4-11.8 12.4h-12.5V7.6zm7.9 7.2v35.9h4.4c2.5 0 4-1.3 4-4.9V19.7c0-3.6-1.5-4.9-4-4.9H108zm21.4-7.2h7.9v50.2h-7.9V7.6zm11.3 0h24.4v7.2h-8.3v43.1h-7.9V14.8h-8.3V7.6zM42.3 27.1H61V38H42.3v19.1H31.4V38H12.7V27.1h18.7V8.3h10.9v18.8z"/>
              </svg></a>
          </div>
          <!-- end edit button -->
        </div>

        <div class="weight-section override" id="weight-section-stats">
          <?php acf_form($weight); ?>
        </div>

        <div class="weight-stats-display">

          <div class="graph-stats">
                <div class="the-graph">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 950 600">
                    <style>
                      .greygrid{fill:none;stroke:#7A7A7A;stroke-width:0.5;stroke-miterlimit:10;} .weight{fill:none;stroke:#E30613;stroke-width:3;stroke-miterlimit:10;} .bfat{fill:none;stroke:#009FE3;stroke-width:3;stroke-miterlimit:10;}
                    </style>
                    <g id="Layer_1">
                      <path class="greygrid" d="M0 60h950M0 120h950M0 180h950M0 240h950M0 300h950M0 360h950M0 480h950M0 420h950M0 540h950M0 600V0M95 600V0M190 600V0M285 600V0M380 600V0M475 600V0M665 600V0M570 600V0M760 600V0M855 600V0M950 "/>
                    </g>
                    <g id="Text">
                      <path d="M32.9 534.8l-4.1-16.1H31l1.9 8.1c.5 2 .9 4 1.2 5.6.3-1.6.8-3.5 1.3-5.6l2.1-8.1h2.2l2 8.1c.5 1.9.9 3.8 1.1 5.5.3-1.8.8-3.6 1.3-5.6l2.1-8.1h2.1l-4.6 16.1h-2.2l-2-8.4c-.5-2-.8-3.6-1-5.2-.3 1.6-.6 3.2-1.2 5.2l-2.3 8.4h-2.1zM50.7 529.4c0 2.8 1.9 4 4 4 1.5 0 2.4-.3 3.2-.6l.4 1.5c-.7.3-2 .7-3.8.7-3.6 0-5.7-2.3-5.7-5.8s2-6.2 5.4-6.2c3.8 0 4.8 3.3 4.8 5.4 0 .4 0 .8-.1 1h-8.2zm6.2-1.5c0-1.3-.5-3.4-2.9-3.4-2.1 0-3.1 2-3.2 3.4h6.1zM63.8 520c0 .7-.5 1.3-1.3 1.3-.7 0-1.3-.6-1.3-1.3 0-.7.5-1.3 1.3-1.3s1.3.6 1.3 1.3zm-2.3 14.8v-11.5h2.1v11.5h-2.1zM77 523.2c0 .8-.1 1.8-.1 3.2v6.7c0 2.6-.5 4.3-1.6 5.3s-2.7 1.4-4.2 1.4c-1.4 0-2.9-.3-3.8-1l.5-1.6c.8.5 2 .9 3.4.9 2.1 0 3.7-1.1 3.7-4v-1.3c-.6 1.1-1.9 1.9-3.7 1.9-2.9 0-4.9-2.4-4.9-5.6 0-3.9 2.5-6.1 5.2-6.1 2 0 3.1 1 3.6 2l.1-1.7H77zm-2.2 4.6c0-.4 0-.7-.1-1-.4-1.2-1.4-2.2-2.9-2.2-2 0-3.4 1.7-3.4 4.4 0 2.3 1.1 4.1 3.4 4.1 1.3 0 2.5-.8 2.9-2.1.1-.4.2-.8.2-1.1v-2.1zM80.4 517.9h2.1v7.2c.3-.6.9-1.1 1.5-1.5.6-.4 1.4-.6 2.1-.6 1.5 0 4 1 4 4.9v6.9H88v-6.6c0-1.9-.7-3.4-2.7-3.4-1.4 0-2.4 1-2.8 2.1-.1.3-.1.6-.1 1v7h-2.1v-17zM96 519.9v3.3h3v1.6h-3v6.2c0 1.4.4 2.2 1.6 2.2.5 0 1-.1 1.2-.1l.1 1.6c-.4.2-1 .3-1.9.3-1 0-1.8-.3-2.3-.9-.6-.6-.8-1.6-.8-3v-6.3h-1.8v-1.6H94v-2.8l2-.5z"/>
                      <g>
                        <path d="M24.5 543.2c.9-.2 2.3-.3 3.8-.3 2.1 0 3.4.4 4.4 1.2.8.6 1.3 1.6 1.3 2.8 0 1.5-1 2.9-2.7 3.5 1.5.4 3.3 1.6 3.3 4 0 1.4-.5 2.4-1.4 3.2-1.1 1-2.9 1.5-5.6 1.5-1.4 0-2.5-.1-3.2-.2v-15.7zm2 6.5h1.9c2.2 0 3.5-1.1 3.5-2.7 0-1.9-1.4-2.6-3.5-2.6-1 0-1.5.1-1.8.1v5.2zm0 7.7c.4.1 1 .1 1.7.1 2.1 0 4.1-.8 4.1-3.1 0-2.2-1.9-3.1-4.1-3.1h-1.7v6.1zM47.9 553.1c0 4.3-3 6.1-5.7 6.1-3.1 0-5.5-2.3-5.5-5.9 0-3.9 2.5-6.1 5.7-6.1s5.5 2.4 5.5 5.9zm-9.2.2c0 2.5 1.5 4.4 3.5 4.4s3.5-1.9 3.5-4.5c0-2-1-4.4-3.5-4.4-2.4 0-3.5 2.3-3.5 4.5zM60.5 542.1V556c0 1 0 2.2.1 3h-1.9l-.1-2c-.6 1.3-2 2.3-3.9 2.3-2.8 0-4.9-2.4-4.9-5.9 0-3.8 2.4-6.2 5.2-6.2 1.8 0 3 .8 3.5 1.8v-6.9h2zm-2.1 10.1c0-.3 0-.6-.1-.9-.3-1.3-1.5-2.4-3-2.4-2.2 0-3.5 1.9-3.5 4.5 0 2.3 1.1 4.3 3.4 4.3 1.4 0 2.7-.9 3.1-2.5.1-.3.1-.6.1-.9v-2.1zM64.7 547.5l2.5 6.8c.3.8.5 1.7.7 2.4.2-.7.5-1.6.7-2.4l2.3-6.8h2.2l-3.1 8.2c-1.5 4-2.5 6-4 7.2-1 .9-2 1.3-2.6 1.4l-.5-1.8c.5-.2 1.2-.5 1.8-1 .6-.5 1.3-1.3 1.8-2.3.1-.2.2-.4.2-.5s0-.3-.1-.5l-4.3-10.6h2.4zM75.4 559v-9.9h-1.6v-1.6h1.6v-.5c0-1.6.4-3.1 1.3-4 .8-.8 1.8-1.1 2.8-1.1.7 0 1.4.2 1.8.3l-.3 1.6c-.3-.1-.7-.3-1.3-.3-1.8 0-2.2 1.6-2.2 3.3v.6h2.8v1.6h-2.8v9.9h-2.1zM88.5 559l-.2-1.5h-.1c-.6.9-1.9 1.7-3.5 1.7-2.3 0-3.5-1.6-3.5-3.3 0-2.8 2.5-4.3 6.9-4.3v-.2c0-1-.3-2.7-2.6-2.7-1.1 0-2.2.3-3 .9l-.5-1.4c1-.6 2.3-1 3.8-1 3.5 0 4.4 2.4 4.4 4.7v4.3c0 1 0 2 .2 2.8h-1.9zm-.3-5.9c-2.3 0-4.9.4-4.9 2.6 0 1.4.9 2 2 2 1.5 0 2.5-1 2.8-1.9.1-.2.1-.5.1-.7v-2zM96 544.2v3.3h3v1.6h-3v6.2c0 1.4.4 2.2 1.6 2.2.5 0 1-.1 1.2-.1l.1 1.6c-.4.2-1 .3-1.9.3-1 0-1.8-.3-2.3-.9-.6-.6-.8-1.6-.8-3v-6.3h-1.8v-1.6H94v-2.8l2-.5z"/>
                      </g>
                      <path class="weight" d="M111.2 527.4h82.2"/>
                      <path class="bfat" d="M111.2 550.8h82.2"/>
                    </g>

                    <?php if ( have_rows( 'weight' ) ) :
                      $i = 0;
                      $count = count( get_field('weight') );
                      $increment= 950/$count;
                      $x = 10;
                      while ( have_rows( 'weight' ) ) : the_row(); ?>

                        <?php $stones = get_sub_field( 'weight-stone' ); ?>
                        <?php $pounds = get_sub_field( 'weight_pounds' ); ?>
                        <?php $ounces = get_sub_field( 'weight_ounces' );
                            $kgweight = (($stones*6350.29)+($pounds*453.59)+($ounces*28.34))/1000;
                            $bodyfat = get_sub_field( 'body_fat' );
                            $y = 600-($kgweight * 3.149);

                            echo '<text x="'.$x.'" y="'.$y.'" font-family="Verdana" font-size="14" transform="rotate(-70,'.$x.','.$y.')">
                              '.$stones.'s'.$pounds.'p'.$ounces.'oz
                            </text>';

                        $x = $x + $increment
                        ?>

                      <?php endwhile; ?>
                    <?php else : ?>
                      <?php // no rows found ?>
                    <?php endif; ?>


                    <polyline
                    class="weight-line"
                     fill="none"
                     stroke="#E30613"
                     stroke-width="2"
                     points="
                     <?php if ( have_rows( 'weight' ) ) :
                       $i = 0;
                       $count = count( get_field('weight') );
                       $increment= 950/$count;
                       $x = 0;
                       while ( have_rows( 'weight' ) ) : the_row(); ?>

                         <?php $stones = get_sub_field( 'weight-stone' ); ?>
                         <?php $pounds = get_sub_field( 'weight_pounds' ); ?>
                         <?php $ounces = get_sub_field( 'weight_ounces' );
                             $kgweight = (($stones*6350.29)+($pounds*453.59)+($ounces*28.34))/1000;
                             $bodyfat = get_sub_field( 'body_fat' );
                             $y = 600-($kgweight * 3.149);

                             echo $x.",".$y;

                         $x = $x + $increment
                         ?>

                       <?php endwhile; ?>
                     <?php else : ?>
                       <?php // no rows found ?>
                     <?php endif; ?>
                       "/>

                       <?php if ( have_rows( 'weight' ) ) :
                         $i = 0;
                         $count = count( get_field('weight') );
                         $increment= 950/$count;
                         $x = 10;
                         while ( have_rows( 'weight' ) ) : the_row();

                           $percentfat = get_sub_field( 'body_fat' );

                               $y = 600-($percentfat*10);
                               echo '<text x="'.$x.'" y="'.$y.'" font-family="Verdana" font-size="14" transform="rotate(-70,'.$x.','.$y.')">
                                 '.$percentfat.'%
                               </text>';

                           $x = $x + $increment
                           ?>

                         <?php endwhile; ?>
                       <?php else : ?>
                         <?php // no rows found ?>
                       <?php endif; ?>


                       <polyline
                       class="fat-line"
                        fill="none"
                        stroke="#009FE3"
                        stroke-width="2"
                        points="
                        <?php if ( have_rows( 'weight' ) ) :
                          $i = 0;
                          $count = count( get_field('weight') );
                          $increment= 950/$count;
                          $x = 0;
                          while ( have_rows( 'weight' ) ) : the_row();

                            $percentfat = get_sub_field( 'body_fat' );

                                $y = 600-($percentfat*10);
                                echo $x.",".$y;

                            $x = $x + $increment
                            ?>

                          <?php endwhile; ?>
                        <?php else : ?>
                          <?php // no rows found ?>
                        <?php endif; ?>
                          "/>
                  </svg>

                </div>
          </div>
          <!-- End Graph -->

          <div class="listed-stats">
              <div class="stats-titles stat-item">
                <div class="date">Data</div>
                <div class="weight">Weight</div>
                <div class="fat">Bodyfat</div>
              </div>
              <?php if ( have_rows( 'weight' ) ) : ?>
                <?php while ( have_rows( 'weight' ) ) : the_row(); ?>
                  <div class="stat-item">
                    <div class="date"><?php the_sub_field( 'date' ); ?></div>
                    <div class="weight"><?php the_sub_field( 'weight-stone' ); ?><span>s </span><?php the_sub_field( 'weight_pounds' ); ?><span>lb </span><?php the_sub_field( 'weight_ounces' ); ?><span>oz</span></div>
                    <div class="fat"><?php the_sub_field( 'body_fat' ); ?><span>%</span></div>
                  </div>
                <?php endwhile; ?>
              <?php else : ?>
                <?php // no rows found ?>
              <?php endif; ?>
          </div>
          <!-- End stats -->

        </div>

      </div>
      <!-- end of weight stats -->

      <div class="weight-stats">
        <div class="weight-stats-title">
          <h2>Measurment Stats</h2>
          <!-- edit button -->
          <div id="measurement-section"class="edit-button">
            <a href=""><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 182.4 65.4">
                <style>
                  .st0{fill:#00FF00;} .st1{fill:#FFFFFF;}
                </style>
                <path class="st0" d="M149.6 65.4H32.7C14.7 65.4 0 50.7 0 32.7 0 14.7 14.7 0 32.7 0h116.9c18 0 32.7 14.7 32.7 32.7.1 18-14.7 32.7-32.7 32.7z"/>
                <path class="st1" d="M81.6 28.8h10.8V36H81.6v14.7h13.6v7.2H73.7V7.6h21.5v7.2H81.6v14zm18.5-21.2h12.5c7.9 0 11.8 4.4 11.8 12.4v25.4c0 8-3.9 12.4-11.8 12.4h-12.5V7.6zm7.9 7.2v35.9h4.4c2.5 0 4-1.3 4-4.9V19.7c0-3.6-1.5-4.9-4-4.9H108zm21.4-7.2h7.9v50.2h-7.9V7.6zm11.3 0h24.4v7.2h-8.3v43.1h-7.9V14.8h-8.3V7.6zM42.3 27.1H61V38H42.3v19.1H31.4V38H12.7V27.1h18.7V8.3h10.9v18.8z"/>
              </svg></a>
          </div>
          <!-- end edit button -->
        </div>
        <!-- top user section form -->
        <div class="measurement override" id="measurement">
          <?php acf_form($measurement); ?>
        </div>
        <!-- End top user section form -->

        <div class="measurements-wrapper">
          <div class="scroll">
            <img src="<?php bloginfo( url ); ?>/wp-content/themes/zerif-pro/images/scroll.png" alt="Scroll">
          </div>
          <div class="measurements-item-headings">
            <p>Top Of Arms</p>
            <p>Chest</p>
            <p>Waist</p>
            <p>Hips</p>
            <p>Top Of Leg</p>
            <p>Bottom Of Leg</p>
          </div>
          <div class="measurements">

            <?php if ( have_rows( 'measurements' ) ) :
              $i=0; ?>

            	<?php while ( have_rows( 'measurements' ) ) : the_row(); ?>
                <!-- Measurement Item -->
                  <div class="measurements-item">
                    <p>
                      <?php
                          if ($i == 0) {
                              echo "Week 1";
                          } else {
                              echo "Week ".$i;
                          }
                          ?>
                      </p>
                    <p><?php the_sub_field( 'top_of_arms' ); ?><span>in</span></p>
                    <p><?php the_sub_field( 'chest' ); ?><span>in</span></p>
                    <p><?php the_sub_field( 'waist' ); ?><span>in</span></p>
                    <p><?php the_sub_field( 'hips' ); ?><span>in</span></p>
                    <p><?php the_sub_field( 'top_of_leg' ); ?><span>in</span></p>
                    <p><?php the_sub_field( 'bottom_of_leg' ); ?><span>in</span></p>
                  </div>
                <!-- End Measurement Item -->
            	<?php
              $i = $i+5;
            endwhile; ?>
            <?php else : ?>
            	<?php // no rows found ?>
            <?php endif; ?>

          </div>
        </div>

      </div><!-- End Weigth Stats -->

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





 			</main><!-- #main -->

 		</div><!-- #primary -->

 	</div><!-- .container -->

</div><!-- .site-content -->

 <?php get_footer(); ?>
