<section id="service-section" class="services-area home-services">
	<div class="container"> 
		<div class="row justify-content-center text-center">
			<div class="col-md-10 col-lg-8">
				<div class="section-heading">
					<h2 class="title"><?php esc_html_e( 'Our Feature', 'football-club' ); ?>
						
						<div class="hedingbrd"></div>
					</h2>
				</div>
			</div>
		</div>

		<div class="row">
				

			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="imgserviceslider">

					<?php 
			              $serleft_image = get_theme_mod('serleft_image');
			              if(!empty($serleft_image)){
			                echo '<img alt="'. esc_html(get_the_title()) .'" src="'.esc_url($serleft_image).'" class="img-responsive secondry-bg-img" />';
			              }else{
			                echo '<img alt="sign" src="'.get_stylesheet_directory_uri().'/assets/images/service_center.jpg"  />';
			              }	
		          	?>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

				<div class="leftside">

					<?php for($p=1; $p<4; $p++) { ?>
			        <?php if( get_theme_mod('Service'.$p,false)) { ?>
			        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('Service'.$p,true)); ?>
			        <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
			          $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
			        <?php 
			          if(has_post_thumbnail()){
			            $img = esc_url($image[0]);
			          }
			          if(empty($image)){
			            $img = get_stylesheet_directory_uri().'/assets/images/default.png';
			          }
			        ?>
			        <?php 
						$icon = get_theme_mod('service_icon'.$p,'fa fa-tags');
			        ?>

					<!-- Start Single Service -->
					<div class="box-space">


						<div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">       

						
						<div class="single-service">
							<div class="row">
									<div class="col-lg-3 col-md-4 col-xs-12 ">
										<div class="sericn">
											<div class="iconBox">
												<div class="imageBox">
							                		<!-- <img  src="<//?php echo $img; ?>" alt="<//?php the_title(); ?>"> -->
							                		<i class="<?php echo $icon; ?>" aria-hidden="true"></i>
							                	</div>
						                	</div>		                					
										</div>
									</div>
									<div class="col-lg-9 col-md-8 col-xs-12">
										<div class="serbx">
											 
											<h3 class="title">
												<a class="sertit" href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
											</h3>
											
											<p class="description"><?php the_excerpt(); ?></p>
											<!-- <a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'READ MORE', 'football-club' ); ?></a> -->
										</div>
									</div>
								</div>
							<div class="clearfix"></div>
						</div>

		              	</div>


					</div>
					<!-- / End Single Service -->

					<?php endwhile;
			           wp_reset_postdata(); ?>
			        <?php } } ?>
			        <div class="clear"></div> 
				
				</div>

			</div>
			
		</div>
	
	</div>
</section>