<?php 
/*
  Template Name: Gevonden
*/
get_header();
$thisID = get_the_ID();
?>
<?php
  $fctitel = get_field('titel', $thisID);
  $fcbeschrijving = get_field('beschrijving', $thisID);
  $fcshortcode = get_field('formshortcode', $thisID);
?>
<section class="page-bnr-cntlr">
  <div class="page-bnr-cntlr-inr">
    <div class="page-banner">
      <div class="inline-bg page-banner-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images//banner.jpg');">
      </div>
      <div class="page-banner-title-cntlr">
        <h1 class="banner-title">Uw droomhuis nog niet gevonden?</h1>
      </div>
      <div class="bnr-breadcum">
      <ul class="reset-list">
        <li><a href="#">Home</a></li>
        <li><a href="#">Binnenpagina</a></li>
        <li><a href="#">Binnenpagina</a></li>
      </ul>
    </div>
    </div>
  </div>
</section>

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

<?php 
$showhideusps = get_field('showhideusps','options');
if( $showhideusps ):
$fc_usps = get_field('fc_usps', 'options');
if( $fc_usps ):
?>
<section class="usp-sec">
  <div class="usp-sec-inr">
    <div class="usp-grd-items xs-usp-slider clearfix">
      <?php foreach( $fc_usps as $fc_usp ): ?>
      <div class="usp-grd-item">
        <div class="usp-grd-item-ctlr">
          <i>
            <svg class="ftr-top-grd-item-img-svg" width="42" height="42" viewBox="0 0 42 42" fill="#fff">
              <use xlink:href="#ftr-top-grd-item-img-svg"></use>
            </svg>
          </i>
          <?php if( !empty($fc_usp['titel']) ) printf('<strong class="usp-grd-item-title">%s</strong>', $fc_usp['titel']); ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>