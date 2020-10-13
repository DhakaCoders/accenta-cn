<?php get_header(); ?>
<?php  
  $hshowhide_slide = get_field('showhide_slider', HOMEID);
  $hslides = get_field('home_slider', HOMEID);
  $slidesec = get_field('slidesec', HOMEID);
  if($hshowhide_slide):
?>
<section class="h-slider-banner">
  <div class="h-slider-banner-cntrl">
    <?php if($hslides){ ?>
    <span class="hm-bnr-line"></span>
    <div class="h-slider homeSlider">
    <?php
      $i = 1;
      foreach( $hslides as $hslide ): 
      $slideposter = !empty($hslide['afbeelding'])? $hslide['afbeelding']: '';
    ?>
      <div class="h-slider-item-cntlr">
        <div class="h-slider-item inline-bg" style="background: url('<?php echo $slideposter; ?>');">
          
        </div>
      </div>
      <?php $i++; endforeach; ?>
    </div>
    <div class="h-slider-banner-desc">
      <?php 
        if( $slidesec ): 
           if( !empty($slidesec['subtitel']) ) printf( '<h4 class="h-slider-banner-desc-sub-title">%s</h4>', $slidesec['subtitel'] ); 
           if( !empty($slidesec['titel']) ) printf( '<h1 class="h-slider-banner-desc-title">%s</h1>', $slidesec['titel'] ); 
        endif; 
      ?>
      <form action="">
        <div class="psearch-form-modiule">
          <div class="psearch-form">
            <div class="psearch-form-fields clearfix">
              <div class="type pfm-item">
                <select class="selectpicker" id="pstype" name="pstype">
                  <option value="*">Type</option>
                  <option value="type1">Option 1</option>
                  <option value="type2">Option 2</option>
                  <option value="type3">Option 3</option>
                  <option value="type4">Option 4</option>
                  <option value="type5">Option 5</option>
                </select>
              </div>
              <div class="locate pfm-item">
                <select class="selectpicker" id="pslocate" name="pslocate">
                  <option value="*">Prijs</option>
                  <option value="type1">Option 1</option>
                  <option value="type2">Option 2</option>
                  <option value="type3">Option 3</option>
                  <option value="type4">Option 4</option>
                  <option value="type5">Option 5</option>
                </select>
              </div>
              <div class="min-prj pfm-item">
                <select class="selectpicker" id="psminprj" name="psminprj">
                  <option value="*">Huren</option>
                  <option value="type1">Option 1</option>
                  <option value="type2">Option 2</option>
                  <option value="type3">Option 3</option>
                  <option value="type4">Option 4</option>
                  <option value="type5">Option 5</option>
                </select>
              </div>
              <div class="max-prj pfm-item">
                <select class="selectpicker" id="psmaxprj" name="psmaxprj">
                  <option value="*">Locatie</option>
                  <option value="type1">Option 1</option>
                  <option value="type2">Option 2</option>
                  <option value="type3">Option 3</option>
                  <option value="type4">Option 4</option>
                  <option value="type5">Option 5</option>
                </select>
              </div>
              <div class="submit zoeken">
                <button type="submit">Zoeken</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <?php } ?>
  </div>
</section>
<?php endif; ?>
<?php
  $showhide_quickknop = get_field('showhide_quickknop', HOMEID);
  $quickknops = get_field('quickknops', HOMEID);
  if( $showhide_quickknop ):
    if( $quickknops ):
      $afbeelding1 = !empty($quickknops['afbeelding1'])? cbv_get_image_src( $quickknops['afbeelding1'], 'hmqcknopbig' ): '';
      $afbeelding2 = !empty($quickknops['afbeelding2'])? cbv_get_image_src( $quickknops['afbeelding2'], 'hmqcknopsmll' ): '';
      $afbeelding3 = !empty($quickknops['afbeelding3'])? cbv_get_image_src( $quickknops['afbeelding3'], 'hmqcknopsmll' ): '';
      $knop1 = !empty($quickknops['knop1'])? $quickknops['knop1']: 'javascript:void()';
      $knop2 = !empty($quickknops['knop2'])? $quickknops['knop2']: 'javascript:void()';
      $knop3 = !empty($quickknops['knop3'])? $quickknops['knop3']: 'javascript:void()';

      $titel1 = !empty($quickknops['titel_1'])? $quickknops['titel_1']: '';
      $titel2 = !empty($quickknops['titel_2'])? $quickknops['titel_2']: '';
      $titel3 = !empty($quickknops['titel_3'])? $quickknops['titel_3']: '';
