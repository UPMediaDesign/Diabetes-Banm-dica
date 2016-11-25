<section id="home-slideshow" class="row  row-wide  text-center">
					<div class="home-slideshow__action">
						<a href="#" class="home-slideshow__action-anchor" role="button"><i class="fa fa-angle-down fa-fw"></i></a>
					</div>
					<!-- end .home-slideshow__action -->

					<!-- Main Slider -->
					<div id="main-slider" class="page-slider">
					
					   <?php
			              if( have_rows('slide') ):
			              while ( have_rows('slide') ) : the_row();
						?>

						
						<div class="main-slider__block">
							<div class="row  row-custom  main-slider__block-content">
								<h1 class="main-slider__block-title"><?php the_sub_field('titulo');?></h1>
								<a href="<?php the_sub_field('url_boton');?>" class="button main-slider__block-button" title="Conoce el programa">
									<img src="<?php bloginfo('template_directory')?>/images/icons/icon-programa-banmedica.svg" class="inject-me  main-slider__block-button-icon" alt="icono programa"> <?php the_sub_field('texto_boton'); ?>
								</a>
							</div>
							<!-- end .main-slider__block-content -->
                            
                            
                            <?php 
$image = get_sub_field('imagen_de_fondo');

?>
							<!--
							data-interchange="[images/slider/main-slide-1_small.jpg, small], [images/slider/main-slide-1.jpg, medium], [images/slider/main-slide-1.jpg, large]" 
							
							<pre><?php var_dump($image)?></pre>
							
							-->
						
						
							<img src="<?php echo $image['sizes']['slider'];?>" data-interchange="[<?php echo $image['sizes']['slidermini'];?>, small], [<?php echo $image['sizes']['slider'];?>, medium], [<?php echo $image['sizes']['slider'];?>, large]"  class="main-slider__block-image" alt="<?php the_sub_field('titulo');?>">
						</div>
						

						<?php endwhile;
						else :
						echo "No existen Slides";
						endif;
						?>

						
					</div>
					<!-- end #main-slider -->

					<!-- Main Slider Script -->
					<script type="application/javascript">
						
						jQuery(document).ready(function(){
							jQuery('#main-slider').slick({
								slidesToShow: 1,
								slidesToScroll: 1,
								arrows: true,
								prevArrow: '<button type="button" class="slick-prev slick-arrow trsn"></button>',
								nextArrow: '<button type="button" class="slick-next slick-arrow trsn"></button>',
								dots: false,
								fade: true,
								centerMode: true,
								cssEase: 'ease-in-out',
								speed: 750,
								autoplay: false,
								autoplaySpeed: 5000,
								pauseOnHover: false,
								pauseOnDotsHover: false,
								responsive: [
									{
										breakpoint: 640,
										settings: {
											dots: true,
											arrows: false,
										}
									}
								]
							});
						});
				
					</script>
					<!-- end Main Slider Script -->
				</section>