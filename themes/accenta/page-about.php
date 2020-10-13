<?php 
  /*
    Template Name: Wie Zijn Wie
  */
  get_header();
  $thisID = get_the_ID();

  $fctitel = get_field('titel', $thisID);
  $fcbeschrijving = get_field('beschrijving', $thisID);
  $fcshortcode = get_field('formshortcode', $thisID);
?>
<?php get_template_part('templates/page', 'banner'); ?>
<?php
  $showhide_intro = get_field('showhide_intro', $thisID);
  $about_intro = get_field('about_intro', $thisID);
  if( $showhide_intro ):
    if( $about_intro ):
    $deshoversrc = '';
    if(!empty($about_intro['afbeelding']))
      $deshoversrc = cbv_get_image_src($about_intro['afbeelding'], 'aboutgrid');

?>
<section class="beautiful-house-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="beautiful-house-sec-inr img-des-module clearfix">
          <div class="beutiful-house-img inline-bg order-2" style="background: url('<?php echo $deshoversrc; ?>');"></div>
          <div class="beautiful-house-des order-1">
            <h2 class="beautiful-house-title">
              <?php 
                if( !empty($about_intro['subtitel']) ) printf('<span>%s</span>', $about_intro['subtitel']);
                if( !empty($about_intro['titel']) ) printf('<strong>%s</strong>', $about_intro['titel']);
              ?>
            </h2>
            <?php if( !empty($about_intro['beschrijving']) ) echo wpautop( $about_intro['beschrijving'] ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php get_template_part('templates/section', 'usp'); ?>
<?php
  $showhide_intro2 = get_field('showhide_intro2', $thisID);
  $about_intro2 = get_field('about_intro2', $thisID);
  if( $showhide_intro2 ):
    if( $about_intro2 ):
    $deshoversrc2 = '';
    if(!empty($about_intro2['afbeelding']))
      $deshoversrc2 = cbv_get_image_src($about_intro2['afbeelding'], 'aboutgrid');
?>
<section class="tips-ugly-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tips-ugly-sec-inr img-des-module">
          <div class="tips-ugly-img inline-bg" style="background: url('<?php echo $deshoversrc2; ?>');"></div>
          <div class="tips-ugly-des">
            <?php 
              if( !empty($about_intro2['titel']) ) printf('<h2 class="tips-ugly-title">%s</h2>', $about_intro2['titel']);
              if( !empty($about_intro2['beschrijving']) ) echo wpautop( $about_intro2['beschrijving'] ); 
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php
  $showhide_quickknop = get_field('showhide_quickknop', $thisID);
  $quickknops = get_field('quickknops', $thisID);
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
<section class="wzw-teams-sec">
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
                    <h3 class="wzw-team-grd-item-title"><a href="<?php echo $knop1; ?>"><?php echo $titel1; ?></h3>
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
<?php get_template_part('templates/section', 'getin-touch'); ?>
<?php get_footer(); ?>