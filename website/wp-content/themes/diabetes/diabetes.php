<?php
/*
Template Name: Diabetes
*/
get_header();?>				


<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>    
	

				
			<?php get_template_part('includes/heading', 'main');?>
				
				
				<!-- Page Intro -->
				<section class="row  row-wide  page-intro  page-intro--white">
					<!-- Intro Wrapper -->
					<div class="row  row-wide  page-intro__wrapper  page-intro__wrapper--push-bottom">
						<div class="row  row-custom">
							<div class="small-12  columns  text-center">
								<p class="page-intro__text">La <i>diabetes</i> es una enfermedad caracterizada por un alto nivel de glucosa en la sangre, resultado de <strong>defectos en la capacidad del cuerpo para producir o usar la insulina</strong>.</p>
								<p class="page-intro__text red">Existen diferentes tipos de diabetes:</p>
							</div>
						</div>
					</div>
					<!-- end .page-intro__wrapper -->
					
					<!-- Diabetes Types -->
					<div class="row  row-custom  page-types  page-types--move-top">
						<!-- Block 1 -->
						<div class="small-12  medium-4  large-4  columns  text-center  page-types__block">
							<div class="page-types__block-circle  blue">
								<span class="page-types__block-circle-text  montse">Tipo I</span>
							</div>
							<p class="page-types__block-text">Tiene lugar en el sistema inmunológico de la persona donde <strong>se destruyen las células beta del páncreas</strong> que son las encargadas de la producción de Insulina.</p>
						</div>
						<!-- end .page-types__block -->

						<!-- Block 2 -->
						<div class="small-12  medium-4  large-4  columns  text-center  page-types__block">
							<div class="page-types__block-circle  yellow">
								<span class="page-types__block-circle-text  montse">Tipo II</span>
							</div>
							<p class="page-types__block-text">Aquí nuestro cuerpo puede producir insulina, pero o bien no es suficiente o el cuerpo no puede responder a sus efectos, lo que genera <strong>acumulación de la glucosa en la sangre. (Hiperglicemia)</strong>
</p>
						</div>
						<!-- end .page-types__block -->

						<!-- Block 3 -->
						<div class="small-12  medium-4  large-4  columns  text-center  page-types__block  page-types__block--last">
							<div class="page-types__block-circle  red">
								<span class="page-types__block-circle-text  montse">Gestacional</span>
							</div>
							<p class="page-types__block-text">Suele comenzar tarde en el embarazo y se produce debido a que <strong>la acción de la insulina es bloqueada</strong>, probablemente por las hormonas producidas por la placenta, provocando resistencia a la insulina.</p>
						</div>
						<!-- end .page-types__block -->
					</div>
					<!-- end .page-types -->

					<!-- Treatment -->
					<div class="row  row-custom  diabetes-treatment">
						<div class="small-12  medium-5  large-5  columns">
							<div class="row">
								<div class="small-12  columns  text-right  diabetes-treatment__block">
									<div class="diabetes-treatment__block-wrapper  purple">
										<h1 class="diabetes-treatment__block-title">Tratamiento</h1>
										<p class="diabetes-treatment__block-text">Es importante que no solamente usted aprenda y comprenda la importancia del tratamiento, sino que también involucre a su familia y amigos</p>
									</div>
									<!-- end .diabetes-treatment__block-wrapper -->
								</div>
								<!-- end .diabetes-treatment__block -->
							</div>
							<!-- end .row -->
						</div>

						<div class="small-12  medium-7  large-7  columns">
							<div class="row">
								<div class="small-12  medium-4  large-4  columns  text-center  diabetes-treatment__block">
									<div class="diabetes-treatment__block-wrapper">
										<img src="<?php bloginfo('template_directory');?>/images/icons/icon-healthy-life.svg" class="inject-me  diabetes-treatment__block-icon" alt="healthy life icon">
										<span class="diabetes-treatment__block-string">Estilo de vida saludable</span>
									</div>
									<!-- end .diabetes-treatment__block-wrapper -->
								</div>
								<!-- end .diabetes-treatment__block -->

								<div class="small-12  medium-4  large-4  columns  text-center  diabetes-treatment__block">
									<div class="diabetes-treatment__block-wrapper">
										<img src="<?php bloginfo('template_directory');?>/images/icons/icon-syringe.svg" class="inject-me  diabetes-treatment__block-icon" alt="syringe icon">
										<span class="diabetes-treatment__block-string">Insulina</span>
									</div>
									<!-- end .diabetes-treatment__block-wrapper -->
								</div>
								<!-- end .diabetes-treatment__block -->

								<div class="small-12  medium-4  large-4  columns  text-center  diabetes-treatment__block">
									<div class="diabetes-treatment__block-wrapper">
										<img src="<?php bloginfo('template_directory');?>/images/icons/icon-pills.svg" class="inject-me  diabetes-treatment__block-icon" alt="pills icon">
										<span class="diabetes-treatment__block-string">Vía oral</span>
									</div>
									<!-- end .diabetes-treatment__block-wrapper -->
								</div>
								<!-- end .diabetes-treatment__block -->
							</div>
							<!-- end .row -->
						</div>
					</div>
					<!-- end .diabetes-treatment -->
				</section>
				<!-- end #page-intro -->
				
				<!-- Diabetes Pillars -->
				<section id="diabetes-pillars" class="row  row-wide">
					<div class="row  row-custom  diabetes-pillars__wrapper">
						<div class="diabetes-pillars__character">
							<img src="<?php bloginfo('template_directory');?>/images/objects/pillars-character.png" alt="character">
						</div>

						<!-- Page Heading -->
						<div class="small-12  columns  text-center  page-heading">
							<div class="small-12  medium-12  large-10  large-push-1  columns">
								<h1 class="page-heading__title">Pilares del<br>tratamiento <span class="montse  red">diabético</span></h1>
								<p class="page-heading__text">
