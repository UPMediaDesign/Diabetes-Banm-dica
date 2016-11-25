<?php
/*
Template Name: Alimentación
*/
get_header();?>


<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
	

			<?php get_template_part('includes/heading', 'main');?>
				
				<!-- Page Intro -->
				<section id="food-intro" class="row  row-wide  page-intro">
					<!-- Intro Wrapper -->
					<div class="row  row-custom  page-intro__wrapper">
						<div class="small-12  columns  text-center">
							<p class="page-intro__text">Una alimentación saludable es <strong>pieza fundamental para lograr un buen control de la glucosa en sangre, el colesterol y los triglicéridos</strong>. Es necesario conocer los distintos grupos de alimentos y sus nutrientes, para así poder integrarlos de forma correcta al plan de alimentación. </p>
						</div>
					</div>
					<!-- end .page-intro__wrapper -->
					
					<!-- Page Types -->
					<div class="row  row-custom  page-types">
						<!-- Block 1 -->
						
                        
        
                         <?php
						 $count=0;
			              if( have_rows('grupo_alimenticio') ):
			              while ( have_rows('grupo_alimenticio') ) : the_row();
						?>



        


	<div class="small-12  medium-2  large-3 columns  pillars-menu__block">
									<button class="button  pillars-menu__block-button" type="button" data-open="reveal-<?php echo $count;?>" >
                                    
                                    <img src="<?php the_sub_field('icono');?>" class="icono"/>
                                    
										<span class="pillars-menu__block-button-string"><?php the_sub_field('nombre');?></span>
									</button>
									<?php /* <div class="dropdown-pane  bottom  pillars-menu__block-pane" id="dropdown_pane_<?php echo $count;?>" data-dropdown>
										<i class="fa fa-caret-up fa-fw"></i>
										<p><?php the_sub_field('descripcion');?></p>
									</div> */?>
									<!-- end .pillars-menu__block-pane -->
								</div>
								<!-- end .pillars-menu__block -->
								
								
								<div class="reveal" id="reveal-<?php echo $count;?>" data-reveal>
							  		<img src="<?php the_sub_field('icono');?>" class="icono aligncenter"/>
								  <h1><?php the_sub_field('nombre');?></h1>
								  <hr>
								  <?php the_sub_field('descripcion');?>
								  
								  <button class="close-button" data-close aria-label="Close modal" type="button">
									<span aria-hidden="true">&times;</span>
								  </button>
								</div>

       
       

   <?php $count++;endwhile;endif;?>

						











                        
                        
                    
                        
                        
						<!-- end .page-types__block -->

						
						<!-- end .page-types__block -->
					</div>
					<!-- end .page-types -->
				</section>
				<!-- end #page-intro -->
				
				<!-- Food Articles -->
				<section id="food-articles" class="row  row-wide">
					<div class="row  row-custom">
						<!-- Page Heading -->
						<div class="small-12  columns  text-center  page-heading">
							<div class="small-12  medium-12  large-10  large-push-1  columns">
								<h1 class="page-heading__title">¿Cómo alimentarme?</h1>
								<p class="page-heading__text">Conoce como alimentarte más sanamente con nuestros artículos y recetas.</p>
							</div>
						</div>
						<!-- end .page-heading -->
						
						<div class="small-12  columns  article-gallery">
							<div class="row" data-interchange="[<?php echo get_stylesheet_directory_uri();?>/partials/_food-gallery.php, small]"></div>
						</div>
						<!-- end .article-gallery -->
					</div>
					<!-- end .row-custom -->
				</section>
				<!-- end #food-articles -->
				
				<!-- Page Icons -->
				<div class="row  row-wide  text-center  page-icons  page-icons--grey">
					<div class="row  row-custom">
						<div class="small-12  columns  page-icons__block">
							<div class="page-icons__block-box  yellow">
								<img src="<?php bloginfo('template_directory');?>/images/icons/icon-cooking-pot.svg" class="inject-me  page-icons__block-box-icon" alt="icon cooking pot">
							</div>
						</div>
						<!-- end .page-icons__block -->
					</div>
					<!-- end .row-custom -->
				</div>
				<!-- end .page-icons -->

				<!-- Page Calculator -->
				<?php get_template_part('includes/calculadora-alimentacion')?>
				<!-- end .page-calc -->

				<!-- Page Icons -->
				<div class="row  row-wide  text-center  page-icons  page-icons--white">
					<div class="row  row-custom">
						<div class="small-12  columns  page-icons__block">
							<div class="page-icons__block-box  red">
								<img src="<?php bloginfo('template_directory');?>/images/icons/icon-chef.svg" class="inject-me  page-icons__block-box-icon" alt="icon chef">
							</div>
						</div>
						<!-- end .page-icons__block -->
					</div>
					<!-- end .row-custom -->
				</div>
				<!-- end .page-icons -->
				
				<!-- Recipes Gallery -->
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

						<div class="small-12  columns  article-gallery">
							<div class="row" data-interchange="[<?php echo get_stylesheet_directory_uri();?>/partials/_recipes-gallery.php, small]"></div>
						</div>
						<!-- end .article-gallery -->
					</div>
				</section>
				<!-- end #recipes-gallery -->
				
				<!-- Recipe Banner -->
                
                
                
                
                
                      
                <?php 
	wp_reset_query();
	query_posts(array( 
        'post_type' => 'banners',
        'showposts' => 1 
    ) );  
	
	
    while (have_posts()) : the_post(); 
	
	if( has_term( 'alimentacion', 'posiciones' ) ) {	
		?>
                
                
					 
				<section class="row  row-wide  recipe-banner" data-equalizer="recipe-banner">
					<div class="small-12  medium-6  medium-push-6  large-6  large-push-6  columns  recipe-banner__block" data-equalizer-watch="recipe-banner">
						<div class="row">
						
                            
                            <img src="<?php the_field('imagen');?>" class="img-full">
						</div>
					</div>
					<!-- end .recipe-banner__block -->

					<div class="small-12  medium-6  medium-pull-6  large-6  large-pull-6  columns  text-center  recipe-banner__block" data-equalizer-watch="recipe-banner">
						<div class="small-12  columns  recipe-banner__block-wrapper">
							<div class="recipe-banner__block-wrapper-cell">
								<h1 class="recipe-banner__title"><?php the_title();?></h1>
								<p class="recipe-banner__text"><?php the_field('bajada');?></p>
								<a href="<?php the_field('url_boton');?>" class="button  radius  soft-red  bordered" title="Sube tu receta"><?php the_field('texto_boton');?></a>
							</div>
							<!-- end .recipe-banner__block-wrapper-cell -->
						</div>
						<!-- end .recipe-banner__block-wrapper -->
					</div>
					<!-- end .recipe-banner__block -->
				</section>
				<!-- end .recipe-banner -->


<?php };endwhile;wp_reset_query();?>
					
				</section>
                
                
                
                
                
               
			









	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>