?>
<section class="wzw-teams-sec hm-wzw-teams-sec-cntlr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="wzw-teams-sec-inr">
          <div class="wzw-team-grd-items clearfix">
            <div class="wzw-team-grd-item-left mHc">
              <div class="wzw-team-grd-item">
                <div class="wzw-team-grd-item-ctlr">
                  <a class="overlay-link" href="<?php echo $knop1; ?>"></a>
                  <div class="wzw-team-grd-item-img inline-bg" style="background: url('<?php echo $afbeelding1; ?>');">
                    
                  </div>
                  <div class="wzw-team-grd-item-des">
                    <h3 class="wzw-team-grd-item-title"><a href="<?php echo $knop1; ?>"><?php echo $titel1; ?></a></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="wzw-team-grd-item-right mHc">
              <div class="wzw-team-grd-item">
                <div class="wzw-team-grd-item-ctlr">
                  <a class="overlay-link" href="<?php echo $knop2; ?>"></a>
                  <div class="wzw-team-grd-item-img inline-bg" style="background: url('<?php echo $afbeelding2; ?>');">
                    
                  </div>
                  <div class="wzw-team-grd-item-des">
                    <h3 class="wzw-team-grd-item-title"><a href="<?php echo $knop2; ?>"><?php echo $titel2; ?></a></h3>
                  </div>
                </div>
              </div>
              <div class="wzw-team-grd-item">
                <div class="wzw-team-grd-item-ctlr">
                  <a class="overlay-link" href="<?php echo $knop3; ?>"></a>
                  <div class="wzw-team-grd-item-img inline-bg" style="background: url('<?php echo $afbeelding3; ?>');">
                    
                  </div>
                  <div class="wzw-team-grd-item-des">
                    <h3 class="wzw-team-grd-item-title"><a href="<?php echo $knop3; ?>"><?php echo $titel3; ?></a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>

