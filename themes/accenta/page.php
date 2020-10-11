<?php get_header(); ?>
<section class="page-bnr-cntlr">
  <div class="page-bnr-cntlr-inr">
    <div class="page-banner">
      <div class="inline-bg page-banner-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images///banner.jpg');">
      </div>
      <div class="page-banner-title-cntlr">
        <h1 class="banner-title">Binnenpagina</h1>
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

<section class="innerpage-con-wrap">
  <article class="default-page-con">
    <?php if(have_rows('inhoud')){  ?>
    <?php while ( have_rows('inhoud') ) : the_row(); ?>
      <?php 
        if( get_row_layout() == 'introductietekst' ){ 
          $title = get_sub_field('titel');
          $afbeelding = get_sub_field('afbeelding');
      ?>
      <div class="block-1200">
        <div class="dfp-promo-module clearfix">
          <?php 
            if( !empty($title) ) printf('<div><strong class="dfp-promo-module-title">%s</strong></div>', $title); 
            if( !empty($afbeelding) ){
              echo '<div class="dfp-plate-one-img-bx">', cbv_get_image_tag($afbeelding), '</div>';
            }
          ?>
        </div>
      </div>
    <?php 
      }elseif( get_row_layout() == 'teksteditor' ){ 
        $beschrijving = get_sub_field('fc_teksteditor');
    ?>
    <div class="block-950">
      <div class="dfp-text-module clearfix">
        <?php if( !empty( $beschrijving ) ) echo wpautop($beschrijving); ?>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'ffff' ){ ?>
    <div class="block-1200">
      <div class="dft-rent-module clearfix">
        <div class="dft-rent-module-item-col">
          <div class="dft-rent-module-item">
            <div class="dft-rent-module-item-fea-img-cnltr">
              <div class="inline-bg dft-rent-module-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images//dfp-img-02.jpg);"></div>
            </div>
            <div class="drmi-des">
              <strong class="drmi-title">Te Huur</strong>
            </div>
            <a class="overlay-link" href="#"></a>
          </div>
        </div>
        <div class="dft-rent-module-item-col">
          <div class="dft-rent-module-item">
            <div class="dft-rent-module-item-fea-img-cnltr">
              <div class="inline-bg dft-rent-module-item-fea-img" style="background: url(<?php echo THEME_URI; ?>/assets/images//dfp-img-03.jpg);"></div>
            </div>
            <div class="drmi-des">
              <strong class="drmi-title">Waardebepaling</strong>
            </div>
            <a class="overlay-link" href="#"></a>
          </div>
        </div>
      </div>
    </div>
    <?php 
      }elseif( get_row_layout() == 'afbeelding_tekst' ){ 
        $fc_afbeelding = get_sub_field('fc_afbeelding');
        $imgsrc = cbv_get_image_src($fc_afbeelding, 'dfpageg1');
        $fc_tekst = get_sub_field('fc_tekst');
        $positie_afbeelding = get_sub_field('positie_afbeelding');
        $imgposcls = ( $positie_afbeelding == 'right' ) ? ' fl-dft-rgtimg-lftdes' : '';
    ?>
    <div class="block-950">
      <div class="fl-dft-overflow-controller">
        <div class="fl-dft-lftimg-rgtdes clearfix<?php echo $imgposcls; ?>">
          <div class="fl-dft-lftimg-rgtdes-lft mHc">
            <div class="fl-dft-lftimg-rgtdes-lft-img-inr" style="background-image: url(<?php echo $imgsrc; ?>);"></div>
          </div>
          <div class="fl-dft-lftimg-rgtdes-rgt mHc">
            <?php echo wpautop($fc_tekst); ?>
          </div>
        </div>
      </div>
    </div>
    <?php 
      }elseif( get_row_layout() == 'poster' ){ 
      $fc_poster = get_sub_field('afbeeldingen');
      $postersrc = cbv_get_image_src($fc_poster, 'dfpageg1');
      $fc_videourl = get_sub_field('video_url');
      if( !empty($postersrc) ):
    ?>

    <div class="block-950">
      <div class="ac-fancy-module" >
        <div class="fancy-img inline-bg" style="background-image: url(<?php echo $postersrc; ?>);"></div>
        <?php if( !empty($fc_videourl) ): ?>
          <a class="overlay-link" data-fancybox href="<?php echo $fc_videourl; ?>"></a>
        <span class="ms-video-play-cntlr">
          <i>
            <svg class="play-icon-white-svg" width="80" height="80" viewBox="0 0 80 80" fill="#ffffff">
              <use xlink:href="#play-icon-white-svg"></use>
            </svg> 
          </i>
        </span>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; ?>
    <?php 
      }elseif( get_row_layout() == 'usps' ){
      $fc_usps = get_sub_field('fc_usp'); 
      if( $fc_usps ):
    ?>
    <div class="usp-sec">
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
    </div>
    <?php endif; ?>
    <?php }elseif( get_row_layout() == 'nieuws' ){ ?>
    <div class="block-950">
      <div class="dft-service-module">
        <div class="dft-service-module-slider dftServiceModuleSlider">
          <div class="dftServiceModuleSlideItem">
            <div class="house-item">
              <div class="house-item-img-cntlr">
                <div class="house-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images//dfp-img-07.jpg');">
                  
                </div>
                <div class="house-item-img-btn">
                  <a href="#">Meer info</a>
                </div>
                <div class="house-item-img-hover">
                  <ul class="reset-list">
                    <li>
                      <i><img src="<?php echo THEME_URI; ?>/assets/images//hu-dtls-sidebar-btm-dsc-icon-1.svg"></i>
                      <span>3 Slaapkamers</span>
                    </li>
                    <li>
                      <i><img src="<?php echo THEME_URI; ?>/assets/images//hu-dtls-sidebar-btm-dsc-icon-2.svg"></i>
                      <span>2 Badkamers</span>
                    </li>
                    <li>
                      <i><img src="<?php echo THEME_URI; ?>/assets/images//hu-dtls-sidebar-btm-dsc-icon-3.svg"></i>
                      <span>200 m<sup>2</sup></span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="house-item-desc">
                <h4 class="house-item-sub-title mHc">Franklin Rooseveltlaan 41, 8790 Waregem</h4>
                <h3 class="house-item-title mHc1"><a href="#">Hoekappartement Fase 2 Residentie Roosevelt</a></h3>
                <span class="house-item-prize">€ 200.000</span>
                <div class="house-item-btn">
                  <a href="#">Meer info</a>
                </div>
              </div>
            </div>
          </div>
          <div class="dftServiceModuleSlideItem">
            <div class="house-item">
              <div class="house-item-img-cntlr">
                <div class="house-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images//dfp-img-08.jpg');">
                  
                </div>
                <div class="house-item-img-btn">
                  <a href="#">Meer info</a>
                </div>
                <div class="house-item-img-hover">
                  <ul class="reset-list">
                    <li>
                      <i><img src="<?php echo THEME_URI; ?>/assets/images//hu-dtls-sidebar-btm-dsc-icon-1.svg"></i>
                      <span>3 Slaapkamers</span>
                    </li>
                    <li>
                      <i><img src="<?php echo THEME_URI; ?>/assets/images//hu-dtls-sidebar-btm-dsc-icon-2.svg"></i>
                      <span>2 Badkamers</span>
                    </li>
                    <li>
                      <i><img src="<?php echo THEME_URI; ?>/assets/images//hu-dtls-sidebar-btm-dsc-icon-3.svg"></i>
                      <span>200 m<sup>2</sup></span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="house-item-desc">
                <h4 class="house-item-sub-title mHc">Franklin Rooseveltlaan 41, 8790 Waregem</h4>
                <h3 class="house-item-title mHc1"><a href="#">Hoekappartement Fase 2 Residentie Roosevelt</a></h3>
                <span class="house-item-prize">€ 200.000</span>
                <div class="house-item-btn">
                  <a href="#">Meer info</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'nieuws' ){ ?>
    <div class="block-950">
      <div class="dft-job-module">
        <div class="dft-job-module-slider dftJobModuleSlider">
          <div class="dftJobModuleSlideItem">
            <div class="vacatures-grd-item">
              <div class="vacatures-grd-item-des">
                <span>31.08.2020</span>
                <h3 class="vacatures-grd-item-title"><a href="#">Job Title</a></h3>
                <p>Sed ultrices pretium pellentesque pretium <br> euismod lorem. Sed nisl mattis aliquet <br> blandit commodo at amet eu. Dui accumsan <br> tortor posuere arcu proin nec a.</p>
                <strong>Full Time</strong>
                <a href="#">Meer info</a>
              </div>
            </div>
          </div>
          <div class="dftJobModuleSlideItem">
            <div class="vacatures-grd-item">
              <div class="vacatures-grd-item-des">
                <span>31.08.2020</span>
                <h3 class="vacatures-grd-item-title"><a href="#">Job Title</a></h3>
                <p>Sed ultrices pretium pellentesque pretium <br> euismod lorem. Sed nisl mattis aliquet <br> blandit commodo at amet eu. Dui accumsan <br> tortor posuere arcu proin nec a.</p>
                <strong>Full Time</strong>
                <a href="#">Meer info</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

    <?php endwhile; ?>
    <?php } ?>
    <div class="block-1200">
      <div class="dft-contact-info-slider">
        <div class="contact-info-slider">
          <div class="contact-info-slide-item">
            <div class="contact-info-dsc-nnr mHc">
               <div class="contact-info-dsc-tp">
                 <span>Accenta Vastgoed</span>
                 <h3 class="contact-info-dsc-tp-title">Affligem</h3>
               </div>
               <div class="contact-info-dsc-tp-btm">
                 <ul class="reset-list clearfix">
                   <li>
                     <span>adres</span>
                     <a href="#">Brusselbaan 110, 1790 Affligem</a>
                   </li>
                   <li>
                     <span>Telefoon</span>
                     <a href="tel:053/41.57.92">053/41.57.92</a>
                   </li>
                   <li>
                     <span>E-mailadres</span>
                     <a href="mailto:affligem@immoaccenta.be">affligem@immoaccenta.be</a>
                   </li>
                 </ul>
               </div>
            </div>
          </div>
          <div class="contact-info-slide-item">
            <div class="contact-info-dsc-nnr mHc">
               <div class="contact-info-dsc-tp">
                 <span>Accenta Vastgoed</span>
                 <h3 class="contact-info-dsc-tp-title">Herne</h3>
               </div>
               <div class="contact-info-dsc-tp-btm">
                 <ul class="reset-list clearfix">
                   <li>
                     <span>adres</span>
                     <a href="#">Ninoofsesteenweg 4A, 1540 Herne</a>
                   </li>
                   <li>
                     <span>Telefoon</span>
                     <a href="tel:053/41.57.92">02/308.33.83</a>
                   </li>
                   <li>
                     <span>E-mailadres</span>
                     <a href="mailto:affligem@immoaccenta.be">herne@immoaccenta.be</a>
                   </li>
                 </ul>
               </div>
            </div>
          </div>
          <div class="contact-info-slide-item">
            <div class="contact-info-dsc-nnr mHc">
               <div class="contact-info-dsc-tp">
                 <span>Accenta Vastgoed</span>
                 <h3 class="contact-info-dsc-tp-title">Ninove</h3>
               </div>
               <div class="contact-info-dsc-tp-btm">
                 <ul class="reset-list clearfix">
                   <li>
                     <span>adres</span>
                     <a href="#">Nederwijk 4, 9400 Ninove</a>
                   </li>
                   <li>
                     <span>Telefoon</span>
                     <a href="tel:053/41.57.92">054/33.84.80</a>
                   </li>
                   <li>
                     <span>E-mailadres</span>
                     <a href="mailto:affligem@immoaccenta.be">ninove@immoaccenta.be</a>
                   </li>
                 </ul>
               </div>
            </div>
          </div>
          <div class="contact-info-slide-item">
            <div class="contact-info-dsc-nnr mHc">
               <div class="contact-info-dsc-tp">
                 <span>Accenta Vastgoed</span>
                 <h3 class="contact-info-dsc-tp-title">Affligem</h3>
               </div>
               <div class="contact-info-dsc-tp-btm">
                 <ul class="reset-list clearfix">
                   <li>
                     <span>adres</span>
                     <a href="#">Brusselbaan 110, 1790 Affligem</a>
                   </li>
                   <li>
                     <span>Telefoon</span>
                     <a href="tel:053/41.57.92">053/41.57.92</a>
                   </li>
                   <li>
                     <span>E-mailadres</span>
                     <a href="mailto:affligem@immoaccenta.be">affligem@immoaccenta.be</a>
                   </li>
                 </ul>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <div class="block-1200">
      <div class="dft-team-module">
        <div class="team-module-hdr block-950">
          <h3 class="tmhdr-title">Onze team</h3>
          <p>Porta enim malesuada cursus ultrices pellentesque purus, tempor, tellus. Tempus tellus sed parturient neque tristique volutpat aliquam id. Nunc egestas in pellentesque mi vitae egestas ultrices vitae vitae. </p>
        </div>
        <div class="team-module-grds">
          <div class="team-module-grds-slider  teamModuleGrdsSlider">
            <div class="teamModuleGrdsSlideItem">
              <div class="team-grd-item">
                <div class="team-grd-item-fea-img">
                  <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images//team-grd-item-fea-img-01.jpg);"></div>
                  <a href="#" class="overlay-link"></a>
                </div>
                <div class="team-grd-item-des mHc">
                  <label>Functie</label>
                  <h4 class="tgid-title"><a href="#">Voornaam Acthernaam</a></h4>
                  <strong>BIV: 730390160</strong>
                </div>
              </div>
            </div>
            <div class="teamModuleGrdsSlideItem">
              <div class="team-grd-item">
                <div class="team-grd-item-fea-img">
                  <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images//team-grd-item-fea-img-02.jpg);"></div>
                  <a href="#" class="overlay-link"></a>
                </div>
                <div class="team-grd-item-des mHc">
                  <label>Functie</label>
                  <h4 class="tgid-title"><a href="#">Voornaam Acthernaam</a></h4>
                  <strong>BIV: 730390160</strong>
                </div>
              </div>
            </div>
            <div class="teamModuleGrdsSlideItem">
              <div class="team-grd-item">
                <div class="team-grd-item-fea-img">
                  <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images//team-grd-item-fea-img-03.jpg);"></div>
                  <a href="#" class="overlay-link"></a>
                </div>
                <div class="team-grd-item-des mHc">
                  <label>Functie</label>
                  <h4 class="tgid-title"><a href="#">Voornaam Acthernaam</a></h4>
                  <strong>BIV: 730390160</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>

<section class="usp-sec">
  <div class="usp-sec-inr">
    <div class="usp-grd-items xs-usp-slider clearfix">
      <div class="usp-grd-item">
        <div class="usp-grd-item-ctlr">
          <i>
            <svg class="ftr-top-grd-item-img-svg" width="42" height="42" viewBox="0 0 42 42" fill="#fff">
              <use xlink:href="#ftr-top-grd-item-img-svg"></use>
            </svg>
          </i>
          <strong class="usp-grd-item-title">Gevarieerd aanbod</strong>
        </div>
      </div>
      <div class="usp-grd-item">
        <div class="usp-grd-item-ctlr">
          <i>
            <svg class="ftr-top-grd-item-img-svg" width="42" height="42" viewBox="0 0 42 42" fill="#fff">
              <use xlink:href="#ftr-top-grd-item-img-svg"></use>
            </svg>
          </i>
          <strong class="usp-grd-item-title">Persoonlijke aanpak</strong>
        </div>
      </div>
      <div class="usp-grd-item">
        <div class="usp-grd-item-ctlr">
          <i>
            <svg class="ftr-top-grd-item-img-svg" width="42" height="42" viewBox="0 0 42 42" fill="#fff">
              <use xlink:href="#ftr-top-grd-item-img-svg"></use>
            </svg>
          </i>
          <strong class="usp-grd-item-title">Flexibiliteit</strong>
        </div>
      </div>
      <div class="usp-grd-item">
        <div class="usp-grd-item-ctlr">
          <i>
            <svg class="ftr-top-grd-item-img-svg" width="42" height="42" viewBox="0 0 42 42" fill="#fff">
              <use xlink:href="#ftr-top-grd-item-img-svg"></use>
            </svg>
          </i>
          <strong class="usp-grd-item-title">Dynamisch team</strong>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>