<?php 
/*
  Template Name: Contact
*/
get_header();
$thisID = get_the_ID();
?>
<?php
  $form = get_field('formsec', $thisID);
  $google_map = get_field('googlemap', $thisID);
?>
<?php get_template_part('templates/page', 'banner'); ?>
<?php 
  $replaceArray = '';
  $branches = get_field('branches', 'options');
?>
<section class="contact-form-sec-wrp">
  <div class="container">
      <?php if( $branches ): ?>
      <div class="row">
        <div class="col-md-12">
          <div class="contact-info-wrp">
            <div class="contact-info-slider">
              <?php 
              foreach( $branches as $branche ):
              $gmaplink = !empty($branche['adres'])?$branche['adres']: 'javascript:void()'; 
              ?>
              <div class="contact-info-slide-item">
                <div class="contact-info-dsc-nnr mHc">
                   <div class="contact-info-dsc-tp">
                     <span>Accenta Vastgoed</span>
                     <?php if( !empty( $branche['titel'] ) ) printf('<h3 class="contact-info-dsc-tp-title">%s</h3>', $branche['titel']); ?>
                   </div>
                   <div class="contact-info-dsc-tp-btm">
                     <ul class="reset-list clearfix">
                      <?php if( !empty( $branche['adres'] ) ): ?>
                       <li>
                         <span><?php _e( 'adres', 'accenta' ); ?></span>
                         <?php printf('<a href="%s">%s</a>', $gmaplink, $branche['adres']); ?>
                       </li>
                       <?php endif; ?>
                        <?php 
                        if( !empty( $branche['telefoon'] ) ): 
                          $telefoon = trim(str_replace(phone_preg(), $replaceArray, $branche['telefoon']));
                        ?>
                       <li>
                         <span><?php _e( 'Telefoon', 'accenta' ); ?></span>
                         <a href="tel:<?php echo $telefoon; ?>"><?php echo $branche['telefoon']; ?></a>
                       </li>
                      <?php endif; ?>
                      <?php if( !empty( $branche['emailadres'] ) ): ?>
                       <li>
                         <span><?php _e( 'E-mailadres', 'accenta' ); ?></span>
                         <a href="mailto:<?php echo $branche['emailadres']; ?>"><?php echo $branche['emailadres']; ?></a>
                       </li>
                       <?php endif; ?>
                     </ul>
                   </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php if( $form ): ?>
      <div class="row">
        <div class="col-md-12">
          <div class="cr-contact-form-block-wrp clearfix">
            <div class="contact-form-dsc text-center">
              <?php 
                if( !empty( $form['titel'] ) ) printf( '<div><h2 class="contact-page-entry-title">%s</h2></div>', $form['titel']); 
                if( !empty( $form['beschrijving'] ) ) echo wpautop( $form['beschrijving'], true ); 
              ?>
            </div>
            <div class="contact-form-wrp clearfix">
              <div class="wpforms-container">
                <?php if( !empty( $form['shortcode'] ) ) echo do_shortcode( $form['shortcode'] ); ?>
              </div>
            </div>
         </div>
        </div>
      </div>
      <?php endif; ?>
  </div>    
</section>

<?php if( !empty($google_map) && $google_map):?>
<section class="contact-google-map-wrp">
      <div id="googlemap" data-latitude="<?php echo $google_map['lat']; ?>" data-longitude="<?php echo $google_map['lng']; ?>"></div>
</section>
<?php endif; ?>
<?php get_footer(); ?>