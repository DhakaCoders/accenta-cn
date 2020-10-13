<?php 
/*
  Template Name: Vacatures Overview
*/
get_header(); 
$thisID = get_the_ID();
$intro = get_field('intro', $thisID);
?>
<?php get_template_part('templates/page', 'banner'); ?>
<section class="vacatures-grd-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="vacatures-grd-sec-inr">
          <?php if( $intro ): ?>
          <div class="vacatures-entry-hdr">
            <?php 
              if( !empty($intro['titel']) ) printf('<h2 class="vacatures-entry-hdr-title">%s</h2>', $intro['titel']);
              if( !empty($intro['beschrijving']) ) echo wpautop($intro['beschrijving']);
            ?>
          </div>
          <?php endif; ?>
          <?php 
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $query = new WP_Query(array( 
              'post_type'=> 'vacature',
              'post_status' => 'publish',
              'posts_per_page' => 5,
              'orderby' => 'date',
              'order'=> 'DESC',
              'paged' => $paged
            ) 
          );

          if($query->have_posts()):
          ?>
          <div class="vacatures-grd-items">
            <ul class="reset-list clearfix">
            <?php 
              while($query->have_posts()): $query->the_post();   
              $vacature_type = get_field('vacature_type', get_the_ID());
            ?>
              <li>
                <div class="vacatures-grd-item mHc">
                  <div class="vacatures-grd-item-des">
                    <span><?php echo get_the_date('d.m.Y'); ?></span>
                    <h3 class="vacatures-grd-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="mHc1"><?php echo get_the_excerpt(); ?></p>
                    <?php if( !empty($vacature_type['label']) ) printf( '<strong>%s</strong>', $vacature_type['label'] ); ?>
                    <a href="<?php the_permalink(); ?>"><?php _e('Meer info', THEME_NAME); ?></a>
                  </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>
        <div class="pagination-cntlr">
            <?php
              if( $query->max_num_pages > 1 ):
              $big = 999999999; // need an unlikely integer
              echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $query->max_num_pages,
                'type'  => 'list',
                'show_all' => true,
                'prev_next' => false
              ) );
              endif; 
            ?>
        </div>
          <?php 
            else:
              echo '<div class="hasgap">Geen resultaat</div>';
            endif;  
            wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/section', 'getin-touch'); ?>
<?php get_footer(); ?>