<section class="recently-added-sec">
  <div class="hide-sm">
    <div class="recently-added-sec-top">
      <span class="rgt-white-bg"></span>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="recently-added-sec-lft">
              <h2 class="rasl-title">recent  <br>toegevoegd</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="recently-added-sec-rgt">
              <div class="recentlyAddedSliderCntlr">
                <div class="recentlyAddedSlider">
                  <div class="recentlyAddedItem">
                    <strong>Franklin Rooseveltlaan 41, 8790 Waregem</strong>
                    <h3 class="rai-title">Hoekappartement Fase 2 Residentie Roosevelt</h3>
                    <ul class="reset-list">
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-1-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-1-svg"></use>
                            </svg>
                          </i>
                          <span>3 Slaapkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-2-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-2-svg"></use>
                            </svg>
                          </i>
                          <span>2 Badkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-3-svg" width="20" height="24" viewBox="0 0 20 24" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-3-svg"></use>
                            </svg>
                          </i>
                          <span>200 m<sup>2</sup></span>
                        </div>
                      </li>
                    </ul>
                    <div class="recentlyAddedItemBtn">
                      <a class="act-btn act-tranparent-btn" href="<?php echo esc_url(home_url('house-details')); ?>">Meer info</a>
                    </div>
                  </div>
                  <div class="recentlyAddedItem">
                    <strong>Franklin Rooseveltlaan 41, 8790 Waregem</strong>
                    <h3 class="rai-title">Hoekappartement Fase 4 Residentie Roosevelt</h3>
                    <ul class="reset-list">
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-1-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-1-svg"></use>
                            </svg>
                          </i>
                          <span>3 Slaapkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-2-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-2-svg"></use>
                            </svg>
                          </i>
                          <span>2 Badkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-3-svg" width="20" height="24" viewBox="0 0 20 24" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-3-svg"></use>
                            </svg>
                          </i>
                          <span>200 m<sup>2</sup></span>
                        </div>
                      </li>
                    </ul>
                    <div class="recentlyAddedItemBtn">
                      <a class="act-btn act-tranparent-btn" href="<?php echo esc_url(home_url('house-details')); ?>">Meer info</a>
                    </div>
                  </div>
                  <div class="recentlyAddedItem">
                    <strong>Franklin Rooseveltlaan 41, 8790 Waregem</strong>
                    <h3 class="rai-title">Hoekappartement Fase 3 Residentie Roosevelt</h3>
                    <ul class="reset-list">
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-1-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-1-svg"></use>
                            </svg>
                          </i>
                          <span>3 Slaapkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-2-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-2-svg"></use>
                            </svg>
                          </i>
                          <span>2 Badkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-3-svg" width="20" height="24" viewBox="0 0 20 24" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-3-svg"></use>
                            </svg>
                          </i>
                          <span>200 m<sup>2</sup></span>
                        </div>
                      </li>
                    </ul>
                    <div class="recentlyAddedItemBtn">
                      <a class="act-btn act-tranparent-btn" href="<?php echo esc_url(home_url('house-details')); ?>">Meer info</a>
                    </div>
                  </div>
                </div>
                <div class="recentlyAddedSliderPrevNext">
                  <span class="ras-prev">
                    <i>
                      <svg class="prev-icon-white-svg" width="24" height="20" viewBox="0 0 24 20" fill="#fff">
                        <use xlink:href="#prev-icon-white-svg"></use>
                      </svg>
                    </i>
                  </span>
                  <span class="ras-next">
                    <i>
                      <svg class="next-icon-white-svg" width="24" height="20" viewBox="0 0 24 20" fill="#fff">
                        <use xlink:href="#next-icon-white-svg"></use>
                      </svg>
                    </i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <div class="recently-added-sec-btm">
      <div class="recently-added-pagi-slider recentlyAddedPagiSlider">
        <div class="recentlyAddedPagiSlideItem">
          <div style="background: url(<?php echo THEME_URI; ?>/assets/images/recently-added-pagi-slide-img-01.jpg);"></div>
        </div>
        <div class="recentlyAddedPagiSlideItem">
          <div style="background: url(<?php echo THEME_URI; ?>/assets/images/recently-added-pagi-slide-img-02.jpg);"></div>
        </div>
        <div class="recentlyAddedPagiSlideItem">
          <div style="background: url(<?php echo THEME_URI; ?>/assets/images/recently-added-pagi-slide-img-03.jpg);"></div>
        </div>
        <div class="recentlyAddedPagiSlideItem">
          <div style="background: url(<?php echo THEME_URI; ?>/assets/images/recently-added-pagi-slide-img-01.jpg);"></div>
        </div>
      </div>
    </div> 
  </div> 


  <!-- show xs content -->
  <div class="show-sm recently-added-sec-xs-cntlr">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="recently-added-sec-xs">
              <h2 class="rasl-title">recent  <br>toegevoegd</h2>
          </div>

          <div class="xs-recentlyAddedSliderCntlr">
            <div class="xs-recentlyAddedSlider">
              <div class="xs-recentlyAddedSlideItem">
                <div class="xs-recentlyAddedSlideItem-fea-img">
                  <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/recently-added-pagi-slide-img-01.jpg);">
                  </div>
                </div>
                <div class="xs-recentlyAddedSlideItem-des">
                  <div class="recentlyAddedItem">
                    <strong>Franklin Rooseveltlaan 41, 8790 Waregem</strong>
                    <h3 class="rai-title">Hoekappartement Fase 2 Residentie Roosevelt</h3>
                    <ul class="reset-list">
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-1-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-1-svg"></use>
                            </svg>
                          </i>
                          <span>3 Slaapkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-2-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-2-svg"></use>
                            </svg>
                          </i>
                          <span>2 Badkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-3-svg" width="20" height="24" viewBox="0 0 20 24" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-3-svg"></use>
                            </svg>
                          </i>
                          <span>200 m<sup>2</sup></span>
                        </div>
                      </li>
                    </ul>
                    <div class="recentlyAddedItemBtn">
                      <a class="act-btn act-tranparent-btn" href="<?php echo esc_url(home_url('house-details')); ?>">Meer info</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="xs-recentlyAddedSlideItem">
                <div class="xs-recentlyAddedSlideItem-fea-img">
                  <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/recently-added-pagi-slide-img-02.jpg);">
                  </div>
                </div>
                <div class="xs-recentlyAddedSlideItem-des">
                  <div class="recentlyAddedItem">
                    <strong>Franklin Rooseveltlaan 41, 8790 Waregem</strong>
                    <h3 class="rai-title">Hoekappartement Fase 2 Residentie Roosevelt</h3>
                    <ul class="reset-list">
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-1-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-1-svg"></use>
                            </svg>
                          </i>
                          <span>3 Slaapkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-2-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-2-svg"></use>
                            </svg>
                          </i>
                          <span>2 Badkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-3-svg" width="20" height="24" viewBox="0 0 20 24" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-3-svg"></use>
                            </svg>
                          </i>
                          <span>200 m<sup>2</sup></span>
                        </div>
                      </li>
                    </ul>
                    <div class="recentlyAddedItemBtn">
                      <a class="act-btn act-tranparent-btn" href="<?php echo esc_url(home_url('house-details')); ?>">Meer info</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="xs-recentlyAddedSlideItem">
                <div class="xs-recentlyAddedSlideItem-fea-img">
                  <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/recently-added-pagi-slide-img-03.jpg);">
                  </div>
                </div>
                <div class="xs-recentlyAddedSlideItem-des">
                  <div class="recentlyAddedItem">
                    <strong>Franklin Rooseveltlaan 41, 8790 Waregem</strong>
                    <h3 class="rai-title">Hoekappartement Fase 2 Residentie Roosevelt</h3>
                    <ul class="reset-list">
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-1-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-1-svg"></use>
                            </svg>
                          </i>
                          <span>3 Slaapkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-2-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-2-svg"></use>
                            </svg>
                          </i>
                          <span>2 Badkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-3-svg" width="20" height="24" viewBox="0 0 20 24" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-3-svg"></use>
                            </svg>
                          </i>
                          <span>200 m<sup>2</sup></span>
                        </div>
                      </li>
                    </ul>
                    <div class="recentlyAddedItemBtn">
                      <a class="act-btn act-tranparent-btn" href="<?php echo esc_url(home_url('house-details')); ?>">Meer info</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="xs-recentlyAddedSlideItem">
                <div class="xs-recentlyAddedSlideItem-fea-img">
                  <div class="inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/recently-added-pagi-slide-img-01.jpg);">
                  </div>
                </div>
                <div class="xs-recentlyAddedSlideItem-des">
                  <div class="recentlyAddedItem">
                    <strong>Franklin Rooseveltlaan 41, 8790 Waregem</strong>
                    <h3 class="rai-title">Hoekappartement Fase 2 Residentie Roosevelt</h3>
                    <ul class="reset-list">
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-1-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-1-svg"></use>
                            </svg>
                          </i>
                          <span>3 Slaapkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-2-svg" width="26" height="20" viewBox="0 0 26 20" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-2-svg"></use>
                            </svg>
                          </i>
                          <span>2 Badkamers</span>
                        </div>
                      </li>
                      <li>
                        <div class="act-fea-col">
                          <i>
                            <svg class="hu-dtls-sidebar-btm-dsc-icon-3-svg" width="20" height="24" viewBox="0 0 20 24" fill="#fff">
                              <use xlink:href="#hu-dtls-sidebar-btm-dsc-icon-3-svg"></use>
                            </svg>
                          </i>
                          <span>200 m<sup>2</sup></span>
                        </div>
                      </li>
                    </ul>
                    <div class="recentlyAddedItemBtn">
                      <a class="act-btn act-tranparent-btn" href="<?php echo esc_url(home_url('house-details')); ?>">Meer info</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="recentlyAddedSliderPrevNext">
                  <span class="ras-prev">
                    <i>
                      <svg class="prev-icon-white-svg" width="24" height="20" viewBox="0 0 24 20" fill="#fff">
                        <use xlink:href="#prev-icon-white-svg"></use>
                      </svg>
                    </i>
                  </span>
                  <span class="ras-next">
                    <i>
                      <svg class="next-icon-white-svg" width="24" height="20" viewBox="0 0 24 20" fill="#fff">
                        <use xlink:href="#next-icon-white-svg"></use>
                      </svg>
                    </i>
                  </span>
                </div>
          </div>

        </div>
      </div>
    </div>
  </div>

