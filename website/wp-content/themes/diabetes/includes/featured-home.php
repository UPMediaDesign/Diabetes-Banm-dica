	<!-- Home Featured -->
				<section id="home-featured" class="row  row-wide">
					<img src="<?php bloginfo('template_url');?>/images/objects/home-featured-image.png" class="home-featured__image" alt="image">

					<div class="row  row-custom  home-featured__row">
						<!-- Heading -->
						<div class="small-12  medium-6  large-6  columns  home-featured__heading">
							<h1 class="home-featured__heading-title">¿Cómo alimentarme?</h1>
							<p class="home-featured__heading-text">Conoce cómo alimentarte más sanamente con nuestros artículos y recetas.</p>
						</div>
						<!-- end .home-featured__heading -->
					</div>
					<!-- end .home-featured__row -->

					<div class="row  row-custom  home-featured__row">
						<!-- Article 1 -->
						
                        	<?php
							wp_reset_query();
					$articulos = get_posts(array(
						'numberposts' => 1,
						'post_type' => 'post',
						/* 'tax_query' => array(
							array(
							'taxonomy' => 'category',
							'field' => 'slug',
							'terms' => array('alimentacion'))
						)) */
						'cat' => '3'  
						
					)
					);
 
					foreach ($articulos as $articulo) {
				?>
                        
                        
                        <article class="small-12  medium-6  large-6  columns  home-featured__article">
							<div class="row">
							
								<div class="small-12 show-for-small-only  medium-6  large-6  columns  home-featured__article-content">
									<?php if ( has_post_thumbnail( $articulo->ID ) ) {
							 			echo get_the_post_thumbnail( $articulo->ID, 'thumbnail', array('class' => 'home-featured__article-image') );
									};?>
								</div>
							
								<div class="small-12  medium-6  large-6  columns  text-right  home-featured__article-content">
									<span class="home-featured__article-category">Alimentación</span>
									<h1 class="home-featured__article-title"> <?php echo $articulo->post_title;?></h1>
									<p class="home-featured__article-text"><?php echo $articulo->post_excerpt; ?></p>
									<a href="<?php the_permalink($articulo->ID);?>" class="button  radius  red  bordered" title="Leer más">Leer más</a>
								</div>
								<!-- end .home-featured__article-content -->

								<div class="small-12 show-for-medium medium-6  large-6  columns  home-featured__article-content">
									<?php if ( has_post_thumbnail( $articulo->ID ) ) {
							 			echo get_the_post_thumbnail( $articulo->ID, 'thumbnail', array('class' => 'home-featured__article-image') );
									};?>
								</div>
								<!-- end .home-featured__article-content -->
							</div>
							<!-- end .row -->
						</article>
                        
                       <?php 	} ?>  
                        
                        
                        
                        
						<!-- end .home-featured__article -->
					</div>
					<!-- end .home-featured__row -->

					<div class="row  row-custom  home-featured__row">
						<!-- Article 2 -->
						 <?php 
				query_posts(array( 
					'post_type' => 'recetas',
					'showposts' => 1 
					) );  
				 while (have_posts()) : the_post();
						
				 $imagen = get_field("imagen_principal");
				 $size = 'thumbnail';
   				 $porciones = get_field("porciones", $post_id);
                 $tiempo = get_field("tiempo_de_preparacion");
				 $porcion_hc = get_field("porcion_hc");
                 $hc = get_field("hidratos_de_carbono");
                 $ingredientes = get_field("ingredientes");
                 $preparacion = get_field("preparacion");
				 $extracto = get_field("extracto");
						
						?> 
				 
				 
				 	<article class="small-12  medium-6  medium-push-3  large-6  large-push-3  columns  home-featured__article">
							<div class="row">
								<div class="small-12  medium-6  large-6  columns  home-featured__article-content">
								
								<?php 
if( $imagen ) {

	echo wp_get_attachment_image( $imagen, $size , false , array('class' => 'home-featured__article-image'));

}

?>
								
									<!--<img src="<?php echo $imagen;?>" class="home-featured__article-image" alt="image">-->
								</div>
								<!-- end .home-featured__article-content -->

								<div class="small-12  medium-6  large-6  columns  text-left  home-featured__article-content">
									<span class="home-featured__article-category">Recetas</span>
									<h1 class="home-featured__article-title"><?php the_title();?></h1>
									<p class="home-featured__article-text"><?php echo $extracto ?></p>
									<!--<div class="home-featured__article-data">
										<span class="montse"><?php echo $porcion_hc;?></span>
										<span class="montse"><?php echo $hc ;?> Hidratos de Carbono</span>
									</div>
                                    -->
									<a href="<?php the_permalink();?>" class="button  radius  red  bordered" title="Ver Receta">Ver Receta</a>
								</div>
								<!-- end .home-featured__article-content -->
							</div>
							<!-- end .row -->
						</article>
					
		      <?php  endwhile;?>
						<!-- end .home-featured__article -->
					</div>
					<!-- end .home-featured__row -->
				</section>
				<!-- end #home-featured -->
                
                
                
                
                
                
   