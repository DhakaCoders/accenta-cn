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