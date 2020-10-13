<?php 
  get_header();
  $thisID = 225;
  $pageTitle = get_the_title($thisID);
  $custom_page_title = get_field('aangepaste_paginatitel', $thisID);
  if(!empty(str_replace(' ', '', $custom_page_title))){
    $pageTitle = $custom_page_title;
  } 
  $standaardbannerID = get_field('bannerafbeelding', $thisID);
  if( !empty($standaardbannerID) ) {
    $standaardbanner = cbv_get_image_src($standaardbannerID, 'pagebanner');
  }else{
    $standaardbanner = THEME_URI.'/assets/images/banner.jpg';
  }
?>
<section class="page-bnr-cntlr">
  <div class="page-bnr-cntlr-inr">
    <div class="page-banner">
      <div class="inline-bg page-banner-bg" style="background: url('<?php echo $standaardbanner; ?>');">
      </div>
      <div class="page-banner-title-cntlr">
        <h1 class="banner-title"><?php echo $pageTitle; ?></h1>
      </div>
      <div class="bnr-breadcum">
        <?php cbv_breadcrumbs(); ?>
      </div>
    </div>
  </div>
</section>
<?php 
$vacature_type = get_field('vacature_type', get_the_ID());
$plaats = get_field('plaats', get_the_ID());
$postTitle = get_the_title();
$permalink = get_the_permalink();
?>
<section class="Vacancy-content-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="Vacancy-content-wrap">
          <div class="Vacancy-content-inr">
            <div class="back-btn">
              <a href="javascript:history.go(-1)">
                <span><?php _e('Terug naar overzicht', THEME_NAME); ?></span>
                <i>
                  <svg class="back-btn-svg" width="18" height="16" viewBox="0 0 18 16" fill="#7D7D7D">
                    <use xlink:href="#back-btn-svg"></use>
                  </svg> 
                </i>
              </a>
            </div>
            <div class="Vacancy-content-cntlr">
              <div class="vacancy-hadding">
                <h2 class="vacancy-hadding-title"><?php the_title(); ?></h2>
                <div class="vacancy-socials">
                  <ul class="reset-list">
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $permalink; ?>"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $permalink; ?>&title=<?php echo $postTitle; ?>&summary=&source=""><i class="fab fa-linkedin-in"></i></li>
                      <li><a href="https://twitter.com/home?status=<?php echo $permalink; ?>"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="vacancy-desc-top">
                  <ul class="reset-list">
                    <li><?php echo get_the_date('d.m.Y'); ?></li>
                    <?php 
                    if( !empty($vacature_type['label']) ) printf( '<li>%s</li>', $vacature_type['label'] ); 
                    if( !empty($plaats) ) printf( '<li>%s</li>', $plaats ); 
                    ?>
                  </ul>
                </div>
                <div class="vacancy-desc-cntlr">
                  <?php 
                  if(have_rows('inhoud')){  
                    $count = 0;
                    $inhoud = get_field('inhoud');
                    if (is_array($inhoud)) {
                      $contentcount = count($inhoud);
                    }
                  ?>
                  <?php $i = 1; while ( have_rows('inhoud') ) : the_row(); ?>
                  <?php if( get_row_layout() == 'teksteditor' ){ ?>
                    <div class="vacancy-desc-modiule<?php echo ($contentcount == $i)? ' modiule-lessbar':''; ?>">
                      <?php 
                        $fc_titel = get_sub_field('fc_titel');
                        if( !empty($fc_titel) ) printf('<h3 class="vacancy-desc-title">%s</h3>', $fc_titel);
                        $beschrijving = get_sub_field('fc_teksteditor'); 
                        if( !empty($beschrijving) ) echo wpautop( $beschrijving, true );
                      ?>
                    </div>
                  <?php } ?>

                  <?php $i++; endwhile; ?>
                  <?php } ?>
                  <div class="vacancy-modiule-knop"><a href="#"><?php _e('Solliciteer', THEME_NAME); ?></a></div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<?php 
$query = new WP_Query(array( 
    'post_type'=> 'vacature',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order'=> 'DESC',
    'meta_key' => 'vacature_type',
    'meta_value' => $vacature_type['value']
  ) 
);

if($query->have_posts()):
?>
<div class="vd-ctlr">
  <section class="vacatures-grd-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="vacatures-grd-sec-inr">
            <div class="vacatures-entry-hdr">
              <h3 class="vacatures-entry-hdr-title">Ontdek meer vacatures</h3>
              <p>Vivamus mi dui ut luctus adipiscing aenean lectus. Morbi turpis proin faucibus nisi netus vivamus ultrices neque morbi. Porta enim malesuada<br> cursus ultrices pellentesque purus, tempor, tellus.</p>
            </div>
            <div class="vacatures-grd-items">
              <ul class="reset-list clearfix">
              <?php 
                while($query->have_posts()): $query->the_post();   
                $vacature_type = get_field('vacature_type', get_the_ID());
              ?>
                <li>
                  <div class="vacatures-grd-item">
                    <div class="vacatures-grd-item-des">
                      <span><?php echo get_the_date('d.m.Y'); ?></span>
                      <h3 class="vacatures-grd-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <p><?php echo get_the_excerpt(); ?></p>
                      <?php if( !empty($vacature_type['label']) ) printf( '<strong>%s</strong>', $vacature_type['label'] ); ?>
                      <a href="<?php the_permalink(); ?>"><?php _e('Meer info', THEME_NAME); ?></a>
                    </div>
                  </div>
                </li>
                <?php endwhile; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php 
 endif;  
wp_reset_postdata();
?>
<?php get_template_part('templates/section', 'getin-touch'); ?>
<?php get_footer(); ?>