</section>


<div class="valuation-fixed-btn">
  <a href="<?php echo esc_url(home_url('waardebepaling')); ?>">
    <i>
      <svg class="home-icon-svg" width="35" height="35" viewBox="0 0 35 35" fill="#fff">
        <use xlink:href="#home-icon-svg"></use>
      </svg>
    </i>
    <span><?php _e( 'Waardebepaling', THEME_NAME ); ?></span>
  </a>
</div>
<?php
  $hshowhide_overons = get_field('showhide_overons', HOMEID);
  $hoverons = get_field('home_overons', HOMEID);
  if( $hshowhide_overons ):
    if( $hoverons ):
    $deshoversrc = '';
    if(!empty($hoverons['afbeelding']))
      $deshoversrc = cbv_get_image_src($hoverons['afbeelding'], 'aboutgrid');

?>
<section class="beautiful-house-sec hm-beautiful-house-sec-cntlr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="beautiful-house-sec-inr img-des-module clearfix">
          <div class="beutiful-house-img inline-bg order-2" style="background: url('<?php echo $deshoversrc; ?>');"></div>
          <div class="beautiful-house-des order-1">
            <h2 class="beautiful-house-title">
              <?php 
                if( !empty($hoverons['subtitel']) ) printf('<span>%s</span>', $hoverons['subtitel']);
                if( !empty($hoverons['titel']) ) printf('<strong>%s</strong>', $hoverons['titel']);
              ?>
            </h2>
            <?php 
              if( !empty($hoverons['beschrijving']) ) echo wpautop( $hoverons['beschrijving'] );
              $knop4 = $hoverons['knop'];
              if( is_array( $knop4 ) &&  !empty( $knop4['url'] ) ){
                  printf('<div class="house-item-btn"><a href="%s" target="%s">%s</a></div>', $knop4['url'], $knop4['target'], $knop4['title']); 
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php get_template_part('templates/section', 'usp'); ?>
<?php get_footer(); ?>