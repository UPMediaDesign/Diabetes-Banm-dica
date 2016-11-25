

</div>
<!-- end .main-container -->

	<footer <?php if (is_page('alimentacion') || is_page('diabetes')){ echo "class='footer-pull-top'"; };?>   data-interchange="[<?php echo get_stylesheet_directory_uri();?>/partials/footer.php, small]"></footer>
			<!-- end Footer -->
		</div>
		<!-- end .off-canvas-wrapper-inner -->
	</div>
	<!-- end .off-canvas-wrapper -->
	
	<?php wp_footer();?>
	
	<!-- SVGInjector Script -->
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/svg-injector.min.js"></script>
	<script>
		// Elements to inject
		var mySVGsToInject = document.querySelectorAll('img.inject-me');

		// Do the injection
		SVGInjector(mySVGsToInject);
	</script>
	
	<!-- Slick Slider JS -->
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/plugins/slick/slick.min.js"></script>

	<!-- Initialiaze Foundation Framework -->
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/what-input.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/foundation/6.2.3/foundation.min.js"></script>
	<script type="text/javascript">jQuery(document).foundation();</script>
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-87356094-1', 'auto');
	  ga('require', 'displayfeatures');
	  ga('send', 'pageview');

	</script>
	
</body>
</html>





