<?php 
$getintouch = get_field('getintouch', 'options');
if( $getintouch ):
?>
<section class="get-touch-sec-wrap">
  <div class="get-touch-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="get-touch-sec-inr">
            <div class="get-touch-des">
              <?php 
                if( !empty($getintouch['titel']) ) printf('<h2 class="get-touch-title">%s</h2>', $getintouch['titel']);
                if( !empty($getintouch['beschrijving']) ) echo wpautop( $getintouch['beschrijving'] ); 
              ?>
            </div>
            <div class="get-touch-link">
              <?php 
                $knop = $getintouch['knop'];
                if( is_array( $knop ) &&  !empty( $knop['url'] ) ){
                    printf('<a href="%s" target="%s">%s</a>', $knop['url'], $knop['target'], $knop['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>