Cuando hablamos del tratamiento de la diabetes, tenemos que saber que este se basa en 5 pilares:
</p>
<p class="page-heading__text">Posa el cursor sobre cada pilar e informate.</p>
							</div>
						</div>
						<!-- end .page-heading -->
						
						<!-- Pillars Menu -->
						<div id="pillars-menu" class="small-12  columns  text-center">
							<div class="row">
								<!-- Block 1 -->
                                
                                
                                <?php
    if( have_rows('pilares') ):
    $count=0;
    while ( have_rows('pilares') ) : the_row();?>


								<div class="small-12  medium-2  large-3  columns  pillars-menu__block">
									
									<button class="button  pillars-menu__block-button show-for-medium" type="button" data-toggle="dropdown_pane_<?php echo $count;?>" data-close-on-click="true">
										<span class="pillars-menu__block-button-string"><?php the_sub_field('nombre');?></span>
									</button>
									
									<div class="dropdown-pane  bottom  pillars-menu__block-pane" id="dropdown_pane_<?php echo $count;?>" data-dropdown data-hover="true">
										<i class="fa fa-caret-up fa-fw"></i>
										<p><?php the_sub_field('descripcion');?></p>
									</div>
									
									<button class="button  pillars-menu__block-button show-for-small-only" type="button" data-open="modal_<?php echo $count;?>">
										<span class="pillars-menu__block-button-string"><?php the_sub_field('nombre');?></span>
									</button>
									<div class="reveal" id="modal_<?php echo $count;?>" data-reveal>
									  <h1><?php the_sub_field('nombre');?></h1>
									  <hr>
									  <p class="lead"><?php the_sub_field('descripcion');?></p>
									  <button class="close-button" data-close aria-label="Close modal" type="button">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>
									
									
									<!-- end .pillars-menu__block-pane -->
								</div>
								<!-- end .pillars-menu__block -->

       
       

   <?php $count++;endwhile;else :endif;?>

							</div>
							<!-- end .row -->
						</div>
						<!-- end #pillars-menu -->
					</div>
					<!-- end .diabetes-pillars__wrapper -->
				</section>
				<!-- end #diabetes-pillars -->
				
				<!-- Diabetes Articles -->
				<section id="diabetes-articles" class="row  row-wide">
					<div class="row  row-custom">
						<!-- Page Heading -->
						<div class="small-12  columns  text-center  page-heading">
							<div class="small-12  medium-12  large-10  large-push-1  columns">
								<h1 class="page-heading__title">Más sobre <span class="montse  red">la Diabetes</span></h1>
							</div>
						</div>
						<!-- end .page-heading -->
						
						<div class="small-12  columns  article-gallery">
							<div class="row" data-interchange="[<?php echo get_stylesheet_directory_uri();?>/partials/_diabetes-gallery.php, small]"></div>
						</div>
						<!-- end .article-gallery -->
					</div>
					<!-- end .row-custom -->
				</section>
				<!-- end #diabetes-articles -->
				
				
			
	
	<?php endwhile; ?>
<?php endif; ?>
		
		
		
		
		
		<?php get_footer();?>