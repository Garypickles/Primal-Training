<?php
/*
 * Template Name: PrimafitUK
 * Description: PrimafitUK page with videos and PDF downloads
 */

get_header();
?>

<?php 
if(pmpro_hasMembershipLevel('1'))
{ ?>

<div class="primafituk top-element">
  <div class="logo-wrapper">
    <svg xmlns="http://www.w3.org/2000/svg" width="1200.112" height="192.942" viewBox="0 0 1200.112 192.942">
  <path d="M11.27 125.02v66.297H0V0h52.266C67.48 1.986 80.393 8.075 91.008 18.267c12.68 12.27 19.017 26.972 19.017 44.108 0 17.32-6.338 32.09-19.017 44.31-12.68 12.226-27.99 18.336-45.927 18.336H11.27zm0-114.06v103.102h33.81c14.746 0 27.378-5.025 37.898-15.087 10.517-10.056 15.778-22.257 15.778-36.6 0-14.25-5.26-26.383-15.778-36.395-10.52-10.013-23.153-15.02-37.897-15.02H11.27zm172.295 114.06h-37.19v66.297h-11.272V0h52.266c15.212 1.986 28.124 8.075 38.74 18.267 12.68 12.27 19.02 26.972 19.02 44.108 0 17.32-6.34 32.067-19.02 44.245-8.83 8.482-18.928 14.026-30.29 16.643l45.925 68.054H227.94l-44.375-66.296zm-37.19-114.06v103.102h33.81c14.744 0 27.376-5.025 37.896-15.087 10.52-10.056 15.78-22.257 15.78-36.6 0-14.25-5.26-26.383-15.78-36.395-10.52-10.013-23.15-15.02-37.894-15.02h-33.81zM282.885 0v191.317h-11.27V0h11.27zm207.233 0v191.317h-11.27V11.637l-77.132 129.547-77.13-129.547v179.68h-11.272V0h16.343l72.06 121.213L473.777 0h16.34zm97.628 0h-11.552l-73.116 191.317h11.975l32.402-84.154h.04c.013-.05.003-.088.023-.135 1.45-3.508 2.505-7.146 4.198-10.555l30.254-80.236 30.288 80.236h-55.846c.028.24-2.838 7.376-4.16 10.69h64.093l31.84 84.154h11.832L587.747 0z" fill="#D2D3D4"/>
  <path fill="#939598" d="M687.49 101.074v90.243h-11.27V0h87.2v10.825h-75.93V90.25"/>
  <path fill="#939598" d="M696.904 74.27h66.388v10.82h-66.388M799.207 0v191.317h-11.27V0h11.27zm83.258 10.825v180.492h-11.128V10.825h-50.435V0h112v10.825h-50.437z"/>
  <g fill="#8EC641">
    <path d="M1071.947 0h11.27v137.468c-2.065 14.613-8.405 27.02-19.02 37.21-12.68 12.177-27.986 18.264-45.927 18.264-18.03 0-33.388-6.087-46.065-18.264-12.68-12.177-19.02-26.88-19.02-44.11V0h11.27v130.57c0 14.16 5.26 26.296 15.78 36.395 10.518 10.104 23.195 15.157 38.034 15.157s27.494-5.054 37.97-15.157c10.47-10.1 15.703-22.234 15.703-36.396V0z"/>
    <path d="M1113.05 71.847L1164.75 0h-13.66l-66.637 91.603v-.557c-.668 1.11-1.398 2.285-2.147 3.525.04 2.03.066 4.06.12 6.087.1 3.902.262 7.77.435 11.63.528.444 1.596-2.01 1.596-2.01l21.413-29.5 80.58 110.542h13.665l-87.062-119.47z"/>
  </g>
</svg>
  </div>
    <?php the_field( 'lead_in_text' ); ?>
  <h3>Paul & Dave</h3>
</div>

<div class="pdfdownload">
  <div class="pdfwrapper">



    <?php if ( have_rows( 'pdf_downloadable_files' ) ) : ?>
      <?php while ( have_rows( 'pdf_downloadable_files' ) ) : the_row(); ?>

        <a href="<?php the_sub_field( 'file_name' ); ?> " target="_blank" class="pdffile">
          <p>Download <?php the_sub_field( 'display_name' ); ?></p>
        </a>

      <?php endwhile; ?>
    <?php else : ?>
      <?php // no rows found ?>
    <?php endif; ?>

  </div>

</div>

<div class="video-section">

    <?php if ( have_rows( 'videos' ) ) : ?>
    <?php while ( have_rows( 'videos' ) ) : the_row(); ?>

      <h2 class='primafituk-video-title'><?php the_sub_field( 'video_title') ?></h2>

      <div class='embed-container'>
        <iframe src='https://player.vimeo.com/video/<?php the_sub_field( 'vimeo_id_code' ); ?>' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen>
        </iframe>
      </div>



    <?php endwhile; ?>
  <?php else : ?>
    <?php // no rows found ?>
  <?php endif; ?>

</div>

<?php  } else{
  ?>

  <div class="tp-notloggedin">
    
      
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <?php
            the_content();

          ?>
        </div><!-- .entry-content -->

     

  </div>


  <?php
  }?>




<?php get_footer(); ?>
