<section id="slider-section" class="slider-area home-slider">
  <!-- start of hero -->
  <section class="hero-slider hero-style f-slide">
     <div class="slider-center-imgmm">
      <!-- <div class="slider-center-imginn"> -->
        <?php 
            $centerslider_image = get_theme_mod('centerslider_image');
            if(!empty($centerslider_image)){
              echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($centerslider_image).'" class="img-responsive secondry-bg-img" />';
            }else{
              echo '<img alt="sign" src="'.get_template_directory_uri().'/assets/images/img_slider_center.png"  />';
            } 
        ?>
      <!-- </div> -->
      </div> 
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php for($p=1; $p<6; $p++) { ?>
        <?php if( get_theme_mod('slider'.$p,false)) { ?>
        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
        <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
          $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
        <?php 
          if(has_post_thumbnail()){
            $img = esc_url($image[0]);
          }
          if(empty($image)){
            $img = get_template_directory_uri().'/assets/images/default.png';
          }

        ?>

        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image">
        
              <div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">  
                 <div class="slider-mainimg-box">
                    <img  src="<?php echo $img; ?>" alt="<?php the_title(); ?>">
                    <div class="imgshape"></div>
                </div>
                <div class="slider-inner-bx">
                   <!--  <div class="container"> -->
                        <div data-swiper-parallax="300" class="slide-titl">
                          <h2><?php the_title(); ?>
                            <div class="sliebrd"></div>
                          </h2>   
                        </div>    
                        <div data-swiper-parallax="400" class="slide-tex">
                          <p><?php the_excerpt(); ?></p>
                        </div>
                        <div data-swiper-parallax="500" class="slide-btns">
                          <a class="ReadMore1" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('Read More','football-club'); ?></a>
                        </div>
                    <!-- </div> -->
                </div>
              </div>          
          </div>
        </div>
        <?php endwhile;
           wp_reset_postdata(); ?>
        <?php } } ?>
        <div class="clear"></div> 

      </div>
       <!-- swipper controls -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
  </section>
  <!-- end of hero slider -->
</section>


