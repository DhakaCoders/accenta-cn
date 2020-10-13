<?php get_header(); ?>
<?php get_template_part('templates/page', 'banner'); ?>

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
    <?php 
      }elseif( get_row_layout() == 'quickknops' ){
      $afbeelding1 = !empty(get_sub_field('afbeeldingen_1'))? cbv_get_image_src( get_sub_field('afbeeldingen_1') ): '';
      $afbeelding2 = !empty(get_sub_field('afbeeldingen_2'))? cbv_get_image_src( get_sub_field('afbeeldingen_2') ): '';
      $knop1 = !empty(get_sub_field('knop_1'))? get_sub_field('knop_1'): 'javascript:void()';
      $knop2 = !empty(get_sub_field('knop_2'))? get_sub_field('knop_2'): 'javascript:void()';

      $titel1 = !empty(get_sub_field('titel_1'))? get_sub_field('titel_1'): '';
      $titel2 = !empty(get_sub_field('titel_2'))? get_sub_field('titel_2'): '';
    ?>
    <div class="block-1200">
      <div class="dft-rent-module clearfix">
        <div class="dft-rent-module-item-col">
          <div class="dft-rent-module-item">
            <div class="dft-rent-module-item-fea-img-cnltr">
              <div class="inline-bg dft-rent-module-item-fea-img" style="background: url(<?php echo $afbeelding1; ?>);"></div>
            </div>
            <div class="drmi-des">
              <strong class="drmi-title"><?php echo $titel1; ?></strong>
            </div>
            <a class="overlay-link" href="<?php echo $knop1; ?>"></a>
          </div>
        </div>
        <div class="dft-rent-module-item-col">
          <div class="dft-rent-module-item">
            <div class="dft-rent-module-item-fea-img-cnltr">
              <div class="inline-bg dft-rent-module-item-fea-img" style="background: url(<?php echo $afbeelding2; ?>);"></div>
            </div>
            <div class="drmi-des">
              <strong class="drmi-title"><?php echo $titel2; ?></strong>
            </div>
            <a class="overlay-link" href="<?php echo $knop2; ?>"></a>
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
    <?php 
    }elseif( get_row_layout() == 'house' ){ 
      $houses = get_sub_field('houses'); 
      if( $houses ):
    ?>
    <div class="block-950">
      <div class="dft-service-module">
        <div class="dft-service-module-slider dftServiceModuleSlider">
          <?php
            $housesrc = '';
            foreach( $houses as $house ):
              if( !empty($house['afbeeldingen']) ) $housesrc = cbv_get_image_src($house['afbeeldingen'], 'dfpageg1');
              $fcknop = !empty($house['knop'])? $house['knop']: 'javascript:void()';
          ?>
          <div class="dftServiceModuleSlideItem">
            <div class="house-item">
              <div class="house-item-img-cntlr">
                <div class="house-item-img inline-bg" style="background: url('<?php echo $housesrc; ?>');">
                  
                </div>
                <div class="house-item-img-btn">
                  <a href="<?php echo $fcknop; ?>"><?php _e('Meer info', THEME_NAME); ?></a>
                </div>
                <div class="house-item-img-hover">
                  <ul class="reset-list">
                    <?php if( $house['bedrooms'] ): ?>
                    <li>
                      <i><img src="<?php echo THEME_URI; ?>/assets/images//hu-dtls-sidebar-btm-dsc-icon-1.svg"></i>
                      <span><?php echo $house['bedrooms']; ?> <?php _e('Slaapkamers', THEME_NAME); ?></span>
                    </li>
                    <?php endif; ?>
                    <?php if( $house['bathrooms'] ): ?>
                    <li>
                      <i><img src="<?php echo THEME_URI; ?>/assets/images//hu-dtls-sidebar-btm-dsc-icon-2.svg"></i>
                      <span><?php echo $house['bathrooms']; ?> <?php _e('Badkamers', THEME_NAME); ?></span>
                    </li>
                    <?php endif; ?>
                    <?php if( $house['grootte'] ): ?>
                    <li>
                      <i><img src="<?php echo THEME_URI; ?>/assets/images//hu-dtls-sidebar-btm-dsc-icon-3.svg"></i>
                      <span><?php echo $house['grootte']; ?> m<sup>2</sup></span>
                    </li>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
              <div class="house-item-desc">
                <?php if( $house['plaats'] ) printf('<h4 class="house-item-sub-title mHc">%s</h4>', $house['plaats']);?>
                <h3 class="house-item-title mHc1">
                  <a href="#"><?php if( $house['titel'] ) printf('%s', $house['titel']);?></a>
                </h3>
                <?php if( $house['prijs'] ) printf('<span class="house-item-prize">€ %s</span>', $house['prijs']);?>
                <div class="house-item-btn">
                  <a href="<?php echo $fcknop; ?>"><?php _e('Meer info', THEME_NAME); ?></a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php 
      }elseif( get_row_layout() == 'vacatures' ){ 
        $vacatureIDs = get_sub_field('selecteer_vacature'); 
    ?>
    <?php
    if( $vacatureIDs && !empty($vacatureIDs) ):  
    $query = new WP_Query(array( 
        'post_type'=> 'vacature',
        'post_status' => 'publish',
        'posts_per_page' => count($vacatureIDs),
        'post__in' => $vacatureIDs
      ) 
    );

    if($query->have_posts()):
    ?>
    <div class="block-950">
      <div class="dft-job-module">
        <div class="dft-job-module-slider dftJobModuleSlider">
          <?php 
            while($query->have_posts()): $query->the_post();   
            $vacature_type = get_field('vacature_type', get_the_ID());
          ?>
          <div class="dftJobModuleSlideItem">
            <div class="vacatures-grd-item">
              <div class="vacatures-grd-item-des">
                <span><?php echo get_the_date('d.m.Y'); ?></span>
                <h3 class="vacatures-grd-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php echo get_the_excerpt(); ?></p>
                <?php if( !empty($vacature_type['label']) ) printf( '<strong>%s</strong>', $vacature_type['label'] ); ?>
                <a href="<?php the_permalink(); ?>"><?php _e('Meer info', THEME_NAME); ?></a>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
    <?php 
      endif;  
      wp_reset_postdata();
    ?>
    <?php endif; ?>
    <?php 
      }elseif( get_row_layout() == 'adres' ){ 
        $replaceArray = '';
        $branches = get_field('branches', 'options');
    ?>
    <?php if( $branches ): ?>
    <div class="block-1200">
      <div class="dft-contact-info-slider">
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
    <hr>
    <?php endif; ?>
    <?php 
      }elseif( get_row_layout() == 'onje_team' ){ 
      $fc_titel = get_sub_field('titel'); 
      $fc_tekst = get_sub_field('fc_tekst'); 
      $selecteerIDs = get_sub_field('selecteer_team'); 
    ?>
    <div class="block-1200">
      <div class="dft-team-module">
        <div class="team-module-hdr block-950">
          <?php 
              if( !empty($fc_titel) ) printf('<h3 class="tmhdr-title">%s</h3>', $fc_titel); 
              if( !empty($fc_tekst) ) echo wpautop($fc_tekst); 
          ?>
        </div>
          <?php
          if( $selecteerIDs && !empty($selecteerIDs) ):  
          $query = new WP_Query(array( 
              'post_type'=> 'team',
              'post_status' => 'publish',
              'posts_per_page' => count($selecteerIDs),
              'post__in' => $selecteerIDs
            ) 
          );

          if($query->have_posts()):
          ?>
        <div class="team-module-grds">
          <div class="team-module-grds-slider  teamModuleGrdsSlider">
            <?php 
              while($query->have_posts()): $query->the_post();   
              $positie = get_field('positie', get_the_ID());
              $biv = get_field('positie', get_the_ID());
              $thumb_id = get_post_thumbnail_id(get_the_ID());
              if(!empty($thumb_id)){
                $teamthumb = cbv_get_image_src($thumb_id, 'bloggrid');
              } else {
                $teamthumb = '';
              }
            ?>
            <div class="teamModuleGrdsSlideItem">
              <div class="team-grd-item">
                <div class="team-grd-item-fea-img">
                  <div class="inline-bg" style="background: url(<?php echo $teamthumb; ?>);"></div>
                </div>
                <div class="team-grd-item-des mHc">
                  <?php if( !empty($positie) ) printf('<label>%s</label>', $positie); ?>
                  <h4 class="tgid-title"><?php the_title(); ?></h4>
                  <?php if( !empty($positie) ) printf('<strong>BIV: %s</strong>', $positie); ?>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
          <?php 
            endif;  
            wp_reset_postdata();
          ?>
        <?php endif; ?>
      </div>
    </div>
    <?php } ?>
    <?php endwhile; ?>
    <?php } ?>
  </article>
</section>
<?php get_template_part('templates/section', 'usp'); ?>
<?php get_footer(); ?>