<?php get_header();?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
    
    
    
    
    
				 <?php

                 $imagen = get_field("imagen_principal");
   				 $porciones = get_field("porciones", $post_id);
                 $tiempo = get_field("tiempo_de_preparacion");
                 $hc = get_field("hidratos_de_carbono");
                 $ingredientes = get_field("ingredientes");
                 $preparacion = get_field("preparacion");
 

       			 /* echo $imagen; 
				 echo $porciones;
                 echo $tiempo;
				 echo $hc; */
				 
                
                 
                 ?>
    
    

				<!-- Main Heading -->
				<section class="row  row-wide  text-center  main-heading">
					<div class="main-heading__icon  main-heading__icon--red">
						<img src="<?php echo get_bloginfo('template_directory')?>/images/icons/icon-cookware.svg" class="inject-me" alt="icon cookware">
					</div>
					<?php $imgfull = wp_get_attachment_image_src($imagen , 'slider')?>
					<div style="background-image: url(<?php echo $imgfull[0]?>); height:600px; background-repeat:no-repeat; background-position:top center; background-size:cover"></div>
					<?php /* <img src="<?php echo $imgfull[0]?>" class="main-heading__image" alt="single receta"> */?>
				</section>
				<!-- end .main-heading -->

				<!-- Recipe Info (Porciones / Minutos / Calorías / Ingredientes / Preparación) -->
				<section class="row  row-wide  recipe-info">
					<div class="row  row-custom">
						<!-- Recipe Info Heading -->
						<div class="small-12  columns  text-center  recipe-info__heading">
							<div class="small-12  medium-10  medium-push-1  large-6  large-push-3  columns">
								<h1 class="recipe-info__heading-title"><?php the_title();?></h1>
							</div>
						</div>
						<!-- end .recipe-info__heading -->

						<!-- Recipe info Box -->
						<?php /* <div class="small-12  medium-10  medium-pull-1  large-6  large-pull-3  columns  text-center  recipe-info__box">
							<div class="small-12  columns  recipe-info__box-wrapper">
								<div class="row" data-equalizer="recipe-info-box">
									<div class="small-4  columns  recipe-info__box-block" data-equalizer-watch="recipe-info-box">
										<img src="images/icons/icon-portions.png" class="recipe-info__box-block-icon" alt="icon portions">
										<span class="recipe-info__box-block-number">3</span>
										<span class="recipe-info__box-block-string">porciones</span>
									</div>
									<!-- end .recipe-info__box-block -->

									<div class="small-4  columns  recipe-info__box-block" data-equalizer-watch="recipe-info-box">
										<img src="images/icons/icon-time.png" class="recipe-info__box-block-icon" alt="icon time">
										<span class="recipe-info__box-block-number">30</span>
										<span class="recipe-info__box-block-string">minutos</span>
									</div>
									<!-- end .recipe-info__box-block -->

									<div class="small-4  columns  recipe-info__box-block  recipe-info__box-block--last" data-equalizer-watch="recipe-info-box">
										<img src="images/icons/icon-calorie-table.png" class="recipe-info__box-block-icon" alt="icon calorie table">
										<span class="recipe-info__box-block-number">240</span>
										<span class="recipe-info__box-block-string">calorías<br>(por porción)</span>
									</div>
									<!-- end .recipe-info__box-block -->
								</div>
								<!-- end .row -->
							</div>
							<!-- end .recipe-info__box-wrapper -->
						</div> */?>
						<!-- end .recipe-info__box -->
					</div>
					<!-- end .row-custom -->


					<div class="row  row-custom" data-equalizer="recipe-info-content">
						<div class="small-12  medium-6  large-6  columns  recipe-info__content">
							<div class="small-12  columns  recipe-info__content-heading">
								<h1 class="recipe-info__content-title">Ingredientes</h1>
							</div>
							<!-- end .recipe-info__content-heading -->

							<div class="small-12  columns  recipe-info__content-block" data-equalizer-watch="recipe-info-content">
								<?php echo $ingredientes;?>
							</div>
							<!-- end .recipe-info__content-block -->
						</div>
						<!-- end .recipe-info__content -->

						<div class="small-12  medium-6  large-6  columns  recipe-info__content">
							<div class="small-12  columns  recipe-info__content-heading">
								<h1 class="recipe-info__content-title">Preparación</h1>
							</div>
							<!-- end .recipe-info__content-heading -->

							<div class="small-12  columns  recipe-info__content-block" data-equalizer-watch="recipe-info-content">
								 <?php echo $preparacion;?>
							</div>
							<!-- end .recipe-info__content-block -->
						</div>
						<!-- end .recipe-info__content -->
					</div>
					<!-- end .row-custom -->
				</section>
				<!-- end .recipe-info -->
				
				<!-- Page Icons -->
				<div class="row  row-wide  text-center  page-icons  page-icons--grey">
					<div class="row  row-custom">
						<div class="small-12  columns  page-icons__block">
							<div class="page-icons__block-box  yellow">
								<img src="<?php echo get_bloginfo('template_directory')?>/images/icons/icon-cooking-pot.svg" class="inject-me  page-icons__block-box-icon" alt="icon cooking pot">
							</div>
						</div>
						<!-- end .page-icons__block -->
					</div>
					<!-- end .row-custom -->
				</div>
				<!-- end .page-icons -->




	<?php endwhile; endif; ?>

				<!-- Page Calculator -->
				<?php echo get_template_part('includes/calculadora-alimentacion')?>
				<!-- end .page-calc -->

				<!-- Page Icons -->
				<div class="row  row-wide  text-center  page-icons  page-icons--white">
					<div class="row  row-custom">
						<div class="small-12  columns  page-icons__block">
							<div class="page-icons__block-box  red">
								<img src="<?php echo get_bloginfo('template_directory')?>/images/icons/icon-chef.svg" class="inject-me  page-icons__block-box-icon" alt="icon chef">
							</div>
						</div>
						<!-- end .page-icons__block -->
					</div>
					<!-- end .row-custom -->
				</div>
				<!-- end .page-icons -->
				
                
                
                <section id="recipes-gallery" class="row  row-wide">
					<div class="row  row-custom">
						<!-- Page Heading -->
						<div class="small-12  columns  text-center  page-heading">
							<div class="small-12  medium-12  large-10  large-push-1  columns">
								<h1 class="page-heading__title">Recetas</h1>
								<p class="page-heading__text">¿Eres diabético(a), vas a cocinar para alguien con diabetes o sencillamente quieres recetas más sanas, mejor balanceadas y con menos carbohidratos?</p>
							</div>
						</div>
						<!-- end .page-heading -->
                
                <div class="small-12  columns article-gallery">
							<div class="row">
                
                
			 <?php 
				query_posts(array( 
					'post_type' => 'recetas',
					'showposts' => 3
					) );  
				 while (have_posts()) : the_post();
						
				 $imagen = get_field("imagen_principal");
				 $size = 'recetas';
   				 $porciones = get_field("porciones", $post_id);
                 $tiempo = get_field("tiempo_de_preparacion");
				 $porcion_hc = get_field("porcion_hc");
                 $hc = get_field("hidratos_de_carbono");
                 $ingredientes = get_field("ingredientes");
                 $preparacion = get_field("preparacion");
				 $extracto = get_field("extracto");
						
						?> 
				 
				 

<!-- Article 1 -->
<article class="small-12  medium-4  large-4  columns  text-center  recipe-article">
	<div class="small-12  columns">
		<div class="row">
										<?php 
if( $imagen ) {

	echo wp_get_attachment_image( $imagen, $size, false, array('class'=>'img-full') );

}

?>
		</div>
		<!-- end .row -->
	</div>

	<div class="small-12  columns  recipe-article__info">
		<h1 class="recipe-article__title"><?php the_title();?></h1>
		<p class="recipe-article__excerpt"><?php echo $extracto ?></p>
		<!--<ul class="no-bullet  recipe-article__data">
			<li class="recipe-article__data-item">100g.</li>
			<li class="recipe-article__data-item">81 hidratos de carbono</li>
		</ul>
        -->
		<a href="<?php the_permalink(get_the_ID());?>" class="button  small  radius  red  bordered" title="Ver Receta">Ver Receta</a>
	</div>
	<!-- end .recipe-article__info -->
</article>
<!-- end .recipe-article -->
					
		      <?php  endwhile;?>
				
			 </div>
            </div>
						</div>
                        </section>
            
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					jQuery('footer').addClass('footer-pull-top');
				});
			</script>
			
    
    


				
				





<?php get_footer();?>