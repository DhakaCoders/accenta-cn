<?php 
  $thisID = get_the_ID();

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