	<section id="home-intro" class="row  row-custom">
					<!-- Home Slider -->
					<div id="home-slider">
					
				   <?php
					if( have_rows('slider_sq') ):
					while ( have_rows('slider_sq') ) : the_row();
				    ?>
				        
						<div class="home-slider__block">
							<div class="row">
								<div class="small-6  medium-6  medium-push-6  large-6  large-push-6  columns  home-slider__heading">
									<img src="<?php the_sub_field('imagen_sq');?>" class="home-slides__block-image" alt="slide image">
								</div>
								<!-- end .home-slider__content -->

								<div class="small-12  medium-6  medium-pull-6  large-6  large-pull-6  columns  home-slider__content">
									<h2 class="home-slider__block-subtitle">Diabetes</h2>
									<h1 class="home-slider__block-title">Sabías Que...</h1>
									<?php /* <p class="home-slider__block-text"><?php the_sub_field('texto');?></p> */?>
									<?php the_sub_field('texto');?>
									
									<a href="<?php the_sub_field('url_boton');?>" class="button  red  bordered  radius" title="Conoce más">Conoce más</a>
								</div>
								<!-- end .home-slider__content -->
							</div>
							<!-- end .row -->
						</div>
					
                    <?php 
					endwhile;
					else :
					echo "No existen Slides";
					endif;
					?>
					
						
					</div>
					<!-- end #home-slider -->

					<!-- Home Slider Script -->
					<script type="application/javascript">
						jQuery(document).ready(function(){
							jQuery('#home-slider').slick({
								slidesToShow: 1,
								slidesToScroll: 1,
								arrows: false,
								dots: true,
								fade: false,
								cssEase: 'ease-in-out',
								speed: 750,
								autoplay: false,
								autoplaySpeed: 5000,
								pauseOnHover: false,
								pauseOnDotsHover: false
							});
						});
					</script>
					<!-- end Home Slider Script -->
				</section>