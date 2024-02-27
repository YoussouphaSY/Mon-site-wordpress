<?php
function soccerclubacademy_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'soccerclubacademy_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'fff',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'soccerclubacademy_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'soccerclubacademy_custom_header_setup' );

if ( ! function_exists( 'soccerclubacademy_header_style' ) ) :

function soccerclubacademy_header_style() {
	$header_text_color = get_header_textcolor();

	$feature_disable_section = esc_attr(get_theme_mod('feature_disable_section','YES'));

	$topheader_logowidth = get_theme_mod('topheader_logowidth','100');
	$topheader_logoheight = get_theme_mod('topheader_logoheight','70');

	$topheader_sitetitlecol = get_theme_mod('topheader_sitetitlecol','#fff');
	$topheader_sitetitlebrdcol = get_theme_mod('topheader_sitetitlebrdcol','#c50301');

	$topheader_taglinecol = get_theme_mod('topheader_taglinecol','#000');



	$topheader_menuscol = get_theme_mod('topheader_menuscol','#dededa');
	$topheader_menushovercol = get_theme_mod('topheader_menushovercol','#c50301');
	$topheader_submenuscol = get_theme_mod('topheader_submenuscol','#fff');
	$topheader_submenushovercol = get_theme_mod('topheader_submenushovercol','#000');
	$topheader_submenusbgcol = get_theme_mod('topheader_submenusbgcol','#c50301');
	$topheader_submenusarrowcol = get_theme_mod('topheader_submenusarrowcol','#c50301');
	$topheader_menusbgcol = get_theme_mod('topheader_menusbgcol','#000000b3');
	$topheader_mobilemenutogglecol = get_theme_mod('topheader_mobilemenutogglecol','#c50301');
	$topheader_mobilemenutogglehvrcol = get_theme_mod('topheader_mobilemenutogglehvrcol','#fff');
	$topheader_mobilemenubgcol = get_theme_mod('topheader_mobilemenubgcol','#000');

 

	$slider_titlecol = get_theme_mod('slider_titlecol','#fff');
	$slider_descriptioncol = get_theme_mod('slider_descriptioncol','#afb0a2');
	$slider_buttontextcol = get_theme_mod('slider_buttontextcol','#fff');
	$slider_buttontexthovercol = get_theme_mod('slider_buttontexthovercol','#fff');
	$slider_buttonbgcol = get_theme_mod('slider_buttonbgcol','#c50301');
	$slider_buttonbghovercol = get_theme_mod('slider_buttonbghovercol','#fe9903');
	$slider_bordercol = get_theme_mod('slider_bordercol','#c50301');



	$feature_titlecol = get_theme_mod('feature_titlecol','#000');
	$feature_boxtitlecol = get_theme_mod('feature_boxtitlecol','#000');
	$feature_descriptioncol = get_theme_mod('feature_descriptioncol','#c1c1c1');
	$feature_iconbtncol = get_theme_mod('feature_iconbtncol','#d40f0f');
	$feature_iconcol = get_theme_mod('feature_iconcol','#f9c3c7');
	$feature_iconhoverbgcol = get_theme_mod('feature_iconhoverbgcol','#fe9903');



	$copyrightttextcol = get_theme_mod('copyrightttextcol','#fff');
	$copyrighttlinkcol = get_theme_mod('copyrighttlinkcol','#c50301');
	$footerbgcol = get_theme_mod('footerbgcol','#000');
	$scrolltotopiconcol = get_theme_mod('scrolltotopiconcol','#000');
	$scrolltotopbgcol = get_theme_mod('scrolltotopbgcol','#c50301');
	$scrolltotopbghovercol = get_theme_mod('scrolltotopbghovercol','#fe9903');


	?>
	<style type="text/css">

		<?php 
		
		?>

		.custom-logo {
			width: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_logowidth); ?>px;
			height: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_logoheight); ?>px;
		}

		h4.site-title {
			color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_sitetitlecol); ?> !important;
		}

		.lower-header-area .logo a {
			color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_sitetitlebrdcol); ?> !important;
		}

		p.site-description {
			color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_taglinecol); ?>;
		}





		.main-header .navbar .navbar-menu ul li a {
		    color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_menuscol); ?>;
		}

		.main-header .navbar .navbar-nav > li:hover a, .main-header .navbar .navbar-nav > li.focus a, .main-header .navbar .navbar-nav > li.active a, .main-header .navbar .navbar-nav > li a.active {
		    color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_menushovercol); ?>;
		}

		.main-header .navbar .navbar-menu ul li.current_page_item a:before,.main-header .navbar .navbar-menu ul li a:before {
		    background: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_menushovercol); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:not(.remove) {
		    color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_submenuscol); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:hover, .main-header .navbar .navbar-menu ul li.dropdown .sub-menu a:focus, .main-header .navbar .navbar-menu ul li.dropdown .sub-menu a.active {
		    color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_submenushovercol); ?>;
		}

		.main-header .navbar .navbar-menu ul li.dropdown .sub-menu {
		    background: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_submenusbgcol); ?> !important;
		}

		.main-header .navbar .navbar-menu ul li.dropdown>a::after,
		.main-header .navbar .navbar-menu .dropdown-icon::after {
		    color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_submenusarrowcol); ?>;
		}

		.lower-header-area {
		    background: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_menusbgcol); ?>;
		}

		.main-header .navbar .navbar-toggler {
		    border-color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_mobilemenutogglecol); ?>;
			color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_mobilemenutogglecol); ?>;
		}

		.main-header .navbar .navbar-toggler:hover, .main-header .navbar .navbar-toggler:focus {
			color: <?php echo apply_filters('soccerclubacademy_topheader', $topheader_mobilemenutogglehvrcol); ?>;
		}

		@media only screen and (max-width: 1000px) {
			.main-header .navbar .navbar-menu ul li {
				background-image: radial-gradient( circle farthest-corner at 10% 20%,<?php echo apply_filters('soccerclubacademy_topheader', $topheader_mobilemenubgcol); ?> 0%,<?php echo apply_filters('soccerclubacademy_topheader', $topheader_mobilemenubgcol); ?> 100.3% ) !important;
			}
		}





		.hero-style .slide-title h2 {
		    color: <?php echo apply_filters('soccerclubacademy_slider', $slider_titlecol); ?>;
		}

		.hero-style .slide-text p {
		    color: <?php echo apply_filters('soccerclubacademy_slider', $slider_descriptioncol); ?>;
		}

		.hero-style a.ReadMore {
		    color: <?php echo apply_filters('soccerclubacademy_slider', $slider_buttontextcol); ?> !important;
		}

		.hero-style a.ReadMore:hover {
		    color: <?php echo apply_filters('soccerclubacademy_slider', $slider_buttontexthovercol); ?> !important;
		}

		.hero-style a.ReadMore {
		    background: <?php echo apply_filters('soccerclubacademy_slider', $slider_buttonbgcol); ?>!important;
		}

		.hero-style a.ReadMore:hover {
		    background: <?php echo apply_filters('soccerclubacademy_slider', $slider_buttonbghovercol); ?>!important;
		}

		.hero-slider .slider-center-img {
		    border-color: <?php echo apply_filters('soccerclubacademy_slider', $slider_bordercol); ?>;
		}

		.slider-img-overlay-outer {
		    background: <?php echo apply_filters('soccerclubacademy_slider', $slider_bordercol); ?>;
		}




		#service-section .header-section .title {
		    color: <?php echo apply_filters('soccerclubacademy_feature', $feature_titlecol); ?>;
		}

		#service-section .single-service .part-2 h3.title {
		    color: <?php echo apply_filters('soccerclubacademy_feature', $feature_boxtitlecol); ?>;
		}

		#service-section .single-service .part-2 p {
		    color: <?php echo apply_filters('soccerclubacademy_feature', $feature_descriptioncol); ?>;
		}

		#service-section .single-service .part-1 .imageBox i {
		    background: <?php echo apply_filters('soccerclubacademy_feature', $feature_iconbtncol); ?>;
		}

		#service-section .single-service .part-1 .imageBox i {
		    color: <?php echo apply_filters('soccerclubacademy_feature', $feature_iconcol); ?>;
		}

		#service-section .single-service .part-1 .iconBox {
		    background: <?php echo apply_filters('soccerclubacademy_feature', $feature_iconhoverbgcol); ?>;
		}




		.copy-right p {
		    color: <?php echo apply_filters('soccerclubacademy_feature', $copyrightttextcol); ?>;
		}

		.copy-right p a{
		    color: <?php echo apply_filters('soccerclubacademy_feature', $copyrighttlinkcol); ?> !important;
		}

		.footer-area{
		    background: <?php echo apply_filters('soccerclubacademy_feature', $footerbgcol); ?> !important;
		}

		.scroll-top i {
		    color: <?php echo apply_filters('soccerclubacademy_feature', $scrolltotopiconcol); ?> !important;
		}

		.scroll-top{
		    background: <?php echo apply_filters('soccerclubacademy_feature', $scrolltotopbgcol); ?> !important;
		}

		.scroll-top:hover{
		    background: <?php echo apply_filters('soccerclubacademy_feature', $scrolltotopbghovercol); ?> !important;
		}





		<?php  ?>
	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>


	<?php
        if ($feature_disable_section == 1):
	?>
		#service-section {
			display: none;
		}
	<?php
		else :
	?>
		#service-section {
			display: block;
		}
	<?php endif; ?>


	</style>
	<?php
}
endif;
