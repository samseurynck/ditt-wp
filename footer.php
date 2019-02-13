			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<?php
					if ( is_page('maak')) {
						echo '<div class="block maakFoot" id="footer_block">';
					} elseif ( is_page('portfolio')) {
						echo '<div class="block portfolioFoot" id="footer_block">';
					} elseif ( is_page('collectie')) {
						echo '<div class="block collectieFoot" id="footer_block">';
					} else {
						echo '<div class="block" id="footer_block">';
					}
				?>

				<!-- <div class="block" id="footer_block"> -->
				 <div class="footer_block_left">
					 <ul class="footer_block_left_list">
						 <li>lorem ipsum</li>
						 <li>lorem ipsum</li>
						 <li>lorem ipsum</li>
					 </ul>
				 </div>
				 <div class="footer_block_right img_wrap">
				 	<div class="footer_block_right_img bstretchMe" data-image-src="<?php echo get_template_directory_uri();?>/assets/studio_ditt_bags_bw.png"></div>
			 	</div>
			 </div>
			 </div>

				<!-- copyright -->
				<!-- <p class="copyright">
					&copy; <?php //echo date('Y'); ?> Copyright <?php // bloginfo('name'); ?>. <?php //  _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p> -->
				<!-- /copyright -->

			</footer>

		</div>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<!-- <script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script> -->

	</body>
</html>
