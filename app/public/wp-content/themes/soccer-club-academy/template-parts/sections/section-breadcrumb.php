<?php 
	$soccerclubacademy_hs_breadcrumb					= get_theme_mod('hs_breadcrumb','1');
	$soccerclubacademy_breadcrumb_bg_img				= get_theme_mod('breadcrumb_bg_img'); 
	$soccerclubacademy_breadcrumb_back_attach			= get_theme_mod('breadcrumb_back_attach','scroll');
	
if($soccerclubacademy_hs_breadcrumb == '1') {	
?>	

<?php $soccerclubacademy_breadcrumb_bg_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>

	<!-- Slider Area -->   
	<?php if(!empty($soccerclubacademy_breadcrumb_bg_img)): ?>
    <section class="slider-area breadcrumb-section" style="background: url(<?php echo esc_url($soccerclubacademy_breadcrumb_bg_img); ?>) center center <?php echo esc_attr($soccerclubacademy_breadcrumb_back_attach); ?>; background-repeat: no-repeat;
    background-size: cover;">
	<?php else: ?>
	 <section class="slider-area breadcrumb-section">
	 <?php endif; ?>
        <div class="container">
            <div class="about-banner-text">   
            	<ol class="breadcrumb-list">
					<?php soccerclubacademy_breadcrumbs(); ?>
				</ol>
				<h1><?php soccerclubacademy_breadcrumb_title(); ?></h1>					
            </div>
        </div> 
    </section>
    <!-- End Slider Area -->
<?php }else{  ?>
	<section style="padding: 30px 0 30px;"></section>
<?php } ?>	