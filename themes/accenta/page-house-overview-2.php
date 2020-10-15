<?php 
/*
  Template Name: House Overview 2
*/
get_header(); 
?>
<?php get_template_part('templates/page', 'banner'); ?>
<section class="house-view-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="">
          <div class="ho-psearch-form-modiule">
            <div class="psearch-form-modiule">
              <div class="psearch-form">
                <div class="psearch-form-fields clearfix">
                  <div class="type pfm-item">
                    <select class="selectpicker" id="pstype" name="pstype">
                      <option value="*">Type</option>
                      <option value="tekoop">Te Koop</option>
                      <option value="tehuur">Te Huur</option>
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
          </div>
        </form>

      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="house-view-items-contlr te-huur">
          <ul class="reset-list">
            <li>
              <div class="house-item mHc">
                <div class="house-item-img-cntlr">
                  <div class="house-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/house-item-img-001.jpg');">
                    
                  </div>
                  <div class="house-item-img-btn">
                    <a href="<?php echo esc_url(home_url('house-details')); ?>">Gerealiseerd</a>
                  </div>
                </div>
                <div class="house-item-desc secound-house-item-desc">
                  <h4 class="house-item-sub-title mHc1">Franklin Rooseveltlaan 41, 8790 Waregem</h4>
                  <h3 class="house-item-title mHc2"><a href="<?php echo esc_url(home_url('house-details')); ?>">Hoekappartement Fase 2 Residentie Roosevelt</a></h3>
                </div>
              </div>
            </li>
            <li>
              <div class="house-item mHc">
                <div class="house-item-img-cntlr">
                  <div class="house-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/house-item-img-001.jpg');">
                    
                  </div>
                  <div class="house-item-img-btn">
                    <a href="<?php echo esc_url(home_url('house-details')); ?>">Gerealiseerd</a>
                  </div>
                </div>
                <div class="house-item-desc secound-house-item-desc">
                  <h4 class="house-item-sub-title mHc1">Franklin Rooseveltlaan 41, 8790 Waregem</h4>
                  <h3 class="house-item-title mHc2"><a href="<?php echo esc_url(home_url('house-details')); ?>">Hoekappartement Fase 2 Residentie Roosevelt</a></h3>
                </div>
              </div>
            </li>
            <li>
              <div class="house-item mHc">
                <div class="house-item-img-cntlr">
                  <div class="house-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/house-item-img-001.jpg');">
                    
                  </div>
                  <div class="house-item-img-btn">
                    <a href="<?php echo esc_url(home_url('house-details')); ?>">Gerealiseerd</a>
                  </div>
                </div>
                <div class="house-item-desc secound-house-item-desc">
                  <h4 class="house-item-sub-title mHc1">Franklin Rooseveltlaan 41, 8790 Waregem</h4>
                  <h3 class="house-item-title mHc2"><a href="<?php echo esc_url(home_url('house-details')); ?>">Hoekappartement Fase 2 Residentie Roosevelt</a></h3>
                </div>
              </div>
            </li>
            <li>
              <div class="house-item mHc">
                <div class="house-item-img-cntlr">
                  <div class="house-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/house-item-img-001.jpg');">
                    
                  </div>
                  <div class="house-item-img-btn">
                    <a href="<?php echo esc_url(home_url('house-details')); ?>">Gerealiseerd</a>
                  </div>
                </div>
                <div class="house-item-desc secound-house-item-desc">
                  <h4 class="house-item-sub-title mHc1">Franklin Rooseveltlaan 41, 8790 Waregem</h4>
                  <h3 class="house-item-title mHc2"><a href="<?php echo esc_url(home_url('house-details')); ?>">Hoekappartement Fase 2 Residentie Roosevelt</a></h3>
                </div>
              </div>
            </li>
            <li>
              <div class="house-item mHc">
                <div class="house-item-img-cntlr">
                  <div class="house-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/house-item-img-001.jpg');">
                    
                  </div>
                  <div class="house-item-img-btn">
                    <a href="<?php echo esc_url(home_url('house-details')); ?>">Gerealiseerd</a>
                  </div>
                </div>
                <div class="house-item-desc secound-house-item-desc">
                  <h4 class="house-item-sub-title mHc1">Franklin Rooseveltlaan 41, 8790 Waregem</h4>
                  <h3 class="house-item-title mHc2"><a href="<?php echo esc_url(home_url('house-details')); ?>">Hoekappartement Fase 2 Residentie Roosevelt</a></h3>
                </div>
              </div>
            </li>
            <li>
              <div class="house-blue-item secound-house-blue-item mHc">
                <div class="house-blue-item-icon">
                  <img src="<?php echo THEME_URI; ?>/assets/images/house-blue-item-icon.svg" alt="">
                </div>
                <h3 class="house-blue-item-title"><a href="<?php echo esc_url(home_url('contact')); ?>">Heb je je droomwoning nog niet gevonden?</a></h3>
                <div class="house-blue-item-btn">
                  <a href="<?php echo esc_url(home_url('contact')); ?>">Contacteer ons</a>
                </div>
              </div>
            </li>
            <li>
              <div class="house-item mHc">
                <div class="house-item-img-cntlr">
                  <div class="house-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/house-item-img-001.jpg');">
                    
                  </div>
                  <div class="house-item-img-btn">
                    <a href="<?php echo esc_url(home_url('house-details')); ?>">Gerealiseerd</a>
                  </div>
                </div>
                <div class="house-item-desc secound-house-item-desc">
                  <h4 class="house-item-sub-title mHc1">Franklin Rooseveltlaan 41, 8790 Waregem</h4>
                  <h3 class="house-item-title mHc2"><a href="<?php echo esc_url(home_url('house-details')); ?>">Hoekappartement Fase 2 Residentie Roosevelt</a></h3>
                </div>
              </div>
            </li>
            <li>
              <div class="house-item mHc">
                <div class="house-item-img-cntlr">
                  <div class="house-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/house-item-img-001.jpg');">
                    
                  </div>
                  <div class="house-item-img-btn">
                    <a href="<?php echo esc_url(home_url('house-details')); ?>">Gerealiseerd</a>
                  </div>
                </div>
                <div class="house-item-desc secound-house-item-desc">
                  <h4 class="house-item-sub-title mHc1">Franklin Rooseveltlaan 41, 8790 Waregem</h4>
                  <h3 class="house-item-title mHc2"><a href="<?php echo esc_url(home_url('house-details')); ?>">Hoekappartement Fase 2 Residentie Roosevelt</a></h3>
                </div>
              </div>
            </li>
            <li>
              <div class="house-item mHc">
                <div class="house-item-img-cntlr">
                  <div class="house-item-img inline-bg" style="background: url('<?php echo THEME_URI; ?>/assets/images/house-item-img-001.jpg');">
                    
                  </div>
                  <div class="house-item-img-btn">
                    <a href="<?php echo esc_url(home_url('house-details')); ?>">Gerealiseerd</a>
                  </div>
                </div>
                <div class="house-item-desc secound-house-item-desc">
                  <h4 class="house-item-sub-title mHc1">Franklin Rooseveltlaan 41, 8790 Waregem</h4>
                  <h3 class="house-item-title mHc2"><a href="<?php echo esc_url(home_url('house-details')); ?>">Hoekappartement Fase 2 Residentie Roosevelt</a></h3>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="pagination-cntlr">
          <ul class="reset-list page-numbers">
            <li><span class="page-numbers current">1</span></li>
            <li><a class="page-numbers" href="#">2</a></li>
            <li><a class="page-numbers" href="#">3</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/section', 'usp'); ?>
<?php get_footer(); ?>