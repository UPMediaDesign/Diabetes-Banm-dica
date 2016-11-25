<?php
/*
Template Name: Home
*/
get_header();?>
			
			<!-- Main Container -->
			
							
				<!-- Home Slideshow -->
			<?php get_template_part( 'includes/slider', 'home' ); ?>
				<!-- end #home-slideshow -->
				
				<!-- Home Intro -->
			<?php get_template_part('includes/slider', 'sabias');?>
				<!-- end #home-intro -->
				
				<!-- Home Featured -->
			<?php get_template_part('includes/featured', 'home');?>
				<!-- end #home-featured -->
                
                <!-- Home Featured -->
			<?php get_template_part('includes/calculadora', 'home');?>
				<!-- end #home-featured -->
				
		
                
			<!-- Home Articles -->
            <?php get_template_part('includes/articulos','home');?>
            <!-- end #home-articles -->
            
            <!-- Page Banners -->
			<?php get_template_part('includes/banners','home');?>
			<!-- end .page-banners -->
			
			
			

			<!-- Footer -->


<?php get_footer();?>