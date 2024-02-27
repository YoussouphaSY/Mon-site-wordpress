</div>
<footer class="footer-area">  
   <div class="container"> 
		<?php do_action('soccerclubacademy_footer_above'); 
		 if ( is_active_sidebar( 'soccerclubacademy-footer-widget-area' ) ) { ?>	
			<div class="row footer-row"> 
				<?php  dynamic_sidebar( 'soccerclubacademy-footer-widget-area' ); ?>
			</div>  
		<?php } ?>
	</div>
	
	<?php 
		$footer_copyright = get_theme_mod('footer_copyright','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');
	?>
	<div class="copy-right"> 
		<div class="container"> 
			<?php 
			if ( ! empty( $footer_copyright ) ): ?>
			<?php 	
				$soccerclubacademy_copyright_allowed_tags = array(
					'[current_year]' => date_i18n('Y'),
					'[site_title]'   => get_bloginfo('name'),
					'[theme_author]' => sprintf(__('<a href="#">Football Club</a>', 'football-club')),
				);
			?>                          
			<p class="copyright-text">
				<?php
					echo apply_filters('soccerclubacademy_footer_copyright', wp_kses_post(soccerclubacademy_str_replace_assoc($soccerclubacademy_copyright_allowed_tags, $footer_copyright)));
				?>
			</p>
			<?php endif; ?>
		</div>
	</div>
</footer>
<!-- End Footer Area  -->

<button class="scroll-top">
	<i class="fa fa-angle-up"></i>
</button>

</div>		
<?php wp_footer(); ?>
</body>
</html>
