<?php 
  /*
    Template Name: Waardebepaling
  */
  get_header();
  $thisID = get_the_ID();

  $fctitel = get_field('titel', $thisID);
  $fcbeschrijving = get_field('beschrijving', $thisID);
  $fcshortcode = get_field('formshortcode', $thisID);
?>
<?php get_template_part('templates/page', 'banner'); ?>

<section class="contact-form-sec-wrp estimate-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cr-contact-form-block-wrp clearfix">
          <div class="contact-form-dsc text-center">
            <?php 
              if( !empty( $fctitel ) ) printf( '<div><h2 class="contact-page-entry-title">%s</h2></div>', $fctitel); 
              if( !empty( $fcbeschrijving ) ) echo wpautop( $fcbeschrijving, true ); 
            ?>
          </div>
          <div class="contact-form-wrp clearfix">
            <div class="wpforms-container">
              <?php if( !empty( $fcshortcode ) ) echo do_shortcode( $fcshortcode ); ?>
            </div>
          </div>
       </div>
      </div>
    </div>
  </div>    
</section>
<?php get_template_part('templates/section', 'usp'); ?>
<?php get_footer(); ?>