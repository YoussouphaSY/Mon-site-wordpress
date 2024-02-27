<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		$stickyheader = esc_attr(soccerclubacademy_sticky_menu());
	?>


    <header class="main-header <?php echo esc_attr(soccerclubacademy_sticky_menu()); ?>">

    	<div class="upper-header-area">
    		<div class="container">
    		<?php 
				$topheader_icon1 = get_theme_mod('topheader_icon1','fa fa-facebook');
				
				$topheader_icon1link = get_theme_mod('topheader_icon1link','#');

				$topheader_icon2 = get_theme_mod('topheader_icon2','fa fa-instagram');
				$topheader_icon2link = get_theme_mod('topheader_icon2link','#');

				$topheader_icon3 = get_theme_mod('topheader_icon3','fa fa-twitter');
				$topheader_icon3link = get_theme_mod('topheader_icon3link','#');

				$topheader_icon4 = get_theme_mod('topheader_icon4','fa fa-google-plus');
				$topheader_icon4link = get_theme_mod('topheader_icon4link','#');

				$topheader_iconcol = get_theme_mod('topheader_iconcol','#ffffff');
				
				$topheader_iconbgcol = get_theme_mod('topheader_iconbgcol','#3a393b');

			?>
			<div class="row">
				<div class="col-md-5 col-lg-5 col-sm-5"> 
		    		
				</div>
				<div class="col-md-7 col-lg-7 col-sm-7">
					<div class="row">
					<div class="col-md-6 col-lg-6 col-sm-6">
						<?php
							$soccerclubacademy_site_desc = get_bloginfo( 'description');
							if ($soccerclubacademy_site_desc) : ?>
								
							<p class="site-description"><?php echo esc_html($soccerclubacademy_site_desc); ?></p>
						<?php endif; ?>
					</div>
					<div class="col-md-6 col-lg-6 col-sm-6 socials">
						<a href=" <?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon1link); ?>">
							<i style="color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_iconcol); ?>; background: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_iconbgcol); ?>" class="<?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon1); ?>" aria-hidden="true"></i>
						</a>

						<a href=" <?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon2link); ?>">
							<i style="color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_iconcol); ?>; background: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_iconbgcol); ?>" class="<?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon2); ?>" aria-hidden="true"></i>
						</a>

						<a href=" <?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon3link); ?>">
							<i style="color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_iconcol); ?>; background: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_iconbgcol); ?>" class="<?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon3); ?>" aria-hidden="true"></i>
						</a>

						<a href=" <?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon4link); ?>">
							<i style="color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_iconcol); ?>; background: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_iconbgcol); ?>" class="<?php echo apply_filters('soccerclubacademy_topheader', $topheader_icon4); ?>" aria-hidden="true"></i>
						</a>

					</div>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>

			<?php if ( function_exists( 'peccular_companion_activated' ) ) { ?>
				<button class="top-header-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".top-header"><i class="fa fa-ellipsis-v"></i></button>
			<?php } ?>	

		</div>
			
		</div>
		<div class="lower-header-area">	
			<div class="container">
           <!-- Header -->
            <nav class="navbar navbar-expand-lg navbaroffcanvase">
            	<div class="row">
            		<div class="col-md-3 col-lg-3 col-sm-6">
						<div class="logo">
							<?php
							if(has_custom_logo())
								{	
									the_custom_logo();
								}
								else { 
								?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<h4 class="site-title">
										<?php 
											echo esc_html(bloginfo('name'));
										?>
									</h4>
								</a>	
							<?php 						
								}
							?>
							
						</div>
					</div>

					<div class="col-md-9 col-lg-9 col-sm-6">
						<div class="navbar-menubar">
		                    <!-- Small Divice Menu-->
		                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','soccer-club-academy'); ?>"> 
		                        <i class="fa fa-bars"></i>
		                    </button>
		                    <div class="collapse navbar-collapse navbar-menu">
			                    <button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','soccer-club-academy'); ?>"> 
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

							

            	</div>
            </nav>
        </div>
        </div>
    </header>