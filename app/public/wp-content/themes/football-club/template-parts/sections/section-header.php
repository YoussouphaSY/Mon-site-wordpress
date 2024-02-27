<!-- Header Area -->
    <header class="m-header main-header <?php echo esc_attr(soccerclubacademy_sticky_menu()); ?>">

    		<?php 
				$topheader_icon1 = get_theme_mod('topheader_icon1','fa fa-facebook');
				
				$topheader_icon1link = get_theme_mod('topheader_icon1link','#');

				$topheader_icon2 = get_theme_mod('topheader_icon2','fa fa-instagram');
				$topheader_icon2link = get_theme_mod('topheader_icon2link','#');

				$topheader_icon3 = get_theme_mod('topheader_icon3','fa fa-twitter');
				$topheader_icon3link = get_theme_mod('topheader_icon3link','#');

				$topheader_icon4 = get_theme_mod('topheader_icon4','fa fa-pinterest-p');
				$topheader_icon4link = get_theme_mod('topheader_icon4link','#');

				$topheader_iconcol = get_theme_mod('topheader_iconcol','#ffffff');
				
				$topheader_iconbgcol = get_theme_mod('topheader_iconbgcol','#3a393b');

			?>
		
			
			<!-- <div class="container"> -->
           <!-- Header -->
            <nav class="navbar navbar-expand-lg navbaroffcanvase row">
            	<div class="header pd-0">
            		<div class="headl col-md-3 col-lg-3 col-sm-12">
						<div class="logo">
							<?php
							if(has_custom_logo())
								{	
									the_custom_logo();
								}
								else { 
								?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<h3 class="site-title" style="color: <?php echo esc_html(get_theme_mod('topheader_sitetitlecolor','#fff','football-club')); ?>">
										<?php 
											echo esc_html(bloginfo('name'));
										?>
									</h3>
								</a>

								<?php
									$soccerclubacademy_site_desc = get_bloginfo( 'description');
									if ($soccerclubacademy_site_desc) : ?>
										
									<p class="site-description" style="color: <?php echo esc_html(get_theme_mod('topheader_taglinecolor','#fff','football-club')); ?>"><?php echo esc_html($soccerclubacademy_site_desc); ?></p>
								<?php endif; ?>	

							<?php 						
								}
							?>
							
						</div>
					</div>

					<div class="headright col-md-9 col-lg-9 col-sm-12 row">
						<div class="col-md-9 col-lg-9 col-sm-12">
							<div class="navbar-menubar">
			                    <!-- Small Divice Menu-->
			                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','football-club'); ?>"> 
			                        <i class="fa fa-bars"></i>
			                    </button>
			                    <div class="collapse navbar-collapse navbar-menu">
				                    <button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','football-club'); ?>"> 
				                        <i class="fa fa-times"></i>
				                    </button> 
									<?php 
										wp_nav_menu( 
											array(  
												'theme_location' => 'primary_menu',
												'container'  => '',
												'container_id'    => '',
												'menu_class' => 'navbar-nav main-nav',
												'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
												'walker' => new WP_Bootstrap_Navwalker()
												 ) 
											);
									?>
			                    </div>
			                </div>
		                </div>

		                <div class="col-md-3 col-lg-3 col-sm-12 icons pd-0">
							<a href=" <?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon1link); ?>">
								<i style="color: <?php echo esc_html(get_theme_mod('topheader_iconcol','#000','football-club')); ?>; background: <?php echo esc_html(get_theme_mod('topheader_iconbgcol','#fff','football-club')); ?>" class="<?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon1); ?>" aria-hidden="true"></i>

							</a>

							<a href=" <?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon2link); ?>">
								<i style="color: <?php echo esc_html(get_theme_mod('topheader_iconcol','#000','football-club')); ?>; background: <?php echo esc_html(get_theme_mod('topheader_iconbgcol','#fff','football-club')); ?>" class="<?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon2); ?>" aria-hidden="true"></i>
							</a>

							<a href=" <?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon3link); ?>">
								<i style="color: <?php echo esc_html(get_theme_mod('topheader_iconcol','#000','football-club')); ?>; background: <?php echo esc_html(get_theme_mod('topheader_iconbgcol','#fff','football-club')); ?>" class="<?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon3); ?>" aria-hidden="true"></i>
							</a>

							<a href=" <?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon4link); ?>">
								<i style="color: <?php echo esc_html(get_theme_mod('topheader_iconcol','#000','football-club')); ?>; background: <?php echo esc_html(get_theme_mod('topheader_iconbgcol','#fff','football-club')); ?>" class="<?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon4); ?>" aria-hidden="true"></i>
							</a>

						</div>
						
					</div>
							
					<div class="clear"></div>
            	</div>
            </nav>
        <!-- </div> -->
    </header>