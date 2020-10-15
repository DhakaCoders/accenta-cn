<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $replaceArray = '';
  $branches = get_field('branches', 'options');
  $bwt = get_field('btw', 'options');
  $vennootschap = get_field('vennootschap', 'options');
  $polisnr = get_field('polisnr', 'options');
  $fburl = get_field('facebook_url', 'options');
  $insturl = get_field('instagram_url', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?>
<footer class="footer-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ftr-top clearfix">
          <div class="ftr-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <?php echo $logo_tag; ?>
            </a>
          </div>
          <div class="ftr-partner-policy ftr-grd-item hide-sm">
            <?php if( !empty( $vennootschap ) ): ?>
            <div class="ftr-partner">
              <label><?php _e( 'Vennootschap', THEME_NAME ); ?>:</label>
              <?php printf('<strong>%s</strong>', $vennootschap); ?>
            </div>
            <?php endif; ?>
            <?php if( !empty( $polisnr ) ): ?>
            <div class="ftr-policy">
              <label><?php _e( 'Polisnr. verzekering', THEME_NAME ); ?>:</label>
              <?php printf('<strong>%s</strong>', $polisnr); ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="ftr-vat-social-media ftr-grd-item hide-sm">
            <div class="ftr-vat">
              <label><?php _e( 'BTW', 'accenta' ); ?></label>
              <?php if( !empty( $bwt ) ) printf('<strong>%s</strong>', $bwt); ?>
            </div>
            <div class="ftr-socilas-media">
              <label><?php _e( 'Volg ons op', 'accenta' ); ?>:</label>
              <ul class="reset-list">
                <?php if(!empty($fburl)): ?>
                <li><a href="<?php echo esc_url($fburl); ?>">Facebook</a></li>
                <?php endif; if(!empty($insturl)): ?>
                <li><a href="<?php echo esc_url($insturl); ?>">Instagram</a></li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
          <div class="ftr-menu clearfix">
            <h6 class="ftr-menu-title"><?php _e( 'Navigatie', THEME_NAME ); ?></h6>
            <?php 
                $fmenuOptions1 = array( 
                    'theme_location' => 'cbv_fta_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $fmenuOptions1 );
                $fmenuOptions2 = array( 
                    'theme_location' => 'cbv_ftb_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $fmenuOptions2 );
            ?>
          </div>
          <div class="ftr-language hide-sm">
            <div class="fl-lang reset-slect">
              <div class="fl-lang-cntlr">
                <ul class="reset-list hide-sm">
                  <li  class="lang-active"><a href="#">NL</a></li>
                  <li class=""><a href="#">EN</a></li>
                  <li><a href="#">FR</a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php if( $branches ): ?>
          <div class="ftr-menu xs-contact show-sm">
            <h6 class="ftr-menu-title"><?php _e( 'Contact', THEME_NAME ); ?></h6>
            <ul class="reset-list clearfix">
              <?php foreach( $branches as $branche ): ?>
              <li>
                <div class="ftr-contact-grd-item ftr-grd-item">
                  <div class="ftr-contact-location">
                    <label>Accenta Vastgoed <?php if( !empty( $branche['titel'] ) ) printf('%s', $branche['titel']); ?></label>
                    <?php if( !empty( $branche['adres'] ) ) printf('<strong>%s</strong>', $branche['adres']); ?>
                  </div>
                  <?php 
                  if( !empty( $branche['telefoon'] ) ): 
                    $telefoon = trim(str_replace(phone_preg(), $replaceArray, $branche['telefoon']));
                  ?>
                  <div class="ftr-contact-tel">
                    <label><?php _e( 'Telefoon', 'accenta' ); ?></label>
                    <strong><a href="tel:<?php echo $telefoon; ?>"><?php echo $branche['telefoon']; ?></a></strong>
                  </div>
                  <?php endif; ?>
                  <?php if( !empty( $branche['emailadres'] ) ): ?>
                  <div class="ftr-contact-mail">
                    <label><?php _e( 'E-mailadres', 'accenta' ); ?></label>
                    <strong><a href="mailto:<?php echo $branche['emailadres']; ?>"><?php echo $branche['emailadres']; ?></a></strong>
                  </div>
                  <?php endif; ?>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php if( $branches ): ?>
        <div class="ftr-contact hide-sm">
            <ul class="reset-list clearfix">
              <?php foreach( $branches as $branche ): ?>
              <li>
                <div class="ftr-contact-grd-item ftr-grd-item">
                  <div class="ftr-contact-location">
                    <label>Accenta Vastgoed <?php if( !empty( $branche['titel'] ) ) printf('%s', $branche['titel']); ?></label>
                    <?php if( !empty( $branche['adres'] ) ) printf('<strong>%s</strong>', $branche['adres']); ?>
                  </div>
                  <?php 
                  if( !empty( $branche['telefoon'] ) ): 
                    $telefoon = trim(str_replace(phone_preg(), $replaceArray, $branche['telefoon']));
                  ?>
                  <div class="ftr-contact-tel">
                    <label><?php _e( 'Telefoon', THEME_NAME ); ?></label>
                    <strong><a href="tel:<?php echo $telefoon; ?>"><?php echo $branche['telefoon']; ?></a></strong>
                  </div>
                  <?php endif; ?>
                  <?php if( !empty( $branche['emailadres'] ) ): ?>
                  <div class="ftr-contact-mail">
                    <label><?php _e( 'E-mailadres', THEME_NAME ); ?></label>
                    <strong><a href="mailto:<?php echo $branche['emailadres']; ?>"><?php echo $branche['emailadres']; ?></a></strong>
                  </div>
                  <?php endif; ?>
                </div>
              </li>
              <?php endforeach; ?>
            </ul>          
        </div>
        <?php endif; ?>
        <div class="ftr-pvpsm ftr-grd-item show-sm">
            <?php if( !empty( $vennootschap ) ): ?>
            <div class="ftr-partner">
              <label><?php _e( 'Vennootschap', THEME_NAME ); ?>:</label>
              <?php printf('<strong>%s</strong>', $vennootschap); ?>
            </div>
            <?php endif; ?>
            <div class="ftr-vat">
              <label>BTW</label>
              <?php if( !empty( $bwt ) ) printf('<strong>%s</strong>', $bwt); ?>
            </div>
            <?php if( !empty( $polisnr ) ): ?>
            <div class="ftr-policy">
              <label><?php _e( 'Polisnr. verzekering', THEME_NAME ); ?>:</label>
              <?php printf('<strong>%s</strong>', $polisnr); ?>
            </div>
            <?php endif; ?>

          <div class="ftr-socilas-media">
            <label><?php _e( 'Volg ons op', THEME_NAME ); ?>:</label>
            <ul class="reset-list">
                <?php if(!empty($fburl)): ?>
                <li><a href="<?php echo esc_url($fburl); ?>">Facebook</a></li>
                <?php endif; if(!empty($insturl)): ?>
                <li><a href="<?php echo esc_url($insturl); ?>">Instagram</a></li>
                <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php 
      $block1 = get_field('block_1', 'options');
      $block2 = get_field('block_2', 'options');
      $block3 = get_field('block_3', 'options');
    ?>
    <?php if( !empty($block1)  OR !empty($block2) OR !empty($block3)): ?>
    <div class="row">
      <div class="col-md-12">
        <div class="ftr-content">
          <div class="ftr-content-inr">
            <ul class="reset-list clearfix">
              <?php if( $block1 ): ?>
              <li>
                <div class="ftr-content-ctlr ftr-btm-grd-col-1 mHc">
                  <div class="ftr-btm-cont-img">
                    <div class="ftr-content-img">
                      <?php
                        if( !empty($block1['afbeelding']) ){
                          echo cbv_get_image_tag($block1['afbeelding']);
                        }
                      ?>
                    </div>
                    <div class="ftr-des">
                      <?php if( !empty($block1['beschrijving']) ) echo wpautop($block1['beschrijving']); ?>
                    </div>
                  </div>
                </div>
              </li>
              <?php endif; ?>
              <?php if( $block2 ): ?>
              <li>
                <div class="ftr-content-ctlr ftr-btm-grd-col-2 mHc">
                  <div class="ftr-btm-cont-img">
                    <div class="ftr-content-img">
                      <?php
                        if( !empty($block2['afbeelding']) ){
                          echo cbv_get_image_tag($block2['afbeelding']);
                        }
                      ?>
                    </div>
                    <div class="ftr-des">
                      <?php if( !empty($block2['beschrijving']) ) echo wpautop($block2['beschrijving']); ?>
                    </div>
                  </div>
                </div>
              </li>
              <?php endif; ?>
              <?php if( $block3 ): ?>
              <li>
                <div class="ftr-content-ctlr ftr-btm-grd-col-3 mHc">
                  <div class="ftr-btm-cont-img">
                    <div class="ftr-content-img">
                      <!-- <img src="<?php echo THEME_URI; ?>/assets/images//ftr-content-img-01.png"> -->
                    </div>
                    <div class="ftr-des">
                      <?php if( !empty($block3['beschrijving']) ) echo wpautop($block3['beschrijving']); ?>
                    </div>
                  </div>
                </div>
              </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-md-12">
        <div class="ftr-bottom">
          <div class="ftr-btm-inr">
            <div class="ftr-copywrite">
              <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>
            </div>
            <div class="ftr-btm-menu">
            <?php 
              $copymenuOptions = array( 
                  'theme_location' => 'cbv_copyright_menu', 
                  'menu_class' => 'reset-list',
                  'container' => '',
                  'container_class' => ''
                );
              wp_nav_menu( $copymenuOptions ); 
            ?>  
            </div>
            <div class="ftr-btm-designby">
              <a href="#">webdesign by conversal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</footer>
<?php wp_footer(); ?>
</body>
</html>