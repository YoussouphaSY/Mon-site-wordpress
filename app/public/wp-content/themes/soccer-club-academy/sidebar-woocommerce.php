<?php
/**
 * side bar template
 *
 * @package Soccer Club Academy
 */
?>
<?php if ( ! is_active_sidebar( 'soccerclubacademy-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('soccerclubacademy-woocommerce-sidebar'); ?>
	</div>
</div>