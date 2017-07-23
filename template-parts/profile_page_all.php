<!-- Free PDF Files -->
<div class="primal-sessions-pdf">
  <?php if ( have_rows( 'free_pdfs' ) ) : ?>
    <?php while ( have_rows( 'free_pdfs' ) ) : the_row(); ?>
      <div class="free-pdf-wrapper">

        <?php if ( get_sub_field( 'icon_pdf_file') ) { ?>
          <img src="<?php the_sub_field( 'icon_pdf_file' ); ?>" />
        <?php } ?>

        <?php $pdf_files = get_sub_field( 'pdf_files' ); ?>
        <?php if ( $pdf_files ) { ?>
          <a class="free-pdf-button" target="_blank" href="<?php echo $pdf_files['url']; ?>" />View PDF File</a>
        <?php } ?>

      </div>
    <?php endwhile; ?>
  <?php else : ?>
    <?php // no rows found ?>
  <?php endif; ?>
</div>
<!-- /End Free PDF Files -->

<!-- Start Bootcamp for TP -->
<div class="boot-bootcamp">
  <div class="inner-bootcamp">
    <h1>BOOTCAMP</h1>
    <h2>BOOK YOUR PLACE</h2>
    <div class="button-wrapper">
        <a class="mpp-button" href="/bootcamp">BOOK NOW</a>
    </div>
  </div>
</div>
<!-- End Bootcamp for TP -->
