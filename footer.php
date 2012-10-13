<?php
/**
 * The template for displaying the footer.
 *
 * @package Groundwork
 * @since Groundwork 1.0
 */
?>

			</div><!-- #main -->
		
			<footer id="site-footer" role="contentinfo">
			
				<nav role="navigation" id="small-menu" class="site-navigation main-navigation">

					<?php wp_nav_menu( array( 'theme_location' => 'main-navigation' ) ); ?>
				
				</nav>
				
				<p>
					&copy; <?php echo date('Y')?> <?php bloginfo ( 'name' ); ?>
				</p>
				
			</footer><!-- #site-footer -->
			
		</div><!-- #page .hfeed .site -->
	
		<?php wp_footer(); ?>
		
		<?php if ( !is_user_logged_in() ) { ?>
			
			<script type="text/javascript">
			
				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-100024-27']);
				_gaq.push(['_trackPageview']);
				
				(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
			
			</script>
	 	 
	 	 <?php } ?>
	
	</body>
</html>